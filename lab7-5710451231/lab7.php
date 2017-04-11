<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab7-5710451231</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="tableExport/tableExport.js"></script>
<script type="text/javascript" src="tableExport/jquery.base64.js"></script>

<!-- //for pdf -->
<script type ="text/javascript" src = "tableExport/jspdf/jspdf.js"></script>
<script type ="text/javascript" src = "tableExport/jspdf/libs/sprintf.js"></script>
<script type ="text/javascript" src = "tableExport/jspdf/libs/base64.js"></script>

</head>
<body>

<script type ="text/javascript">
$(document).ready(function(e){
  $("#expdf").click(function(e){
    $("#myTable").tableExport({
      type: 'pdf',
      escape: 'false'

    });
  });

  $("#exexcel").click(function(e){
    $("#myTable").tableExport({
      type: 'excel',
      escape: 'false'
    });
  });

  $("#exxml").click(function(e){
    $("#myTable").tableExport({
      type: 'xml',
      escape: 'false'
    });
  });

  $("#extext").click(function(e){
    $("#myTable").tableExport({
      type: 'text',
      escape: 'false'
    });
  });

});
</script>


<!-- <h2><font color=#FF6666>2.ชื่อ นามสกุล และตำแหน่งของพนัหงานที่เป็นผู้หญิงและเป็นผู้จัดการ</font></h2> -->
<h2><font color=#FF6666>21.รหัสลูกค้า ชื่อและนามสกุลลูกค้า ว่าไปดูอสังหาวันไหนบ้าง</font></h2>

<?php
echo "<table id='myTable' style='border: solid 1px black;'>";
echo "<thead><tr><th>ClientNo.</th><th>Firstname</th><th>Lastname</th><th>Viewdate</th></tr></thead>";


class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreamhome";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT client.clientno,client.fname,client.lname,viewing.viewdate from viewing inner join client on client.clientno = viewing.clientno");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<div class="container">

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="text-align:center">Choose a export file
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a id ="exexcel" href="#">Excel</a></li>
      <li><a id="expdf" href="#">PDF</a></li>
      <li><a id="exxml" href="#">XML</a></li>
      <li><a id="extext" href="#">TEXT</a></li>
    </ul>
  </div>
</div>

</body>
</html>
