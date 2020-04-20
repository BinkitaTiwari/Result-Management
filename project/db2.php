<html>
<?php
if(isset($_POST['b1']))
{
$cn=mysql_connect("localhost","root","");
if(!$cn)
{
	
	die("databse connectivity failed" .mysql_error());
}
$db=mysql_select_db("student report",$cn);
if(!$db)
{
	
	die ("databse selection failed" .mysql_error());
}
}
?>

<head>
<title></title><!--
<style type="text/css">

#stu
{
	font-family:"Trebuchet MS",Arial,Helvetica,sans-serif;
	width=100%;
	border-collapse:collapse;
}
#stu d,#stu h
{
	font-size:1em;
	border:1px solid #98bf21;
	padding:3px 7px 2px 7px;
}
#stu h
{
	font-size:1.1em;
	text-align:left;
	padding-top:5px;
	padding-bottom:4px;
	background-color:#A7C942;
	color:#ffffff;
}
#stu tr.alt td
{
	color:#000000;
	background-color:#EAF2D3;
}
#top_header
{
	background:blue;
	border:1px solid black;
	text align:center;
	padding:20px;
}

</style>-->
</head> 
<body>
<?php
/*
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(1,'Akansha Agrawal','Ramkant Agrawal',1145,90,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(2,'Jyoti Verma','Akhil Verma',1245,85,82,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(3,'Akansha Sharma','Ramkant Sharma',1345,90,92,95,90,92)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(4,'Radhika Mittal','Rupesh Mittal',1445,80,92,93,80,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(5,'Anamika Deshmukh ','Anil Deshmukh',1545,90,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(6,'Shreya Agrawal','Prashant Agrawal',1645,70,92,85,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(7,'Swaril Singhal','Ramakant Singhal',1745,90,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(8,'Rahul Jain','Hemant Jain',1845,90,92,93,85,94)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(9,'Afreen Jahan','Md Ahmed Jahan,1945,80,92,85,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(10,'Devyanshi Chandrakar','Rajkumar Chandrakar',2045,90,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(11,'Rahul Agrawal','Ankit Agrawal',2145,90,82,93,80,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(12,'Alok Tiwari','Rajesh Tiwari',2245,80,92,73,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(13,'Mohit suri','Aniket Suri',2345,90,72,93,90,90)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(14,'Zaheer Khan','Md. Aftab Khan',2445,90,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(15,'Nikhil Agrawal','Shashikant Agrawal',2545,90,82,76,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(16,'Chirag Singh','Anil Singh',2645,80,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(17,'Ravi Dubey','Raman Dubey',2745,90,92,83,80,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(18,'Raj Singhaniya','Hemant Singhaniya',2845,90,92,93,90,89)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(19,'Aniket Rathod','Lakshay Rathod',2945,90,72,93,70,79)");
mysql_query("INSERT INTO report(Rollno,Name,father_name,Admission_Number,English,Physics,Chemistry,Maths,IP) VALUES(20,'Anurag Singh','Aman Singh',3045,90,72,93,95,76)");
*/
$rs=mysql_query("select * from report" ,$cn);
if(!$rs)
{
	die("Database query failed:".mysql_error());
}
?>
<!--<header id="top_header" align="center">-->
<h1>KRISHNA PUBLIC SCHOOL</h1><br>
<h3>RESULT OF CLASS XI</h3></header>
<h3>Display results</h3>

<h1>Personal Details:</h1><br>
<?php
while($row=mysql_fetch_assoc($rs))
{
	if($row["Rollno"]==$_POST['t1'])
	{
		//echo "Name :"."&nbsp;"."&nbsp;" .$row["Name"]."<br>";."<td>".father_name:.$row["father_name"]."</td>"."</tr>";
		//echo'<table id="stu" border=\"2\">';
		//echo"<tr>";
		//echo"<td>";
		echo "<h3>"."Name"."&nbsp;"."&nbsp;". ":"."&nbsp;"."&nbsp;";
		//echo"</td>";
		//echo"<td>";
		echo $row["Name"]."<br>"."<br>";
		//echo"</td>";echo"</tr>";
		echo "father_name"."&nbsp;". ":"."&nbsp;"."&nbsp;";
		echo $row["father_name"]."<br>"."<br>";
		echo "Admission_Number"."&nbsp;".":"."&nbsp;"."&nbsp;";
		echo $row["Admission_Number"]."<br>"."<br>";
		echo "Roll Number"."&nbsp;"."&nbsp;". ":"."&nbsp;"."&nbsp;";
		echo $row["Rollno"]."<br>"."<br>"."</h3>";
		
		echo"<h1>"."Marks Details:"."</h1>"."<br>";
		echo "<h3>"."English"."&nbsp;".":"."&nbsp;"."&nbsp;";
		echo $row["English"]."<br>"."<br>";
		echo "Physics"."&nbsp;".":"."&nbsp;"."&nbsp;";
		echo $row["Physics"]."<br>"."<br>";
		echo "Chemistry"."&nbsp;".":"."&nbsp;"."&nbsp;";
		echo $row["Chemistry"]."<br>"."<br>";
		echo "Maths"."&nbsp;".":"."&nbsp;"."&nbsp;";
		echo $row["Maths"]."<br>"."<br>";
		echo "IP"."&nbsp;".":"."&nbsp;"."&nbsp;";
		echo $row["IP"]."</h3>"."<br>"."<br>";
		
		
		echo"<h1>"."Result:"."</h1>"."<br>";
		$English=$_POST($row["English"]);
		$Physics=$_POST($row["Physics"]);
		$Chemistry=$_POST($row["Chemistry"]);
		$Maths=$_POST($row["Maths"]);
		$IP=$_POST($row["IP"]);
		
		$total=$English+$Physics+$Chemistry+$Maths+$IP;
		echo"<h3>"."Total"."&nbsp;"."&nbsp;".":".$total."<br>"."<br>";
		
		
	}
	
}

?>
<?php
/*
echo"<tr>";
echo"<td>" ;
echo "Name:";
echo"</td>";
echo"<td>";
echo mysql_query("select Name from report where Rollno = 1");
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";
echo"father_name:";
echo"</td>";
echo"<td>";
echo mysql_query("select father_name from report where Rollno=1");
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";
echo"Roll No.:";
echo"</td>";
echo"<td>";
echo mysql_query("select Rollno from report where Rollno=1");
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";
echo"Admission No.:";
echo"</td>";
echo"<td>";
echo mysql_query("select Admission_Number from report where Rollno=1");
echo"</td>";
echo"</tr>";
*/?>
</body>
</html>
<?php

mysql_close($cn);
?>

