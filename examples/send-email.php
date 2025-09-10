<?php

require 'vendor/autoload.php';

$client = new MimePost\Client('YOUR_API_TOKEN');

// Send an email using a template
$response = $client->sendEmail([
    'template_uid' => 'welcome_email_test',
    'subject'      => 'Test Mail using MimePost Client',
    'from_name'    => 'Your Sender Name',
    'from_email'   => 'yoursender@example.com',
    'to'           => [ ['email' => 'to@example.com'] ],
]);

print_r($response);
/*
//example output
Array
(
    [success] => 1
    [error_code] => 0
    [message] => Mails accepted
    [queue_ids] => Array
        (
            [to@example.com] => Array
                (
                    [status] => f8dcecc8-6728-4ead-8def-c463fd1b9620
                )

        )

)
*/
