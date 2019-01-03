<!DOCTYPE html>
<html>

<body>


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


while($row = mysql_fetch_object($result)){ ?>


	<div class="resume" id="printableArea">
		<form action="insert.php" method="post">
	<div>
		<p id="name" type="text" name="name" placeholder="Your Name" style="font-size: 40px;" style="font-family: Poppins;" style="font-weight: bolder;"><?php echo $row->name;?></p><br>
		<p type="text" name="profession" placeholder="Profession" id="pro" style="font-size: 20px;"><?php echo $row->profession;?></p><br>
		<p type="email" name="email" placeholder="Email" id="a"><?php echo $row->email;?></p><br>
		<p type="number" name="phno" placeholder="Phone Number" id="a"><?php echo $row->phno;?></p><br>
	</div><hr>
	<div>
		<table>
			<tr>
				<td id="head">
					<p><b>EDUCATION</b></p>
				</td>
				<td id="c">
					<p type="text" name="deg" placeholder="Degree" style="font-size: 20px;"><?php echo $row->deg;?></p><br>
					<p type="text" name="insti" placeholder="Institution"><?php echo $row->insti;?></p><br>
					<p type="text" name="fr_un" placeholder="From-Till"><?php echo $row->fr_un;?></p>
				
				<div id="new" style="display:none;">
					<p type="text" name="deg2" placeholder="Degree" style="font-size: 20px;"><?php echo $row->deg2;?></p><br>
					<p type="text" name="insti2" placeholder="Institution"><?php echo $row->insti2;?></p><br>
					<p type="text" name="fr_un2" placeholder="From-Till"><?php echo $row->fr_un2;?></p>
				</div>
				</td>
			</tr>
			<tr>
				<td id="head">
					<p><b>EXPERIENCE</b></p>
				</td>
				<td id="c">
					<p type="text" name="pos" placeholder="Position"><?php echo $row->pos;?></p><br>
					<p type="text" name="einsti" placeholder="Institution"><?php echo $row->einsti;?></p><br>
					<p type="text" name="efr_un" placeholder="From-Till"><?php echo $row->efr_un;?></p>

				<div id="new2" style="display:none;">
					<p type="text" name="pos2" placeholder="Position"><?php echo $row->pos2;?></p><br>
					<p type="text" name="einsti2" placeholder="Institution"><?php echo $row->einsti2;?></p><br>
					<p type="text" name="efr_un2" placeholder="From-Till"><?php echo $row->efr_un2;?></p>
				</div>
				</td>
			</tr>
			<tr>
				<td id="head">
					<p><b>PROFESSIONAL SKILLS</b></p>
				</td>
				<td id="c">
					<p type="text" name="skill1" placeholder="Skill"><?php echo $row->skill1;?></p><br>
					<p type="text" name="skill2" placeholder="Skill"><?php echo $row->skill2;?></p><br>
					<p type="text" name="skill3" placeholder="Skill"><?php echo $row->skill3;?></p>
				</td>
			</tr>
			<tr>
				<td id="head">
					<p><b>INTERPERSONAL SKILLS</b></p>
				</td>
				<td id="c">
					<p name="iskill1"><?php echo $row->iskill1;?></p><br>
					<p name="iskill2"><?php echo $row->iskill2;?></p><br>
					<p name="iskill3"><?php echo $row->iskill3;?></p>
				</td>
			</tr>
			<tr id="ach" style="display: none;">
				<td id="head">
					<p><b>ACHIEVEMENTS</b></p>
				</td>
				<td id="c">
					<p  name="achv1" ><?php echo $row->achv1;?></p><br>
					<p  name="achv2" ><?php echo $row->achv2;?></p><br>
					<p name="achv3" ><?php echo $row->achv3;?></p>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
<?php } ?>

</body>
</html>