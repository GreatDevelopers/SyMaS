
<?php	
function ok()
{
	echo "<h1>Ok Paritical Is Added</h1>";
}

$con=mysql_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpassword']);
mysql_select_db($_POST['dbname'],$con);

if(isset($_POST['s1']))
{
$qry="select * from branches where name='".$_POST['s1']."'";
$re=mysql_query($qry);
echo "<table width=100% style='background:none'>";
$i=1;
echo "<input type='hidden' name='row' value='".mysql_num_rows($re)."'>";
while($data=mysql_fetch_array($re))
{
	$f='hello'.$i;
echo "<tr><td><input type='checkbox' name='".$f."' value='".$data['subbranch']."'><td>".$data['subbranch']."</td></tr>";
$i++;
}
echo "</table>";
}
if(isset($_GET['mode']))
{
if($_GET['mode']=="level")
{
$qry2="select distinct(branch) from selectedbranch where college='".$_POST['s2']."' AND level='".$_POST['s3']."'";	
$re1=mysql_query($qry2);

echo "<select name='s4'>";

while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['branch']."</option>";	
}
echo "</select>";
}
elseif($_GET['mode']=="referbooks")
{
$qry2="select distinct(subject) from syllabi where college='".$_POST['s5']."' AND level='".$_POST['s4']."' AND branch='".$_POST['s6']."'";	
$re1=mysql_query($qry2);

echo "<select name='s7'>";

while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['subject']."</option>";	
}
echo "</select>";
}
elseif($_GET['mode']=="topic")
{
$qry2="select distinct(subject) from syllabi where college='".$_POST['s5']."' AND level='".$_POST['s4']."' AND branch='".$_POST['s6']."' AND semster='".$_POST['s7']."'";	
$re1=mysql_query($qry2);

echo "<select name='s7'>";

while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['subject']."</option>";	
}
echo "</select>";

}
elseif($_GET['mode']=="viewtopic")
{
$qry2="select distinct(subject) from syllabi where college='".$_POST['s5']."' AND level='".$_POST['s7']."' AND branch='".$_POST['s4']."' AND semster='".$_POST['s1']."'";	
$re1=mysql_query($qry2);

echo "<select name='s8'>";

while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['subject']."</option>";	
}
echo "</select>";

}
elseif($_GET['mode']=="syllabusupdate")
{
	$qry2="select distinct(batch) from syllabi where college='".$_POST['s5']."' AND branch='".$_POST['s6']."' AND level='".$_POST['s4']."' AND semster='".$_POST['s11']."'";	
$re1=mysql_query($qry2);

echo "<select name='s8'>";

while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['batch']."</option>";	
}
echo "</select>";

}
elseif($_GET['mode']=="particaly")
{
				$qry1="select * from paritical where college='".$_POST['s5']."' AND level='".$_POST['s6']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND sem='".$_POST['s9']."' AND subject='".$_POST['s10']."'";
				$res1=mysql_query($qry1);
				echo "<table>";
echo "<form action='?page=showp' method='post'>";

				echo "<tr><th>NAME</th><th>Subtopic</th></tn><th>Option</th></tr>";
				while($datf=mysql_fetch_array($res1))
				{
					echo "<tr><td><input type='radio' name='r' value='".$datf['id']."'>".$datf['pariticalname']."</td><td>".$datf['subtopic']."<td><input type='submit' name='del' value='delete'></td></tr>";
				}
				echo "</form></table>";
}
elseif($_GET['mode']=="preview")
{
$qry2="select distinct(batch) from syllabi where college='".$_POST['s5']."' AND level='".$_POST['s7']."' AND branch='".$_POST['s4']."' AND semster='".$_POST['s1']."'";	
$re1=mysql_query($qry2);

echo "<select name='s8'>";

while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['batch']."</option>";	
}
echo "</select>";
	
}
elseif($_GET['mode']=="sem")
{
$qry2="select distinct(semster) from syllabi where college='".$_POST['s5']."' AND level='".$_POST['s6']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND place='paritical'";	
$re1=mysql_query($qry2);
echo "<select name='s9' id='semo'>";
while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['semster']."</option>";	
}
echo "</select>";
}
elseif($_GET['mode']=="subject")
{
	$qry2="select distinct(subject) from syllabi where college='".$_POST['s5']."' AND level='".$_POST['s6']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$_POST['s9']."' AND place='paritical'";	
$re1=mysql_query($qry2);
echo "<select name='s10' id='sujj'>";
while($dataa=mysql_fetch_array($re1))
{
	echo "<option>".$dataa['subject']."</option>";	
}
echo "</select>";
}
elseif($_GET['mode']=="addpartical")
{
if(strlen($_POST['s8'])>1)
{
	if(strlen($_POST['s9'])>0)
	{
		if(strlen($_POST['s10'])>1)
		{
			if(strlen($_POST['t1'])>1)
			{
				$qry1="select * from paritical where college='".$_POST['s5']."' AND level='".$_POST['s6']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND sem='".$_POST['s9']."' AND subject='".$_POST['s10']."' AND pariticalname='".$_POST['t1']."'";
				$res1=mysql_query($qry1);
				if(mysql_num_rows($res1)==0)
				{
 $qry2="insert into paritical values('".$_POST['s5']."','".$_POST['s6']."','".$_POST['s4']."','".$_POST['s8']."','".$_POST['s10']."','".$_POST['s9']."','".$_POST['obj']."','".$_POST['t1']."','".$_POST['t2']."','0','".$_POST['id']."','Paritical')";	
$re1=mysql_query($qry2);
ok("OK PARITICAL IS ADDED");
}else
{
		echo "<h1>This Record Is Already Added</h1>";
}
}
else
{
		echo "<h1>Please Enter The Paritical</h1>";
}
}
else
{
		echo "<h1>Please Enter The Subject</h1>";
}
}
else
{
		echo "<h1>Please Enter The Semester</h1>";
}
}
}else
{
	echo "<h1>Please Add Batch</h1>";
}

}

?>
