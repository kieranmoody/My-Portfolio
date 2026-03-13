<?php
//Bugfixing
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//Database Connecting//
require_once __DIR__ . '/vendor/autoload.php';

use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Mailtrap\Mime\MailtrapEmail;
use Symfony\Component\Mime\Address;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$db   = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];

$apiKey = $_ENV['MAILTRAP_API_KEY'];
$personalEmail = $_ENV['PERSONAL_EMAIL'];

$mailtrap = MailtrapClient::initSendingEmails(
    apiKey: $apiKey,
);

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log($e->getMessage()); // logs the error
    die("Database connection failed. Please try again later."); // user-friendly
}
//Database Connecting//


$formSuccess = isset($_GET['success']);
$firstNameErr = $lastNameErr = $emailErr = $messageErr = "";
$firstName = $lastName = $email = $message = $subject = "";
$firstNameClass = $lastNameClass = $emailClass = $messageClass = $subjectClass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["first-name"])) {
        $firstNameErr = "First name is Required";
        $firstNameClass = "input-invalid";
    } else {
        $firstName = test_input($_POST["first-name"]);
        $firstNameClass = "input-valid";
    }

    if (empty($_POST["last-name"])) {
        $lastNameErr = "Last name is Required";
        $lastNameClass = "input-invalid";
    } else {
        $lastName = test_input($_POST["last-name"]);
        $lastNameClass = "input-valid";
    }

    if (empty($_POST["email-address"])) {
        $emailErr = "Email is Required";
        $emailClass = "input-invalid";
    } elseif (!filter_var($_POST["email-address"], FILTER_VALIDATE_EMAIL)) {
        $email = test_input($_POST["email-address"]);
        $emailErr = "Invalid email format";
        $emailClass = "input-invalid";
    } else {
        $email = test_input($_POST["email-address"]);
        $emailClass = "input-valid";
    }

    if (empty($_POST["subject"])) {
        $subject = "";
        $subjectClass = "";
    } else {
        $subject = test_input($_POST["subject"]);
        $subjectClass = "input-valid";
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is Required";
        $messageClass = "input-invalid";
    } else {
        $message = test_input($_POST["message"]);
        $messageClass = "input-valid";
    }

    if (
        empty($firstNameErr) &&
        empty($lastNameErr) &&
        empty($emailErr) &&
        empty($messageErr)
    ) {
        // Insert into database here
        $sql = "INSERT INTO contact_form 
        (first_name, last_name, email, subject, message) 
        VALUES (:first_name, :last_name, :email, :subject, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':first_name' => $firstName,
            ':last_name' => $lastName,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message,
        ]);

        $email = (new MailtrapEmail())
            ->from(new Address('hello@demomailtrap.co', $firstName .' '. $lastName))
            ->to(new Address($personalEmail))
            ->subject('From Your Portfolio')
            ->text (
                "The subject of the message - " . $subject . "\n" .
                $message . "\n" .
                "Message came with the email-address - " . $email
            )
            ->category('Integration Test')
        ;

        $response = $mailtrap->send($email);

        var_dump(ResponseHelper::toArray($response));

        header("Location: index.php?success=1");
        exit;
    }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

require "views/index.view.php";