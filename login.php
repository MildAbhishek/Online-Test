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
if (isset($_POST['submit'])) {
    $email=isset($_POST['email']) ? $_POST['email'] : '' ;
    $password=isset($_POST['password']) ? $_POST['password'] : '' ;
    //echo $email;

    $sql="SELECT userid, username, email FROM users WHERE
        `email`='".$email."' AND `passwords`='".$password."'";
    
    $result=$conn->query($sql);

    if ($result->num_rows > 0) {
        //echo "hii";
        while ($row= $result->fetch_assoc()) {
            //print_r($row);
            $_SESSION['userdata']=array('userid'=>$row['userid'], 'username'=>$row['username'], 'email'=> $row['email']);
            header('Location: welcome.php');
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
            height:250px;
            width:250px;
            background-color:lightgrey;
            box-shadow:2px 2px 5px black;
            }
        </style>
    </head>
    <body>
        <center><span style="color:blue;">G</span><span style="color:red;">o</span><span style="color:yellow;">o</span><span style="color:blue;">g</span><span style="color:green;">l</span><span style="color:blue;">e</span>
        <h5>One account. All of Google.</h5>

        <h6>sign in to continue to gmail</h6>

        <div id="outer">
            <br/><br/><br/><br/><br/><br/><br/><br/>
                <form action="login.php" method="post">
                    <table>
                        <tr><td> <input type="email" name="email" placeholder="E-mail"/></td></tr>
                        <tr><td> <input type="password" name="password" placeholder="Password"/></td></tr>

                        <tr><td><input type="submit" value="Sign in" name="submit" style="width:160px; background-color:blue;color:white;border:1px solid blue;"/></td></tr>
                    </table>
                </form>
            
            <input type="checkbox"/><font size=2px>stay signed in</font>
            &nbsp; &nbsp;
            <a href="#"><font size="size:2px">Need Help?</font></a>
        </div>

            <br/>
            <a href="signup.php">Create an account</a>
            <br/>
            <font width=160px>One Google Account for everything Google</font>
        </center>
    </body>
</html>