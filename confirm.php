<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: reservation.php');
    exit;
}
