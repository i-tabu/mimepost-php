# MimePost\SandboxApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createasanboxemail()**](SandboxApi.md#createasanboxemail) | **POST** /sandbox/emails | Create a sanbox email |
| [**deletesanboxemails()**](SandboxApi.md#deletesanboxemails) | **DELETE** /sandbox/emails/{sandbox_email} | Delete sanbox emails |
| [**listsanboxemails()**](SandboxApi.md#listsanboxemails) | **GET** /sandbox/emails | List sanbox emails |
| [**resedsanboxemailverificationcode()**](SandboxApi.md#resedsanboxemailverificationcode) | **GET** /sandbox/emails/verify/{sandbox_email} | Resed sanbox email verification code |
| [**verifyasanboxemail()**](SandboxApi.md#verifyasanboxemail) | **PATCH** /sandbox/emails/verify/{sandbox_email} | Verify a sanbox email |


## `createasanboxemail()`

```php
createasanboxemail($x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK5
```

Create a sanbox email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\CreateasanboxemailRequest(); // \MimePost\Model\CreateasanboxemailRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->createasanboxemail($x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createasanboxemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\CreateasanboxemailRequest**](../Model/CreateasanboxemailRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK5**](../Model/Model200OK5.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletesanboxemails()`

```php
deletesanboxemails($sandbox_email, $x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK5
```

Delete sanbox emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_email = 'sandbox_email_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->deletesanboxemails($sandbox_email, $x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->deletesanboxemails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_email** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK5**](../Model/Model200OK5.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsanboxemails()`

```php
listsanboxemails($x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK30
```

List sanbox emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->listsanboxemails($x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->listsanboxemails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK30**](../Model/Model200OK30.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resedsanboxemailverificationcode()`

```php
resedsanboxemailverificationcode($sandbox_email, $x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK4
```

Resed sanbox email verification code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_email = 'sandbox_email_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->resedsanboxemailverificationcode($sandbox_email, $x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->resedsanboxemailverificationcode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_email** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK4**](../Model/Model200OK4.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyasanboxemail()`

```php
verifyasanboxemail($sandbox_email, $x_auth_token, $accept, $body, $content_type)
```

Verify a sanbox email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_email = 'sandbox_email_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\VerifyasanboxemailRequest(); // \MimePost\Model\VerifyasanboxemailRequest
$content_type = 'content_type_example'; // string

try {
    $apiInstance->verifyasanboxemail($sandbox_email, $x_auth_token, $accept, $body, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->verifyasanboxemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_email** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\VerifyasanboxemailRequest**](../Model/VerifyasanboxemailRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
