<form action="6.betweenscript_htmlenetities.php" method="get">
<input name="username" type="text">
<input type="submit">
<?php
$name = $_GET['username'];
$name = htmlentities($name);
if($name=="admin"){
	echo "hello";
}
else
	echo "<script>".$name."</script>";
?>