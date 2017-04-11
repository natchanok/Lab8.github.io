
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$cusID =$czID =$fname =$lname="";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$cusID = $_POST["cusID"];
		$czID = $_POST["czID"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
	}
	
	$sql = "INSERT INTO customers (CustomerID, CitizenID, Firstname,Lastname)
    VALUES ('$cusID', '$czID', '$fname','$lname')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<h1>Information</h1>
<table width="200" border="1" bordercolor="#FF9999">
  <tr>
    <td>CustomerID</td>
    <td><input type ="text" name ="cusID" "id="cusID"></td>
  </tr>
  <tr>
    <td>CitizenID</td>
    <td><input type ="text" name="czID" =id="czID"></td>
  </tr>
  <tr>
    <td>Firstname</td>
    <td><input type ="text" name="fname" id="fname"></td>
  </tr>
  <tr>
    <td>Lastname</td>
    <td><input type ="text" name ="lname" id="lname"></td>
  </tr>  
</table>
<input type ="submit" id="submit" name="submit" value="submit">
</form>

<?php
echo $cusID;
echo "<br>";
echo $czID;
echo "<br>";
echo $fname;
echo "<br>";
echo $lname;
?>


</body>
</html>