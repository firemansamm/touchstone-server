<?php include("top.php"); ?>
<table class="table table-striped table-hover">
	<tr>
		<th>User</th>
		<th>Actions</th>
	<tr>
	<?php
		$res = $sql->query("SELECT username FROM admin_users");
		while(($q = $res -> fetch_assoc()) != NULL) { 
	?>
		<tr>
			<td width="70%"><?php echo $q["username"]; ?></td>
			<td width="30%"><a href="#" onclick="changePassword('<?php echo $q["username"]; ?>')"><i class="icon icon-edit"></i> Reset password...</a></td>
		</tr>
	<?php
		}
	?>
	<tr><td colspan="2" style="text-align:center"><a href="#" onclick="addUser()"><i class="icon icon-plus"></i> Add new user...</a></td></tr>

</table>
<?php include("bottom.php"); ?>