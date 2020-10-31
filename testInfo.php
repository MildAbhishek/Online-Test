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

$sql="SELECT * FROM test";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type=text/css>
    <link rel="stylesheet" href="index.css" type=text/css>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="cards">
        <?php
            while ($row=$result->fetch_assoc()) {
        ?>
            <div class="card">
                <img src="images/img1.jpg" class="img"/>
                <h3>Test <?php echo $row['test_number']?></h3>
                <p>This is <?php echo $row['test_name']?> Quiz</p>
                <a class="link" data-id="<?php echo $row['test_number']?>">Attempt Quiz</a>
            </div>
        <?php } ?>
    </div>

    <script>
      $(document).ready(function() {
          $(".link").on("click", function() {
              //alert("Hii..");
              var dataId = $(this).data("id");
              //alert("The data-id of clicked item is: " + dataId);
              $.ajax({
                  url:'quizInfo.php',
                  type:'POST',
                  data:{id : dataId}
                })

            });
        });
    </script>
</body>
</html>

