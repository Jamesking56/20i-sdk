<?php

declare(strict_types=1);

namespace Rector\Custom;

use PhpParser\Node;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\NodeVisitor;
use Rector\Rector\AbstractRector;

/**
 * Removes duplicated methods generated due to 20i's spec containing duplicates for the same endpoints.
 */
final class RemoveDuplicateTodoMethodsRector extends AbstractRector
{
    public function getNodeTypes(): array
    {
        return [ClassMethod::class];
    }

    public function refactor(Node $node): ?int
    {
        $docComment = $node->getDocComment();
        if (null !== $docComment && str_contains(
            $docComment->getText(),
            '@todo Fix duplicated method name',
        )) {
            return NodeVisitor::REMOVE_NODE; // removes the method
        }

        return null;
    }
}
