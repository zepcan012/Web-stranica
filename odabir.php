<?php
session_start();
?>
<?php
if(empty($_SESSION)){
	header("location: admin.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">



<style >
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


h1{
	text-align: center;
}
h2{
	text-align: center;
}

.sto{
	text-align:center;
	font-size:25px;
}
.linkovi{
	text-align:center;
	font-size:20px;
;
}

footer {
	background-color: black;
   color: white;
    text-align: center;
    padding-top:40px;
    position: absolute;
    width: 100%;  
}



</style>

</head>


<body>
	<div class="header">
		<h3><strong>Astronomski klub</strong> </h3>
		<img src="slike/logo1.jpg"   width="300" height="100"/>		
	</div>

	<br><br>
	
	<br>
		
	
		<h2>Aktivan administrator: Lejla Žepčan</h3>

	<br><br><br><br>
	<div class = "sto">
		<p><strong>Što želite?</strong></p>
	</div>
	<br><br>

	<div class = "linkovi">
		<button onclick="document.location='dodaj.php'">Dodaj novi događaj</button>
		<br><br>
		<button onclick="document.location='ispis.php'">Ispis svih događaja</button>
		<br><br>
		<button onclick="document.location='odjava.php'">Odjava</button>
		
	</div>
	 
	
	<br><br><br><br><br><br><br><br>

	<footer>
		<img src="slike/logo1.jpg"   width="300" height="100"/> <br><br><br>
		<p>©Copyright Astronomski klub "Orion" 2020./2021. Lejla Žepčan, Web programiranje, stručni studij računarstva 3. godina</p>

		
	</footer>

</body>
</html>