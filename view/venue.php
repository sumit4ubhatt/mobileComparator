<?php

/*
 * Created on Jul 21, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<script>

	function submitForm(){
		document.forms["logoutForm"].submit();
	}
	
</script>


		<span style="text-align:left">
		 <h2>Venue List</h2>
		</span>
		<hr>
	<p></p>
	<a href="../view/InsertVenueForm.php" target="_blank">Insert New Venue</a>&nbsp;
	<form method="post" action="../actionController/CSMController.php" name="logoutForm">
		<a href="javascript:submitForm()" >logout</a>
		<input type="hidden" name="action" value="logout" />
	</form>
	<br><br>
	<div>
		<b>
		<?php

if (isset ($message))
	echo $message;
?>
		</b>
	</div>
	<p></p>
	<table border="1">
		<tr>
			<td  width="5%"><b>VenueId</b></td>
			<td  width="35%"><b>VenueName</b></td>
			<td  width="50%"><b>VenueAddr.</b></td>
			<td  width="10%"><b>Action</b></td>
		</tr>
	<?php

for ($i = 0; $i < count($venueList); $i++) {
?>		

			<tr>
			<?php

	echo "<td width='5%' >" . $venueList[$i]->venueId . "</td>";
	echo "<td width='35%' >" . $venueList[$i]->venueName . "</td>";
	echo "<td width='50%' >" . $venueList[$i]->venueAddr1 . "," . $venueList[$i]->venueAddr2 . "</td>";
?>	
				<td width="10%" style="border:1px solid rgb(0, 0, 0);">
					<a href="../actionController/CSMController.php?action=loadEditForm&id=<?php echo $venueList[$i]->venueId ?>" target="_blank">edit</a> | 
					<a href="../actionController/CSMController.php?action=deleteVenue
					&id=<?php echo $venueList[$i]->venueId ?>
					&region=<?php echo $_POST['region'] ?>
					&category=<?php echo $_POST['category'] ?>
					&capacity=0" >
					delete</a> 
				</td>	
			</tr>
	<?php }	?>	
	</table>