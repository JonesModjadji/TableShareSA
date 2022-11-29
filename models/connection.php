<?php
    $server = 'mysql:host=127.0.0.1;';
    $dsn = 'mysql:host=127.0.0.1;dbname=tablesharesa';
    $username = 'root';
    $password = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $db;
    try {
        $conn = new PDO($server, $username, $password, $options);
        $sql = "CREATE DATABASE IF NOT EXISTS `tablesharesa`";
        $conn->exec($sql);
        $conn = null;
        $db = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
?>
<?php 
define('SERVER', "localhost");
define('USER', "root");
define('PASSWORD', "");
define('DATABASE',"tablesharesa");
 $con = mysqli_connect(SERVER, USER,PASSWORD, DATABASE);
?>