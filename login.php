<?php
$str1 = "<h2>Megtekinthető fájlok:</h2>
<span class='public'><a href='public.php'>Publikus fájlok</a></span>";
$str2="<br><span class='protected'><a href='protected.php'>Privát fájlok</a></span>";
$countdown="<br><br><br><h3> A rendszer automatikusan kilépteti <span id='countdown'>60 </span> másodperc múlva.</h3>
<script type='text/javascript'>
    var timeleft = 60;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById('countdown').textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>";

echo $str1;

$count=0;
$message=" ";
if(isset($_POST['submit'])){
	$connect = mysqli_connect("localhost","root","","program");
	$result = mysqli_query($connect,"SELECT * FROM users WHERE usernev='" . $_POST["usernev"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Önnek nincs jogosultsága megtekinteni a Privát fájlokat kérem jelentkezzen be!";
		
	} 
	if($count==1) {
		$message = "Üdvözöljük rendszerünkben";
		echo $str2;
		echo $countdown;

	}
	
}


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css" />
<title>Bejelentkezés</title>
<meta http-equiv="refresh" content="60"> 
</head>
<body>

<form name="frmUser" method="post" action="">
	<div class="message"><?php if($message!=" ") { echo $message; } ?></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Kérem adja meg a felhasználónevét és jelszavát</td>
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