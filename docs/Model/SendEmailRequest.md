# # SendEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_uid** | **string** | Unique identifier of an approved email template in your MimePost account. The template provides the HTML/Text content and merge placeholders that this request will populate. |
**subject** | **string** | Subject line for the email (max ~255 chars). Avoid newline characters; keep it concise and human-readable. |
**from_email** | **string** | Sender email address used in the From header and envelope. Must belong to a verified sending domain in your MimePost account (e.g., no-reply@yourdomain.com). |
**from_name** | **string** | Friendly display name for the sender shown to recipients, e.g., “Marketing Team &lt;no-reply@yourdomain.com&gt;”. |
**global_merge_vars** | [**\MimePost\Model\GlobalMergeVar[]**](GlobalMergeVar.md) | Key–value pairs applied to all recipients for template personalization (e.g., { \&quot;company\&quot;: \&quot;Acme\&quot;, \&quot;year\&quot;: \&quot;2025\&quot; }). Recipient-specific values (if used later) override these. |
**to** | [**\MimePost\Model\To[]**](To.md) | Primary recipient email addresses. Provide at least one valid address. Duplicates and invalid emails should be ignored/rejected by the server. |
**cc** | **string[]** | Carbon-copy recipients who will be visible to all recipients. | [optional]
**bcc** | **string[]** | Blind-carbon-copy recipients who will not be visible to other recipients. | [optional]
**attachments** | **string[]** | Attachment references. Each item is either a public URL (http/https) or an attachment ID returned by an upload endpoint (if available). | [optional]
**vars** | [**\MimePost\Model\SendEmailVars**](SendEmailVars.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
