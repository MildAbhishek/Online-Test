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

//echo ("Hii");

$number=$_GET['n'];
//echo ($number);

//Query for the Question
$sql="SELECT * FROM questions WHERE question_number = $number";
$result=$conn->query($sql);
$question=$result->fetch_assoc();

//Query for the Option
$sql="SELECT * FROM options WHERE question_number=$number";
$option=$conn->query($sql);

//Get Total Questions
$sql="SELECT * FROM questions";
$result=$conn->query($sql);
$totalQuestion=$result->num_rows;

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
    <div class="container">
        <div class="current">Question <?php echo $number; ?> of <?php echo $totalQuestion; ?></div>
        <p class="question"><?php echo $question['question_text'];?></p>
        <form action="process.php" method="POST">
        <ul>
            <?php while($row=$option->fetch_assoc()) {?>
            <li><input type="radio" name="option" value="<?php echo $row['id']; ?>"><?php echo $row['options']; ?></li>
            <?php } ?> 
            
        </ul>
        <input type="hidden" name="number" value="<?php echo $number; ?>">
        <input type="submit" name="submit" value="submit">
        </form>
    </div>
    
</body>
</html>