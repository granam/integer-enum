<?php declare(strict_types=1);

namespace Granam\Tests\IntegerEnum;

use Granam\ScalarEnum\ScalarEnumInterface;
use Granam\Tests\ExceptionsHierarchy\Exceptions\AbstractExceptionsHierarchyTest;

class GranamIntegerExceptionsHierarchyTest extends AbstractExceptionsHierarchyTest
{
    protected function getTestedNamespace(): string
    {
        return $this->getRootNamespace();
    }

    protected function getRootNamespace(): string
    {
        return str_replace('\Tests', '', __NAMESPACE__);
    }

    /**
     * @return string[]
     */
    protected function getExternalRootNamespaces(): array
    {
        return [
            (new \ReflectionClass(ScalarEnumInterface::class))->getNamespaceName(),
        ];
    }

}
