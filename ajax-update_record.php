<?php
$conn=mysqli_connect("localhost","root","","java");
$roll=$_POST["roll"];
$name=$_POST["name"];
$avg=$_POST["avg"];
if(mysqli_query($conn,"update demo set name='$name',avgr='$avg' where sn=$roll")>0){
     echo"success";
}
else{
    echo"again";
}
?>