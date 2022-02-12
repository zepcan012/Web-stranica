<?php
session_start();
?>
<?php
if(empty($_SESSION)){
	header("location: admin.php");
}
?>

<?php
echo "<br>";
	$user='root';
$pass = '';
$db = 'orion';
$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

$id =$_GET["id"];

mysqli_query($db, "delete from event where id=$id");
header("location:ispis.php");
?>



