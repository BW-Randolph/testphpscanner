<form action="11.solverdeadcode.php" method="get">
name:<input name="username" type="text"><br>
p:<input name="p" type="text"><br>
q:<input name="q" type="text"><br>
r:<input name="r" type="text"><br>
<input type="submit">
<?php
$name = $_GET['username'];
$p = $_GET['p'];
$q = $_GET['q'];
$r = $_GET['r'];

if(is_int($p)&&is_int($q)&&is_int($r)){
	if(pow($r,3)==pow($p,3)+pow($q,3)){
		if($r*$p*$q>0){
			echo $name;
		}
	}
}
else
	echo "user";
?>