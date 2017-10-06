<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {


	$value = $_GET['value'];

	echo $value;


}

else {

	echo "Maa Chuda!";

}

?>