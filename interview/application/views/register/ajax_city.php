	<option value="">Select City</option>
<?php 
	foreach($cities as $city)
	{
?>
		<option value="<?php echo $city['city_id'] ?>" ><?php echo $city['city_name']; ?></option>
<?php
	}
?>
