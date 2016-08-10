<?php

use Behat\Behat\Context\Context;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;

class FeatureContext implements Context
{
  /** @AfterSuite */
  public static function teardown(AfterSuiteScope $scope)
  {

    if(getenv('HIPCHAT_MESSAGE')) {

      $postdata = array('message' => getenv('HIPCHAT_MESSAGE'));

      $opts = array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/json',
          'content' => json_encode($postdata),

        )
      );

      $context = stream_context_create($opts);

      $hipchat_message = file_get_contents('https://api.hipchat.com/v2/room/3013413/notification?auth_token='.getenv('HIPCHAT_TOKEN'), FALSE, $context);
    }
    else {
      throw new \Exception('HIPCHAT_MESSAGE not set');
    }
  }
}
