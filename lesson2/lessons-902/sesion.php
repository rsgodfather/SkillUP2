<?php

session_start();

if(isset($_SESSION['count'])){
    $count = $_SESSION['count'];
} else {
    $count = 0;
}

$count++;
$_SESSION['count'] = $count;

echo 'You was here ' . $count . ' times';