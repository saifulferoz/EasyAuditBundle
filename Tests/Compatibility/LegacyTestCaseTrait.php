<?php

namespace Xiidea\EasyAuditBundle\Tests\Compatibility;

trait LegacyTestCaseTrait
{
    protected function setUp()
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
