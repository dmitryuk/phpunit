--TEST--
phpunit --teamcity ../../basic/unit/
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--teamcity';
$_SERVER['argv'][] = __DIR__ . '/../_files/basic/unit/';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
##teamcity[testCount count='20' flowId='%d']

##teamcity[testSuiteStarted name='%s' flowId='%d']

##teamcity[testSuiteStarted name='PHPUnit\SelfTest\Basic\SetUpBeforeClassTest' locationHint='%sSetUpBeforeClassTest.php::\PHPUnit\SelfTest\Basic\SetUpBeforeClassTest' flowId='%d']

##teamcity[testSuiteStarted name='PHPUnit\SelfTest\Basic\SetUpTest' locationHint='%sSetUpTest.php::\PHPUnit\SelfTest\Basic\SetUpTest' flowId='%d']

##teamcity[testFailed name='testOneWithSetUpException' message='RuntimeException: throw exception in setUp' details='%sSetUpTest.php:30|n' duration='%d' flowId='%d']

##teamcity[testFailed name='testTwoWithSetUpException' message='RuntimeException: throw exception in setUp' details='%sSetUpTest.php:30|n' duration='%d' flowId='%d']

##teamcity[testSuiteFinished name='PHPUnit\SelfTest\Basic\SetUpTest' flowId='%d']

##teamcity[testSuiteStarted name='PHPUnit\SelfTest\Basic\StatusTest' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest' flowId='%d']

##teamcity[testStarted name='testSuccess' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testSuccess' flowId='%d']

##teamcity[testFinished name='testSuccess' duration='%d' flowId='%d']

##teamcity[testStarted name='testFailure' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testFailure' flowId='%d']

##teamcity[testFailed name='testFailure' message='Failed asserting that false is true.' details='%sStatusTest.php:35|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testFailure' duration='%d' flowId='%d']

##teamcity[testStarted name='testError' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testError' flowId='%d']

##teamcity[testFailed name='testError' message='RuntimeException' details='%sStatusTest.php:40|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testError' duration='%d' flowId='%d']

##teamcity[testStarted name='testIncomplete' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testIncomplete' flowId='%d']

##teamcity[testIgnored name='testIncomplete' message='' details='%sStatusTest.php:45|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testIncomplete' duration='%d' flowId='%d']

##teamcity[testStarted name='testSkipped' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testSkipped' flowId='%d']

##teamcity[testIgnored name='testSkipped' message='' details='%sStatusTest.php:50|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testSkipped' duration='%d' flowId='%d']

##teamcity[testStarted name='testRisky' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testRisky' flowId='%d']

##teamcity[testFailed name='testRisky' message='This test did not perform any assertions' details='' duration='%d' flowId='%d']

##teamcity[testFinished name='testRisky' duration='%d' flowId='%d']

##teamcity[testStarted name='testWarning' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testWarning' flowId='%d']

##teamcity[testFinished name='testWarning' duration='%d' flowId='%d']

##teamcity[testStarted name='testSuccessWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testSuccessWithMessage' flowId='%d']

##teamcity[testFinished name='testSuccessWithMessage' duration='%d' flowId='%d']

##teamcity[testStarted name='testFailureWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testFailureWithMessage' flowId='%d']

##teamcity[testFailed name='testFailureWithMessage' message='failure with custom message|nFailed asserting that false is true.' details='%sStatusTest.php:69|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testFailureWithMessage' duration='%d' flowId='%d']

##teamcity[testStarted name='testErrorWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testErrorWithMessage' flowId='%d']

##teamcity[testFailed name='testErrorWithMessage' message='RuntimeException: error with custom message' details='%sStatusTest.php:74|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testErrorWithMessage' duration='%d' flowId='%d']

##teamcity[testStarted name='testIncompleteWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testIncompleteWithMessage' flowId='%d']

##teamcity[testIgnored name='testIncompleteWithMessage' message='incomplete with custom message' details='%sStatusTest.php:79|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testIncompleteWithMessage' duration='%d' flowId='%d']

##teamcity[testStarted name='testSkippedWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testSkippedWithMessage' flowId='%d']

##teamcity[testIgnored name='testSkippedWithMessage' message='skipped with custom message' details='%sStatusTest.php:84|n' duration='%d' flowId='%d']

##teamcity[testFinished name='testSkippedWithMessage' duration='%d' flowId='%d']

##teamcity[testStarted name='testRiskyWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testRiskyWithMessage' flowId='%d']

##teamcity[testFailed name='testRiskyWithMessage' message='This test did not perform any assertions' details='' duration='%d' flowId='%d']

##teamcity[testFinished name='testRiskyWithMessage' duration='%d' flowId='%d']

##teamcity[testStarted name='testWarningWithMessage' locationHint='%sStatusTest.php::\PHPUnit\SelfTest\Basic\StatusTest::testWarningWithMessage' flowId='%d']
warning with custom message

##teamcity[testFinished name='testWarningWithMessage' duration='%d' flowId='%d']

##teamcity[testSuiteFinished name='PHPUnit\SelfTest\Basic\StatusTest' flowId='%d']

##teamcity[testSuiteStarted name='PHPUnit\SelfTest\Basic\TearDownAfterClassTest' locationHint='%sTearDownAfterClassTest.php::\PHPUnit\SelfTest\Basic\TearDownAfterClassTest' flowId='%d']

##teamcity[testStarted name='testOne' locationHint='%sTearDownAfterClassTest.php::\PHPUnit\SelfTest\Basic\TearDownAfterClassTest::testOne' flowId='%d']

##teamcity[testFinished name='testOne' duration='%d' flowId='%d']

##teamcity[testStarted name='testTwo' locationHint='%sTearDownAfterClassTest.php::\PHPUnit\SelfTest\Basic\TearDownAfterClassTest::testTwo' flowId='%d']

##teamcity[testFinished name='testTwo' duration='%d' flowId='%d']

##teamcity[testSuiteFinished name='PHPUnit\SelfTest\Basic\TearDownAfterClassTest' flowId='%d']

##teamcity[testSuiteFinished name='%s' flowId='%d']
