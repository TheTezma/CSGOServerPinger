<?php
include 'database.php';
include 'ping.php';

$stmt = $Connect->prepare("SELECT * FROM servers");
$stmt->execute();

foreach($stmt as $server) {
	ping($server['ip']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>