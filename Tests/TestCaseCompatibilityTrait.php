<?php

namespace Xiidea\EasyAuditBundle\Tests;

// PHP 5.6 must never load the trait containing return type declarations.
if (PHP_VERSION_ID >= 70100) {
    trait TestCaseCompatibilityTrait
    {
        use Compatibility\ModernTestCaseTrait;
    }
} else {
    trait TestCaseCompatibilityTrait
    {
        use Compatibility\LegacyTestCaseTrait;
    }
}
