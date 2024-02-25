<?php
$roll=$_POST["roll"];
$conn=mysqli_connect("localhost","root","","java");
if(mysqli_query($conn,"delete  from demo where sn=$roll")>0){
    echo"success";
}
else{
    echo"again";
}
?>