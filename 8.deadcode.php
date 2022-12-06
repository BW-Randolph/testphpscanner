<form action="8.deadcode.php" method="get">
<input name="username" type="text">

<?php
$name = $_GET['username'];
if($name=="admin"){
	if($name!="admin"){
		echo $name;
	}
}
else
	echo "user";
?>