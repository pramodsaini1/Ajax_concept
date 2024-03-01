<?php
$conn=mysqli_connect("localhost","root","","java");
$id=0;
if (isset($_POST["page_no"])) {
    $id=intval($_POST["page_no"]);
}
$start=$id*3;
$re=mysqli_query($conn,"select * from demo");
$count=0;
if($nn=mysqli_fetch_array($re)){
    $count=$nn[0];
}
$page=ceil($count/3);
$rs=mysqli_query($conn,"select * from demo LIMIT $start,3");
echo"<table border=1 width=50%>";
while($r=mysqli_fetch_array($rs)){
    ?>
    <tr>
        <td><?php echo $r[0]?></td><td><?php echo $r[1]?></td><td><?php echo $r[2]?></td>
    </tr>
    <?php
}
echo"</table>";
 
 if($id>0){
    ?>
    <a href="page.php"><button>pre</button></a>
    <?php
 }
 if($id!=$page-1){
    ?>
    <a href="page.php"><button>next</button></a>
    <?php
 }
?>