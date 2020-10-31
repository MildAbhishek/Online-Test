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
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
</head>
<body>
    <div class="container">
    <h2>Your Result</h2>
    <p>Congratulation!! You have completed this test successfully</p>
    <p>Your Score is <?php echo $_SESSION['score']; ?></p>
    <?php unset ($_SESSION['score']); ?>
    </div>
</body>
</html>