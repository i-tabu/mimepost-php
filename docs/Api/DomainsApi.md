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
createadomain($x_auth_token, $accept, $createadomain_request): \MimePost\Model\Createadomain200Response
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
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$createadomain_request = {"domain":"example-mp.com"}; // \MimePost\Model\CreateadomainRequest | 

try {
    $result = $apiInstance->createadomain($x_auth_token, $accept, $createadomain_request);
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
| **createadomain_request** | [**\MimePost\Model\CreateadomainRequest**](../Model/CreateadomainRequest.md)|  | |

### Return type

[**\MimePost\Model\Createadomain200Response**](../Model/Createadomain200Response.md)

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
deleteadomain($domain_id, $x_auth_token, $content_type, $accept): \MimePost\Model\Deleteadomain200Response
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
$domain_id = YOUR_DOMAIN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$content_type = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteadomain($domain_id, $x_auth_token, $content_type, $accept);
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
| **content_type** | **string**|  | |
| **accept** | **string**|  | |

### Return type

[**\MimePost\Model\Deleteadomain200Response**](../Model/Deleteadomain200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getadomainsdetails()`

```php
getadomainsdetails($domain_id, $x_auth_token, $accept, $content_type): \MimePost\Model\GetadomainSdetails200Response
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
$domain_id = YOUR_DOMAIN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

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
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\GetadomainSdetails200Response**](../Model/GetadomainSdetails200Response.md)

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
listdomains($x_auth_token, $accept, $content_type): \MimePost\Model\Listdomains200Response
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
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$content_type = application/json; // string | 

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
| **content_type** | **string**|  | |

### Return type

[**\MimePost\Model\Listdomains200Response**](../Model/Listdomains200Response.md)

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
submitforReviewApproval($domainid, $x_auth_token, $accept, $submitfor_review_approval_request): \MimePost\Model\SubmitforReviewApproval200Response
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
$domainid = YOUR_DOMAIN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$submitfor_review_approval_request = {"domain":"examplesachin.com"}; // \MimePost\Model\SubmitforReviewApprovalRequest | 

try {
    $result = $apiInstance->submitforReviewApproval($domainid, $x_auth_token, $accept, $submitfor_review_approval_request);
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
| **submitfor_review_approval_request** | [**\MimePost\Model\SubmitforReviewApprovalRequest**](../Model/SubmitforReviewApprovalRequest.md)|  | |

### Return type

[**\MimePost\Model\SubmitforReviewApproval200Response**](../Model/SubmitforReviewApproval200Response.md)

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
verifyDKIMstatus($domainid, $x_auth_token, $accept, $verify_dki_mstatus_request): \MimePost\Model\VerifyDKIMstatus200Response
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
$domainid = YOUR_DOMAIN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$verify_dki_mstatus_request = {"domain":"examplesachin.com"}; // \MimePost\Model\VerifyDKIMstatusRequest | 

try {
    $result = $apiInstance->verifyDKIMstatus($domainid, $x_auth_token, $accept, $verify_dki_mstatus_request);
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
| **verify_dki_mstatus_request** | [**\MimePost\Model\VerifyDKIMstatusRequest**](../Model/VerifyDKIMstatusRequest.md)|  | |

### Return type

[**\MimePost\Model\VerifyDKIMstatus200Response**](../Model/VerifyDKIMstatus200Response.md)

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
verifyTrackingRecord($domainid, $x_auth_token, $accept, $verify_tracking_record_request): \MimePost\Model\VerifyTrackingRecord200Response
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
$domainid = YOUR_DOMAIN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$verify_tracking_record_request = {"domain":"examplesachin.com"}; // \MimePost\Model\VerifyTrackingRecordRequest | 

try {
    $result = $apiInstance->verifyTrackingRecord($domainid, $x_auth_token, $accept, $verify_tracking_record_request);
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
| **verify_tracking_record_request** | [**\MimePost\Model\VerifyTrackingRecordRequest**](../Model/VerifyTrackingRecordRequest.md)|  | |

### Return type

[**\MimePost\Model\VerifyTrackingRecord200Response**](../Model/VerifyTrackingRecord200Response.md)

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
verifyanSPFrecord($domainid, $x_auth_token, $accept, $verifyan_sp_frecord_request): \MimePost\Model\VerifyanSPFrecord200Response
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
$domainid = YOUR_DOMAIN_ID; // string | 
$x_auth_token = YOUR_API_TOKEN; // string | 
$accept = application/json; // string | 
$verifyan_sp_frecord_request = {"domain":"examplesachin.com"}; // \MimePost\Model\VerifyanSPFrecordRequest | 

try {
    $result = $apiInstance->verifyanSPFrecord($domainid, $x_auth_token, $accept, $verifyan_sp_frecord_request);
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
| **verifyan_sp_frecord_request** | [**\MimePost\Model\VerifyanSPFrecordRequest**](../Model/VerifyanSPFrecordRequest.md)|  | |

### Return type

[**\MimePost\Model\VerifyanSPFrecord200Response**](../Model/VerifyanSPFrecord200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
