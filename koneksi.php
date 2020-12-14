<?php 
    $host = 'remotemysql.com';
    $db = '3nVCoE0ncB';
    $user = '3nVCoE0ncB';
    $pass = 'q20fhxTvLg';
    $charset ='utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try { 
        $pdo_conn = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 

    catch(PDOException $e){ 
        print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>"; 
        die();
    } 
?>
