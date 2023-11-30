<?php
// Path: code2023/PHP/DSVII-1LS231-II2023/LAB14/index.php

$_PROTOCOL = isset( $_SERVER[ 'HTTPS' ] ) && $_SERVER[ 'HTTPS' ] === 'on' ? 'https' : 'http';
$_HOST     = $_SERVER[ 'HTTP_HOST' ];
$_URI      = $_SERVER[ 'REQUEST_URI' ];

$fullUrl = $_PROTOCOL . '://' . $_HOST . $_URI;

// echo "<script>console.log('$fullUrl');</script>";
header ( 'Location: ' . $fullUrl . 'acceso/login.php' );
exit;
?>