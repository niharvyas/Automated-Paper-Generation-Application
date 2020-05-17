<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Select Paper</title>
		<link rel="stylesheet" href="1.css" type="text/css"/>
		  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />


</head>
	<body>
<?php	

 include ('header.php');
?> 
<div id="bottom">


<div id="content">
 <hr>
 
<hr/>
<div id="papers_menu">
</div>
<table border="1" align ="center">
	<tr>
		<td colspan="2" align="center"><b>QUESTION PAPER DETAILS</b> </td>
	</tr>
	<tr>
		<td>Select the subject :</td>
		<td><a href="AEMpaper.php" name="subid" value="1">AEM</a>
		</td>		
	</tr>	
		<tr>
		<td></td>
		<td><a href="DSpaper.php" name="subid" value="2">DS</a>
		</td>		
	</tr>
	
</div>

</body>
</html>
