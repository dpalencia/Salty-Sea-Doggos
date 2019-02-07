<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = 'info@saltyseadoggos.com';

// an email address that will receive the email with the output of the form
$sendTo = 'info@saltyseadoggos.com';

$subject = 'Salty Sea Doggos Contact Form Inquiry';

// form field names and their translations.
// array variable name => Text to appear in the email

$fields = array('name' => 'Name', 'subject' => 'Subject', 'email' => 'Email', 'message' => 'Message');

// OK Message
$okMessage = 'Yarr! Your form has been submitted. We\'ll be in touch soon!';

// Error Message
$errorMessage = 'Error sending form. Please try again later or click send an email to info@saltyseadoggos.com.';

try
{

    if(count($_POST) == 0) 
        throw new \Exception('Form is empty.');
            
    $emailText = "";

    $subject = $_POST['subject'];

    foreach ($_POST as $key => $value) {
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
