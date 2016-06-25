<?php
echo "<script type='text/javascript' src='jquery.js'></script>
</script>";
echo "<script type='text/javascript'>
$(document).ready(function(){
	$('#customiz').hide();
	$('#cust').click(function(){
		$('#customiz').slideToggle(1000);
		})
		$('#bgapply').click(function(){
		var color=$('#bgcolor').val();
			$('#pr').css({
				'background':color,
				})
			})
			$('#colorap').click(function(){
				var headcolor=$('#colorh').val();
				$('#heading').css({
					'color':headcolor,
					})
				})
				$('#fsize').click(function(){
					var fs=$('#fsize').val();
					$('#heading').css({
						'font-size':fs,
						})
					})
									$('#ffamily').click(function(){
					var fm=$('#ffamily').val();
					$('#heading').css({
						'font-family':fm,
						})
					})
					
									$('#colordap').click(function(){
					var cold=$('#colord').val();
					$('#title,#titlse').css({
						'color':cold,
						})
					})
					$('#dfsize').click(function(){
					var dfszie=$('#dfsize').val();
					$('#title,#titlse').css({
						'font-size':dfszie,
						})
					})
										$('#dfamily').click(function(){
					var dfamily=$('#dfamily').val();
					$('#title,#titlse').css({
						'font-family':dfamily,
						})
					})
										$('#colorbu').click(function(){
					var colorbu=$('#colors').val();
					$('#semster').css({
						'color':colorbu,
						})
					})
								$('#sfsize').click(function(){
					var sfzie=$('#sfsize').val();
					$('#semster').css({
						'font-size':sfzie,
						})
					})
													$('#sfamily').click(function(){
					var sfam=$('#sfamily').val();
					$('#semster').css({
						'font-family':sfam,
						})
					})
													$('#colorcdapp').click(function(){
					var colorcd=$('#colorcd').val();
					$('#cdt').css({
						'background':colorcd,
						})
					})
										$('#colorcbdapp').click(function(){
					var colorcbdapp=$('#colorcbd').val();
					$('#cdt').css({
						'border-color':colorcbdapp,
						})
					})
							$('#colorcfdadd').click(function(){
					var colorcfdadd=$('#colorcfd').val();
					$('#cdt').css({
						'color':colorcfdadd,
						})
					})
											$('#cdsize').click(function(){
					var cdsize=$('#cdsize').val();
					$('#cdt').css({
						'border-width':cdsize,
						})
					})
											$('#colorssdapp').click(function(){
					var colorssd=$('#colorssd').val();
					$('#subcode').css({
						'color':colorssd,
						})
											})
		$('#ssdsize').click(function(){
					var ssdsize=$('#ssdsize').val();
					$('#subcode').css({
						'font-size':ssdsize,
						})
					})
$('#ssdfamily').click(function(){
					var ssdfamily=$('#ssdfamily').val();
					$('#subcode').css({
						'font-size':ssdfamily,
						})
					})
					
					colorcpapp
$('#colorcpapp').click(function(){
					var colorcpapp=$('#colorcp').val();
					$('h2#chapter').css({
						'color':colorcpapp,
						})
					})
					$('#cpsize').click(function(){
					var cpsize=$('#cpsize').val();
					$('h2#chapter').css({
						'font-size':cpsize,
						})
					})
										$('#cpfamily').click(function(){
					var cpfamily=$('#cpfamily').val();
					$('h2#chapter').css({
						'font-family':cpfamily,
						})
					})
										$('#colortapp').click(function(){
					var colort=$('#colort').val();
					$('p#toppic').css({
						'color':colort,
						})
					})
					$('#tsize').click(function(){
					var tsize=$('#tsize').val();
					$('p#toppic').css({
						'font-size':tsize,
						})
					})
					$('#tfamily').click(function(){
					var tfamily=$('#tfamily').val();
					$('p#toppic').css({
						'font-family':tfamily,
						})
					})
										$('#colornmapp').click(function(){
					var colornm=$('#colornm').val();
					$('p#bkname').css({
						'color':colornm,
						})
					})
					$('#print').click(function(){
						$('#cust,#print,#customiz').hide();
						window.print();
						})

	});
</script>";
echo "<input type='button' value='customize' id='cust'><input type='button' value='print' id='print'>";
echo "<div id='customiz' style='width:100%;background:#D8E4D7'><center><h3>Pages</h3></center>
<table width='100%	'>
<tr>
<td>Background color</td><td><input type='color' id='bgcolor'>Apply<input type='radio' id='bgapply'></td>
</tr>
<tr><th>Header</th></tr>
<tr><td>Tittle color</td><td><input type='color' id='colorh'><input type='submit' id='colorap' value='apply'></td></tr>
<tr><td>Header Font</td><td><select name='fsize' id='fsize'><option>6</option><option>7</option><option>8</option>
<option>9</option><option>10</option><option>10.5</option><option>12</option>
<option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>22</option><option>24</option>
<option>26</option><option>28</option><option>32</option><option>36</option>
<option>40</option><option>44</option><option>48</option><option>54</option><option>60</option>
<option>68</option><option>76</option><option>84</option>
<option>96</option></select></td></tr>
<tr><td>Font Family</td><td><select id='ffamily'><option>Bitstream Charter</option><option>Byron Medium</option>
<option>Century Schoolbook L</option><option>DejaVu Sans</option><option>DejaVu Serif</option><option>FreeSans</option>
<option>Liberation Mono</option><option>Liberation Sans</option><option>Liberation Sans Narrow</option>
<option>Liberation Serif</option><option>Times New Roman</option>
</select></td></tr>
<tr><th>Description</th></tr>
<tr><td>Tittle color</td><td><input type='color' id='colord'><input type='button' id='colordap' value='apply'></td></tr>
<tr><td>Font Size</td><td><select name='fsize' id='dfsize'><option>6</option><option>7</option><option>8</option>
<option>9</option><option>10</option><option>10.5</option><option>12</option>
<option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>22</option><option>24</option>
<option>26</option><option>28</option><option>32</option><option>36</option>
<option>40</option><option>44</option><option>48</option><option>54</option><option>60</option>
<option>68</option><option>76</option><option>84</option>
<option>96</option></select></td></tr>
<tr><td>Font Family</td><td><select id='dfamily'><option>Bitstream Charter</option><option>Byron Medium</option>
<option>Century Schoolbook L</option><option>DejaVu Sans</option><option>DejaVu Serif</option><option>FreeSans</option>
<option>Liberation Mono</option><option>Liberation Sans</option><option>Liberation Sans Narrow</option>
<option>Liberation Serif</option><option>Times New Roman</option>
</select></td></tr>
<tr><th>Semester</th></tr>
<tr><td>Tittle color</td><td><input type='color' id='colors'><input type='button' id='colorbu' value='apply'></td></tr>
<tr><td>Font Size</td><td><select name='fsize' id='sfsize'><option>6</option><option>7</option><option>8</option>
<option>9</option><option>10</option><option>10.5</option><option>12</option>
<option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>22</option><option>24</option>
<option>26</option><option>28</option><option>32</option><option>36</option>
<option>40</option><option>44</option><option>48</option><option>54</option><option>60</option>
<option>68</option><option>76</option><option>84</option>
<option>96</option></select></td></tr>
<tr><td>Font Family</td><td><select id='sfamily'><option>Bitstream Charter</option><option>Byron Medium</option>
<option>Century Schoolbook L</option><option>DejaVu Sans</option><option>DejaVu Serif</option><option>FreeSans</option>
<option>Liberation Mono</option><option>Liberation Sans</option><option>Liberation Sans Narrow</option>
<option>Liberation Serif</option><option>Times New Roman</option>
</select></td></tr>
<tr><th>Course detail table</th></tr>
<tr><td>Table color</td><td><input type='color' id='colorcd'><input type='button' id='colorcdapp' value='apply'></td></tr>
<tr><td>border color</td><td><input type='color' id='colorcbd'><input type='button' id='colorcbdapp' value='apply'></td></tr>
<tr><td>Font color</td><td><input type='color' id='colorcfd'><input type='button' id='colorcfdadd' value='apply'></td></tr>
<tr><td>Border</td><td><select name='fsize' id='cdsize'><option>1</option><option>2</option><option>3</option>
<option>4</option><option>5</option><option>6</option><option>7</option>
<option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option>
<option>14</option><option>15</option><option>16</option><option>17</option>
<option>18</option><option>19</option><option>20</option><option>21</option>
</select></td></tr>
<tr><th>Subject & Subject code</th></tr>
<tr><td>Tittle color</td><td><input type='color' id='colorssd'><input type='button' id='colorssdapp' value='apply'></td></tr>
<tr><td>Font Size</td><td><select name='fsize' id='ssdsize'><option>6</option><option>7</option><option>8</option>
<option>9</option><option>10</option><option>10.5</option><option>12</option>
<option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>22</option><option>24</option>
<option>26</option><option>28</option><option>32</option><option>36</option>
<option>40</option><option>44</option><option>48</option><option>54</option><option>60</option>
<option>68</option><option>76</option><option>84</option>
<option>96</option></select></td></tr>
<tr><td>Font Family</td><td><select id='ssdfamily'><option>Bitstream Charter</option><option>Byron Medium</option>
<option>Century Schoolbook L</option><option>DejaVu Sans</option><option>DejaVu Serif</option><option>FreeSans</option>
<option>Liberation Mono</option><option>Liberation Sans</option><option>Liberation Sans Narrow</option>
<option>Liberation Serif</option><option>Times New Roman</option>
</select></td></tr>
<tr><th>Chapter</th></tr>
<tr><td>Tittle color</td><td><input type='color' id='colorcp'><input type='button' id='colorcpapp' value='apply'></td></tr>
<tr><td>Font Size</td><td><select name='cpsize' id='cpsize'><option>6</option><option>7</option><option>8</option>
<option>9</option><option>10</option><option>10.5</option><option>12</option>
<option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>22</option><option>24</option>
<option>26</option><option>28</option><option>32</option><option>36</option>
<option>40</option><option>44</option><option>48</option><option>54</option><option>60</option>
<option>68</option><option>76</option><option>84</option>
<option>96</option></select></td></tr>
<tr><td>Font Family</td><td><select id='cpfamily'><option>Bitstream Charter</option><option>Byron Medium</option>
<option>Century Schoolbook L</option><option>DejaVu Sans</option><option>DejaVu Serif</option><option>FreeSans</option>
<option>Liberation Mono</option><option>Liberation Sans</option><option>Liberation Sans Narrow</option>
<option>Liberation Serif</option><option>Times New Roman</option>
</select></td></tr>
<tr><th>Topic</th></tr>
<tr><td>Tittle color</td><td><input type='color' id='colort'><input type='button' id='colortapp' value='apply'></td></tr>
<tr><td>Font Size</td><td><select name='cpsize' id='tsize'><option>6</option><option>7</option><option>8</option>
<option>9</option><option>10</option><option>10.5</option><option>12</option>
<option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>22</option><option>24</option>
<option>26</option><option>28</option><option>32</option><option>36</option>
<option>40</option><option>44</option><option>48</option><option>54</option><option>60</option>
<option>68</option><option>76</option><option>84</option>
<option>96</option></select></td></tr>
<tr><td>Font Family</td><td><select id='tfamily'><option>Bitstream Charter</option><option>Byron Medium</option>
<option>Century Schoolbook L</option><option>DejaVu Sans</option><option>DejaVu Serif</option><option>FreeSans</option>
<option>Liberation Mono</option><option>Liberation Sans</option><option>Liberation Sans Narrow</option>
<option>Liberation Serif</option><option>Times New Roman</option>
</select></td></tr>

</table>
</div>";
	  $con=mysql_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpass']);
	  mysql_select_db($_POST['dbname'],$con);

 switch($_POST['r2'])
  {
		  case "on":
	  $qry1="select * from college_data where userid='".$_POST['id']."' AND name='".$_POST['s5']."'";
	$res1=mysql_query($qry1);
	$data=mysql_fetch_array($res1);
	echo "<div id='pr' style='border:1px solid black;'>";
	echo "<table width=100% style='box-shadow:none;'>";
	echo "<tr><th><h1 style='font-size:50px;' id='heading'>".$data['uni']."</h1></th></tr>";
		echo "</table>";
$qry2="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND semster='".$_POST['s11']."' AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."' AND level='".$_POST['s7']."'";
	$res2=mysql_query($qry2);
	$data1=mysql_fetch_array($res2);
	echo "<table width=100% style='box-shadow:none;background:none' align='center'><br><br><br><br>";
	echo "<tr><td style='text-align:left'></b><h1 style='text-align:center;font-size:30px' id='title'>Scheme& Syllabus of</h1></td></tr>";
	echo "<tr><td style='text-align:left'></b><h1 style='text-align:center;font-size:30px' id='titlse'>".$data1['level']." ".$data1['course']."</h1></td></tr>";
	echo "<tr><td><hr color='lightblue'></hr></td></tr>";
	echo "<tr><td><h1 style='text-align:center;font-size:30px' id='semster'>".$data1['semster']." Semester effective for Batch.".$data1['batch']."</h2></td></tr>";
	echo "</table>";
$qryo1="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$_POST['s11']."' AND college='".$_POST['s5']."'";
$resultf1=mysql_query($qryo1);
$totallect=0;
$theory=0;
$paritical=0;
$inter=0;
$exter=0;
$cre=0;
$total=0;
while($dataf1=mysql_fetch_array($resultf1))
{
$totallect=$totallect+$dataf1['leacture'];
 $theory=$theory+$dataf1['theory'];
 $paritical=$paritical+$dataf1['paritical'];
 $inter=$inter+$dataf1['internal'];
 $exter=$exter+$dataf1['external'];
 $cre=$cre+$dataf1['cre'];
$total=$total+$dataf1['tom'];
}
$qryo="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$_POST['s11']."' AND college='".$_POST['s5']."'";
$resultf=mysql_query($qryo);
echo "<table  style='box-shadow:none;background:none;text-align:center' align='center' border=1 id='cdt'><br><br><br><br><br><br><br>";
echo "<tr><td rowspan='2' >CODE</td><td rowspan='2'>Course details</td><td colspan='3'>Load Allocation</td><td colspan='2' >Marks Distribution</td><td rowspan='2'>Total Marks</td><td rowspan='2'>Credit</td></tr>";
echo "<tr><td>T</td><td>L</td><td>P</td><td>Internal</td><td>External</td></tr>";
while($dataf=mysql_fetch_array($resultf))
{
	echo "<tr><td>".$dataf['subject_code']."</td><td>".$dataf['subject']."</td><td>".$dataf['leacture']."</td><td>".$dataf['theory']."</td><td>".$dataf['paritical']."</td><td>".$dataf['internal']."</td><td>".$dataf['external']."</td><td>".$dataf['tom']."</td><td>".$dataf['cre']."</td></tr>";
}
	echo "<tr><td></td><td>TOTAL</td><td>".$totallect."</td><td>".$theory."</td><td>".$paritical."</td><td>".$inter."</td><td>".$exter."</td><td>".$total."</td><td>".$cre."</td></tr>";
echo "</table>";
echo "<table width=100% style='box-shadow:none;background:none'>";
	 $qry3="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND semster='".$_POST['s11']."' AND batch='".$_POST['s8']."'AND college='".$_POST['s5']."' AND level='".$_POST['s7']."' AND place='theory'";
	$res3=mysql_query($qry3);
	while($data2=mysql_fetch_array($res3))
	{

		echo "<tr><td><h1 style='text-align:center;font-size:20px' id='subcode'>".$data2['subject_code']." ".$data2['subject']."</h1></td></tr>";		

 $qry4="select * from topic where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND subject='".$data2['subject']."' AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."'";
	$res4=mysql_query($qry4);
	while($data3=mysql_fetch_array($res4))
	{
	echo "<tr><td><li><h2 id='chapter'>".$data3['chapter'].":-</h2> <p id='toppic'>".$data3['topics']."[ ".$data3['leacture']." ]"."</li></p></td></tr>";
}
echo "<tr><td><h2>Suggested Readings/ Books:</h2></td></tr>";
$qry5="select * from book where userid='".$_POST['id']."' AND subject='".$data2['subject']."' AND sem='".$_POST['s11']."' AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."'";
	$res8=mysql_query($qry5);
	echo "<ol>";
	while($data4=mysql_fetch_array($res8))
	{
	echo "<tr><td><li><p>".$data4['book_name']."<b>,</b>".$data4['author']."</b>,<b>".$data4['publication']."</b></td></li></tr>";
}
echo "</ol>";

$pr='/&/';
$re='\&';
$qry55="select * from paritical where userid='".$_POST['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data2['subject']."' AND college='".$_POST['s5']."'";
$res55=mysql_query($qry55);
echo "<tr><td>";
echo "<hr color='black'></hr>";
echo "</td></tr>";
if(mysql_num_rows($res55)!=0)
{
echo "<tr><th>Pariticals</th></tr>";
$f=1;
echo "<tr><th>".$data2['subject']."</th></tr>";
while($data55=mysql_fetch_array($res55))
{
	echo "<tr><td><ul><li>".$f.')'.preg_replace($pr,$re,$data55['pariticalname'])."</li></ul></tr>";
	$f++;
	if(strlen($data55['subtopic'])>1)
	{
		echo "<tr><td><ol><li>".$data55['subtopic']."</li></ol></td></tr>";
	}
}
}else
{
}
}
echo "<tr><td>";
echo "<hr color='black'></hr>";
echo "</td></tr>";

	echo "</table>";
echo "</div>";
break;
case "yes":
 $qry1="select * from college_data where userid='".$_POST['id']."' AND name='".$_POST['s5']."'";
  
	$res1=mysql_query($qry1);
	$data=mysql_fetch_array($res1);
	echo "<div id='pr' style='border:1px solid black'>";
	echo "<table width=100% style='box-shadow:none;background:none'>";
	echo "<tr><th><h1 style='font-size:50px;color:Darkred' id='heading'>".$data['uni']."</h1></th></tr>";
		echo "</table>";
		$qry2u="select Distinct(semster) from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."'  AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."' AND level='".$_POST['s7']."'";
$query2u=mysql_query($qry2u);
while($data2u=mysql_fetch_array($query2u))
{
	$data2u['semster'];
$qry2="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."'  AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."' AND level='".$_POST['s7']."' AND semster='".$data2u['semster']."'";
	$res2=mysql_query($qry2);
	echo "<table width=100% style='box-shadow:none;background:none'><br><br><br><br>";
	$data1=mysql_fetch_array($res2);
	echo "<tr><td style='text-align:left'></b><h1 style='text-align:center;font-size:30px' id='title>Scheme& Syllabus of</h1></td></tr>";
	echo "<tr><td style='text-align:left'></b><h1 style='text-align:center;font-size:30px' id='titlse>".$data1['level']." ".$data1['course']."</h1></td></tr>";
	echo "<tr><td><hr color='lightblue'></hr></td></tr>";
	echo "<tr><td><h1 style='text-align:center;font-size:30px' id='semster'>".$data1['semster']." Semester effective for Batch.".$data1['batch']."</h2></td></tr>";
	echo "</table>";
	echo "<table width=100% style='box-shadow:none;background:none'><br><br><br><br>";
$qryo1="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."'  AND college='".$_POST['s5']."' And semster='".$data1['semster']."'";
$resultf1=mysql_query($qryo1);
$totallect=0;
$theory=0;
$paritical=0;
$inter=0;
$exter=0;
$cre=0;
$total=0;
while($dataf1=mysql_fetch_array($resultf1))
{
$totallect=$totallect+$dataf1['leacture'];
 $theory=$theory+$dataf1['theory'];
 $paritical=$paritical+$dataf1['paritical'];
 $inter=$inter+$dataf1['internal'];
 $exter=$exter+$dataf1['external'];
 $cre=$cre+$dataf1['cre'];
$total=$total+$dataf1['tom'];
}
$qryo="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."' AND semster='".$data2u['semster']."'";
$resultf=mysql_query($qryo);
echo "<table  style='box-shadow:none;background:none;text-align:center' align='center' border=1 id='cdt'><br><br><br><br><br>";
echo "<tr><td rowspan='2' >CODE</td><td rowspan='2'>Course details</td><td colspan='3'>Load Allocation</td><td colspan='2' >Marks Distribution</td><td rowspan='2'>Total Marks</td><td rowspan='2'>Credit</td></tr>";
echo "<tr><td>T</td><td>L</td><td>P</td><td>Internal</td><td>External</td></tr>";
while($dataf=mysql_fetch_array($resultf))
{
	echo "<tr><td>".$dataf['subject_code']."</td><td>".$dataf['subject']."</td><td>".$dataf['leacture']."</td><td>".$dataf['theory']."</td><td>".$dataf['paritical']."</td><td>".$dataf['internal']."</td><td>".$dataf['external']."</td><td>".$dataf['tom']."</td><td>".$dataf['cre']."</td></tr>";
}
	echo "<tr><td></td><td>TOTAL</td><td>".$totallect."</td><td>".$theory."</td><td>".$paritical."</td><td>".$inter."</td><td>".$exter."</td><td>".$total."</td><td>".$cre."</td></tr>";
echo "</table>";
echo "<table width=100% style='box-shadow:none;background:none'>";
	 $qry3="select * from syllabi where userid='".$_POST['id']."' AND branch='".$_POST['s4']."'  AND batch='".$_POST['s8']."'AND college='".$_POST['s5']."' AND level='".$_POST['s7']."' AND semster='".$data1['semster']."' And place='theory'";
	$res3=mysql_query($qry3);
	while($data2=mysql_fetch_array($res3))
	{

echo "<tr><td><h1 style='text-align:center;font-size:20px' id='subcode'>".$data2['subject_code']." ".$data2['subject']."</h1></td></tr>";		
 $qry4="select * from topic where userid='".$_POST['id']."' AND branch='".$_POST['s4']."' AND subject='".$data2['subject']."' AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."'";
	$res4=mysql_query($qry4);
	while($data3=mysql_fetch_array($res4))
	{
	echo "<tr><td><li><h2 id='chapter'>".$data3['chapter'].":-</h2> <p id='toppic'>".$data3['topics']."[ ".$data3['leacture']." ]"."</li></p></td></tr>";
}
echo "<tr><td><h2>Suggested Readings/ Books:</h2></td></tr>";
$qry5="select * from book where userid='".$_POST['id']."' AND subject='".$data2['subject']."'  AND batch='".$_POST['s8']."' AND college='".$_POST['s5']."'";
	$res8=mysql_query($qry5);
	echo "<ol>";
	while($data4=mysql_fetch_array($res8))
	{
	echo "<tr><td><li><p>".$data4['book_name']."<b>,,</b>".$data4['author']."</b>,,<b>".$data4['publication']."</b></td></li></tr>";
}
echo "</ol>";
$pr='/&/';
$re='\&';
$qry55="select * from paritical where userid='".$_POST['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data2['subject']."' AND college='".$_POST['s5']."' AND sem='".$data1['semster']."'";
$res55=mysql_query($qry55);
echo "<tr><td>";
echo "<hr color='black'></hr>";
echo "</td></tr>";
if(mysql_num_rows($res55)!=0)
{
	$f=1;
echo "<tr><th>Pariticals</th></tr>";
echo "<tr><th>".$data2['subject']."</th></tr>";
while($data55=mysql_fetch_array($res55))
{
	echo "<tr><td>".$f.")".preg_replace($pr,$re,$data55['pariticalname']).":-".$data55['subtopic']."</td></tr>";
$f++;
}
}else
{
}
}

echo "<tr><td>";
echo "<hr color='black'></hr>";
echo "</td></tr>";
}

	echo "</table>";
echo "</div>";

break;

	  }
?>
