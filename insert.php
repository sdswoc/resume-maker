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
	$sql = "INSERT INTO demo (name, profession, email, phno, deg, insti, fr_un, deg2, insti2, fr_un2, pos, einsti, efr_un, pos2, einsti2, efr_un2, skill1, skill2, skill3, iskill1, iskill2, iskill3, achv1, achv2, achv3)
			VALUES ('$_POST[name]', '$_POST[profession]', '$_POST[email]', '$_POST[phno]', '$_POST[deg]', '$_POST[insti]', '$_POST[fr_un]', '$_POST[deg2]', '$_POST[insti2]', '$_POST[fr_un2]',  '$_POST[pos]', '$_POST[einsti]', '$_POST[efr_un]', '$_POST[pos2]', '$_POST[einsti2]', '$_POST[efr_un2]', '$_POST[skill1]', '$_POST[skill2]', '$_POST[skill3]', '$_POST[iskill1]', '$_POST[iskill2]', '$_POST[iskill3]', '$_POST[achv1]', '$_POST[achv2]', '$_POST[achv3]')";

	$result = mysql_query($sql);

