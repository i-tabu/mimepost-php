# MimePost\WebhooksApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createawebhook()**](WebhooksApi.md#createawebhook) | **POST** /webhooks | Create a webhook |
| [**deleteawebhook()**](WebhooksApi.md#deleteawebhook) | **DELETE** /webhooks/{webhookId} | Delete a webhook |
| [**editawebhook()**](WebhooksApi.md#editawebhook) | **PUT** /webhooks/{webhookId} | Edit a webhook |
| [**getawebhook()**](WebhooksApi.md#getawebhook) | **GET** /webhooks/{webhookId} | Get a webhook |
| [**listwebhooks()**](WebhooksApi.md#listwebhooks) | **GET** /webhooks | List webhooks |
| [**testawebhookURL()**](WebhooksApi.md#testawebhookURL) | **POST** /webhooks/test | Test a webhook URL |


## `createawebhook()`

```php
createawebhook($x_auth_token, $accept, $createawebhook_request): \MimePost\Model\Createawebhook200Response
```

Create a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$createawebhook_request = {"desc":"My Webhook for delivered","url":"https://www.example.com/webhook-test-tracking","events":["delivered","request","spam","block_soft","block_hard","open","click","bounce_soft","bounce_hard","unsubscribe"],"active":1}; // \MimePost\Model\CreateawebhookRequest | 

try {
    $result = $apiInstance->createawebhook($x_auth_token, $accept, $createawebhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createawebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **createawebhook_request** | [**\MimePost\Model\CreateawebhookRequest**](../Model/CreateawebhookRequest.md)|  | |

### Return type

[**\MimePost\Model\Createawebhook200Response**](../Model/Createawebhook200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteawebhook()`

```php
deleteawebhook($webhook_id, $x_auth_token, $accept, $content_type): \MimePost\Model\Deleteawebhook200Response
```

Delete a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = YOUR_WEBHOOK_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

try {
    $result = $apiInstance->deleteawebhook($webhook_id, $x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteawebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Deleteawebhook200Response**](../Model/Deleteawebhook200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editawebhook()`

```php
editawebhook($webhook_id, $x_auth_token, $accept, $editawebhook_request): \MimePost\Model\Editawebhook200Response
```

Edit a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = YOUR_WEBHOOK_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$editawebhook_request = {"desc":"My Webhook for delivered","url":"https://www.example.com/webhook-test-tracking","events":["click","bounce_soft","bounce_hard","unsubscribe"],"active":1}; // \MimePost\Model\EditawebhookRequest | 

try {
    $result = $apiInstance->editawebhook($webhook_id, $x_auth_token, $accept, $editawebhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->editawebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **editawebhook_request** | [**\MimePost\Model\EditawebhookRequest**](../Model/EditawebhookRequest.md)|  | |

### Return type

[**\MimePost\Model\Editawebhook200Response**](../Model/Editawebhook200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getawebhook()`

```php
getawebhook($webhook_id, $x_auth_token, $accept, $content_type): \MimePost\Model\Getawebhook200Response
```

Get a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = YOUR_WEBHOOK_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

try {
    $result = $apiInstance->getawebhook($webhook_id, $x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getawebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Getawebhook200Response**](../Model/Getawebhook200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listwebhooks()`

```php
listwebhooks($x_auth_token, $accept, $content_type): \MimePost\Model\Listwebhooks200Response
```

List webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

try {
    $result = $apiInstance->listwebhooks($x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listwebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Listwebhooks200Response**](../Model/Listwebhooks200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testawebhookURL()`

```php
testawebhookURL($x_auth_token, $accept, $testawebhook_url_request): \MimePost\Model\TestawebhookURL200Response
```

Test a webhook URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$testawebhook_url_request = {"url":"http://www.example.com/webhook-test-tracking"}; // \MimePost\Model\TestawebhookURLRequest | 

try {
    $result = $apiInstance->testawebhookURL($x_auth_token, $accept, $testawebhook_url_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->testawebhookURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **testawebhook_url_request** | [**\MimePost\Model\TestawebhookURLRequest**](../Model/TestawebhookURLRequest.md)|  | |

### Return type

[**\MimePost\Model\TestawebhookURL200Response**](../Model/TestawebhookURL200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
