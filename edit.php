<!DOCTYPE html>
<html>
<head>
	<title>Edit your resume</title>
</head>
<body>
	<?php 
while($row = mysql_fetch_object($result)){ ?>

	<div class="container">
	<div class="resume" id="printableArea">
		<form action="update.php" method="post">
	<div>
		<input id="name" type="text" name="name" placeholder="Your Name" style="font-size: 40px;" style="font-family: Poppins;" style="font-weight: bolder;"
		<?php
			echo "value=".$row->name;
		?>><br>
		<input type="text" name="profession" placeholder="Profession" id="pro" style="font-size: 20px;"
		<?php
			echo "value=".$row->profession;
		?>
		><br>
		<input type="email" name="email" placeholder="Email" id="a" <?php
			echo "value=".$row->email;
		?>><br>
		<input type="number" name="phno" placeholder="Phone Number" id="a" <?php
			echo "value=".$row->phno;
		?>><br>
	</div><hr>
	<div>
		<table>
			<tr>
				<td id="head">
					<p><b>EDUCATION</b></p>
				</td>
				<td id="c">
					<input type="text" name="deg" placeholder="Degree" style="font-size: 20px;"<?php
			echo "value=".$row->deg;
		?>><br>
					<input type="text" name="insti" placeholder="Institution" <?php
			echo "value=".$row->insti;
		?>><br>
					<input type="text" name="fr_un" placeholder="From-Till" <?php
			echo "value=".$row->fr_un;
		?>>
				
				<div id="new" 
				<?php
				if ($row->deg2=='' || $row->insti2=='' || $row->fr_un2=='' ) {
					echo "style=display:none";
				}
				else
					echo "style=display:block";
				?>>
					<input type="text" name="deg2" placeholder="Degree" style="font-size: 20px;" <?php
			echo "value=".$row->deg2;
		?>><br>
					<input type="text" name="insti2" placeholder="Institution" <?php
			echo "value=".$row->insti2;
		?>><br>
					<input type="text" name="fr_un2" placeholder="From-Till" <?php
			echo "value=".$row->fr_un2;
		?>>
				</div>
				</td>
			</tr>
			<tr>
				<td id="head">
					<p><b>EXPERIENCE</b></p>
				</td>
				<td id="c">
					<input type="text" name="pos" placeholder="Position" <?php
			echo "value=".$row->pos;
		?>><br>
					<input type="text" name="einsti" placeholder="Institution"  <?php
			echo "value=".$row->einsti;
		?>><br>
					<input type="text" name="efr_un" placeholder="From-Till"  <?php
			echo "value=".$row->efr_un;
		?>>

				<div id="new2" 
				<?php
				if ($row->pos2=='' || $row->einsti2=='' || $row->efr_un2=='' ) {
					echo "style=display:none";
				}
				else
					echo "style=display:block";
				?>>
					<input type="text" name="pos2" placeholder="Position"  <?php
			echo "value=".$row->pos2;
		?>><br>
					<input type="text" name="einsti2" placeholder="Institution"  <?php
			echo "value=".$row->einsti2;
		?>><br>
					<input type="text" name="efr_un2" placeholder="From-Till"  <?php
			echo "value=".$row->efr_un2;
		?>>
				</div>
				</td>
			</tr>
			<tr>
				<td id="head">
					<p><b>PROFESSIONAL SKILLS</b></p>
				</td>
				<td id="c">
					<input type="text" name="skill1" placeholder="Skill"  <?php
			echo "value=".$row->skill1;
		?>><br>
					<input type="text" name="skill2" placeholder="Skill"  <?php
			echo "value=".$row->skill2;
		?>><br>
					<input type="text" name="skill3" placeholder="Skill"  <?php
			echo "value=".$row->skill3;
		?>>
				</td>
			</tr>
			<tr>
				<td id="head">
					<p><b>INTERPERSONAL SKILLS</b></p>
				</td>
				<td id="c">
					<input type="text" name="iskill1" placeholder="Skill"  <?php
			echo "value=".$row->iskill1;
		?>><br>
					<input type="text" name="iskill2" placeholder="Skill"  <?php
			echo "value=".$row->iskill2;
		?>><br>
					<input type="text" name="iskill3" placeholder="Skill"  <?php
			echo "value=".$row->iskill3;
		?>>
				</td>
			</tr>
			<tr id="ach" 
			<?php
				if ($row->achv1=='' && $row->achv2=='' && $row->achv3=='') {
					echo "style=display:none";
				}
				else
					echo "style=display:block";
				?>>
				<td id="head">
					<p><b>ACHIEVEMENTS</b></p>
				</td>
				<td id="c">
					<input type="text" name="achv1" placeholder="Skill"  <?php
			echo "value=".$row->achv1;
		?>><br>
					<input type="text" name="achv2" placeholder="Skill"  <?php
			echo "value=".$row->achv2;
		?>><br>
					<input type="text" name="achv3" placeholder="Skill"  <?php
			echo "value=".$row->achv3;
		?>>
				</td>
			</tr>
		</table>
		</form><input type="button" name="sub_btn">
	</div>
</div>
</body>
</html>
?>