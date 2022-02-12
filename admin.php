<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel='stylesheet'  href='adminphp.css' />


<style>
body{
	margin:0;
    padding: 0;
    text-align: center;
    background-size: cover;
    background-position: center;
	font-family: sans-serif;
	background: url(slike/admin3.jpg);
	
	
}


/*
.prijavise{
	margin-top: 100px;
	color: white;
	transition: all 4s ease-in-out;
	font-family: sans-serif;
	font-size: 25px;
  
}
*/
.naslov{
	text-align:center;
	font-size: 30px;
	color:black;
	font-family: sans-serif;


}

input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color:none;
  padding: 20px;
}


</style>


</head>
<body>

	<br><br>
<div class = "pozadina">
<div class = "naslov">
<br><br>
<h1><strong>ADMINISTRATOR</strong></h1>
<h3><strong>Prijava</strong></h3>
</div>

<br>


<div>
<form class="prijava" action="admin.php" method="POST">
    
    <input type="text" name="k_ime" placeholder="Korisničko ime:" >
<br>
    
    <input type="password" name="lozinka" id="lozinka" placeholder="Lozinka:"  >
<br><br>
    <button type="submit" name="login" id="login">Prijavi se</button>
  </form>
</div>


<?php
$user='root';
$pass = '';
$db = 'orion';

$db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
echo "<br>";
	$varijabla = "Pogrešno korisničko ime ili lozinka!";
	
	if(isset($_POST['login'])){
		$k_ime = $_POST['k_ime'];
		$lozinka = $_POST['lozinka'];
		
		
	$sql = "SELECT * FROM korisnik WHERE k_ime = '$k_ime' AND lozinka = '$lozinka' ";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result);
	if($result -> num_rows > 0 ){
		$_SESSION ["imekori"] = "$k_ime";
		header("location:odabir.php");
	}else{
		header("Location: admin.php");
	}
	
	
	}
	
	
?>





</body>
</html>