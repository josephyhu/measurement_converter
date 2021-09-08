<?php
$pageTitle = "Temperature";

require_once('inc/header.php');
require_once('inc/temperature_conversion.php');
?>

<form action="temperature.php" method="get">
	<label for="unit-to-convert-from">Please select the unit to convert from:<span style="color:red;">*</span></label>
	<br>
	<select name="unit-to-convert-from" id="unit-to-convert-from" required>
		<optgroup label="SI Units">
			<option value="K">kelvin</option>
			<option value="YK">yottakelvin</option>
			<option value="ZK">zettakelvin</option>
			<option value="EK">exakelvin</option>
			<option value="PK">petakelvin</option>
			<option value="TK">terakelvin</option>
			<option value="GK">gigakelvin</option>
			<option value="MK">megakelvin</option>
			<option value="kK">kilokelvin</option>
			<option value="hK">hectokelvin</option>
			<option value="daK">decakelvin</option>
			<option value="dK">decikelvin</option>
			<option value="cK">centikelvin</option>
			<option value="mK">millikelvin</option>
			<option value="μK">microkelvin</option>
			<option value="nK">nanokelvin</option>
			<option value="pK">picokelvin</option>
			<option value="fK">femtokelvin</option>
			<option value="aK">attokelvin</option>
			<option value="zK">zeptokelvin</option>
			<option value="yK">yoctokelvin</option>
		</optgroup>
        <optgroup label="Other Units">
            <option value="°C">degrees Celsius</option>
            <option value="°F">degrees Fahrenheit</option>
        </optgroup>
	</select>
	<br>
	<label for="measurement">Length:<span style="color:red;">*</span></label>
	<input type="text" id="measurement" name="measurement" placeholder="Please enter the temperature." required>
	<br>
	<label for="unit-to-convert-to">Please select the unit to convert to:<span style="color:red;">*</span></label>
	<br>
	<select name="unit-to-convert-to" id="unit-to-convert-to" required>
		<optgroup label="SI Units">
			<option value="K">kelvin</option>
			<option value="YK">yottakelvin</option>
			<option value="ZK">zettakelvin</option>
			<option value="EK">exakelvin</option>
			<option value="PK">petakelvin</option>
			<option value="TK">terakelvin</option>
			<option value="GK">gigakelvin</option>
			<option value="MK">megakelvin</option>
			<option value="kK">kilokelvin</option>
			<option value="hK">hectokelvin</option>
			<option value="daK">decakelvin</option>
			<option value="dK">decikelvin</option>
			<option value="cK">centikelvin</option>
			<option value="mK">millikelvin</option>
			<option value="μK">microkelvin</option>
			<option value="nK">nanokelvin</option>
			<option value="pK">picokelvin</option>
			<option value="fK">femtokelvin</option>
			<option value="aK">attokelvin</option>
			<option value="zK">zeptokelvin</option>
			<option value="yK">yoctokelvin</option>
		</optgroup>
		<optgroup label="Other Units">
			<option value="°C">degrees Celsius</option>
			<option value="°F">degrees Fahrenheit</option>
		</optgroup>
	</select>
	<br>
	<input type="submit" value="Convert">
</form>
<?php
echo "<p>You've entered: $input_measurement $input_unit.</p>";
echo "<p>The converted temperature is: $temperature $output_unit.</p>";
?>

<?php require_once('inc/footer.php'); ?>
