<?php
error_reporting(0);
include 'bin/config.php';

$rec = $_REQUEST['val'];
 
//get table contents
if($_REQUEST['val'])
{
	$sql = "select * from acw_comments where text like '%$rec%'";
}
else
{
	$sql = "select * from acw_comments ";
}
 
 $select=mysqli_query($conn,$sql);

$total =  mysqli_num_rows($select);
?>
<ul class="list-group">
<?php
$rs_result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($rs_result))
				{
?>
  
    <li class="list-group-item"><?php echo $row['comment']; ?></li>


  <?php
}
  ?>
    </ul>