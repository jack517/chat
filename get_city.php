<?php
include('dbconfig.php');

$query = $_REQUEST['query'];

echo $query;
if(isset($query))
{
		
	$stmt = "SELECT * FROM cities WHERE state_id='$query'";
	$hospital=$connection->query($stmt);
?>
	<option selected="selected">Select Hospital :</option>
<?php
	while($row = $hospital->fetch_assoc()) {
	{
?>
        	echo "<option value="<?php echo $row['hospital_name']; ?>"><?php echo $row['hospital_name']; ?></option>";
        <?php
	}
}
}
?>


