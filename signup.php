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
$errors=array();
if (isset($_POST['submit'])) {
    //echo "Hii";
    $username=isset($_POST['username']) ? $_POST['username'] : '' ;
    $password=isset($_POST['password']) ? $_POST['password'] : '' ;
    $confirmPassword=isset($_POST['repassword']) ? $_POST['repassword'] : '' ;
    $email=isset($_POST['username']) ? $_POST['email'] : '' ;
    //echo '$username';
    if ($password != $confirmPassword) {
        //echo "Password doesnot match";
        $errors[]=array('input'=>'password', 'msg'=>'Password doesnt match');
    }
    if (sizeof($errors)==0) {
        $sql="INSERT INTO users(username, email, passwords, confirmpassword) VALUES ('".$username."', '".$email."', '".$password."', '".$confirmPassword."')";
        $result=$conn->query($sql);

        if (($result) === true) {
            echo "Data Inserted Successfully";
            header('Location:login.php');
        } else {
            echo "Data Insertion failed";
            $errors[]=array('input'=>'form', 'msg'=>'$conn->error');
        }
        $conn->close();
    }
}
?>
<html>
    <head>
        <style>
            #outer
            {
            height:440px;
            width:440px;
            background-color:lightgrey;
            border:1px solid lightgrey;
            }
            #inner
            {
            height:400px;
            width:400px;
            background-color:black;
            margin:20px;
            }
        </style>
    </head>
    <body>
    <div id="outer">
        <div id="inner">
            <center>
            <br/><br/><br/><br/><br/>
            <img src="images/profile.png" height="100px" width="100px" alt="path galat hai"/>
            <br/><br/>

            <form action="signup.php" method="post">
                <table>
                    <tr>
                        <td><input type="text" placeholder="Username" style="width:200px" name="username"/><br/></td>
                    </tr>

                    <tr>
                        <td><input type="email" placeholder="E-mail" style="width:200px"  name="email"/><br/></td>
                    </tr>

                    <tr>
                        <td><input type="password" placeholder="Password" style="width:200px"  name="password"/></td>
                    </tr>

                    <tr>
                        <td><input type="password" placeholder="Confirm Password" style="width:200px"  name="repassword"/><br/></td>
                    </tr>

                    <td><input type="checkbox"/><font color="white" size="1px">Remember me</font>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#"><i><font size="2px">Forgot password?</font></i></a></td>
                    <tr>
                    <td><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Signup" name="submit" style="background-color:orange;border:1px solid orange;  width:120px"/></td>
                    </tr>
                </table>
            </form>

            </center>
        </div>
    </div>
    </body>
</html>