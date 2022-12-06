<form action="10.solver.php" method="get">
name:<input name="username" type="text">
id:<input name="id" type="text">
<input type="submit">
<?php
$name = $_GET['username'];
$id = $_GET['id'];

if($id<2147483648){
	if($id>2147483646){
		echo $name;
	}
}
else
	echo "user";
?>