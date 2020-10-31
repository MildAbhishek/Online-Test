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
require 'config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>

    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="outer">
        <div id="header">
            <ul>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Subjects</a></li>
                <li><a href="#">Free Mock test</a></li>
            </ul>
            
            <br>

            <h1>Site Logo</h1><br><br><br><br>
            <a href='signup.php' class="link" id="signup">Signup</a>
            <a href='login.php' class="link" id="login">Login</a>
        </div>
        <div id="slider">
            <div id="leftslider">
            <h2>We Power Online Test Series</h2>
            <p>We provide all types of <br/>test series related to your<br/>course and syllabus.</p>
            <br/>
            <input type="button" value="Learn More" id="button"></input>
            </div>
        
        </div>

        <div id="cards">
            <div class="card">
                <img src="images/img1.jpg" class="img"/>
                <h3>Biology</h3>
                <p>This is Biology Quiz<br/><i>NEET Exam Ready Test</i></p>
                <a href="#">Attempt Quiz</a>
            </div>
            <div class="card">
                <img src="images/img2.jpg" class="img"/>
                <h3>Physics</h3>
                <p>This is Physics Quiz<br/><i>IIT-JEE Exam Ready Test</i></p>
                <a href="#">Attempt Quiz</a>
            </div>
            <div class="card">
                <img src="images/img3.jpg" class="img"/>
                <h3>Miscellaneous</h3>
                <p>This is Miscellaneous Quiz<br/><i>Engineering and Medical</i></p>
                <a href="#">Attempt Quiz</a>
            </div>
        </div>
        <div id="bottom">
            <div class="searchbox">
                <h1>Subscribe Us</h1>
            </div>
            <div class="searchbox">
                <input type="search" id="search" placeholder="TextBox"></input>
            </div>
            <div class="searchbox">
                <input type="submit" id="submitButton" href="#"></input>
            </div>
        </div>
        <div id="footer">
            <span id="copyright">COPYRIGHT @ 2020</span>
            <span id="companyName">CEDCOSS Technologies.</span>
        </div>
    </div>
    
</body>
</html>