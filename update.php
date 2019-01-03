<?php

$connection = mysql_connect("localhost","root","");
$db = mysql_select_db('demo', $connection);
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$profession = $_POST['profession'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];
	$deg = $_POST['deg'];
	$insti = $_POST['insti'];
	$fr_un = $_POST['fr_un'];
	$deg2 = $_POST['deg2'];
	$insti2 = $_POST['insti2'];
	$fr_un2 = $_POST['fr_un2'];
	$pos = $_POST['pos'];
	$einsti = $_POST['einsti'];
	$efr_un = $_POST['efr_un'];
	$pos2 = $_POST['pos2'];
	$einsti2 = $_POST['einsti2'];
	$efr_un2 = $_POST['efr_un2'];
	$skill1 = $_POST['skill1'];
	$skill2 = $_POST['skill2'];
	$skill3 = $_POST['skill3'];
	$iskill1 = $_POST['iskill1'];
	$iskill2 = $_POST['iskill2'];
	$iskill3 = $_POST['iskill3'];
	$achv1 = $_POST['achv1'];
	$achv2 = $_POST['achv2'];
	$achv3 = $_POST['achv3'];
	$sql = "UPDATE demo SET name = $name,
	profession = $profession,
	email = $email,
	phno = $phno,
	deg = $deg,
	insti = $insti,
	fr_un = $fr_un,
	deg2 = $deg2,
	insti2 = $insti2,
	fr_un2 = $fr_un2,
	pos = $pos,
	einsti = $einsti,
	efr_un = $efr_un,
	pos2 = $pos2,
	einsti2 = $einsti2,
	efr_un2 = $efr_un2,
	skill1 = $skill1,
	skill2 = $skill2,
	skill3 = $skill3,
	iskill1 = $iskill1,
	iskill2 = $iskill2,
	iskill3 = $iskill3,
	achv1 = $achv1,
	achv2 = $achv2,
	achv3 = $achv3,
	WHERE url = $url";

	$result = mysql_query($sql);
	?>
