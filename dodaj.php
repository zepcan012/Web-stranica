<?php
session_start();
?>
<?php
if(empty($_SESSION)){
	header("location:admin.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">



<style>
.header{
    background: rgb(0, 0, 0);
    padding: 6px 24px;
    /*text-align: left;*/
    text-align: center;

    color: white;
    margin: 0px;
    letter-spacing: 1px;
    font: caption;
    font-size: 24px;
    text-transform: uppercase;
  }
  footer {
	background-color: black;
   color: white;
    text-align: center;
    padding-top:40px;
    position: absolute;
    width: 100%;  
  
}


.linkovi{
	text-align:center;
	font-size:20px;

}

.forma{
	text-align:center;
	font-size:20px;
	margin:auto;
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
	
	<div class="header">
		<h3><strong>Astronomski klub</strong> </h3>
		<img src="slike/logo1.jpg"   width="300" height="100"/>		
	</div>

	<br><br><br><br>
	<div class = "naslov">
		<h3>Unesite detalje događaja:</h3>
	</div>


<div>
<form class="dodajdog" method="POST" action= "dodaj.php">
    <label for="datum">Datum</label>
    <input type="text"  name="datum" placeholder="Datum događaja">

    <label for="vrijeme">Vrijeme</label>
    <input type="text" name="vrijeme" placeholder="Vrijeme događaja">

    <label for="opis">Opis</label>
    <input type="text" name="opis" placeholder="Opis događaja...">
	<br><br>
  
    <button type="submit" name="dodaj" id="dodaj">Dodaj događaj</button>
  </form>
</div>

	
	


	<br><br><br>

	<div class="linkovi">

		<button onclick="document.location='ispis.php'">Ispis svih događaja</button>
		<br><br>
		<button onclick="document.location='odjava.php'">Odjava</button>
		<br><br>

	</div>

	<br><br><br><br><br><br><br><br>

<footer>
	<img src="slike/logo1.jpg"   width="300" height="100"/> <br><br>
	<p>©Copyright Astronomski klub "Orion" 2020./2021. Lejla Žepčan, Web programiranje, stručni studij računarstva 3. godina</p>

	
</footer>




<?php
echo "<br>";
	$user='root';
$pass = '';
$db = 'orion';
$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");
echo "<br>";
echo "<br>";


	
	if(isset($_POST['dodaj'])){
		$datum = $_POST['datum'];
		$vrijeme = $_POST['vrijeme'];
		$opis = $_POST['opis'];
		
		$unos = "insert into event (datum, vrijeme, opis) values
		('$datum','$vrijeme','$opis')";
		if(mysqli_query($db,$unos)){
			header("location:dodaj.php");
		}else{
			echo "GREŠKA! Nije dodan događaj!";
		}
	}
	
	
?>



</body>
</html>