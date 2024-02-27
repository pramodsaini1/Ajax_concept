<?php
$conn=mysqli_connect("localhost","root","","java");
$status=0;
$rs=mysqli_query($conn,"Select * from demo where status=$status");
echo"<table border='1' width='100%'> <tr><th width=100px>roll</th><th>Name</th><th>Avg</th><th width=100px>Edit</th><th width=100px>Delete</th></tr>";
while($r=mysqli_fetch_array($rs)){
      ?>
        <tr id="r<?php echo $r[0]?>">
            <td><?php echo $r[0]?></td>
            <td id="de<?php echo $r[0]?>"><?php echo $r[1]?></td>
            <td id="df<?php echo $r[0]?>"><?php echo $r[2]?></td>
            <td><i class="fa fa-edit" style="cursor:pointer" rel="<?php echo $r[0]?>" ></i></td>
            <td><i style="cursor:pointer" rel="<?php echo $r[0]?>"  class="fa fa-trash"></i></td>
        </tr>

     <?php
}
echo"</table>";
?>