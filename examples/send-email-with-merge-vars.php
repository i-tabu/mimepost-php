<?php

require 'vendor/autoload.php';

$client = new MimePost\Client('YOUR_API_TOKEN');

// Send an email using a template
$response = $client->sendEmail([
    'template_uid' => 'welcome_email_test',
    'subject'      => 'Test Mail using MimePost Client',
    'from_name'    => 'Your Sender Name',
    'from_email'   => 'yoursender@example.com',
    'to'           => [ 
        [
            'email' => 'to@example.com', 
            'merge_vars' => [
                array(
                    'name'  => 'FIRST_NAME',
                    'value' => 'Joe',
                ),
                array(
                    'name'  => 'USERNAME',
                    'value' => 'joe_123',
                ),
            ]
        ] 
    ],
]);

print_r($response);
//example output
/*
Array
(
    [success] => 1
    [error_code] => 0
    [message] => Mails accepted
    [queue_ids] => Array
        (
            [mp_test@mailsac.com] => Array
                (
                    [status] => b3ac8c43-5c72-49c6-b8ae-64947bd48a5f
                )

        )

)
*/
