<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>

<h2>Expenses</h2>

<form name="view_expenses" method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <br>Choose Date:<input type="date" name="Date" value=" ">
  <br><input type="submit" name="formsubmit" value="submit">
</form> 


</body>
</html>


<?php
if(isset($_POST['submit'])) 
{ 
	$link=mysql_connect('epiz_22073562_expenses','admin','password')
	$db = mysql_select_db("Expenses", $link); 

	$query = mysql_query("Select * from Expenses where 'date'='$date'");

    echo "$query";
   	mysql_close($connection);
}
?>