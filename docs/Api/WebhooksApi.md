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
createawebhook($x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK25
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
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\CreateawebhookRequest(); // \MimePost\Model\CreateawebhookRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->createawebhook($x_auth_token, $accept, $body, $content_type);
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
| **body** | [**\MimePost\Model\CreateawebhookRequest**](../Model/CreateawebhookRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK25**](../Model/Model200OK25.md)

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
deleteawebhook($webhook_id, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK18
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
$webhook_id = 'webhook_id_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\DeleteawebhookRequest(); // \MimePost\Model\DeleteawebhookRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->deleteawebhook($webhook_id, $x_auth_token, $accept, $body, $content_type);
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
| **body** | [**\MimePost\Model\DeleteawebhookRequest**](../Model/DeleteawebhookRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK18**](../Model/Model200OK18.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editawebhook()`

```php
editawebhook($webhook_id, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK25
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
$webhook_id = 'webhook_id_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\EditawebhookRequest(); // \MimePost\Model\EditawebhookRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->editawebhook($webhook_id, $x_auth_token, $accept, $body, $content_type);
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
| **body** | [**\MimePost\Model\EditawebhookRequest**](../Model/EditawebhookRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK25**](../Model/Model200OK25.md)

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
getawebhook($webhook_id, $x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK24
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
$webhook_id = 'webhook_id_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

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
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK24**](../Model/Model200OK24.md)

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
listwebhooks($x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK23
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
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

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
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK23**](../Model/Model200OK23.md)

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
testawebhookURL($x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK18
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
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\TestawebhookURLRequest(); // \MimePost\Model\TestawebhookURLRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->testawebhookURL($x_auth_token, $accept, $body, $content_type);
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
| **body** | [**\MimePost\Model\TestawebhookURLRequest**](../Model/TestawebhookURLRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK18**](../Model/Model200OK18.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
