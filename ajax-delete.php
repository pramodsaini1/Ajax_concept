<?php
$roll=$_POST["roll"];
$conn=mysqli_connect("localhost","root","","java");
$status=1;
if(mysqli_query($conn,"update demo set status=$status where sn=$roll")>0){
    echo"success";
}
else{
    echo"again";
}
?>