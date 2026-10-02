<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_bolo_judyfrance');

if ($conn->connect_errno) {
    die('Connection failed: ' . $conn->connect_error);
}
?>