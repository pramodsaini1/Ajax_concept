<?php
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $conn=mysqli_connect("localhost","root","","matrimonial");
    $rs=mysqli_query($conn,"select * from register where email='$email'");
    if($r=mysqli_fetch_array($rs)){
        if($r["password"]==$password){
            setcookie("login",$email,time()+3600);
            $_SESSION["user"]=$email;
            echo"cookie created";
        }
        else{
            echo"invalid password";
        }
    }
    else{
        echo"invalid";
    }
}
?>