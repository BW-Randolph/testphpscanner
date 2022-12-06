<form action="9.onlyadmin.php" method="get">
<input name="username" type="text">
<input type="submit">
<?php
$name = $_GET['username'];
if($name=="admin"){
	echo $name;
}
else
	echo "user";
?>