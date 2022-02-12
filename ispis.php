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


h3{
	text-align:center;
}
.center {
  margin-left: auto;
  margin-right: auto;
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
		<h3>Popis svih događaja:</h3>
	</div>


	<br><br><br>

	<table class = "center">
	<tr>
	<th>DATUM &emsp;&emsp;&emsp;</th>
	<th>VRIJEME &emsp;&emsp;&emsp;</th>
	<th>OPIS</th>
	</tr>
	
<?php

	$conn = mysqli_connect("localhost","root","","orion");
	if($conn -> connect_error){
		die("Failed:" . $conn -> connect_error);
	}
	
	$sql = "select id,datum,vrijeme,opis from event";
	$result = $conn -> query($sql);
	
	if($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
				echo "<tr>";
				echo "<td>"; echo $row["datum"]; echo "</td>";
				echo "<td>"; echo $row["vrijeme"]; echo "</td>";
				echo "<td>"; echo $row["opis"]; echo "</td>";
				echo "<td>"; ?> <a href="uredi.php?id=<?php echo $row["id"]; ?>"> <button type="button">Uredi</button> </a> <?php echo "</td>";
				echo "<td>"; ?> <a href="izbrisi.php?id=<?php echo $row["id"]; ?>"><button type="button">Izbriši</button></a> <?php echo "</td>";
				echo "</tr>";
			
		}

	

	}
	
		
?>
	</table>


	<br><br><br><br>
	<div class= "linkovi">
		<button onclick="document.location='dodaj.php'">Dodaj novi događaj</button>	
		<br><br>
		<button onclick="document.location='odjava.php'">Odjava</button>
	</div>

	<br><br><br><br><br><br><br><br>


	<footer>
	<img src="slike/logo1.jpg"   width="300" height="100"/> <br><br>
	<p>©Copyright Astronomski klub "Orion" 2020./2021. Lejla Žepčan, Web programiranje, stručni studij računarstva 3. godina</p>

	
</footer>



</body>
</html>