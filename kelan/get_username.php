<?php
session_start();

if (!isset($_SESSION['userid'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit();
}

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$gender = $_SESSION['gender'];

$userData = [
    'userid' => $userid,
    'username' => $username,
    'email' => $email,
    'gender' => $gender
];

echo json_encode($userData);
?>
