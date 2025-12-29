#!/usr/bin/env bash
set -eux

################################################
# Generates the SDK files in the src/ directory
################################################

cleanup() {
  rm -f 20i.apib 20i.json 20i.converted.json 20i.no-descriptions.json src/composer.json
}
trap cleanup EXIT
trap cleanup SIGINT

# Move out our custom connector class
mv src/TwentyI.php .

# Remove existing generated files
rm -rf src

# Download .apib for 20i's Reseller Api from Apiary
curl https://jsapi.apiary.io/apis/20i.source > 20i.apib

# Fix naming
awk -i inplace '
/^## / { t=$0; sub(/^## */, "", t); sub(/ *\[[^]]*\]$/, "", t) }
/^### / { m=""; if ($0 ~ /\[[^]]*\]$/) m=gensub(/.*(\[[^]]*\])$/, "\\1", "g", $0); sub(/^### .*/, "### " t m) }
1' 20i.apib

# Convert from apib to swagger
apib2swagger -i 20i.apib -o 20i.json
sleep 1

# Convert to latest OpenApi spec using sdkgenerator
if [ ! -f 20i.json ]; then
  echo "JSON file not found"
  exit 1
fi
yes | sdkgenerator convert 20i.json
sleep 1

# Remove pointless descriptions
if [ ! -f 20i.converted.json ]; then
  echo "Converted JSON not found"
  exit 1
fi
jq 'del(.. | .description?)' 20i.converted.json > 20i.no-descriptions.json

# Use sdkgenerator to generate a full SDK
rm -rf src
sdkgenerator generate:sdk 20i.no-descriptions.json \
  --type=openapi \
  --name=TwentyI \
  --output=./src \
  --namespace=JamesKingDev\\TwentyI \
  --force

# Remove unused DTOs that get generated
rm -rf src/Dto

# Move in our custom connector class
mv TwentyI.php src/

# Run CS
composer cs --no-interaction

# Add the generated header to generated files
find src/Requests src/Resource -type f -name "*.php" -exec sed -i '/<?php/a\
/* GENERATED FILE - Do not edit directly */' {} +
