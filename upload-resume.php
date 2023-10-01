<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

// Check if a file was uploaded
if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Set up SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'info@skills-assessment-australia.au';
    $mail->Password = 'your_email_password';
    $mail->SMTPSecure = 'tls';

    // Set up email content
    $mail->setFrom('jaspreetsingh9088@gmail.com', 'Jass');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->Subject = 'Your email subject';
    $mail->Body = 'The body of your email.';

    // Attach uploaded file
    $attachmentPath = $_FILES['resume']['tmp_name'];
    $attachmentName = $_FILES['resume']['name'];
    $mail->addAttachment($attachmentPath, $attachmentName);

    // Send email
    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    echo 'No file uploaded or an error occurred during upload.';
}
?>
