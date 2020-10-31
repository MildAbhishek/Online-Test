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
require '../config.php';

if (isset($_POST['submit'])) {
    $flag=0;
    $next;
    $testNumber=$_POST['testNumber'];
    $testName=$_POST['testName'];
    $questionNumber=$_POST['questionNumber'];
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    //echo ($question);

    //questionArray
    //$ques = array();

    //optionArray

    $option = array();
    $option[1] = $_POST['option1'];
    $option[2] = $_POST['option2'];
    $option[3] = $_POST['option3'];
    $option[4] = $_POST['option4'];

    //Add Test to 'test' table
    if ($testName != '') {
        $sql="INSERT INTO test (test_number, test_name) VALUES ('".$testNumber."', '".$testName."')";
        $result=$conn->query($sql);
        if ($result) {

        }
    }

    //Add Question Number and Question to 'questions' table.
    if ($question != '') {
        $sql="INSERT INTO questions (test_number, question_number, question_text) VALUES ('".$testNumber."', '".$questionNumber."', '".$question."')";
        $result=$conn->query($sql);
        if ($result) {
            foreach ($option as $choice=> $value) {
                if ($value != '') {
                    if ($choice == $answer) {
                        $status=1;
                    } else {
                        $status=0;
                    }
                    //Add options to 'option' table.
                    $sql="INSERT INTO options (test_number, question_number, status, options) VALUES ('".$testNumber."', '".$questionNumber."', '".$status."', '".$value."')";
                    $insert_option = $conn->query($sql);
                    if ($insert_option) {  
                        continue; 
                    } else {
                        die("Query Not Executed"); 
                    }

                }
            }
            $message="Question has been Inserted Successfully";
            echo "$message";
            $flag=1;
        }
        
            
    } else {
        echo ("Required Field");
        $flag=0;
    }
    $sql="SELECT * FROM questions";
    $result=$conn->query($sql);
    $total= $result->num_rows;
    
    if ($flag==1) {
        $next=$total+1;
        //$next=$next+1;
    } else {
        $next=$total+1;
    } 
} 
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Questions</title>

    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>
<body>
    <main>
        <div class="container">
            <h3>Add a Test</h3>
            <form action="manageTest.php" method="POST">
                <table>
                    <tr>
                        <td><label>Test Number</label></td>
                        <td><input type="number" name="testNumber" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Test Name</label></td>
                        <td><input type="text" name="testName" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Question Number</label></td>
                        <td><input type="number" name="questionNumber" value="<?php echo $next;?>"></td>
                    </tr>
                    <tr>
                        <td><label>Question</label></td>
                        <td><input type="text" name="question"></td>
                    </tr>
                    <tr>
                        <td><label>Option 1</label></td>
                        <td><input type="text" name="option1"></td>
                    </tr>
                    <tr>
                        <td><label>Option 2</label></td>
                        <td><input type="text" name="option2"></td>
                    </tr>
                    <tr>
                        <td><label>Option 3</label></td>
                        <td><input type="text" name="option3"></td>
                    </tr>
                    <tr>
                        <td><label>Option 4</label></td>
                        <td><input type="text" name="option4"></td>
                    </tr>
                    <tr>
                        <td><label>Answer</label></td>
                        <td><input type="number" name="answer"></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </main>
</body>
</html>