<?php
$author="CREATE TABLE IF NOT EXISTS author(
`name` varchar(200) NOT NULL,
`id` int AUTO_INCREMENT,
primary key(id)
)";
$auther1=mysql_query($author);
$book="CREATE TABLE IF NOT EXISTS book(
`college` varchar(200) NOT NULL,
`level` varchar(200) NOT NULL,
`branch` varchar(200) NOT NULL,
`subject` varchar(200) NOT NULL,
`book_name` varchar(200) NOT NULL,
`sem` varchar(200) NOT NULL,
`author` varchar(200) NOT NULL,
`publication` varchar(200) NOT NULL,
`userid` varchar(200) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
`batch` varchar(100) NOT NULL,
`edition` varchar(20) NOT NULL,
`series` varchar(20) NOT NULL,
`volumn` varchar(20) NOT NULL,
`year` varchar(20) NOT NULL,
`address` varchar(20) NOT NULL,
`note` varchar(20) NOT NULL,
`editior` varchar(20) NOT NULL,
primary key(id)
)";
$addauthor="insert into author values('A. A. V. I. M.',1)";
$ok=mysql_query($addauthor);
$addauthor1="insert into author values('A. F. A.',2)";
$ok1=mysql_query($addauthor1);
$addauthor2="insert into author values('A. J. SINGH',3)";
$ok2=mysql_query($addauthor2);
$addauthor3="insert into author values('A. K. SINGH',4)";
$ok3=mysql_query($addauthor3);
$addauthor4="insert into author values('A.I.E.E. NEW YORK',5)";
$ok4=mysql_query($addauthor4);
$addauthor5="insert into author values('A.M.M.',6)";
$ok5=mysql_query($addauthor5);
$addauthor6="insert into author values('A.R.A.,INDIA',6)";
$ok6=mysql_query($addauthor6);
$addauthor7="insert into author values('A.S. FOR METALS',7)";
$ok7=mysql_query($addauthor7);
$addauthor8="insert into author values('A.S.C.E.',8)";
$ok8=mysql_query($addauthor8);
$addauthor9="insert into author values('A.S.T.M.',9)";
$ok9=mysql_query($addauthor9);
$addauthor10="insert into author values('AAKER,DAVID A.',10)";
$ok10=mysql_query($addauthor10);
$addauthor11="insert into author values('AALOTNEN,ERKKI',11)";
$ok11=mysql_query($addauthor11);
$addauthor12="insert into author values('AANAT,A. A.',12)";
$ok12=mysql_query($addauthor12);
$addauthor13="insert into author values('AARIGAPUDI,R. C.',13)";
$ok13=mysql_query($addauthor13);
$addauthor14="insert into author values('AARON,HENRY',14)";
$ok14=mysql_query($addauthor14);
$addauthor15="insert into author values('AARONSON,PHILIP I.',15)";
$ok15=mysql_query($addauthor15);
$addauthor16="insert into author values('AARTS,EMILE',16)";
$ok16=mysql_query($addauthor16);
$addauthor17="insert into author values('AATRE,VASUDEV K.',17)";
$ok17=mysql_query($addauthor17);
$addauthor18="insert into author values('ABBAS,K. AHMAD',18)";
$ok18=mysql_query($addauthor18);
$addauthor19="insert into author values('ABBASCHIAN, LARA',19)";
$ok19=mysql_query($addauthor19);
$addauthor20="insert into author values('ABBASCHIAN, REZA',20)";
$ok20=mysql_query($addauthor20);
$addauthor21="insert into author values('ABBASI,ANJUMAN',21)";
$ok21=mysql_query($addauthor21);
$addauthor22="insert into author values('ABBASI,S. A.',22)";
$ok22=mysql_query($addauthor22);
$addauthor23="insert into author values('ABBASI,TASNEEM',23)";
$ok23=mysql_query($addauthor23);
$addauthor24="insert into author values('ABBETT,ROBERT W',24)";
$ok24=mysql_query($addauthor24);
$addauthor25="insert into author values('ABBEY,MICHAEL',25)";
$ok25=mysql_query($addauthor25);
$addauthor26="insert into author values('ABBEY,S.',26)";
$ok26=mysql_query($addauthor26);
$addauthor27="insert into author values('ABBEY,STATON',27)";
$ok27=mysql_query($addauthor27);
$addauthor28="insert into author values('ABBOL,T. P.',28)";
$ok28=mysql_query($addauthor28);
$addauthor29="insert into author values('ABBOT,WALDO',29)";
$ok29=mysql_query($addauthor29);
$addauthor30="insert into author values('ABBOTT,ANGUS E.',30)";
$ok30=mysql_query($addauthor30);
$addauthor31="insert into author values('ABBOTT,ARTHUR L.',31)";
$ok31=mysql_query($addauthor31);
$addauthor32="insert into author values('ABBOTT,M. B.',32)";
$ok32=mysql_query($addauthor32);
$addauthor33="insert into author values('ABBOTT,MICHAEL M.',33)";
$ok33=mysql_query($addauthor33);
$addauthor34="insert into author values('ABOLROUS,SAM A.',34)";
$ok34=mysql_query($addauthor34);
$addauthor35="insert into author values('ABRAHAMSON,R. L.',35)";
$ok35=mysql_query($addauthor35);
$addauthor36="insert into author values('ABRAMS,HARRY N.',36)";
$ok36=mysql_query($addauthor36);
$addauthor37="insert into author values('ABRO,A.',37)";
$ok37=mysql_query($addauthor37);
$addauthor38="insert into author values('ABROSIMOV,K.',38)";
$ok38=mysql_query($addauthor38);
$addauthor39="insert into author values('ACHARJYA,D. P.',39)";
$ok39=mysql_query($addauthor39);
$addauthor40="insert into author values('ACHARYA,DEVTAR',40)";
$ok40=mysql_query($addauthor40);
$addauthor41="insert into author values('ACHARYA,R. C.',41)";
$ok41=mysql_query($addauthor41);
$addauthor42="insert into author values('ACHERKAN,N.',42)";
$ok42=mysql_query($addauthor42);
$addauthor43="insert into author values('ACHTERT,WALTER S.',43)";
$ok43=mysql_query($addauthor43);
$addauthor44="insert into author values('ACHUTHAN,M.',44)";
$ok44=mysql_query($addauthor44);
$addauthor45="insert into author values('ACKERMAN,ADOLPH J.',45)";
$ok45=mysql_query($addauthor45);
$addauthor46="insert into author values('ACKERMANN,E. G.',46)";
$ok46=mysql_query($addauthor46);
$addauthor47="insert into author values('ACKOFF,RUSSELL L.',47)";
$ok47=mysql_query($addauthor47);
$addauthor48="insert into author values('BARDEN,WILLIAM',48)";
$ok48=mysql_query($addauthor48);
$addauthor49="insert into author values('BARHAMI,SANTA SINGH',49)";
$ok49=mysql_query($addauthor49);
$addauthor50="insert into author values('BARI,AHSANUL',50)";
$ok50=mysql_query($addauthor50);
$addauthor51="insert into author values('BARIAND,PIERRE',51)";
$ok51=mysql_query($addauthor51);
$addauthor52="insert into author values('BARING,JAGRUP SINGH',52)";
$ok52=mysql_query($addauthor52);
$addauthor53="insert into author values('BARKAN,V.',53)";
$ok53=mysql_query($addauthor53);
$addauthor54="insert into author values('BARKER,EARNEST',54)";
$ok54=mysql_query($addauthor54);
$addauthor55="insert into author values('BARKER,H. J.',55)";
$ok55=mysql_query($addauthor55);
$book1=mysql_query($book);
$branches="CREATE TABLE IF NOT EXISTS branches(
`name` varchar(100) NOT NULL,
`subbranch` varchar(100) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
primary key(id)
)";
$branches1=mysql_query($branches);
$branches2="insert into branches values('Agriculture','B. Sc in  Agriculture',1)";
$bg2=mysql_query($branches2);
$branches3="insert into branches values('Agriculture','B.Science in Agricultural Eco and Farm management',2)";
$bg3=mysql_query($branches3);
$branches4="insert into branches values('Agriculture','B. Sc in Agricultural Meteorology',3)";
$bg4=mysql_query($branches4);
$branches5="insert into branches values('Agriculture','B. Sc in Agricultural Biotechnology',4)";
$bg5=mysql_query($branches5);
$branches6="insert into branches values('Agriculture','B. Sc in Agricultural Statistics',5)";
$bg6=mysql_query($branches6);
$branches7="insert into branches values('Agriculture','B. Sc in Agronomy',6)";
$bg7=mysql_query($branches7);
$branches8="insert into branches values('Agriculture','B.Sc (Agriculture Mktg and Business Management)',7)";
$bg8=mysql_query($branches8);
$branches9="insert into branches values('Agriculture','B.Sc (Bio-chem and Agricultural Chemistry)',8)";
$bg9=mysql_query($branches9);
$branches10="insert into branches values('Agriculture','B. Sc in Crop Physiology',9)";
$bg10=mysql_query($branches10);
$branches11="insert into branches values('Agriculture','B. Sc in Entomology',10)";
$bg11=mysql_query($branches11);
$branches12="insert into branches values('Agriculture','B. Sc (Hons) in Agriculture',11)";
$bg12=mysql_query($branches12);
$branches13="insert into branches values('Food Technology','B. Sc in Food Preservation and Processing',12)";
$bg13=mysql_query($branches13);
$branches14="insert into branches values('Food Technology','B. Sc in Food Processing and Technology',13)";
$bg14=mysql_query($branches14);
$branches15="insert into branches values('Food Technology','B. Sc in Food Storage, Preservation and Food Tech.',14)";
$bg15=mysql_query($branches15);
$branches16="insert into branches values('Food Technology','B. Sc in Food Processing and Technology',15)";
$bg16=mysql_query($branches16);
$branches17="insert into branches values('Food Technology','B. Sc in Food Storage, Preservation and Food Tech.',16)";
$bg17=mysql_query($branches17);
$branches18="insert into branches values('Food Technology','B. Sc in Food Technology (Bio-Chemical Engineering)',17)";
$bg18=mysql_query($branches18);
$branches19="insert into branches values('Food Technology','B.Sc in Forensic Sciences',18)";
$bg19=mysql_query($branches19);
$branches19="insert into branches values('Food Technology','Diploma in F/Sciences (Ballistics and Finger Prints)',19)";
$bg19=mysql_query($branches19);
$branches20="insert into branches values('Food Technology','Diploma in Forensic Science  (Computer Forensics)',20)";
$bg20=mysql_query($branches20);
$branches21="insert into branches values('Textile','Diploma in Textile Tech',21)";
$bg21=mysql_query($branches21);
$branches22="insert into branches values('Textile','Diploma in Textile Eng',22)";
$bg22=mysql_query($branches22);
$branches23="insert into branches values('Textile','Diploma in Fabrication Tech and Erection Eng',23)";
$bg23=mysql_query($branches23);
$branches24="insert into branches values('Textile','B.E in Textile Technology',24)";
$bg24=mysql_query($branches24);
$branches24="insert into branches values('Textile','B.E in Textile Technology',24)";
$bg24=mysql_query($branches24);
$branches25="insert into branches values('Textile','B.E in Textile Chemistry',25)";
$bg25=mysql_query($branches25);
$branches26="insert into branches values('Textile','B.E in Man Made Fiber Technology',26)";
$bg26=mysql_query($branches26);
$branches27="insert into branches values('Architecture','Diploma in Architecture Assistantship',27)";
$bg27=mysql_query($branches27);
$branches28="insert into branches values('Architecture','Diploma in Architecture Assistantship',28)";
$bg28=mysql_query($branches28);
$branches29="insert into branches values('Architecture','Diploma in Architecture Engineering',29)";
$bg29=mysql_query($branches29);
$branches30="insert into branches values('Architecture','Automation and Robotics Engineering',30)";
$bg30=mysql_query($branches30);
$branches24="insert into branches values('ENGINEERING','Automobile engineering',31)";
$bg31=mysql_query($branches31);
$branches32="insert into branches values('ENGINEERING','Chemical engineers',32)";
$bg32=mysql_query($branches32);
$branches33="insert into branches values('ENGINEERING','Civil Engineering',33)";
$bg33=mysql_query($branches33);
$branches34="insert into branches values('ENGINEERING','Computer Science Engineering',34)";
$bg34=mysql_query($branches34);
$branches35="insert into branches values('ENGINEERING','Electrical and Communications Engineering',35)";
$bg35=mysql_query($branches35);
$branches36="insert into branches values('ENGINEERING','Electrical Engineering',36)";
$bg36=mysql_query($branches36);
$branches37="insert into branches values('ENGINEERING','Electronics and Communication Engineering',37)";
$bg37=mysql_query($branches37);
$branches38="insert into branches values('ENGINEERING','Electronics and Telecommunication Engineering',38)";
$bg38=mysql_query($branches38);
$branches39="insert into branches values('ENGINEERING','Information Technology',39)";
$bg39=mysql_query($branches39);
$branches40="insert into branches values('ENGINEERING','Mechanical Engineering',40)";
$bg40=mysql_query($branches40);
$branches41="insert into branches values('ENGINEERING','Production Engineering',41)";
$bg41=mysql_query($branches41);

$college_data="CREATE TABLE IF NOT EXISTS college_data(
`name` varchar(20) NOT NULL,
`address` varchar(100) NOT NULL,
`phone` varchar(20) NOT NULL,
`email` varchar(100) NOT NULL,
`state` varchar(20) NOT NULL,
`uni` varchar(20) NOT NULL,
`userid` varchar(30) NOT NULL,
`city` varchar(20) NOT NUll,
`pin` varchar(10) NOT NULL,
`road` varchar(20) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
`std` varchar(20) NOT NULL,
`long` varchar(100) NOT NULL,
`lati` varchar(100) NOT NULL,
primary key(id)
)";
$college_data1=mysql_query($college_data);
$paritical="CREATE TABLE IF NOT EXISTS paritical(
`college` varchar(222) NOT NULL,
`level` varchar(222) NOT NULL,
`course` varchar(200) NOT NULL,
`batch` varchar(100) NOT NULL,
`subject` varchar(2000) NOT NULL,
`sem` varchar(100) NOT NULL,
`objective` varchar(2000) NOT NULL,
`pariticalname` varchar(2000) NOT NULL,
`subtopic` varchar(2000) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
`userid` varchar(200) NOT NULL,
`type` varchar(200) NOT NULL,
primary key(id)
)";
$paritical1=mysql_query($paritical);
$publisher="CREATE TABLE IF NOT EXISTS publisher(
`publisher` varchar(100) NOT NULL,
`place` varchar(100) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
primary key(id)
)";
$publisher1=mysql_query($publisher);
$publisheradd="insert into publisher values('A & C BLACK','LONDON',1)";
$presult=mysql_query($publisheradd);
$publisheradd1="insert into publisher values('A GULLANE ENTERTANIMENT COMPANY','CALCUTTA',2)";
$presult1=mysql_query($publisheradd1);
$publisheradd3="insert into publisher values('A. & C. BLACK LTD','LONDON',3)";
$presult3=mysql_query($publisheradd3);
$publisheradd4="insert into publisher values('A. A. BALKEMA PUBLISHERS','TOKYO',4)";
$presult4=mysql_query($publisheradd4);
$publisheradd5="insert into publisher values('A. K. ROY CHOWDHURY','BENGAL',5)";
$presult5=mysql_query($publisheradd5);
$publisheradd6="insert into publisher values('A. R. V. PRESS','TRIVANDRUM',6)";
$presult6=mysql_query($publisheradd6);
$publisheradd7="insert into publisher values('A. SAURABH AND CO. (P) LTD.','DELHI',7)";
$presult7=mysql_query($publisheradd7);
$publisheradd8="insert into publisher values('A. V. GRIHA PRAKASHAN','POONA',8)";
$presult8=mysql_query($publisheradd8);
$publisheradd9="insert into publisher values('A. YOG SANSTHAN','IN. DELHI',9)";
$presult9=mysql_query($publisheradd9);
$publisheradd10="insert into publisher values('A.A. BALKEMA','USA',10)";
$presult10=mysql_query($publisheradd10);
$publisheradd11="insert into publisher values('A.H. WHEELER AND CO., PVT. LTD.','ALLAHABAD',11)";
$presult11=mysql_query($publisheradd11);
$publisheradd12="insert into publisher values('A.MUKHERJEE AND CO.','CALCUTTA',12)";
$presult12=mysql_query($publisheradd12);
$publisheradd13="insert into publisher values('A.P. PUBLISHERS','JALANDHAR',13)";
$presult13=mysql_query($publisheradd13);
$publisheradd14="insert into publisher values('AACHARAN PRAKASHAN','DELHI',14)";
$presult14=mysql_query($publisheradd14);
$publisheradd15="insert into publisher values('AAPGA PUBLICATIONS','PANCHKULA',15)";
$presult15=mysql_query($publisheradd15);
$publisheradd16="insert into publisher values('AASHIANA PUBLICATIONS','NASHIK',16)";
$presult16=mysql_query($publisheradd16);
$publisheradd17="insert into publisher values('ABACUS PRESS','ENGLAND',17)";
$presult17=mysql_query($publisheradd17);
$publisheradd18="insert into publisher values('ABBEY LIBRARY','LONDON',18)";
$presult18=mysql_query($publisheradd18);
$publisheradd19="insert into publisher values('ABHIJEET PUBLICATIONS','DELHI',19)";
$presult19=mysql_query($publisheradd19);
$publisheradd20="insert into publisher values('ABHINAV PUBLICATIONS','NEW DELHI',20)";
$presult20=mysql_query($publisheradd20);
$publisheradd21="insert into publisher values('ABHISHEK PUBLICATIONS','CHANDIGARH',21)";
$presult21=mysql_query($publisheradd21);
$publisheradd22="insert into publisher values('ABINGTON PUBLICATIONS','LONDON',22)";
$presult22=mysql_query($publisheradd22);
$publisheradd23="insert into publisher values('ABIRUCHI PRAKASHAN','DELHI',23)";
$presult23=mysql_query($publisheradd23);
$publisheradd24="insert into publisher values('ABS PUBLICATIONS','JALANDHAR',24)";
$presult=mysql_query($publisheradd24);
$publisheradd25="insert into publisher values('ACADEMIC (INDIA) PUBLISHERS','NEW DELHI',25)";
$presult25=mysql_query($publisheradd25);

$selectedbranch="CREATE TABLE IF NOT EXISTS selectedbranch(
`userid` varchar(100) NOT NULL,
`college` varchar(100) NOT NULL,
`course` varchar(100) NOT NULL,
`level` varchar(20) NOT NULL,
`semster` varchar(20) NOT NULL,
`branch` varchar(100) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
primary key(id)
)";

$selectedbranch1=mysql_query($selectedbranch);
$selecttheme="CREATE TABLE IF NOT EXISTS selecttheme(
`user` varchar(50) NOT NULL,
`theme` varchar(50) NOT NULL
)";
$selecttheme1=mysql_query($selecttheme);
$syllabi="CREATE TABLE IF NOT EXISTS syllabi(
`college` varchar(100) NOT NULL,
`course` varchar(100) NOT NULL,
`level` varchar(20) NOT NULL,
`branch` varchar(100) NOT NULL,
`semster` varchar(100) NOT NULL,
`subject` varchar(100) NOT NULL,
`short` varchar(20) NOT NULL,
`subject_code` varchar(20) NOT NULL,
`place` varchar(100) NOT NULL,
`userid` varchar(20) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
`leacture` varchar(20) NOT NULL,
`theory` varchar(20) NOT NULL,
`paritical` varchar(20) NOT NULL,
`internal` varchar(20) NOT NULL,
`external` varchar(20) NOT NULL,
`tom` varchar(20) NOT NULL,
`cre` varchar(20) NOT NULL,
`batch` varchar(100) NOT NULL,
`Objective` varchar(1000) NOT NULL,
primary key(id))";
$syllabi1=mysql_query($syllabi);
$topic="CREATE TABLE IF NOT EXISTS topic(
`college` varchar(100) NOT NULL,
`level` varchar(100) NOT NULL,
`branch` varchar(100) NOT NULL,
`subject` varchar(100) NOT NULL,
`chapter` varchar(100) NOT NULL,
`topics` varchar(10000) NOT NULL,
`userid` varchar(100) NOT NULL,
`id` int NOT NULL AUTO_INCREMENT,
`batch` varchar(100) NOT NULL,
primary key(id)
)";
$topic1=mysql_query($topic);
?>
