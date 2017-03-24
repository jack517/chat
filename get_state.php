<?php
include('dbconfig.php');

$query = $_REQUEST['query'];


if(isset($query))
{
		
	$stmt = "SELECT * FROM states WHERE country_id='$query'";
	$city=$connection->query($stmt);
?>
	<option selected="selected">Select City :</option>
<?php
	while($row = $city->fetch_assoc()) {
	{
?>
        	echo "<option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>";
        <?php
	}
}
}
?>
