<?php
$conn=mysqli_connect("localhost","root","","java");
$roll=$_POST["roll"];
$name=$_POST["name"];
$avg=$_POST["avg"];
$status=0;
if(mysqli_query($conn,"insert into demo (sn,name,avgr,status) values($roll,'$name',$avg,$status)")>0){
    echo"success";
}
else{
    echo"again";
}
?>