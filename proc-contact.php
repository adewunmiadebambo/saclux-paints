<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if(!$name || !$email || !$subject || !$phone || !$message)
{
    $error = 'formerror';
    include('error.php');
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'emailerror';
    include('error.php');
    exit;
}

// else{
//     $conn = mysqli_connect('localhost', 'root', '', 'flexible_travels');


//     $query = "insert into contact (name, email, phone, message) values ('$name','$email','$phone', '$message')";
//     $result = mysqli_query($conn,$query);
    

    
$to = 'crespo1678@yahoo.com';
$subject = 'Hi! I would like to make an enquiry';
$from = 'From: noreply@yahoo.com';

$content = 'Below are my details'."\n"
            .'Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Subject: '.$subject."\n"
            .'Phone: '.$phone."\n"
            .'Message: '.$message."\n";

mail($to, $subject, $from, $content);
include('thank-you.php');


?>

