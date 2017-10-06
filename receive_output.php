<html>
<style>
body
{
background-color: #606468
}
p{
font-family: 'Open Sans', sans-serif;
font-color:#eee;
font-size: 40;
text-align: center;
}

p {
  margin-bottom: 24px;
  margin-bottom: 1.5rem;
  margin-top: 24px;
  margin-top: 1.5rem;
}


</style>
<?php 

define('HOST', 'localhost');
define('USER', 'id2852952_helloworld');
define('DB', 'id2852952_admin');
define('PASS', 'helloworld');



$cnttm=0;
$cnttp=0;

$cnthm=0;
$cnthp=0;

$cntam=0;
$cntap=0;


$lat = $_GET['t1'];
$lon = $_GET['t2'];

//echo $lat;
//echo "\t";
//echo $lon;
//echo "\t";
$db = mysqli_connect(HOST, USER, PASS, DB) or die("hey");

$query="select * from accidents";
$result=mysqli_query($db,$query);
while ($row=mysqli_fetch_array($result)) {
	if (( ($row['lat']-$lat<0.002) && ($row['lat']-$lat>-0.002)) && (($row['lon']-$lon<0.002) && ($row['lon']-$lon>-0.002) )){
		if($row['type']=='Accidents'){
			if($row['rate']>0){
				$cntap++;
			}
			else{
				$cntam++;
			}
		}
		if($row['type']=='Harrasment'){
			if($row['rate']>0){
				$cnthp++;
			}
			else{
				$cnthm++;
			}
		}
		if($row['type']=='Theft'){
			if($row['rate']>0){
				$cnttp++;
			}
			else{
				$cnttm++;
			}
		}

	}
}
echo "<p>No. of People that reported NO to Theft : ";
echo $cnttm;
echo "<br>People reported YES to Theft : ";
echo $cnttp;
echo "<br>People reported NO to Harrasment : ";
echo $cnthm;
echo "<br>People reported YES to Harrasment : ";
echo $cnthp;
echo "<br>People reported NO to Accidents : ";
echo $cntam;
echo "<br>People reported YES to Accidents : ";
echo $cntap;
echo "</p>";
?>

<br>
<br>
<button onclick="abc()">
BACK
</button>
<script>
function abc()
{
window.open("login.php?username=1&password=2");
}
</script>
</html>