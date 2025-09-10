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
createasanboxemail($x_auth_token, $accept, $createasanboxemail_request): \MimePost\Model\Createasanboxemail200Response
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
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$createasanboxemail_request = {"email":"abc@example.com"}; // \MimePost\Model\CreateasanboxemailRequest | 

try {
    $result = $apiInstance->createasanboxemail($x_auth_token, $accept, $createasanboxemail_request);
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
| **createasanboxemail_request** | [**\MimePost\Model\CreateasanboxemailRequest**](../Model/CreateasanboxemailRequest.md)|  | |

### Return type

[**\MimePost\Model\Createasanboxemail200Response**](../Model/Createasanboxemail200Response.md)

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
deletesanboxemails($sandbox_email, $x_auth_token, $accept, $content_type): \MimePost\Model\Deletesanboxemails200Response
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
$sandbox_email = YOUR_SANDBOX_EMAIL; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

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
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Deletesanboxemails200Response**](../Model/Deletesanboxemails200Response.md)

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
listsanboxemails($x_auth_token, $accept, $content_type): \MimePost\Model\Listsanboxemails200Response
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
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

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
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Listsanboxemails200Response**](../Model/Listsanboxemails200Response.md)

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
resedsanboxemailverificationcode($sandbox_email, $x_auth_token, $content_type, $accept): \MimePost\Model\Resedsanboxemailverificationcode200Response
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
$sandbox_email = YOUR_SANDBOX_EMAIL; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$content_type = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->resedsanboxemailverificationcode($sandbox_email, $x_auth_token, $content_type, $accept);
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
| **content_type** | **string**|  | |
| **accept** | **string**|  | |

### Return type

[**\MimePost\Model\Resedsanboxemailverificationcode200Response**](../Model/Resedsanboxemailverificationcode200Response.md)

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
verifyasanboxemail($sandbox_email, $x_auth_token, $accept, $verifyasanboxemail_request)
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
$sandbox_email = YOUR_SANDBOX_EMAIL; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$verifyasanboxemail_request = {"verification_code":"YOUR_SANBOX_VERIFICATION_CODE"}; // \MimePost\Model\VerifyasanboxemailRequest | 

try {
    $apiInstance->verifyasanboxemail($sandbox_email, $x_auth_token, $accept, $verifyasanboxemail_request);
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
| **verifyasanboxemail_request** | [**\MimePost\Model\VerifyasanboxemailRequest**](../Model/VerifyasanboxemailRequest.md)|  | |

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
