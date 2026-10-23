<?php

namespace Xiidea\EasyAuditBundle\Tests\Compatibility;

trait ModernTestCaseTrait
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->setUpTest();
    }

    protected function setUpTest()
    {
    }

    private function getObjectProperty($object, $name)
    {
        $property = new \ReflectionProperty($object, $name);
        $property->setAccessible(true);

        return $property->getValue($object);
    }
}
