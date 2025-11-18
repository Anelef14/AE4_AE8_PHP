<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: reservation.php');
    exit;
}

$restaurant = isset($_POST['restaurant']) ? $_POST['restaurant'] : ''; 
$date = isset($_POST['date']) ? $_POST['date'] : ''; 
$people = isset($_POST['people']) ? $_POST['people'] : ''; 
$email = isset($_POST['email']) ? $_POST['email'] : ''; 
$name = isset($_POST['name']) ? $_POST['name'] : '';
