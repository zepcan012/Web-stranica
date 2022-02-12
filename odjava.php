<?php
session_start();
?>
<?php
if(empty($_SESSION)){
	header("location: admin.php");
}
?>

<?php

session_destroy();
session_unset();
header("location:admin.php");

?>