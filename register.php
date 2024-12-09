<?php session_start();
if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpwd = $_POST['cpwd'];
    $role=$_POST['options'];

    if($password != $cpwd) {
        
        $_SESSION['msg'] = "Password not matched!";
      
    } else {
        
        $hashPwd = sha1($password);
        $sql = "INSERT INTO users (Name, Email, PasswordHash,UserType) VALUES('$uname', '$email','$hashPwd' ,'$role')";
        include_once "databaseconn.php";
        $res = mysqli_query($conn, $sql);
        if($res){
            $_SESSION['msg'] = "SIgned Up successfully!!";
            }

        else{$_SESSION['msg'] = "Couldn't sign up. Something went wrong.";
            header("location:signup.php");}
    }
   
}
header("location:login.php");

