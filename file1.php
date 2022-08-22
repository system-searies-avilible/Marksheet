<?php
//Making a marksheet
echo "<center><h1><strong><ins><i>Student Infomation</i></ins></strong></h1></center>";

echo"<h1><ins>Student 1</ins></h1>";

$name="Moheez";
echo"Name :&nbsp; ".$name."<br/>";

$fname="Abdul-Razzaq";
echo"Father Name : &nbsp;".$fname."<br/>";

$cname="Intermediate";
echo"Class : &nbsp;".$cname."<br/>";

$add="lyari,Karachi";
echo"Address : &nbsp ".$add."<br/>";

echo"<h1><ins>Paper Result</ins></h1>";

$eng=80;
echo"English :&nbsp".$eng."<br/>";

$urd=90;
echo"Urdu :&nbsp".$urd."<br/>";

$mat=70;
echo"Math :&nbsp" .$mat."<br/>";

$bio=80;
echo"Biology :&nbsp".$bio."<br/>";

$che=60;
echo"Chemistry :&nbsp".$che."<br/>";

$obt=$eng+$urd+$mat+$bio+$che;
echo"Total obtained Marks : &nbsp".$obt."<br/>";


$total="500";
echo"Total Marks : &nbsp :".$total."<br/>";

$per=$obt*100/$total."%";
echo"Persontage".$per."<br/>";

if($per>=90 && $per<=100){
	echo"Grade : A+1";
}
if($per>=80 && $per<=89){
	echo"Grade : A+";
}
if($per>=70 && $per<=79){
	echo"Grade : A";
}
if($per>=60 && $per<=69){
	echo"Grade : B";
}
if($per>=50 && $per<=59){
	echo"Grade : C ";
}
if($per>=40 && $per<=49){
	echo"Grade : D";
}
if($per>=30 && $per<=39){
	echo"Grade : E ";
}
if($per<=29){
echo"Grade : Fail";	
	
}
?>

	