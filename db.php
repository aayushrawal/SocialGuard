<?php 

define('HOST', 'localhost');
define('USER', 'id2852952_helloworld');
define('DB', 'id2852952_admin');
define('PASS', 'helloworld');

$db = mysqli_connect(HOST, USER, PASS, DB) or die("Fuck Off");

$query="Select * from users";
mysqli_query($db,$query) or die('Error');

$result=mysqli_query($db,$query);
//$row=mysqli_fetch_array($result);
//echo $row;
while ($row = mysqli_fetch_array($result)) {
        echo "Hello";
	echo $row['ip'];
        echo $row['pass'];
}
echo "out";

?>