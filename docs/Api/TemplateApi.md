# MimePost\TemplateApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**copyatemplate()**](TemplateApi.md#copyatemplate) | **POST** /templates/{template_id}/copy | Copy a template |
| [**createatemplate()**](TemplateApi.md#createatemplate) | **POST** /templates | Create a template |
| [**deleteatemplate()**](TemplateApi.md#deleteatemplate) | **DELETE** /templates/{template_uid} | Delete a template |
| [**editatemplate()**](TemplateApi.md#editatemplate) | **PUT** /templates/{template_id} | Edit a template |
| [**getatemplate()**](TemplateApi.md#getatemplate) | **GET** /templates/{template_uid} | Get a template |
| [**listtemplates()**](TemplateApi.md#listtemplates) | **GET** /templates | List templates |


## `copyatemplate()`

```php
copyatemplate($template_id, $x_auth_token, $content_type): \MimePost\Model\Copyatemplate200Response
```

Copy a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = YOUR_TEMPLATE_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$content_type = application/x-www-form-urlencoded; // string | 

try {
    $result = $apiInstance->copyatemplate($template_id, $x_auth_token, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->copyatemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Copyatemplate200Response**](../Model/Copyatemplate200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createatemplate()`

```php
createatemplate($x_auth_token, $content_type, $template_uid, $name, $html_body, $text_body, $variables): \MimePost\Model\Createatemplate201Response
```

Create a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 
$content_type = application/x-www-form-urlencoded; // string | 
$template_uid = 'template_uid_example'; // string
$name = 'name_example'; // string
$html_body = 'html_body_example'; // string
$text_body = 'text_body_example'; // string
$variables = array('variables_example'); // string[] | 

try {
    $result = $apiInstance->createatemplate($x_auth_token, $content_type, $template_uid, $name, $html_body, $text_body, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createatemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **content_type** | **string**|  | |
| **template_uid** | **string**|  | |
| **name** | **string**|  | |
| **html_body** | **string**|  | |
| **text_body** | **string**|  | |
| **variables** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\MimePost\Model\Createatemplate201Response**](../Model/Createatemplate201Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteatemplate()`

```php
deleteatemplate($template_uid, $x_auth_token): \MimePost\Model\Deleteatemplate200Response
```

Delete a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_uid = YOUR_TEMPLATE_UID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->deleteatemplate($template_uid, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteatemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_uid** | **string**|  | |
| **x_auth_token** | **string**|  | |

### Return type

[**\MimePost\Model\Deleteatemplate200Response**](../Model/Deleteatemplate200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editatemplate()`

```php
editatemplate($template_id, $x_auth_token, $content_type, $template_uid, $name, $html_body, $text_body, $variables): \MimePost\Model\Editatemplate200Response
```

Edit a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = YOUR_TEMPLATE_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$content_type = application/x-www-form-urlencoded; // string | 
$template_uid = 'template_uid_example'; // string
$name = 'name_example'; // string
$html_body = 'html_body_example'; // string
$text_body = 'text_body_example'; // string
$variables = array('variables_example'); // string[] | 

try {
    $result = $apiInstance->editatemplate($template_id, $x_auth_token, $content_type, $template_uid, $name, $html_body, $text_body, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->editatemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **content_type** | **string**|  | |
| **template_uid** | **string**|  | |
| **name** | **string**|  | |
| **html_body** | **string**|  | |
| **text_body** | **string**|  | |
| **variables** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\MimePost\Model\Editatemplate200Response**](../Model/Editatemplate200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getatemplate()`

```php
getatemplate($template_uid, $x_auth_token): \MimePost\Model\Getatemplate200Response
```

Get a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_uid = YOUR_TEMPLATE_UID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->getatemplate($template_uid, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getatemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_uid** | **string**|  | |
| **x_auth_token** | **string**|  | |

### Return type

[**\MimePost\Model\Getatemplate200Response**](../Model/Getatemplate200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listtemplates()`

```php
listtemplates($status, $search, $x_auth_token): \MimePost\Model\Listtemplates200Response
```

List templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = approved; // string | 
$search = welcome; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->listtemplates($status, $search, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->listtemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**|  | |
| **search** | **string**|  | |
| **x_auth_token** | **string**|  | |

### Return type

[**\MimePost\Model\Listtemplates200Response**](../Model/Listtemplates200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
