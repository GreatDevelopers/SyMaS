<?php

switch($_POST['a3'])
{
	case "no":
		$path=$_POST['fileadd']."ruki.tex";
$file=fopen($path,"w");
ob_start();
$con=mysql_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpass']);
mysql_select_db($_POST['dbase'],$con);
$qry="select * from college_data where userid='".$_GET['id']."' AND name='".$_POST['s5']."'";
$res=mysql_query($qry);
$data=mysql_fetch_array($res);
?>

\documentclass{article}
\usepackage{color}
\usepackage[svgnames]{xcolor}
\usepackage[margin=0.5in]{geometry}
\usepackage{multirow,tabularx}
\newcolumntype{Y}{>{\centering\arraybackslash}X}
\renewcommand{\arraystretch}{2}
\begin{document}
\center{\color{black}\bf{\Large{<?php echo $data['uni']; ?>}}}
\linebreak\linebreak\linebreak
<?php
$qry2="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."' AND semster='".$_POST['s9']."' And batch='".$_POST['s8']."' AND place='theory'";
$res2=mysql_query($qry2);
$pr='/&/';
$re='\&';

while($data5=mysql_fetch_array($res2))
{
	?>
\begin{enumerate}

\item {\center {NAME OF DEPTT./CENTER: \bf{<?php echo $data5['branch'];?> }}}
\item {subject code: \bf{<?php echo preg_replace($pr,$re,$data5['subject_code']); ?>}    Course Title:   {\bf{<?php echo preg_replace($pr,$re,$data5['subject']); ?>}}}
\item {Contact Hours \bf{L:<?php echo $data5['leacture']; ?>        T:<?php echo $data5['theory']; ?>         P:<?php echo $data5['paritical']; ?>}}
\item {Examination Duration(Hrs):  \bf{Theory}\framebox{<?php echo $data5['leacture'];?>} \bf{Practial}\framebox{<?php echo $data5['paritical'];?>}}
\item {credits: \framebox{<?php echo $data5['cre']; ?>}}
\item {semester \bf{<?php echo $data5['semster'];?>}}
\item {\bf{Objectives : }<?php echo $data5['Objective']; ?>}
\end{enumerate}
\begin{itemize}
<?php
$pr='/&/';
$re='\&';
$qry3="select * from topic where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res3=mysql_query($qry3);
while($data3=mysql_fetch_array($res3))
{?>
\item {\framebox{\bf {<?php echo preg_replace($pr,$re,$data3['chapter']); ?> }} <?php echo preg_replace($pr,$re,$data3['topics']); ?><?php echo "[ ".$data3['leacture']." ]" ;?>}

<?php
}
?>
\end{itemize}
\begin{flushleft}
{\color{black}\bf{Suggested Readings/ Books}}
\end{flushleft}
<?php
$qry4="select * from book where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res4=mysql_query($qry4);
while($data4=mysql_fetch_array($res4))
{
?>	
\begin{itemize}
\item  \color{black} <?php echo preg_replace($pr,$re,$data4['author']); ?>, \textbf{<?php echo preg_replace($pr,$re,$data4['book_name']); ?>,} <?php echo preg_replace($pr,$re,$data4['publication']); ?>.
\end{itemize}

<?php
}

?>
\clearpage	
<?php
$qry5="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res5=mysql_query($qry5);
$datab=mysql_fetch_array($res5);
$row5=mysql_fetch_row($res5);
$pr='/&/';
$re='\&';
if($row5!=0)
{
?>
\center{\bf{Pariticals}}
\linebreak
\center{\bf{<?php echo preg_replace($pr,$re,$data1['subject']); ?>}}
<?php
$pr='/&/';
$re='\&';
$qry6="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res6=mysql_query($qry6);
while($data6=mysql_fetch_array($res6))
{
?>
\color{black}
\begin{itemize}
\item <?php echo preg_replace($pr,$re,$data6['pariticalname']); ?>
\end{itemize}

<?php
}
}
?>
\clearpage
<?php
}
?>

\end{document}

<?php
$data=ob_get_clean();
fwrite($file,$data);
exec('pdflatex ruki.tex');
echo "ok";
header("location:ruki.pdf");
break;
case "yes":
	$path=$_POST['fileadd']."rukibatch.tex";
$file=fopen($path,"w");
ob_start();
$con=mysql_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpass']);
mysql_select_db($_POST['dbase'],$con);
$qry="select * from college_data where userid='".$_GET['id']."' AND name='".$_POST['s5']."'";
$res=mysql_query($qry);
$data=mysql_fetch_array($res);
?>

\documentclass{article}
\usepackage{color}
\usepackage[svgnames]{xcolor}
\usepackage[margin=0.5in]{geometry}
\usepackage{multirow,tabularx}
\newcolumntype{Y}{>{\centering\arraybackslash}X}
\renewcommand{\arraystretch}{2}
\begin{document}
\center{\color{black}\bf{\Large{<?php echo $data['uni']; ?>}}}
\linebreak\linebreak\linebreak
<?php
$qry2="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."' And batch='".$_POST['s8']."' AND place='theory'";
$res2=mysql_query($qry2);
$pr='/&/';
$re='\&';

while($data5=mysql_fetch_array($res2))
{
	?>

\begin{enumerate}
\item {\center {NAME OF DEPTT./CENTER: \bf{<?php echo $data5['branch'];?> }}}
\item {subject code: \bf{<?php echo preg_replace($pr,$re,$data5['subject_code']); ?>}    Course Title:   {\bf{<?php echo preg_replace($pr,$re,$data5['subject']); ?>}}}
\item {Contact Hours \bf{L:<?php echo $data5['leacture']; ?>        T:<?php echo $data5['theory']; ?>         P:<?php echo $data5['paritical']; ?>}}
\item {Examination Duration(Hrs):  \bf{Theory}\framebox{<?php echo $data5['leacture'];?>} \bf{Practial}\framebox{<?php echo $data5['paritical'];?>}}
\item {credits: \framebox{<?php echo $data5['cre']; ?>}}
\item {semester \bf{<?php echo $data5['semster'];?>}}
\item {<?php echo $data5['Objective']; ?>}
\end{enumerate}
\begin{itemize}
<?php
$pr='/&/';
$re='\&';
$qry3="select * from topic where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res3=mysql_query($qry3);
while($data3=mysql_fetch_array($res3))
{?>

\item {\framebox{\bf {<?php echo preg_replace($pr,$re,$data3['chapter']); ?> }} <?php echo preg_replace($pr,$re,$data3['topics']); ?>  <?php echo "[ ".$data3['leacture']." ]" ;?>}

<?php
}
?>
\end{itemize}
\begin{flushleft}
{\color{black}\bf{Suggested Readings/ Books}}
\end{flushleft}
<?php
$qry4="select * from book where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res4=mysql_query($qry4);
while($data4=mysql_fetch_array($res4))
{
?>	
\begin{itemize}
\item  \color{black} <?php echo preg_replace($pr,$re,$data4['author']); ?>, \textbf{<?php echo preg_replace($pr,$re,$data4['book_name']); ?>,} <?php echo preg_replace($pr,$re,$data4['publication']); ?>.
\end{itemize}

<?php
}

?>
\clearpage	
<?php
$qry5="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res5=mysql_query($qry5);
$datab=mysql_fetch_array($res5);
$row5=mysql_fetch_row($res5);
$pr='/&/';
$re='\&';
if($row5!=0)
{
?>
\center{\bf{Pariticals}}
\linebreak
\center{\bf{<?php echo preg_replace($pr,$re,$data1['subject']); ?>}}
<?php
$pr='/&/';
$re='\&';
$qry6="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data5['subject']."' AND college='".$_POST['s5']."'";
$res6=mysql_query($qry6);
while($data6=mysql_fetch_array($res6))
{
?>
\color{black}
\begin{itemize}
\item <?php echo preg_replace($pr,$re,$data6['pariticalname']); ?>
\end{itemize}

<?php
}
}
?>
\clearpage
<?php
}
?>

\end{document}

<?php
$data=ob_get_clean();
fwrite($file,$data);
exec('pdflatex rukibatch.tex');
echo "ok";
header("location:rukibatch.pdf");
break;

}

?>
