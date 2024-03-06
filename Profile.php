<?php
session_start();
if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
    $email=$_COOKIE["login"];
    $conn=mysqli_connect("localhost","root","","matrimonial");
    $rs=mysqli_query($conn,"select * from register where email='$email'");
    echo"<table class='table table-borderless'>";
    if($r=mysqli_fetch_array($rs)){
        ?>
         <tr>
            <td>First Name:<td><td><?php echo $r["fname"]?></td></tr>
            <tr><td>Last Name:<td><td><?php echo $r["lname"]?></td></tr>
           <tr> <td>Email:<td><td><?php echo $r["email"]?></td></tr>
           <tr> <td>Gender:<td><td><?php echo $r["gender"]?></td></tr>
           <tr> <td>Caste:<td><td><?php echo $r["caste"]?></td></tr>
            <tr><td>Religion:<td><td><?php echo $r["religion"]?></td></tr>
           <tr> <td>State:<td><td><?php echo $r["state"]?></td></tr>
            <tr><td>Country:<td><td><?php echo $r["country"]?></td></tr>
            <tr><td>Dob:<td><td><?php echo $r["dob"]?></td>
         </tr>
          
        <?php
    }
    echo"</table>";
}
?>