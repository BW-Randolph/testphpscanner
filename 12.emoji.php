<form action="12.emoji.php" method="get">
name:<input name="username" type="text"><br>
<input type="submit">
<?
$☀ = $_GET['username'];
if($☀=="admin"){
	echo "hello";
}
else
	echo "hello".$☀;
?>