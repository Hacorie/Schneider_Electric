<?php
	
	session_start();
	gateway(2);
	$title = 'Edit Tag';

?>

<?php include "include/header.php"; ?>
<div class="page-header">
	<h1>Edit a Tag</h1>
</div> 
<form name="addtag" action="addTag.php" method="post" accept-charset="utf-8">
	<div id="section_wrapper">
	<div id="section1">
	<table id="addTagDiv">
	<tr>
		<td width=10%>Tag #</td>
		<td width=8%>Rev # </td>
		<td width=13%>Date </td>
		<td>Sub-Category</td>
		<td>Complexity</td>
		<td>Lead Time</td>
	</tr>
	<tr>
		<td><input id="addTag_tagNum" type="text" name="tagNum" placeholder="XX-XXXX" required /></td>
		<td><input id="addTag_rev" type="text" name="rev" placeholder="#" required /></td>
		<td><input id="addTag_date" type="text" name="date" placeholder="##/##/####" required /></td>
		<td><input id="addTag_sCategory" type="text" name="sCategory" placeholder="Sub Category Name (pull from list of sub categories in DB)" required /></td>
		<td><input id="addTag_complexity" type="text" name="complexity" placeholder="Drop Down for Complexities" required /></td>
		<td><input id="addTag_leadTime"type="text" name="leadTime" placeholder="Lead Time" required /></td>
	</tr>
	</table>
	<table id="tagTable">
	<tr>
		<td>Tag Description:</td>
	</tr>
	<tr>
		<td ><input id="tagDescCell" type="text" name="desc" placeholder="Enter a Tag Description" required /></td>
	</tr>
	</table>
	<table id="tagTable">
	<tr>
		<td>Tag Notes:</td>
	</tr>
	<tr>
		<td ><input id="tagDescCell"type="text" name="tagNotes" placeholder="Enter Tag Notes" required /></td>
	</tr>
	</table>
	<table id="tagTable">
	<tr>
		<td>Price Note:</td>
	</tr>
	<tr>
		<td ><input id="tagDescCell" type="text" name="priceNotes" placeholder="Enter Price Notes" required /></td>
	</tr>
	</table>
	</div>

	<div id="section3">
		<strong><i>Pricing Information</i></strong>
	<table id="pricingTable">
		<tr>
			<td>Material:</td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
		<tr>
			<td>Labor:</td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
		<tr style="border-bottom: 1px solid #000;">
			<td>Engineering:</td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
		<tr>
			<td>Initial Cost:</td>
			<td><input type="text" placeholder="$SUM" /></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>TAG Member:</td>
			<td><input type="text" placeholder="Name" /></td>
		</tr>
		<tr>
			<td>Price Expires:</td>
			<td><input type="text" placeholder="##/##/####" /></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
	</table>
	<input type="checkbox" name="vehicle" value="Obsolete" />Click Box to Make TAG Permanently Obsolete<br />
	<button class="btn btn-success" id="addTag_button">Save</button><br />
	<button class="btn" id="addTag_button">Attachments</button><br />
	<button class="btn" id="addTag_backButton">Back</button><br />
	</div>	
	<div id="section2">
		<strong>Product Lines Tag May be Applied To:</strong>
	<table width=60%>
		<tr>
			<td></td>
			<td>USA$</td>
			<td>Canada$</td>
			<td>Mexico$</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="vehicle" value="HVL" />HVL</td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="vehicle" value="HVL/CC" />HVL/CC</td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="vehicle" value="Metal Clad" />Metal Clad</td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="vehicle" value="MVMCC" />MVMCC</td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
			<td><input type="text" placeholder="$X.XX" /></td>
		</tr>
	</table>
	</div>
	<div id="section4">
	<div id="addTag_checkbox"><input id="addTag_checkbox" type="checkbox" name="quote" value="Quote" />Quote </div>
	<div id="addTag_checkbox"><input id="addTag_checkbox" type="checkbox" name="fOrder" value="Factory Order" />Factory Order</div>
	<br />
	<table class="table-bordered" width=100%>
	<tr>
		<th>Tag Number</th>
		<th>FO Number Applied To</th>
		<th>Notes</th>
	</tr>
	<tr>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
		<td><input type="text" /></td>
	</tr>
	</table>
	<button class="btn" id="addTag_button">Apply FO</button><br />
	</div>
</div>
<!--- OLD BACKEND CODE
	<ul>
		<li> Description: <input type="text" name="desc" placeholder="Tag Description" required /></li>
		<li> Tag Notes: <input type="text" name="tagNotes" placeholder="Tag Notes" required /></li>
		<li> Price Notes: <input type="text" name="priceNotes" placeholder="Price Notes" required /></li>
		<li> Sub Category: <input type="text" name="sCategory" placeholder="Sub Category Name (pull from list of sub categories in DB)" required /></li>
		<li> Material Cost: <input type="text" name="mCost" placeholder="Cost of Materials" required /></li>
		<li> Labor Hours: <input type="text" name="labor" placeholder="Hours of Labor" required /></li>
		<li> Engineering Hours: <input type="text" name="engineering" placeholder="Hours of Engineering" required /></li>
		<li> Price Expiration Date: <input type="text" name="priceExpiration" placeholder="Price Expiration mm/dd/yyyy" required /></li>
		<li> Lead Time: <input type="text" name="leadTime" placeholder="Lead Time" required /></li>
		<li> Complexity: <input type="text" name="complexity" placeholder="Drop Down for Complexities" required /></li>
		<li> Attachments: will get back to this</li>
		
		<li><input type="submit" name="submit" value="Create Tag" /></li>
	</ul>
-->
</form>
<?php include "include/footer.php"; ?>