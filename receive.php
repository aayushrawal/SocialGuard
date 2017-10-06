<?php 

define('HOST', 'localhost');
define('USER', 'id2852952_helloworld');
define('DB', 'id2852952_admin');
define('PASS', 'helloworld');

$lat = $_GET['t1'];
$lon = $_GET['t2'];
$rate = $_GET['t3'];
$type = $_GET['t4'];


$db = mysqli_connect(HOST, USER, PASS, DB) or die("Fuck Off");

$query="insert into accidents(lat, lon, rate, date_time, type) values($lat, $lon, $rate, '1998-09-16 12:23:23', '$type')";
mysqli_query($db,$query) or die('Error');
echo '<script type = "text/javascript">window.location="login.php?username=1&password=1"</script>';?>