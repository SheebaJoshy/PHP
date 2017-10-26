<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Updating the database</title>
</head>

<body>
<form name = "Login" action = "" method = "post">

	<table>
		<tr>
			<td>Registration </td>
		</tr>
		<tr>
			<td>First Name</td>
			<td> <input type="text" name = "t1" id = "t1"> </td>
		</tr>
		<tr> 
			<td>Last Name </td>
			<td> <input type= "text" name = "t2" id = "t2"> </td>
		</tr>
		<tr> 
			<td>Email </td>
			<td> <input type="text" name = "t3" id = "t3"> </td>
		</tr>
		<tr> 
			<td>UserName</td>
			<td> <input type="text" name = "t4" id = "t4"> </td>
		</tr>
		<tr>
			<td><input type = "button" name = "b1" value = "Register" onClick="aa();"> </td>		
		</tr>
		
		
		
	</table>
</form>

<script type = "text/javascript">
	function aa()
	{
		Function executed
		var = xmlhttp;
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "insert.php?fnm="+document.getElementsByName(t1).value+"&lnm="+document.getElementsByName(t2).value+"&email="+document.getElementsByName(t3).value+"&unm="+document.getElementsByName(t4).value+, false);
		xmlhttp.send(null);
		
		
	}
	</script>
<?php
	
	<?php
	$serverName = "repotest.database.windows.net";
	$connectionOptions = array(
    "Database" => "UserNameDB",
    "Uid" => "sjoshy",
    "PWD" => "#Kottayam96"
	);
//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);
	
	mysql_query("alter table UserNameDB add columns fname text(20), lname text(20), email text(20), uname text(20)");
	
	&fname = $_GET["fnm"];
	&lname = $_GET["lnm"];
	&email = $_GET["email"];
	&uname = $_GET["uname"];
	
	mysql_query("insert into UserNameDB values('&fnaame', '&lname','&email', '&uname')" );
		
	?>
</body>
</html>