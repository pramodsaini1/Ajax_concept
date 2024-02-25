<?php
$conn=mysqli_connect("localhost","root","","java");
$rs=mysqli_query($conn,"Select * from demo");
echo"<table border='1' width='100%'> <tr><th width=100px>roll</th><th>Name</th><th>Avg</th><th width=100px>Delete</tr>";
while($r=mysqli_fetch_array($rs)){
      ?>
        <tr id="r<?php echo $r[0]?>">
            <td><?php echo $r[0]?></td>
            <td><?php echo $r[1]?></td>
            <td><?php echo $r[2]?></td>
            <td><button style="cursor:pointer" value="<?php echo $r[0]?>" class="delete-btn">Delete</button></td>
        </tr>

     <?php
}
echo"</table>";
?>