<?php
// Show errors
ini_set('display_errors', 1); // Enable error display
ini_set('display_startup_errors', 1); // Enable startup error display
error_reporting(E_ALL); // Set the error reporting level

require_once 'vendor/autoload.php'; // Include Composer's autoloader

use Twilio\Rest\Client; // Use the Client class from the Twilio REST API

$sid = 'SID_CODE'; // Your Twilio account SID
$token = 'TOKEN_CODE'; // Your Twilio auth token
$client = new Client($sid, $token); // Create a new Twilio REST client

$message = $_POST['message']; // The message to send
$numbers = explode(',', $_POST['numbers']); // The numbers to send the message to

// For each number, create a new message
foreach ($numbers as $number) {
    $client->messages->create(
        $number,
        array(
            'from' => 'YOUR_NUMBER', // Your Twilio number
            'body' => $message // The message body
        )
    );
}

// Redirect to the referrer
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>