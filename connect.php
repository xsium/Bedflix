<?php
    session_start();
    try {
        $db = new PDO('mysql:host=localhost;dbname=Bedflix;charset=utf8', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        $db = NULL;
        echo ("Erreur: " . $e->getMessage());
    }
?>