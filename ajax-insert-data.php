<?php
$conn=mysqli_connect("localhost","root","","java");
$roll=$_POST["roll"];
$name=$_POST["name"];
$avg=$_POST["avg"];
if(mysqli_query($conn,"insert into demo (sn,name,avgr) values($roll,'$name',$avg)")>0){
    echo"success";
}
else{
    echo"again";
}
?>