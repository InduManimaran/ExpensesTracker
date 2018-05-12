<?php
$link=mysql_connect('localhost','admin','password')
$db = mysql_select_db("Expenses", $link); // Selecting Database from Server

if(isset($_POST['formSubmit'])){ // Fetching variables of the form which travels in URL
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
mysql_close($connection); // 
?>