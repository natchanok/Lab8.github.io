<head>
<title>Lab05</title>
<link rel="stylesheet" type="text/css" href="style.css" >
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body onLoad="loadDatatoCombo()">

<div class="intro" id="intro">
<h1><img src="PersonalInfo-PlannerIcons.png" width="85" height="86"> Personal information</img></h1></div>  

<div class="pro" id="pro" style="display:none">
<h1>Province</h1></div>  
<div class="img" id="img" style="display:none"></div>  
<div class="captions" id="captions" style="display:none"><h2></h2></div>  


<p><span class="error">* required field.</span></p>
<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="740" border="0" align="center" cellspacing="0">
  <tr><td width="300" height="47"><p><br>
    <label class="firstname" for="firstname">First name :</label>
    <input type="text" id ="firstname" name="firstname"border="2">

  </p></td></tr>
  <td width="300" height="47"><p>
  <label class="lastname" for="lastname">
    Lastname :</label>    
  <input type="text" id ="lastname" border="2">

  </p></td></tr>
  
  <tr> <td width="300" height="47"><p><label class="birthday" for="birthday">Birthday :</label>  <input type="date" id ="birthday" border="2"  value="<?php echo $birthday;?>">
 
  <tr><td width="300" height="47">
  <label class="gender" for="gender">Gender : </label>
  <input type="radio" id="gender" checked <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male" name="gender">male                                 
<input type="radio" id="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female" name="gender">female

</tr><tr>
<td width="300" height="47"><label class="province" id="prov">Province:</label>
  <select id="province" name="province">
  <option value="" disabled selected value>-------select-------</option>
  <option value="1">กรุงเทพมหานคร</option>
  <option value="2">กระบี่ </option>
  <option value="3">กาญจนบุรี </option>
  <option value="4">กาฬสินธุ์ </option>
  <option value="5">กำแพงเพชร </option>
  <option value="6">ขอนแก่น</option>
  <option value="7">จันทบุรี</option>
   <option value="8">ฉะเชิงเทรา </option>
  <option value="9">ชัยนาท </option>
 <option value="10">ชัยภูมิ </option>
 <option value="11">ชุมพร </option>
<option value="12">ชลบุรี </option>
<option value="13">เชียงใหม่ </option>
 <option value="14">เชียงราย </option>
 <option value="15">ตรัง </option>
<option value="16">ตราด </option>
   <option value="17">ตาก </option>
   <option value="18">นครนายก </option>
  <option value="19">นครปฐม </option>
   <option value="20">นครพนม </option>
   <option value="21">นครราชสีมา </option>
  <option value="22">นครศรีธรรมราช </option>
<option value="23">นครสวรรค์ </option>
   <option value="24">นราธิวาส </option>
 <option value="25">น่าน </option>
<option value="26">นนทบุรี </option>
  <option value="27">บึงกาฬ</option>
<option value="28">บุรีรัมย์</option>
   <option value="29">ประจวบคีรีขันธ์ </option>
  <option value="30">ปทุมธานี </option>
 <option value="31">ปราจีนบุรี </option>
<option value="32">ปัตตานี </option>
<option value="33">พะเยา </option>
   <option value="34">พระนครศรีอยุธยา </option>
  <option value="35">พังงา </option>
 <option value="36">พิจิตร </option>
 <option value="37">พิษณุโลก </option>
 <option value="38">เพชรบุรี </option>
    <option value="39">เพชรบูรณ์ </option>
  <option value="40">แพร่ </option>
  <option value="41">พัทลุง </option>
   <option value="42">ภูเก็ต </option>
  <option value="43">มหาสารคาม </option>
  <option value="44">มุกดาหาร </option>
    <option value="45">แม่ฮ่องสอน </option>
   <option value="46">ยโสธร </option>
   <option value="47">ยะลา </option>
   <option value="48">ร้อยเอ็ด </option>
 <option value="49">ระนอง </option>
 <option value="50">ระยอง </option>
 <option value="51">ราชบุรี</option>
     <option value="52">ลพบุรี </option>
     <option value="53">ลำปาง </option>
    <option value="54">ลำพูน </option>
   <option value="55">เลย </option>
    <option value="56">ศรีสะเกษ</option>
   <option value="57">สกลนคร</option>
    <option value="58">สงขลา </option>
   <option value="59">สมุทรสาคร </option>
   <option value="60">สมุทรปราการ </option>
   <option value="61">สมุทรสงคราม </option>
   <option value="62">สระแก้ว </option>
    <option value="63">สระบุรี </option>
     <option value="64">สิงห์บุรี </option>
    <option value="65">สุโขทัย </option>
   <option value="66">สุพรรณบุรี </option>
    <option value="67">สุราษฎร์ธานี </option>
     <option value="68">สุรินทร์ </option>
     <option value="69">สตูล </option>
   <option value="70">หนองคาย </option>
    <option value="71">หนองบัวลำภู </option>
   <option value="72">อำนาจเจริญ </option>
   <option value="73">อุดรธานี </option>
   <option value="74">อุตรดิตถ์ </option>
    <option value="75">อุทัยธานี </option>
   <option value="76">อุบลราชธานี</option>
   <option value="77">อ่างทอง </option>

</select></tr>
  
  <tr>
    <td width="300" height="47">                           
    <input type="button" class="buttonS" onClick="checkData()" id="Submit" value="Submit">
    <input type="button" id="Cancel" class="buttonC" value="Cancel"></td></tr>
  <tr>
    <td width="300" height="47">&nbsp;</td></tr>


</table>
</form>

<?php

$firstnameErr =$birthdayErr = $provinceErr = $genderErr = $lastnameErr = "";
$firstname = $birthday = $province = $gender = $lastname = "";
$list = array("$firstname","$lastname","$birthday","$gender","$province");


function clickCancel(){
	for($i= 0 ; $i < $list.length ; $i++){
		
		$temp = $list[i];
		$_POST[temp] = "";	
		echo $temp;
	}	
	
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if (empty($_POST["firstname"])) {
    	$firstnameErr = "Firstname is required";
  	} 
	else {
		$firstname = test_input($_POST["firstname"]);
		
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed"; 
		}
	}
	
	if (empty($_POST["lastname"])) {
		$lastnameErr = "Lastname is required";
	} 
	else {
		$lastname = test_input($_POST["lastname"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed"; 
		}
	}
	
	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	} 
	else{
		$gender = test_input($_POST["gender"]);
	}
}
?>

<?php if (isset($_POST["birthday"])){
	
	 if($age<13){
		 echo "<style type=\"text/css\" media=\"screen\">
	 	</style>";
		 
	 }
	 else if($age >= 13){
		 if($_POST['gender'] == 'female'){
			 echo "<style type=\"text/css\" media=\"screen\">
			 </style>";
			 
		 }
		 else if($_POST['gender'] == 'male'){
			 echo "<style type=\"text/css\" media=\"screen\">
			 </style>";
			 
		 }
	 }

}
?>
<div class="demo" id="demo" >
<?php
if (isset($_POST['province'])){
	$myfile = fopen('motto/' . $_POST['province'].".txt", "r") or die("Unable to open file!");
	echo fgets($myfile,4096);
}
?>
<img src=<?php if (isset($_POST['province'])){ echo '/sign'. '/' . $_POST['province']. '.png';}?>/>
</div>
</body>
</html>