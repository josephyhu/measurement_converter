<?php
$pageTitle = "Length";

require_once('inc/header.php');
require_once('inc/conversion.php');
?>

<form action="length.php" method="get">
	<label for="unit-to-convert-from">Please select the unit to convert from:<span style="color:red;">*</span></label>
	<br>
	<select name="unit-to-convert-from" id="unit-to-convert-from" required>
		<optgroup label="SI Units">
			<option value="m">meter</option>
			<option value="Ym">yottameter</option>
			<option value="Zm">zettameter</option>
			<option value="Em">exameter</option>
			<option value="Pm">petameter</option>
			<option value="Tm">terameter</option>
			<option value="Gm">gigameter</option>
			<option value="Mm">megameter</option>
			<option value="km">kilometer</option>
			<option value="hm">hectometer</option>
			<option value="dam">decameter</option>
			<option value="dm">decimeter</option>
			<option value="cm">centimeter</option>
			<option value="mm">millimeter</option>
			<option value="um">micrometer</option>
			<option value="nm">nanommeter</option>
			<option value="pm">picometer</option>
			<option value="fm">femtometer</option>
			<option value="am">attometer</option>
			<option value="zm">zeptometer</option>
			<option value="ym">yoctometer</option>
		</optgroup>
		<optgroup label="US Customary Units">
			<option value="mi">mile</option>
			<option value="yd">yard</option>
			<option value="ft">feet</option>
			<option value="in">inch</option>
		</optgroup>
	</select>
	<br>
	<label for="convert-from">Convert from:<span style="color:red;">*</span></label>
	<input type="text" id="convert-from" name="convert-from" placeholder="Please enter the measurement." required>
	<br>
	<label for="unit-to-convert-to">Please select the unit to convert to:<span style="color:red;">*</span></label>
	<br>
	<select name="unit-to-convert-to" id="unit-to-convert-to" required>
		<optgroup label="SI Units">
			<option value="m">meter</option>
			<option value="Ym">yottameter</option>
			<option value="Zm">zettameter</option>
			<option value="Em">exameter</option>
			<option value="Pm">petameter</option>
			<option value="Tm">terameter</option>
			<option value="Gm">gigameter</option>
			<option value="Mm">megameter</option>
			<option value="km">kilometer</option>
			<option value="hm">hectometer</option>
			<option value="dam">decameter</option>
			<option value="dm">decimeter</option>
			<option value="cm">centimeter</option>
			<option value="mm">millimeter</option>
			<option value="μm">micrometer</option>
			<option value="nm">nanommeter</option>
			<option value="pm">picometer</option>
			<option value="fm">femtometer</option>
			<option value="am">attometer</option>
			<option value="zm">zeptometer</option>
			<option value="ym">yoctometer</option>
		</optgroup>
		<optgroup label="US Customary Units">
			<option value="mi">mile</option>
			<option value="yd">yard</option>
			<option value="ft">feet</option>
			<option value="in">inch</option>
		</optgroup>
	</select>
	<br>
	<input type="submit" value="Convert">
</form>
<?php
echo "<p>You've entered: $input_measurement " . "$input_unit.</p>";
echo "<p>The converted length is: $length " . "$output_unit.</p>";
?>

<?php require_once('inc/footer.php'); ?>
