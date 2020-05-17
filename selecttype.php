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
		<td colspan="2" align="center"><b>QUESTION PAPER SELECTION</b> </td>
	</tr>
	<tr>
		<td>Select the paper type :</td>
		<td><a href="selectpaper.php">Upload excel File</a>
		</td>		
	</tr>	
	<tr>
	<td></td>
	<td><a href="addpaperuser.php">Create Paper</a></td>
	</tr>
</div>

</form>
</body>
</html>
