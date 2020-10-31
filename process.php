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
// echo "Hii.."; 
session_start();
?>

<?php 
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if ($_POST) {
    $sql="SELECT * FROM questions";
    $result=$conn->query($sql);
    $totalQuestion=$result->num_rows;

    $number=$_POST['number'];

    $selected_option = $_POST['option'];

    //Next Question Number
    $next=$number+1;

    //Determine Correct choice for current Question

    $sql="SELECT * FROM options WHERE `question_number`=$number AND `status`=1";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $correct_option=$row['id'];

    //Update score
    if ($selected_option==$correct_option) {
        $_SESSION['score']++;

    }
    if ($number==$totalQuestion) {
        header('Location:score.php');
    } else {
        header('Location:question.php?n= '.$next );
    }
    

}
?>