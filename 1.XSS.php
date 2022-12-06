<form action="1.XSS.php" method="get">
<input name="username" type="text">
<input type="submit">
<?php
$name = $_GET['username'];
if($name=="admin"){
	echo "hello";
}
else
	echo "hello".$name;
?>