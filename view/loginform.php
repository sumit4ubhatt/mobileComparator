<?php
/*
 * Created on Aug 31, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<script>
	function clearField(form){
		form.value='';
	}
</script>
<h3>Login<h3>
<hr>
<br/>
<form action='../actionController/CSMController.php' method='post'>
<table>
	<tr>
		<td>
			Login:
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<input type="text" class="text" name="userId" value="enter user id" onclick="clearField(this);"/>
		</td>
	</tr>
	<tr>
		<td>
			Password:
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<input type="password" class="text" name="password" />
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<input type="submit" class="text" name="name" value="submit" />
			&nbsp;
			<input type="reset" class="text" name="name" value="reset" />
		</td>
	</tr>
</table>
<input type="hidden" name="region" value="delhi-ncr">
<input type="hidden" name="category" value="wedding-venues">
<input type="hidden" name="capacity" value="0">
<input type="hidden" name="action" value="userAuthetication" />
</form>
<div>
<?php 
	if(isset($message))
		echo $message; 
?>
</div>
