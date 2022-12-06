<form action="5.betweenscript_htmlspecialchars.php" method="get">
<input name="username" type="text">
<input type="submit">
<?php
$name = $_GET['username'];
$name = htmlspecialchars($name);
if($name=="admin"){
	echo "hello";
}
else
	echo "<script>".$name."</script>";
?>