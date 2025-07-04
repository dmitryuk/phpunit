--TEST--
phpunit --dont-report-useless-tests ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--dont-report-useless-tests';
$_SERVER['argv'][] = '--display-phpunit-deprecations';
$_SERVER['argv'][] = \realpath(__DIR__ . '/../../_files/BankAccountTest.php');

require_once __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime: %s

...                                                                 3 / 3 (100%)

Time: %s, Memory: %s

There was 1 PHPUnit test runner deprecation:

1) Option --dont-report-useless-tests is deprecated, use --do-not-report-useless-tests instead

OK, but there were issues!
Tests: 3, Assertions: 3, PHPUnit Deprecations: 1.
