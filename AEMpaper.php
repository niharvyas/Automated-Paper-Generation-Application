<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Add paper</title>
		<link rel="stylesheet" href="1.css" type="text/css"/>
		  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />


</head>
	<body>
<?php	

 include ('header.php');
?> 
<?php
ini_set( "display_errors", 0); 

require 'Classes/PHPExcel/IOFactory.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbexam";

if(isset($_POST['upload']))
{
$inputfilename = $_FILES['file']['tmp_name'];
$exceldata=array();

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
die("connection failed :" .$mysqli_connect_error());
}
try 
{

$inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
$objReader = PHPExcel_IOFactory::createReader($inputfiletype);
$objPHPExcel = $objReader->load($inputfilename);
}
catch (Exception $e)
{
	die ('error loading file :"' .pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row =1 ; $row <= $highestRow ; $row++)
{
	$rowData = $sheet  ->rangeToArray('A'. $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
	
	$sql = "insert into tbaem(number, questions, marks) values ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."')";
	
	if(mysqli_query($conn,$sql))
	{
		$exceldata=$rowData[0];
	}
	else
	{
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}
	
		
	


echo "<table border='1'>";
foreach ($exceldata as $excelraw)
{
	echo "<tr>";
	foreach ($excelraw as $excelcolumn)
	{
		echo "$excelcolumn";
	}
	echo "</tr>";
}
}
echo "</table>";
mysqli_close($conn);
}
header( "refresh:20;url=questionpaperaem.php");
?>


<div id="bottom">


<div id="content">
 <hr>
 
<hr/>
<div id="papers_menu">
</div>
<table border="1" align ="center">
		
			<form action="" method='POST' enctype='multipart/form-data'>
			<tr align="center">
		<input type='file' name='file' /></tr>
		<tr>
		<input type='submit' name='upload' value='upload' />
	</tr>
</form>
</table>
</div>
</div>

</body>
</html>
