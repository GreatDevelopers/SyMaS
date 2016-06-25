<?php
switch($_POST['a3'])
{
	case "no":
$path=$_POST['fileadd'].'pun.tex';
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
\usepackage[margin=0.6in]{geometry}
\usepackage{multirow,tabularx}
\newcolumntype{Y}{>{\centering\arraybackslash}X}
\renewcommand{\arraystretch}{2}
\begin{document}
\center {\color{black}\bf{\Huge{<?php echo $data['uni']; ?>}}}
\linebreak
\center{\Large{{\huge{\bf{Scheme and Syllabus of}}}}}

<?php
$qry2="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."' AND semster='".$_POST['s9']."' And batch='".$_POST['s8']."'";
$res2=mysql_query($qry2);
$data5=mysql_fetch_array($res2);?>
\center{{\huge{\bf{ <?php echo $data5['level']; ?>}}}
\center{{\huge{ \bf{<?php echo $data5['branch']; ?>}}}}
\color{blue}
\center{{\Large{ \color{black}\bf{<?php echo $data5['semster'];?>} Semester effective for Batch <?php echo $data5['batch']; ?>}}}
\center{{\huge{ \color{black}\emph{\linebreak\linebreak\linebreak\linebreak\linebreak\linebreak\linebreak <?php echo $data5['semster'];?>    SEMESTER}}}}
\linebreak\linebreak
\begin{tabularx}{\linewidth}{|*{15}{X|}}
\hline
\multirow{2}{*}{Code} &\multicolumn{2}{|c|}{Course Details} &\multicolumn{3}{c|}{Load Allocation}&\multicolumn{2}{c|}{Mark Distribution} &\multicolumn{1}{|c|}{Total Marks}&\multicolumn{1}{|c|}{Credit} \\
\cline{4-8}
           & \multicolumn{2}{|c|}{} &  L & T & P & Internal & External & & \\

\hline
\cline{3-7}
<?php
$qryo1="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$_POST['s9']."' AND college='".$_POST['s5']."'";
$resultf1=mysql_query($qryo1);
$totallect=0;
$theory=0;
$paritical=0;
$inter=0;
$exter=0;
$cre=0;
while($dataf1=mysql_fetch_array($resultf1))
{
 $totallect=$totallect+$dataf1['leacture'];
 $theory=$theory+$dataf1['theory'];
 $paritical=$paritical+$dataf1['paritical'];
 $inter=$inter+$dataf1['internal'];
 $exter=$exter+$dataf1['external'];
 $cre=$cre+$dataf1['cre'];
}
?>
<?php
$qryo="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$_POST['s9']."' AND college='".$_POST['s5']."'";
$resultf=mysql_query($qryo);
$pr='/&/';
$re='\&';
while($dataf=mysql_fetch_array($resultf))
{
?>
           \multicolumn{1}{|c|}{<?php echo preg_replace($pr,$re,$dataf['subject_code']);?>} & \multicolumn{2}{c|}{<?php echo preg_replace($pr,$re,$dataf['subject']);?>} &  <?php echo $dataf['leacture'];?> & <?php echo $dataf['theory'];?> & <?php echo $dataf['paritical'];?> & <?php echo $dataf['internal'];?> & <?php echo $dataf['external'];?> & <?php echo $dataf['tom'];?> & <?php echo $dataf['cre'];?> \\
\hline
<?php
}
?>
\cline{3-7}
& \multicolumn{2}{c|}{TOTAL} & <?php echo $totallect;?> & <?php echo $theory; ?> & <?php echo $paritical; ?> & <?php echo $inter;?> & <?php echo $exter; ?> & <?php echo $inter+$exter;?> & <?php echo $cre; ?>\\
\hline
\end{tabularx}
\clearpage
\center{\bf\color{black}{<?php echo $data['uni'];?>}}\linebreak
\bf\color{black}{<?php echo $data5['branch'];?>}}
<?php
$qry1="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$_POST['s9']."' AND college='".$_POST['s5']."' AND place='theory'";
$res1=mysql_query($qry1);
$pr='/&/';
$re='\&';
while($data1=mysql_fetch_array($res1))
{
?>
\center {\Large{{\color{black}\bf{<?php echo preg_replace($pr,$re,$data1['subject_code']); ?> <?php echo preg_replace($pr,$re,$data1['subject']); ?>}}}} 

<?php
$pr='/&/';
$re='\&';
$qry2="select * from topic where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res2=mysql_query($qry2);
while($data2=mysql_fetch_array($res2))
{
?>
\color{black}
\begin{itemize}
\item {\color{black}\large{\bf{<?php echo preg_replace($pr,$re,$data2['chapter']); ?> : }}}\color{black}<?php echo preg_replace($pr,$re,$data2['topics']); ?><?php echo "[ ".$data2['leacture']." ]" ;?>
\end{itemize}
<?php
}
?>
\begin{flushleft}
{\color{black}\bf{Suggested Readings/ Books}}
\end{flushleft}
<?php
$qry3="select * from book where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res3=mysql_query($qry3);
$pr='/&/';
$re='\&';
while($data3=mysql_fetch_array($res3))
{
?>	
\begin{itemize}
\item  \color{black} <?php echo preg_replace($pr,$re,$data3['author']); ?>, \textbf{<?php echo preg_replace($pr,$re,$data3['book_name']); ?>,} <?php echo preg_replace($pr,$re,$data3['publication']); ?>.
\end{itemize}
<?php
}
?>
\color{black}\line(1,0){550}
\clearpage
<?php
$qry4="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res4=mysql_query($qry4);
$datab=mysql_fetch_array($res4);
$row4=mysql_fetch_row($res4);
$pr='/&/';
$re='\&';
if($row4!=0)
{

?>
\center{\bf{Pariticals}}
\linebreak
\center{\bf{<?php echo preg_replace($pr,$re,$data1['subject']); ?>}}
<?php
$pr='/&/';
$re='\&';
$qry3="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res3=mysql_query($qry3);
while($data3=mysql_fetch_array($res3))
{
?>
\color{black}
\begin{itemize}
\item <?php echo preg_replace($pr,$re,$data3['pariticalname']); ?>
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
exec('pdflatex pun.tex');
echo "ok";
header("location:pun.pdf");
break;
?><?php
case "yes":
	$path=$_POST['fileadd']."punbatch.tex";
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
\usepackage[margin=0.6in]{geometry}
\usepackage{multirow,tabularx}
\newcolumntype{Y}{>{\centering\arraybackslash}X}
\renewcommand{\arraystretch}{2}
\begin{document}
\center {\color{black}\bf{\Huge{<?php echo $data['uni']; ?>}}}
<?php
 $qry2="select DISTINCT(level) from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."'  And batch='".$_POST['s8']."'";
$res2=mysql_query($qry2);
$i=1;
while($data5=mysql_fetch_array($res2))
{
	$level[$i]=$data5['level'];
	$i++;
}

?>

<?php
 $qry3="select DISTINCT(branch) from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."' AND batch='".$_POST['s8']."'";
$res3=mysql_query($qry3);
$j=1;
while($datat=mysql_fetch_array($res3))
{
		$branch[$j]=$datat['branch'];
	$j++;
}
?>
<?php
$qryf="select DISTINCT(semster) from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."'  And batch='".$_POST['s8']."'";
$resf=mysql_query($qryf);
$k=1;
while($datatt=mysql_fetch_array($resf))
{
	$sem[$k]=$datatt['semster'];
?>
<?php
$qryo1="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$sem[$k]."' AND college='".$_POST['s5']."'";
$resultf1=mysql_query($qryo1);
$totallect=0;
$theory=0;
$paritical=0;
$inter=0;
$exter=0;
$cre=0;
while($dataf1=mysql_fetch_array($resultf1))
{
 $totallect=$totallect+$dataf1['leacture'];
 $theory=$theory+$dataf1['theory'];
 $paritical=$paritical+$dataf1['paritical'];
 $inter=$inter+$dataf1['internal'];
 $exter=$exter+$dataf1['external'];
 $cre=$cre+$dataf1['cre'];
}
?>

\center{\Large{{\huge{\bf{Scheme and Syllabus of}}}}}
\center{{\huge{\bf{ <?php echo $level[1]; ?>}}}
\center{{\huge{ \bf{<?php echo $branch[1]; ?>}}}}
\center{{\Large{ \color{black}\bf{<?php echo $sem[$k];?>} Semester effective for Batch <?php echo $data5['batch']; ?>}}}
\center{{\Huge{ \color{black}\emph{\linebreak\linebreak\linebreak\linebreak <?php echo $sem[$k];?>   SEMESTER}}}}
\linebreak\linebreak\linebreak
\begin{tabularx}{\linewidth}{|*{15}{X|}}
\hline
\multirow{2}{*}{Code} &\multicolumn{2}{|c|}{Course Details} &\multicolumn{3}{c|}{Load Allocation}&\multicolumn{2}{c|}{Mark Distribution} &\multicolumn{1}{|c|}{Total Marks}&\multicolumn{1}{|c|}{Credit} \\
\cline{4-8}
           & \multicolumn{2}{|c|}{} &  L & T & P & Internal & External & & \\

\hline
\cline{3-7}
<?php
$qryr="select DISTINCT(semster) from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND college='".$_POST['s5']."' AND semster='".$sem[$k]."' And batch='".$_POST['s8']."'";
$resr=mysql_query($qryr);
$pr='/&/';
$re='\&';
while($dtata=mysql_fetch_array($resr))
{
$qryo="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$sem[$k]."' AND college='".$_POST['s5']."'";
$resultf=mysql_query($qryo);
while($dataf=mysql_fetch_array($resultf))
{
?>
           \multicolumn{1}{|c|}{<?php echo preg_replace($pr,$re,$dataf['subject_code']);?>} &\multicolumn{2}{c|}{<?php echo preg_replace($pr,$re,$dataf['subject']);?>} &  <?php echo $dataf['leacture'];?> & <?php echo $dataf['theory'];?> & <?php echo $dataf['paritical'];?> & <?php echo $dataf['internal'];?> & <?php echo $dataf['external'];?> & <?php echo $dataf['tom'];?> & <?php echo $dataf['cre'];?> \\
\hline

<?php
}
?>
\cline{3-7}
&\multicolumn{2}{c|}{TOTAL} & <?php echo $totallect;?> & <?php echo $theory; ?> & <?php echo $paritical; ?> & <?php echo $inter;?> & <?php echo $exter; ?> & <?php echo $inter+$exter;?> & <?php echo $cre; ?>\\
\hline

\end{tabularx}
\clearpage
\center{\bf\color{black}{<?php echo $data['uni'];?>}}\linebreak
\bf\color{black}{<?php echo $data5['branch'];?>}}
<?php
$qry1="select * from syllabi where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND semster='".$sem[$k]."' AND college='".$_POST['s5']."' AND place='theory'";
$res1=mysql_query($qry1);
$pr='/&/';
$re='\&';
while($data1=mysql_fetch_array($res1))
{
?>
\center {\Large{{\color{black}\bf{<?php echo preg_replace($pr,$re,$data1['subject_code']); ?> <?php echo preg_replace($pr,$re,$data1['subject']); ?>}}}} 

<?php
$pr='/&/';
$re='\&';
$qry2="select * from topic where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res2=mysql_query($qry2);
while($data2=mysql_fetch_array($res2))
{
?>
\color{black}
\begin{itemize}
\item {\color{black}\large{\bf{<?php echo preg_replace($pr,$re,$data2['chapter']); ?> : }}}\color{black}<?php echo preg_replace($pr,$re,$data2['topics']); ?><?php echo "[ ".$data2['leacture']." ]" ;?>
\end{itemize}
<?php
}
?>
\begin{flushleft}
{\color{black}\bf{Suggested Readings/ Books}}
\end{flushleft}
<?php
$qry3="select * from book where userid='".$_GET['id']."' AND branch='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res3=mysql_query($qry3);
while($data3=mysql_fetch_array($res3))
{
?>	
\begin{itemize}
\item  \color{black} <?php echo preg_replace($pr,$re,$data3['author']); ?>, \textbf{<?php echo preg_replace($pr,$re,$data3['book_name']); ?>,} <?php echo preg_replace($pr,$re,$data3['publication']); ?>.
\end{itemize}
<?php
}
?>
\color{black}\line(1,0){550}
\clearpage
<?php
$qry4="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res4=mysql_query($qry4);
$datab=mysql_fetch_array($res4);
$row4=mysql_fetch_row($res4);
$pr='/&/';
$re='\&';
if($row4!=0)
{

?>
\center{\bf{Pariticals}}
\linebreak
\center{\bf{<?php echo preg_replace($pr,$re,$data1['subject']); ?>}}
<?php
$pr='/&/';
$re='\&';
$qry3="select * from paritical where userid='".$_GET['id']."' AND course='".$_POST['s4']."' AND batch='".$_POST['s8']."' AND subject='".$data1['subject']."' AND college='".$_POST['s5']."'";
$res3=mysql_query($qry3);
while($data3=mysql_fetch_array($res3))
{
?>
\color{black}
\begin{itemize}
\item <?php echo preg_replace($pr,$re,$data3['pariticalname']); ?>
\end{itemize}

<?php
}
}

?>
\clearpage
<?php
}
}
$k++;
}
?>

\end{document}
<?php
$data=ob_get_clean();
fwrite($file,$data);
exec('pdflatex punbatch.tex');
header("location:punbatch.pdf");
break;
}
?>
