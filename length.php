<?php
$pageTitle = "Length";

require_once('inc/header.php');
require_once('inc/length_conversion.php');
?>

<form action="length.php" method="get">
	<label for="unit-to-convert-from">Please select the unit to convert from:<span style="color:red;">*</span></label>
	<br>
	<select name="unit-to-convert-from" id="unit-to-convert-from" required>
		<optgroup label="SI Unit">
			<option value="m">meter</option>
		</optgroup>
		<optgroup label="US Customary Units">
			<option value="mi">mile</option>
			<option value="yd">yard</option>
			<option value="ft">feet</option>
			<option value="in">inch</option>
		</optgroup>
        <optgroup label="Astronomical Units">
            <option value="pc">parsec</option>
            <option value="ly">lightyear</option>
            <option value="au">astronomical unit</option>
        </optgroup>
	</select>
	<br>
	<label for="length">Length:<span style="color:red;">*</span></label>
	<input type="text" id="length" name="length" placeholder="Please enter the length." required>
	<br>
	<label for="unit-to-convert-to">Please select the unit to convert to:<span style="color:red;">*</span></label>
	<br>
	<select name="unit-to-convert-to" id="unit-to-convert-to" required>
		<optgroup label="SI Unit">
			<option value="m">meter</option>
		</optgroup>
		<optgroup label="US Customary Units">
			<option value="mi">mile</option>
			<option value="yd">yard</option>
			<option value="ft">feet</option>
			<option value="in">inch</option>
		</optgroup>
        <optgroup label="Astronomical Units">
            <option value="pc">parsec</option>
            <option value="ly">lightyear</option>
            <option value="au">astronomical unit</option>
        </optgroup>
	</select>
	<br>
	<input type="submit" value="Convert">
</form>
<?php
echo "<p>You've entered: $input_length $input_unit.</p>";
echo "<p>The converted length is: $output_length $output_unit.</p>";
?>

<?php require_once('inc/footer.php'); ?>
