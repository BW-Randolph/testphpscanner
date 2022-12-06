<form action="7.betweenscript_userdefine.php" method="get">
<input name="username" type="text">
<input type="submit">
<?php
$name = $_GET['username'];

$regex = "/^([0-9A-Za-z]+)$/";

function checkchar($reg, $str){
	if(preg_match($reg, $str , $result))
		return $str;
	else
		return "admin";
}

$name = checkchar($regex, $name);
echo "<script>".$name."</script>";

?>