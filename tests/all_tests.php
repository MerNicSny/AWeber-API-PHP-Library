<?php
require_once('aweber_api/aweber_api.php');
require_once('mock_adapter.php');
require_once('mock_data.php');
require_once('simpletest/autorun.php');
require_once('aweber_api.test.php');
require_once('oauth_application.test.php');
require_once('aweber_collection.test.php');
require_once('aweber_entry.test.php');

$test = &new GroupTest('All tests');
$test->addTestCase(new TestAWeberAPI());
$test->addTestCase(new OAuthAppliationTest());
$test->addTestCase(new TestAWeberCollection());
$test->addTestCase(new TestAWeberEntry());
$test->addTestCase(new TestAWeberAccountEntry());
$test->addTestCase(new TestAWeberSubscriberEntry());
$test->addTestCase(new TestLazyAWeberAPI());
$test->run(new TextReporter());

?>
