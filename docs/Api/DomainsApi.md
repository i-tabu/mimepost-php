# MimePost\DomainsApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createadomain()**](DomainsApi.md#createadomain) | **POST** /domains | Create a domain |
| [**deleteadomain()**](DomainsApi.md#deleteadomain) | **DELETE** /domains/{domainId} | Delete a domain |
| [**getadomainsdetails()**](DomainsApi.md#getadomainsdetails) | **GET** /domains/{domainId} | Get a domain&#39;s details |
| [**listdomains()**](DomainsApi.md#listdomains) | **GET** /domains | List domains |
| [**submitforReviewApproval()**](DomainsApi.md#submitforReviewApproval) | **POST** /domains/{domainid}/approve | Submit for Review &amp; Approval |
| [**verifyDKIMstatus()**](DomainsApi.md#verifyDKIMstatus) | **POST** /domains/{domainid}/verify_dkim | Verify DKIM status |
| [**verifyTrackingRecord()**](DomainsApi.md#verifyTrackingRecord) | **POST** /domains/{domainid}/verify_tracking | Verify Tracking Record |
| [**verifyanSPFrecord()**](DomainsApi.md#verifyanSPFrecord) | **POST** /domains/{domainid}/verify_spf | Verify an SPF record |


## `createadomain()`

```php
createadomain($x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK17
```

Create a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\CreateadomainRequest(); // \MimePost\Model\CreateadomainRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->createadomain($x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createadomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\CreateadomainRequest**](../Model/CreateadomainRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK17**](../Model/Model200OK17.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteadomain()`

```php
deleteadomain($domain_id, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK22
```

Delete a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 'domain_id_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\DeleteadomainRequest(); // \MimePost\Model\DeleteadomainRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->deleteadomain($domain_id, $x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteadomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\DeleteadomainRequest**](../Model/DeleteadomainRequest.md)|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK22**](../Model/Model200OK22.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getadomainsdetails()`

```php
getadomainsdetails($domain_id, $x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK16
```

Get a domain's details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 'domain_id_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->getadomainsdetails($domain_id, $x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getadomainsdetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK16**](../Model/Model200OK16.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listdomains()`

```php
listdomains($x_auth_token, $accept, $content_type): \MimePost\Model\Model200OK15
```

List domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->listdomains($x_auth_token, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listdomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **content_type** | **string**|  | [optional] |

### Return type

[**\MimePost\Model\Model200OK15**](../Model/Model200OK15.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitforReviewApproval()`

```php
submitforReviewApproval($domainid, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK18
```

Submit for Review & Approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainid = 'domainid_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\SubmitforReviewApprovalRequest(); // \MimePost\Model\SubmitforReviewApprovalRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->submitforReviewApproval($domainid, $x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->submitforReviewApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainid** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\SubmitforReviewApprovalRequest**](../Model/SubmitforReviewApprovalRequest.md)|  | |
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

## `verifyDKIMstatus()`

```php
verifyDKIMstatus($domainid, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK18
```

Verify DKIM status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainid = 'domainid_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\VerifyDKIMstatusRequest(); // \MimePost\Model\VerifyDKIMstatusRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->verifyDKIMstatus($domainid, $x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->verifyDKIMstatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainid** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\VerifyDKIMstatusRequest**](../Model/VerifyDKIMstatusRequest.md)|  | |
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

## `verifyTrackingRecord()`

```php
verifyTrackingRecord($domainid, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK18
```

Verify Tracking Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainid = 'domainid_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\VerifyTrackingRecordRequest(); // \MimePost\Model\VerifyTrackingRecordRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->verifyTrackingRecord($domainid, $x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->verifyTrackingRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainid** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\VerifyTrackingRecordRequest**](../Model/VerifyTrackingRecordRequest.md)|  | |
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

## `verifyanSPFrecord()`

```php
verifyanSPFrecord($domainid, $x_auth_token, $accept, $body, $content_type): \MimePost\Model\Model200OK18
```

Verify an SPF record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainid = 'domainid_example'; // string
$x_auth_token = 'x_auth_token_example'; // string
$accept = 'accept_example'; // string
$body = new \MimePost\Model\VerifyanSPFrecordRequest(); // \MimePost\Model\VerifyanSPFrecordRequest
$content_type = 'content_type_example'; // string

try {
    $result = $apiInstance->verifyanSPFrecord($domainid, $x_auth_token, $accept, $body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->verifyanSPFrecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainid** | **string**|  | |
| **x_auth_token** | **string**|  | |
| **accept** | **string**|  | |
| **body** | [**\MimePost\Model\VerifyanSPFrecordRequest**](../Model/VerifyanSPFrecordRequest.md)|  | |
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
