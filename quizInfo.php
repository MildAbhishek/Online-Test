<?php
include 'config.php';
$id=$_POST['id'];
echo $id;
$sql="SELECT * FROM questions";
$result=$conn->query($sql);
$total= $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Information</title>

    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <div class="container">
            <P>Quiz Guidelines</P>
        </div>
    </header>
    <main>
        <div class="container"> 
            <h2>Test Your knowledge.</h2>
            <p>
                This MCQs test is to predict your knowledge.
            </p>

            <ul>
                <li>Test Number <?php echo($total)?></li>
                <li><strong>No.of Questions: </strong><?php echo($total)?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated Time: </strong><?php echo($total*1.5." Minutes")?></li>
                <li><strong>Total Points: </strong><?php echo($total*1)?></li>
            </ul>

            <a href="question.php?n=1" class="link">Start Quiz</a>
        </div>
    </main>

</body>
</html>