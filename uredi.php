<?php
session_start();
?>
<?php
if(empty($_SESSION)){
	header("location:admin.php");
}
?>

<?php
echo "<br>";
	$user='root';
$pass = '';
$db = 'orion';
$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");
echo "<br>";
echo "<br>";

$id=$_GET["id"];

$datum="";
$vrijeme="";
$opis="";

$res=mysqli_query($db,"select * from event where id=$id");
while($row=mysqli_fetch_array($res)){
    $datum=$row["datum"];
    $vrijeme=$row["vrijeme"];
    $opis=$row["opis"];
}
	
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>





.linkovi{
	text-align:center;
	font-size:20px;

}

.forma{
	text-align:center;
	font-size:25px;
}
h3{
	text-align:center;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body>
	


	<br><br><br><br>
	<div class = "naslov">
		<h3>Uredite stavke događaja:</h3>
	</div>





	<div>
	<form class="uredi" method="POST" >
	    <label for="datum">Datum</label>
		<input type="text" id="datum" name="datum" placeholder="Unesite datum događaja:" value="<?php echo $datum; ?>">

    	<label for="vrijeme">Vrijeme</label>
    	<input type="text" id="vrijeme" name="vrijeme" placeholder="Unesite vrijeme događaja:" value="<?php echo $vrijeme; ?>">

    	<label for="opis">Opis</label>
    	<input type="text" id="opis" name="opis" placeholder="Opis događaja:" value="<?php echo $opis; ?>">
	<br><br>
  
    <button type="submit" name="uredi" >Uredi </button>
  </form>
</div>




	

	<div class="linkovi">

		<button onclick="document.location='ispis.php'">Ispis svih događaja</button>
		<br><br>
		<button onclick="document.location='odjava.php'">Odjava</button>

	</div>

	<br><br><br><br><br><br><br><br><br><br><br>



<?php

if(isset($_POST["uredi"])){
    mysqli_query($db,"update event set datum='$_POST[datum]',vrijeme='$_POST[vrijeme]',opis='$_POST[opis]' where id=$id");
    header("location: ispis.php");
}

?>

</body>
</html>

