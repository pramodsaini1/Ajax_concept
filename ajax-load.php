<?php
$conn=mysqli_connect("localhost","root","","java");
$rs=mysqli_query($conn,"Select * from demo");
echo"<table border='1' width='100%'> <tr><th>roll</th><th>Name</th><th>Avg</th></tr>";
while($r=mysqli_fetch_array($rs)){
      ?>
        <tr>
            <td><?php echo $r[0]?></td>
            <td><?php echo $r[1]?></td>
            <td><?php echo $r[2]?></td>
        </tr>

     <?php
}
echo"</table>";
?>