# MimePost\StatsApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getemaillogs()**](StatsApi.md#getemaillogs) | **GET** /emaillogs | Get emaillogs |
| [**getsummaryofstats()**](StatsApi.md#getsummaryofstats) | **GET** /stats | Get summary of stats |


## `getemaillogs()`

```php
getemaillogs($start_date, $end_date, $status, $message_id, $start, $length, $x_auth_token, $accept, $content_type)
```

Get emaillogs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 20250902; // int | Filter stats starting from the date specified (inclusive). e.g. 20250902
$end_date = 20250903; // int | Filter stats up to the date specified (inclusive). e.g. 20250903
$status = open; // string | Filter by status values : request, delivered, open, click, unsubscribe, bounce_soft, bounce_hard, block_soft, block_hard, spam
$message_id = 439a829a-3979-4733-9f94-dfbe195620d4@txc-netdcon-8v.top; // string | Filter by message_id.
$start = 0; // int | 
$length = 2; // int | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

try {
    $apiInstance->getemaillogs($start_date, $end_date, $status, $message_id, $start, $length, $x_auth_token, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getemaillogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **int**| Filter stats starting from the date specified (inclusive). e.g. 20250902 | |
| **end_date** | **int**| Filter stats up to the date specified (inclusive). e.g. 20250903 | |
| **status** | **string**| Filter by status values : request, delivered, open, click, unsubscribe, bounce_soft, bounce_hard, block_soft, block_hard, spam | |
| **message_id** | **string**| Filter by message_id. | |
| **start** | **int**|  | |
| **length** | **int**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getsummaryofstats()`

```php
getsummaryofstats($x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK29
```

Get summary of stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

try {
    $result = $apiInstance->getsummaryofstats($x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getsummaryofstats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Model200OK29**](../Model/Model200OK29.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
