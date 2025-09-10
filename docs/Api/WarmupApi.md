# MimePost\WarmupApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**warmUpplan()**](WarmupApi.md#warmUpplan) | **GET** /warmup_master | Warm-Up plan |
| [**warmUpprogressdetails()**](WarmupApi.md#warmUpprogressdetails) | **GET** /warmup_details/24 | Warm-Up progress details |
| [**warmUpscheduleDayByDay()**](WarmupApi.md#warmUpscheduleDayByDay) | **GET** /warmup_plans/{warmup_plan_id} | Warm-Up schedule (Day-by-Day) |
| [**warmUpstatus()**](WarmupApi.md#warmUpstatus) | **GET** /warmup_status | Warm-Up status |


## `warmUpplan()`

```php
warmUpplan($x_auth_token): \MimePost\Model\WarmUpplan200Response
```

Warm-Up plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WarmupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->warmUpplan($x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarmupApi->warmUpplan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |

### Return type

[**\MimePost\Model\WarmUpplan200Response**](../Model/WarmUpplan200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warmUpprogressdetails()`

```php
warmUpprogressdetails($x_auth_token): \MimePost\Model\Model200OK8
```

Warm-Up progress details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WarmupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->warmUpprogressdetails($x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarmupApi->warmUpprogressdetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |

### Return type

[**\MimePost\Model\Model200OK8**](../Model/Model200OK8.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warmUpscheduleDayByDay()`

```php
warmUpscheduleDayByDay($warmup_plan_id, $x_auth_token): \MimePost\Model\WarmUpscheduleDayByDay200Response
```

Warm-Up schedule (Day-by-Day)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WarmupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warmup_plan_id = YOUR_WARMUP_PLAN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->warmUpscheduleDayByDay($warmup_plan_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarmupApi->warmUpscheduleDayByDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warmup_plan_id** | **string**|  | |
| **x_auth_token** | **string**|  | |

### Return type

[**\MimePost\Model\WarmUpscheduleDayByDay200Response**](../Model/WarmUpscheduleDayByDay200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warmUpstatus()`

```php
warmUpstatus($x_auth_token, $accept, $content_type): \MimePost\Model\WarmUpstatus200Response
```

Warm-Up status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\WarmupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

try {
    $result = $apiInstance->warmUpstatus($x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarmupApi->warmUpstatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\WarmUpstatus200Response**](../Model/WarmUpstatus200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
