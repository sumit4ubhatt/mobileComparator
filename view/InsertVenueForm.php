<?php
/*
 * Created on Jul 25, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once ("../database/GetYourVenueMySQLManager.php");
 require_once ("../model/Region.php");
?>

<script>
	
</script>
<h2>Insert New Venue</h2><hr><br>
<div>
<b>
<?php
	if(isset($message))
		echo $message;
?>
</b>
</div>
<p></p>
<font color="red">* Kindly use single quotes {''} in place of double quotes {""}.</font>
<p></p>
<form action="../actionController/CSMController.php" method="post">
<table>
	<tr>
		<td width="20%">Region:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<select name="regionList">
			<?php
				$databaseManager = new GetYourVenueMySQLManager();
				$regionList = $databaseManager->getRegionList();
				for($i=0;$i<count($regionList);$i++)
					echo "<option value=".$regionList[$i]->regionId.">".$regionList[$i]->regionName."</option>";
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">VenueType:</td>
		<td width="5%">&nbsp;</td>
		<td >
			<select name="venueTypeList[]" multiple="multiple">
			<?php
				$databaseManager = new GetYourVenueMySQLManager();
				$venueTypeList = $databaseManager->getVenueTypeList();
				for($i=0;$i<count($venueTypeList);$i++)
					echo "<option value=".$venueTypeList[$i]->venueTypeId.">".$venueTypeList[$i]->venueTypeName."</option>";
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Capacity:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<select name="capacityList[]" multiple="multiple">
			<?php
				$databaseManager = new GetYourVenueMySQLManager();
				$capacityList = $databaseManager->getCapacityList();
				for($i=0;$i<count($capacityList);$i++)
					echo "<option value=".$capacityList[$i]->capacityId.">".$capacityList[$i]->capacityRange."</option>";
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">PopularChoice:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<select name="popularChoiceList" >
			<?php
				$databaseManager = new GetYourVenueMySQLManager();
				$popularChoiceList = $databaseManager->getPopularChoiceList();
				for($i=0;$i<count($popularChoiceList);$i++)
					echo "<option value=".$popularChoiceList[$i]->popularChoiceId.">".$popularChoiceList[$i]->popularChoiceName."</option>";
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">VenueIdentifier:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<input type="text" name="venueIdentifier" size="60">
		</td>
	</tr>
	<tr>
		<td width="20%">VenueName:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<input type="text" name="venueName" size="50">
		</td>
	</tr>
	<tr>
		<td width="20%">VenueAddr1:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<textarea name="venueAddr1" rows="3" cols="30"></textarea>
		</td>
	</tr>
	<tr>
		<td width="20%">VenueAddr2:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<textarea name="venueAddr2" rows="3" cols="30"></textarea>
		</td>
	</tr>
	<tr>
		<td width="20%">Content:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<textarea name="content" rows="5" cols="60"></textarea>
		</td>
	</tr>
	<tr>
		<td width="20%">Iframe:</td>
		<td width="5%">&nbsp;</td>
		<td>
			<textarea name="iframe" rows="2" cols="50"></textarea>
		</td>
	</tr>
	
	<tr>
		<td width="20%">&nbsp;</td>
		<td width="5%">&nbsp;</td>
		<td>
			<input type="submit" value="Submit">
			&nbsp;
			<input type="reset" value="Reset">
		</td>
	</tr>
	<input type="hidden" name="action" value="insertVenue">
</table> 
</form>
