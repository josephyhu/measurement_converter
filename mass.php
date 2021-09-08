<?php
$pageTitle = "Mass";

require_once('inc/header.php');
require_once('inc/mass_conversion.php');
?>

	<form action="mass.php" method="get">
		<label for="unit-to-convert-from">Please select the unit to convert from:<span style="color:red;">*</span></label>
		<br>
		<select name="unit-to-convert-from" id="unit-to-convert-from" required>
			<optgroup label="SI Units">
				<option value="kg">kilogram</option>
				<option value="Yg">yottagram</option>
				<option value="Zg">zettagram</option>
				<option value="Eg">exagram</option>
				<option value="Pg">petagram</option>
				<option value="Tm">teragram</option>
				<option value="Gg">gigagram</option>
				<option value="Mg">megagram</option>
				<option value="hg">hectogram</option>
				<option value="dag">decagram</option>
                <option value="g">gram</option>
				<option value="dg">decigram</option>
				<option value="cg">centigram</option>
				<option value="mg">milligram</option>
				<option value="μg">microgram</option>
				<option value="ng">nanomgram</option>
				<option value="pg">picogram</option>
				<option value="fg">femtogram</option>
				<option value="ag">attogram</option>
				<option value="zg">zeptogram</option>
				<option value="yg">yoctogram</option>
			</optgroup>
			<optgroup label="US Customary Units">
				<option value="t">ton</option>
				<option value="lb">pound</option>
				<option value="oz">ounce</option>
			</optgroup>
		</select>
		<br>
		<label for="measurement">Mass:<span style="color:red;">*</span></label>
		<input type="text" id="measurement" name="measurement" placeholder="Please enter the mass." required>
		<br>
		<label for="unit-to-convert-to">Please select the unit to convert to:<span style="color:red;">*</span></label>
		<br>
		<select name="unit-to-convert-to" id="unit-to-convert-to" required>
			<optgroup label="SI Units">
				<option value="kg">kilogram</option>
				<option value="Yg">yottagram</option>
				<option value="Zg">zettagram</option>
				<option value="Eg">exagram</option>
				<option value="Pg">petagram</option>
				<option value="Tg">teragram</option>
				<option value="Gg">gigagram</option>
				<option value="Mg">megagram</option>
				<option value="hg">hectogram</option>
				<option value="dag">decagram</option>
                <option value="g">gram</option>
				<option value="dg">decigram</option>
				<option value="cg">centigram</option>
				<option value="mg">milligram</option>
				<option value="μg">microgram</option>
				<option value="ng">nanomgram</option>
				<option value="pg">picogram</option>
				<option value="fg">femtogram</option>
				<option value="ag">attogram</option>
				<option value="zg">zeptogram</option>
				<option value="yg">yoctogram</option>
			</optgroup>
			<optgroup label="US Customary Units">
				<option value="t">ton</option>
				<option value="lb">pound</option>
				<option value="oz">ounce</option>
			</optgroup>
		</select>
		<br>
		<input type="submit" value="Convert">
	</form>
<?php
echo "<p>You've entered: $input_measurement $input_unit.</p>";
echo "<p>The converted mass is: $mass $output_unit.</p>";
?>

<?php require_once('inc/footer.php'); ?>