<!DOCTYPE html>
<html>
<body>
<?php
$link=mysql_connect('epiz_22073562_expenses','epiz_22073562','password')
$db = mysql_select_db("Expenses", $link); 

if(isset($_POST['formSubmit'])){ 
	$Date = $_POST['Date'];
    $Value = $_POST['Value'];
    $Reason = $_POST['Reason'];
    $Vat = $Value * 0.20;
$query = mysql_query("insert into Expenses(date, value, reason,vat) values ('$Date', '$Value', '$Reason', '$Vat')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection);
?>


</body>
</html>
