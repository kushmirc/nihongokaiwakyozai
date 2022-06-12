<?php

if (class_exists('\\Sgdg\\Vendor\\Google_Client', false)) {
    // Prevent error with preloading in PHP 7.4
    // @see https://github.com/googleapis/google-api-php-client/issues/1976
    return;
}

$classMap = [
    'Sgdg\\Vendor\\Google\\Client' => 'Sgdg\\Vendor\\Google_Client',
    'Sgdg\\Vendor\\Google\\Service' => 'Sgdg\\Vendor\\Google_Service',
    'Sgdg\\Vendor\\Google\\AccessToken\\Revoke' => 'Sgdg\\Vendor\\Google_AccessToken_Revoke',
    'Sgdg\\Vendor\\Google\\AccessToken\\Verify' => 'Sgdg\\Vendor\\Google_AccessToken_Verify',
    'Sgdg\\Vendor\\Google\\Model' => 'Sgdg\\Vendor\\Google_Model',
    'Sgdg\\Vendor\\Google\\Utils\\UriTemplate' => 'Sgdg\\Vendor\\Google_Utils_UriTemplate',
    'Sgdg\\Vendor\\Google\\AuthHandler\\Guzzle6AuthHandler' => 'Sgdg\\Vendor\\Google_AuthHandler_Guzzle6AuthHandler',
    'Sgdg\\Vendor\\Google\\AuthHandler\\Guzzle7AuthHandler' => 'Sgdg\\Vendor\\Google_AuthHandler_Guzzle7AuthHandler',
    'Sgdg\\Vendor\\Google\\AuthHandler\\Guzzle5AuthHandler' => 'Sgdg\\Vendor\\Google_AuthHandler_Guzzle5AuthHandler',
    'Sgdg\\Vendor\\Google\\AuthHandler\\AuthHandlerFactory' => 'Sgdg\\Vendor\\Google_AuthHandler_AuthHandlerFactory',
    'Sgdg\\Vendor\\Google\\Http\\Batch' => 'Sgdg\\Vendor\\Google_Http_Batch',
    'Sgdg\\Vendor\\Google\\Http\\MediaFileUpload' => 'Sgdg\\Vendor\\Google_Http_MediaFileUpload',
    'Sgdg\\Vendor\\Google\\Http\\REST' => 'Sgdg\\Vendor\\Google_Http_REST',
    'Sgdg\\Vendor\\Google\\Task\\Retryable' => 'Sgdg\\Vendor\\Google_Task_Retryable',
    'Sgdg\\Vendor\\Google\\Task\\Exception' => 'Sgdg\\Vendor\\Google_Task_Exception',
    'Sgdg\\Vendor\\Google\\Task\\Runner' => 'Sgdg\\Vendor\\Google_Task_Runner',
    'Sgdg\\Vendor\\Google\\Collection' => 'Sgdg\\Vendor\\Google_Collection',
    'Sgdg\\Vendor\\Google\\Service\\Exception' => 'Sgdg\\Vendor\\Google_Service_Exception',
    'Sgdg\\Vendor\\Google\\Service\\Resource' => 'Sgdg\\Vendor\\Google_Service_Resource',
    'Sgdg\\Vendor\\Google\\Exception' => 'Sgdg\\Vendor\\Google_Exception',
];

foreach ($classMap as $class => $alias) {
    class_alias($class, $alias);
}

/**
 * This class needs to be defined explicitly as scripts must be recognized by
 * the autoloader.
 */
//class Google_Task_Composer extends \Google\Task\Composer
//{
//}

if (\false) {
  class Google_AccessToken_Revoke extends \Google\AccessToken\Revoke {}
  class Google_AccessToken_Verify extends \Google\AccessToken\Verify {}
  class Google_AuthHandler_AuthHandlerFactory extends \Google\AuthHandler\AuthHandlerFactory {}
  class Google_AuthHandler_Guzzle5AuthHandler extends \Google\AuthHandler\Guzzle5AuthHandler {}
  class Google_AuthHandler_Guzzle6AuthHandler extends \Google\AuthHandler\Guzzle6AuthHandler {}
  class Google_AuthHandler_Guzzle7AuthHandler extends \Google\AuthHandler\Guzzle7AuthHandler {}
  class Google_Client extends \Google\Client {}
  class Google_Collection extends \Google\Collection {}
  class Google_Exception extends \Google\Exception {}
  class Google_Http_Batch extends \Google\Http\Batch {}
  class Google_Http_MediaFileUpload extends \Google\Http\MediaFileUpload {}
  class Google_Http_REST extends \Google\Http\REST {}
  class Google_Model extends \Google\Model {}
  class Google_Service extends \Google\Service {}
  class Google_Service_Exception extends \Google\Service\Exception {}
  class Google_Service_Resource extends \Google\Service\Resource {}
  class Google_Task_Exception extends \Google\Task\Exception {}
  class Google_Task_Retryable extends \Google\Task\Retryable {}
  class Google_Task_Runner extends \Google\Task\Runner {}
  class Google_Utils_UriTemplate extends \Google\Utils\UriTemplate {}
}
