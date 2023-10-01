<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
require_once('vendor/autoload.php'); // Include the Stripe PHP library

// Set your Stripe API keys
$stripeSecretKey = 'sk_test_51MRt12K8zEoFkAoMQpXttUhaaUoHGk1l23yN14rRlIc6j1XFHBAcaQgv3u0GuWSFBhpGrzUoaWrDrlkFAY2yvqMk00c706cU8B';

\Stripe\Stripe::setApiKey($stripeSecretKey);

try {
    // Retrieve the last charge
    $charges = \Stripe\Charge::all([
        'limit' => 1,
        'order' => [
            'created' => 'desc',
        ],
    ]);

    // Get the last charge
    $lastCharge = $charges->data[0];

    // Retrieve specific payment details
    $amount = $lastCharge->amount;
    $currency = $lastCharge->currency;
    $email = $lastCharge->source->name;
    $created = date('Y-m-d H:i:s', $lastCharge->created);

    // Display the payment details
    echo 'Last Payment Details:<br>';
    echo 'Amount: ' . $amount / 100 . ' ' . $currency . '<br>';
    echo 'Email: ' . $email . '<br>';
    echo 'Created: ' . $created . '<br>';
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle the exception
    $errorMessage = $e->getMessage();
    echo 'Error: ' . $errorMessage;
}
?>
