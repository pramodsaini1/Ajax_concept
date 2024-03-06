<?php
if(isset($_POST["username"])){
    $username=$_POST["username"];
    $conn=mysqli_connect("localhost","root","","record");
    $rs=mysqli_query($conn,"select * from username where username='$username'");
    if($r=mysqli_fetch_array($rs)){
        echo"available";
    }
    else{
        $sn=0;
        $rp=mysqli_query($conn,"select MAX(sn) from username");
        if($rd=mysqli_fetch_array($rp)){
            $sn=$rd[0];
        }
        $sn++;

        if(mysqli_query($conn,"insert into username (sn,username) values($sn,'$username')")>0){
            echo"created";
        }
    }
}
?>