# MimePost\EmailApi

All URIs are relative to https://api.mimepost.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmail()**](EmailApi.md#sendEmail) | **POST** /emails | SendEmail |


## `sendEmail()`

```php
sendEmail($x_auth_token, $send_email_request): \MimePost\Model\SendEmail200Response
```

SendEmail

### Body parameters  | Field | Type | Required | Description | | --- | --- | --- | --- | | `template_uid` | string | yes | Approved template identifier in MimePost. | | `subject` | string | yes | Email subject line (≤ 255 chars). | | `from_email` | string (email) | yes | Sender address from a verified domain. | | `from_name` | string | no | Friendly sender name. | | `global_merge_vars` | array | no | Variables applied to all recipients unless overridden. | | `to` | array | yes | Primary recipients. | | `cc` | array | no | CC recipients. | | `bcc` | array | no | BCC recipients. | | `attachments` | array | no | Attachment refs (IDs/URLs if supported). | | `vars` | object | no | Custom metadata (key–value pairs). |  **Recipient**   `{ \"email\": string, \"merge_vars\": array }`  **MergeVar**   `{ \"name\": string, \"value\": string }`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | Pass your MimePost API token as the value of this header on every request. This is a custom header (do not prepend Bearer), and it must be sent over HTTPS.
$send_email_request = {"template_uid":"ENTER_YOUR_TEMPLATE_UID","subject":"ENTER_YOUR_SUBJECT_LINE","from_email":"ENTER_YOUR_FROM_EMAIL","from_name":"ENTER_YOUR_FROM_NAME","global_merge_vars":[{"name":"FIRST_NAME","value":"Dear User"}],"to":[{"email":"to@example.com","merge_vars":[{"name":"FIRST_NAME","value":"John"}]}],"cc":["cc@example.com"],"bcc":["bcc@example.com"],"attachments":[],"vars":{"user_id":"12345","invoice_id":"abcde"}}; // \MimePost\Model\SendEmailRequest | Payload to send a templated email via MimePost. Provide the approved template_uid, email subject, a verified from_email, and at least one recipient in to. Optional fields let you add a friendly from_name, global template variables, CC/BCC recipients, attachment references, and custom metadata.  Required: template_uid, subject, from_email, to  Optional: from_name, global_merge_vars, cc, bcc, attachments, vars  Types:  to, cc, bcc, attachments → arrays of strings (emails/URLs or IDs)  global_merge_vars, vars → object maps of key→value strings  Notes: subject max ~255 chars; from_email must be from a verified sending domain; global_merge_vars apply to all recipients; vars are custom metadata (not rendered unless your template references them); send over HTTPS with X-Auth-Token.

try {
    $result = $apiInstance->sendEmail($x_auth_token, $send_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| Pass your MimePost API token as the value of this header on every request. This is a custom header (do not prepend Bearer), and it must be sent over HTTPS. | |
| **send_email_request** | [**\MimePost\Model\SendEmailRequest**](../Model/SendEmailRequest.md)| Payload to send a templated email via MimePost. Provide the approved template_uid, email subject, a verified from_email, and at least one recipient in to. Optional fields let you add a friendly from_name, global template variables, CC/BCC recipients, attachment references, and custom metadata.  Required: template_uid, subject, from_email, to  Optional: from_name, global_merge_vars, cc, bcc, attachments, vars  Types:  to, cc, bcc, attachments → arrays of strings (emails/URLs or IDs)  global_merge_vars, vars → object maps of key→value strings  Notes: subject max ~255 chars; from_email must be from a verified sending domain; global_merge_vars apply to all recipients; vars are custom metadata (not rendered unless your template references them); send over HTTPS with X-Auth-Token. | |

### Return type

[**\MimePost\Model\SendEmail200Response**](../Model/SendEmail200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
