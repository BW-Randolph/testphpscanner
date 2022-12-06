<form action="4.betweenscript.php" method="get">
<input name="username" type="text">
<input type="submit">
<?php
$name = $_GET['username'];
if($name=="admin"){
	echo "hello";
}
else
	echo "<script>".$name."</script>";
?>