# MimePost

# 📧 MimePost API

**MimePost** is a secure, high-performance **transactional email delivery platform** designed for developers, startups, and businesses that need to send **business-critical emails** with maximum deliverability and privacy.


---

## 🚀 Key Features

- **Transactional Email Only** — Send critical messages like receipts, OTPs, password resets, and notifications.
    
- **Template-Based Sending** — All emails use approved templates (raw HTML sending is not allowed).
    
- **Domain & DKIM Verification** — Secure your sending domain for maximum deliverability.
    
- **Webhooks** — Get real-time updates for delivered, opened, bounced, or failed messages.
    
- **Email Logs** — Track every message and event with detailed logs.
    

---

## 🔐 Authentication

All requests require an **API Token**.

1. Log in to your [MimePost Dashboard](https://mimepost.com/app/integration/api_tokens).
    
2. Go to **Integration → API Tokens**.
    
3. Create or copy your token.    
    
4. Every request must include this header: X-Auth-Token: {{api_token}}
    

---

## 📂 What’s Included

- **Email** → Send transactional emails using templates.
    
- **Template** → Create, copy, and manage templates.
    
- **Domains** → Add, verify, and configure sending domains.
    
- **Webhooks** → Set up event webhooks for tracking.
    
- **Billing** → View account billing information.
    
- **Stats & Logs** → Access email logs, statistics, and delivery insights.
    
- **Sandbox** → Safely test email sending without impacting deliverability.
    

---

## 📝 Usage Notes

- ❌ **No marketing or promotional emails** — MimePost is built for **transactional and business-critical communication only**.
    
- ✅ Always test new templates in the **Sandbox** before using them in production.
    
- 🔒 Keep your **API Tokens secure** — never expose them publicly.
    

---

## ▶️ Quick Start

1. Verify your sending domain in **Domains**.
    
2. Create an approved template in **Templates**.
    
3. Generate an API Token in **Integration → API Tokens**.
    
4. Use the **Email → Send Transactional Email** request in this collection.

For more information, please visit [https://mimepost.com/](https://mimepost.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/i-tabu/mimepost-php.git"
    }
  ],
  "require": {
    "i-tabu/mimepost-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MimePost/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = MimePost\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new MimePost\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_auth_token = YOUR_API_TOKEN; // string | 

try {
    $result = $apiInstance->billingInformation($x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInformation: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.mimepost.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingApi* | [**billingInformation**](docs/Api/BillingApi.md#billinginformation) | **GET** /account/billing/info | Billing Information
*BillingApi* | [**currentplan**](docs/Api/BillingApi.md#currentplan) | **GET** /account/billing/plan/current | Current plan
*BillingApi* | [**paymenthistory**](docs/Api/BillingApi.md#paymenthistory) | **GET** /account/billing/payments | Payment history
*DomainsApi* | [**createadomain**](docs/Api/DomainsApi.md#createadomain) | **POST** /domains | Create a domain
*DomainsApi* | [**deleteadomain**](docs/Api/DomainsApi.md#deleteadomain) | **DELETE** /domains/{domainId} | Delete a domain
*DomainsApi* | [**getadomainsdetails**](docs/Api/DomainsApi.md#getadomainsdetails) | **GET** /domains/{domainId} | Get a domain&#39;s details
*DomainsApi* | [**listdomains**](docs/Api/DomainsApi.md#listdomains) | **GET** /domains | List domains
*DomainsApi* | [**submitforReviewApproval**](docs/Api/DomainsApi.md#submitforreviewapproval) | **POST** /domains/{domainid}/approve | Submit for Review &amp; Approval
*DomainsApi* | [**verifyDKIMstatus**](docs/Api/DomainsApi.md#verifydkimstatus) | **POST** /domains/{domainid}/verify_dkim | Verify DKIM status
*DomainsApi* | [**verifyTrackingRecord**](docs/Api/DomainsApi.md#verifytrackingrecord) | **POST** /domains/{domainid}/verify_tracking | Verify Tracking Record
*DomainsApi* | [**verifyanSPFrecord**](docs/Api/DomainsApi.md#verifyanspfrecord) | **POST** /domains/{domainid}/verify_spf | Verify an SPF record
*EmailApi* | [**sendEmail**](docs/Api/EmailApi.md#sendemail) | **POST** /emails | SendEmail
*ProfileApi* | [**criticalalerts**](docs/Api/ProfileApi.md#criticalalerts) | **GET** /alerts | Critical alerts
*ProfileApi* | [**profile**](docs/Api/ProfileApi.md#profile) | **GET** /account/profile | Profile
*SandboxApi* | [**createasanboxemail**](docs/Api/SandboxApi.md#createasanboxemail) | **POST** /sandbox/emails | Create a sanbox email
*SandboxApi* | [**deletesanboxemails**](docs/Api/SandboxApi.md#deletesanboxemails) | **DELETE** /sandbox/emails/{sandbox_email} | Delete sanbox emails
*SandboxApi* | [**listsanboxemails**](docs/Api/SandboxApi.md#listsanboxemails) | **GET** /sandbox/emails | List sanbox emails
*SandboxApi* | [**resedsanboxemailverificationcode**](docs/Api/SandboxApi.md#resedsanboxemailverificationcode) | **GET** /sandbox/emails/verify/{sandbox_email} | Resed sanbox email verification code
*SandboxApi* | [**verifyasanboxemail**](docs/Api/SandboxApi.md#verifyasanboxemail) | **PATCH** /sandbox/emails/verify/{sandbox_email} | Verify a sanbox email
*StatsApi* | [**getemaillogs**](docs/Api/StatsApi.md#getemaillogs) | **GET** /emaillogs | Get emaillogs
*StatsApi* | [**getsummaryofstats**](docs/Api/StatsApi.md#getsummaryofstats) | **GET** /stats | Get summary of stats
*TemplateApi* | [**copyatemplate**](docs/Api/TemplateApi.md#copyatemplate) | **POST** /templates/{template_id}/copy | Copy a template
*TemplateApi* | [**createatemplate**](docs/Api/TemplateApi.md#createatemplate) | **POST** /templates | Create a template
*TemplateApi* | [**deleteatemplate**](docs/Api/TemplateApi.md#deleteatemplate) | **DELETE** /templates/{template_uid} | Delete a template
*TemplateApi* | [**editatemplate**](docs/Api/TemplateApi.md#editatemplate) | **PUT** /templates/{template_id} | Edit a template
*TemplateApi* | [**getatemplate**](docs/Api/TemplateApi.md#getatemplate) | **GET** /templates/{template_uid} | Get a template
*TemplateApi* | [**listtemplates**](docs/Api/TemplateApi.md#listtemplates) | **GET** /templates | List templates
*WarmupApi* | [**warmUpplan**](docs/Api/WarmupApi.md#warmupplan) | **GET** /warmup_master | Warm-Up plan
*WarmupApi* | [**warmUpprogressdetails**](docs/Api/WarmupApi.md#warmupprogressdetails) | **GET** /warmup_details/24 | Warm-Up progress details
*WarmupApi* | [**warmUpscheduleDayByDay**](docs/Api/WarmupApi.md#warmupscheduledaybyday) | **GET** /warmup_plans/{warmup_plan_id} | Warm-Up schedule (Day-by-Day)
*WarmupApi* | [**warmUpstatus**](docs/Api/WarmupApi.md#warmupstatus) | **GET** /warmup_status | Warm-Up status
*WebhooksApi* | [**createawebhook**](docs/Api/WebhooksApi.md#createawebhook) | **POST** /webhooks | Create a webhook
*WebhooksApi* | [**deleteawebhook**](docs/Api/WebhooksApi.md#deleteawebhook) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**editawebhook**](docs/Api/WebhooksApi.md#editawebhook) | **PUT** /webhooks/{webhookId} | Edit a webhook
*WebhooksApi* | [**getawebhook**](docs/Api/WebhooksApi.md#getawebhook) | **GET** /webhooks/{webhookId} | Get a webhook
*WebhooksApi* | [**listwebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | List webhooks
*WebhooksApi* | [**testawebhookURL**](docs/Api/WebhooksApi.md#testawebhookurl) | **POST** /webhooks/test | Test a webhook URL

## Models

- [200OK10Data](docs/Model/200OK10Data.md)
- [200OK11Data](docs/Model/200OK11Data.md)
- [200OK12Data](docs/Model/200OK12Data.md)
- [200OK13Data](docs/Model/200OK13Data.md)
- [200OK14Data](docs/Model/200OK14Data.md)
- [200OK16Data](docs/Model/200OK16Data.md)
- [200OK17Data](docs/Model/200OK17Data.md)
- [200OK1Data](docs/Model/200OK1Data.md)
- [200OK22Data](docs/Model/200OK22Data.md)
- [200OK23Data](docs/Model/200OK23Data.md)
- [200OK24Data](docs/Model/200OK24Data.md)
- [200OK25Data](docs/Model/200OK25Data.md)
- [200OK29Data](docs/Model/200OK29Data.md)
- [200OK3Data](docs/Model/200OK3Data.md)
- [200OKQueueIds](docs/Model/200OKQueueIds.md)
- [Bcc](docs/Model/Bcc.md)
- [BillingInformation200Response](docs/Model/BillingInformation200Response.md)
- [BlockHard](docs/Model/BlockHard.md)
- [BlockSoft](docs/Model/BlockSoft.md)
- [BounceHard](docs/Model/BounceHard.md)
- [BounceSoft](docs/Model/BounceSoft.md)
- [Cc](docs/Model/Cc.md)
- [Click](docs/Model/Click.md)
- [Copyatemplate200Response](docs/Model/Copyatemplate200Response.md)
- [Createadomain200Response](docs/Model/Createadomain200Response.md)
- [Createadomain400Response](docs/Model/Createadomain400Response.md)
- [CreateadomainRequest](docs/Model/CreateadomainRequest.md)
- [Createasanboxemail200Response](docs/Model/Createasanboxemail200Response.md)
- [CreateasanboxemailRequest](docs/Model/CreateasanboxemailRequest.md)
- [Createatemplate201Response](docs/Model/Createatemplate201Response.md)
- [Createawebhook200Response](docs/Model/Createawebhook200Response.md)
- [Createawebhook400Response](docs/Model/Createawebhook400Response.md)
- [CreateawebhookRequest](docs/Model/CreateawebhookRequest.md)
- [Criticalalerts200Response](docs/Model/Criticalalerts200Response.md)
- [Currentplan200Response](docs/Model/Currentplan200Response.md)
- [Data](docs/Model/Data.md)
- [Data1](docs/Model/Data1.md)
- [Data10](docs/Model/Data10.md)
- [Data11](docs/Model/Data11.md)
- [Data12](docs/Model/Data12.md)
- [Data12RequiredDkimRecord](docs/Model/Data12RequiredDkimRecord.md)
- [Data12RequiredSpfRecord](docs/Model/Data12RequiredSpfRecord.md)
- [Data12RequiredTrackingRecord](docs/Model/Data12RequiredTrackingRecord.md)
- [Data13](docs/Model/Data13.md)
- [Data14](docs/Model/Data14.md)
- [Data15](docs/Model/Data15.md)
- [Data16](docs/Model/Data16.md)
- [Data17](docs/Model/Data17.md)
- [Data19](docs/Model/Data19.md)
- [Data19GraphSummary](docs/Model/Data19GraphSummary.md)
- [Data19TotalSummary](docs/Model/Data19TotalSummary.md)
- [Data2](docs/Model/Data2.md)
- [Data20](docs/Model/Data20.md)
- [Data3](docs/Model/Data3.md)
- [Data4](docs/Model/Data4.md)
- [Data5](docs/Model/Data5.md)
- [Data5QueuedRate](docs/Model/Data5QueuedRate.md)
- [Data6](docs/Model/Data6.md)
- [Data7](docs/Model/Data7.md)
- [Data8](docs/Model/Data8.md)
- [Data9](docs/Model/Data9.md)
- [Deleteadomain200Response](docs/Model/Deleteadomain200Response.md)
- [DeleteadomainRequest](docs/Model/DeleteadomainRequest.md)
- [Deleteatemplate200Response](docs/Model/Deleteatemplate200Response.md)
- [Deleteawebhook200Response](docs/Model/Deleteawebhook200Response.md)
- [Deleteawebhook400Response](docs/Model/Deleteawebhook400Response.md)
- [DeleteawebhookRequest](docs/Model/DeleteawebhookRequest.md)
- [Deletesanboxemails200Response](docs/Model/Deletesanboxemails200Response.md)
- [Delivered](docs/Model/Delivered.md)
- [Editatemplate200Response](docs/Model/Editatemplate200Response.md)
- [Editatemplate500Response](docs/Model/Editatemplate500Response.md)
- [Editawebhook200Response](docs/Model/Editawebhook200Response.md)
- [EditawebhookRequest](docs/Model/EditawebhookRequest.md)
- [GetadomainSdetails200Response](docs/Model/GetadomainSdetails200Response.md)
- [Getatemplate200Response](docs/Model/Getatemplate200Response.md)
- [Getawebhook200Response](docs/Model/Getawebhook200Response.md)
- [GlobalMergeVar](docs/Model/GlobalMergeVar.md)
- [GraphSummary](docs/Model/GraphSummary.md)
- [Listdomains200Response](docs/Model/Listdomains200Response.md)
- [Listsanboxemails200Response](docs/Model/Listsanboxemails200Response.md)
- [Listtemplates200Response](docs/Model/Listtemplates200Response.md)
- [Listwebhooks200Response](docs/Model/Listwebhooks200Response.md)
- [M20250901](docs/Model/M20250901.md)
- [M20250901Open](docs/Model/M20250901Open.md)
- [M20250903](docs/Model/M20250903.md)
- [MergeVar](docs/Model/MergeVar.md)
- [Model200OK](docs/Model/Model200OK.md)
- [Model200OK1](docs/Model/Model200OK1.md)
- [Model200OK10](docs/Model/Model200OK10.md)
- [Model200OK11](docs/Model/Model200OK11.md)
- [Model200OK12](docs/Model/Model200OK12.md)
- [Model200OK13](docs/Model/Model200OK13.md)
- [Model200OK14](docs/Model/Model200OK14.md)
- [Model200OK15](docs/Model/Model200OK15.md)
- [Model200OK16](docs/Model/Model200OK16.md)
- [Model200OK17](docs/Model/Model200OK17.md)
- [Model200OK18](docs/Model/Model200OK18.md)
- [Model200OK2](docs/Model/Model200OK2.md)
- [Model200OK22](docs/Model/Model200OK22.md)
- [Model200OK23](docs/Model/Model200OK23.md)
- [Model200OK24](docs/Model/Model200OK24.md)
- [Model200OK25](docs/Model/Model200OK25.md)
- [Model200OK29](docs/Model/Model200OK29.md)
- [Model200OK3](docs/Model/Model200OK3.md)
- [Model200OK30](docs/Model/Model200OK30.md)
- [Model200OK4](docs/Model/Model200OK4.md)
- [Model200OK5](docs/Model/Model200OK5.md)
- [Model200OK6](docs/Model/Model200OK6.md)
- [Model200OK7](docs/Model/Model200OK7.md)
- [Model200OK8](docs/Model/Model200OK8.md)
- [Model200OK9](docs/Model/Model200OK9.md)
- [Model201Created](docs/Model/Model201Created.md)
- [Model400BadRequest1](docs/Model/Model400BadRequest1.md)
- [Model400BadRequest3](docs/Model/Model400BadRequest3.md)
- [Model401Unauthorized1](docs/Model/Model401Unauthorized1.md)
- [Model404NotFound1](docs/Model/Model404NotFound1.md)
- [Model500InternalServerError1](docs/Model/Model500InternalServerError1.md)
- [Open](docs/Model/Open.md)
- [Open1](docs/Model/Open1.md)
- [Paymenthistory200Response](docs/Model/Paymenthistory200Response.md)
- [Profile200Response](docs/Model/Profile200Response.md)
- [QueueIds](docs/Model/QueueIds.md)
- [QueueIdsToExampleCom](docs/Model/QueueIdsToExampleCom.md)
- [Request](docs/Model/Request.md)
- [RequiredDkimRecord](docs/Model/RequiredDkimRecord.md)
- [RequiredSpfRecord](docs/Model/RequiredSpfRecord.md)
- [RequiredTrackingRecord](docs/Model/RequiredTrackingRecord.md)
- [Resedsanboxemailverificationcode200Response](docs/Model/Resedsanboxemailverificationcode200Response.md)
- [SendEmail](docs/Model/SendEmail.md)
- [SendEmail200Response](docs/Model/SendEmail200Response.md)
- [SendEmail400Response](docs/Model/SendEmail400Response.md)
- [SendEmail401Response](docs/Model/SendEmail401Response.md)
- [SendEmail404Response](docs/Model/SendEmail404Response.md)
- [SendEmailRequest](docs/Model/SendEmailRequest.md)
- [SendEmailVars](docs/Model/SendEmailVars.md)
- [Spam](docs/Model/Spam.md)
- [SubmitforReviewApproval200Response](docs/Model/SubmitforReviewApproval200Response.md)
- [SubmitforReviewApprovalRequest](docs/Model/SubmitforReviewApprovalRequest.md)
- [TestawebhookURL200Response](docs/Model/TestawebhookURL200Response.md)
- [TestawebhookURL400Response](docs/Model/TestawebhookURL400Response.md)
- [TestawebhookURLRequest](docs/Model/TestawebhookURLRequest.md)
- [To](docs/Model/To.md)
- [ToExampleCom](docs/Model/ToExampleCom.md)
- [ToExampleComBcc](docs/Model/ToExampleComBcc.md)
- [ToExampleComCc](docs/Model/ToExampleComCc.md)
- [TotalSummary](docs/Model/TotalSummary.md)
- [TotalSummaryBlockHard](docs/Model/TotalSummaryBlockHard.md)
- [TotalSummaryBlockSoft](docs/Model/TotalSummaryBlockSoft.md)
- [TotalSummaryBounceHard](docs/Model/TotalSummaryBounceHard.md)
- [TotalSummaryBounceSoft](docs/Model/TotalSummaryBounceSoft.md)
- [TotalSummaryClick](docs/Model/TotalSummaryClick.md)
- [TotalSummaryDelivered](docs/Model/TotalSummaryDelivered.md)
- [TotalSummaryOpen](docs/Model/TotalSummaryOpen.md)
- [TotalSummaryRequest](docs/Model/TotalSummaryRequest.md)
- [TotalSummarySpam](docs/Model/TotalSummarySpam.md)
- [TotalSummaryUnsubscribe](docs/Model/TotalSummaryUnsubscribe.md)
- [Unsubscribe](docs/Model/Unsubscribe.md)
- [Vars](docs/Model/Vars.md)
- [VerifyDKIMstatus200Response](docs/Model/VerifyDKIMstatus200Response.md)
- [VerifyDKIMstatusRequest](docs/Model/VerifyDKIMstatusRequest.md)
- [VerifyTrackingRecord200Response](docs/Model/VerifyTrackingRecord200Response.md)
- [VerifyTrackingRecordRequest](docs/Model/VerifyTrackingRecordRequest.md)
- [VerifyanSPFrecord200Response](docs/Model/VerifyanSPFrecord200Response.md)
- [VerifyanSPFrecordRequest](docs/Model/VerifyanSPFrecordRequest.md)
- [Verifyasanboxemail400Response](docs/Model/Verifyasanboxemail400Response.md)
- [VerifyasanboxemailRequest](docs/Model/VerifyasanboxemailRequest.md)
- [WarmUpplan200Response](docs/Model/WarmUpplan200Response.md)
- [WarmUpscheduleDayByDay200Response](docs/Model/WarmUpscheduleDayByDay200Response.md)
- [WarmUpstatus200Response](docs/Model/WarmUpstatus200Response.md)
- [WebhookDatum](docs/Model/WebhookDatum.md)

## Authorization

Authentication schemes defined for the API:
### apiKey

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

dev@mimepost.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.0.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
