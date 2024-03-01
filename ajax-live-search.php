<?php
if(isset($_POST["search"])){
    $search=$_POST["search"];
    $conn=mysqli_connect("localhost","root","","java");
    $status=0;
    $rs=mysqli_query($conn,"select * from demo where name LIKE '%$search%' AND status=$status");
    $flag=0;
    echo"<table border='1' width='100%'> <tr><th width=100px>roll</th><th>Name</th><th>Avg</th><th width=100px>Edit</th><th width=100px>Delete</th></tr>";
    while($r=mysqli_fetch_array($rs)){
        $flag++;
        ?>
         <tr id="r<?php echo $r[0]?>">
            <td><?php echo $r[0]?></td>
            <td id="de<?php echo $r[0]?>"><?php echo $r[1]?></td>
            <td id="df<?php echo $r[0]?>"><?php echo $r[2]?></td>
            <td><i class="fa fa-edit" style="cursor:pointer" rel="<?php echo $r[0]?>" ></i></td>
            <td><i style="cursor:pointer" rel="<?php echo $r[0]?>"  class="fa fa-trash"></i></td>
        </tr>
        <tr>
            <?php
               
            ?>
        </tr>
        <?php
    }
    if($flag==0){
        ?>
         <tr><td>Record Not Found</td></tr>
        <?php
    }
}
?>