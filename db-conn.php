<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=co2fzs_userdata', 'root', '');
 } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
 }
?>