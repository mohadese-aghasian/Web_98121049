<?php
include 'functions.php';

require('Database.php');
$config = require('Config.php');
$db = new Database($config);
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id= :id";
$user = $db->query($query,['id'=>$id])
            ->fetch(PDO::FETCH_ASSOC);
dd($user);
?>