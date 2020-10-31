<?php
/**
 * Templet File Doc Comment
 * 
 * PHP version /
 * 
 * @category Tenplete_Class
 * @package  Templete_Class
 * @author   Author <author@domain.com>
 * @license  http://opensource.org/MIT MIT License
 * @link     http://localhost/
 */
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="info">
        <?php
        echo "<head><link href='style.css' rel='stylesheet'></head>";
        echo "<h3>You have logged in successfully</h3>";
        echo "User ID: ".$_SESSION['userdata']['userid']."<br>";
        echo "User Name: ".$_SESSION['userdata']['username']."<br>";
        echo "User Email: ".$_SESSION['userdata']['email']."<br><br><br><br><br>";
       
        echo "<a href='testInfo.php' class='link'>Take Test</a>";
        ?>
    </div>
    
</body>
</html>
