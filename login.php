<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","program");
	$result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='" . $_POST["testadmin"] . "' and password = '". $_POST["admin1234"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Önnek nincs jogosultsága megtekinteni a fájlt";
	} else {
		$message = "Üdvözöljük rendszerünkben";
	}
}
?>
<html>
<head>
<title>Bejelentkezés</title>
</head>
<body>
<form name="frmUser" method="post" action="">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="text" name="usernev" placeholder="Felhasználó név" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="password" name="password" placeholder="Jelszó" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Bejelentkezés" class="btnSubmit"></td>
			</tr>
		</table>
</form>
</body></html>