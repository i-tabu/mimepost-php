# MimePost PHP SDK

A simple and beginner‑friendly PHP client for the [MimePost](https://mimepost.com/) API.  
It wraps a subset of the endpoints defined in the provided Postman collection and can be easily extended.

## Installation

Use [Composer](https://getcomposer.org/):

```bash
composer require mimepost/mimepost-php
```

If you are not using Composer, include the `src/Client.php` file manually.

## Usage

```php
require 'vendor/autoload.php';

$client = new MimePost\Client('YOUR_API_TOKEN');

// Send an email using a template
$response = $client->sendEmail([
    'template_uid' => 'welcome_template',
    'subject'      => 'Hello from MimePost',
    'from_email'   => 'sender@example.com',
    'to'           => [ ['email' => 'user@example.com'] ],
]);

print_r($response);
```

Additional helpers:

```php
$templates = $client->listTemplates();
$domainList = $client->listDomains();
$stats      = $client->getStats(['start_date' => '20250101', 'end_date' => '20250131']);
```

## Extending

The `Client::request()` method is public. You can call any MimePost endpoint:

```php
$result = $client->request('GET', 'webhooks');
```

## License

MIT
