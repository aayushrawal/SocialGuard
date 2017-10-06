<!DOCTYPE html>
<html>
<body>

<script> var aa = 0; </script>

<form name="hello" action="" method="">

<input type="text" name="lat" value="lat">
<input type="text" name="lon" value="lon">
<input type="submit" value="ok" onclick="<script>aa=1</script>">

</form>
<?php
$aa = "<script>document.writeln(aa);</script>"
echo $aa;
$lat=0;
$lon=0;
$aa="<script>document.writeln(aa);</script>";
if ($aa==1){
$lat = $_GET['lat'];
$lon = $_GET['lon'];
$aa=0;
}
echo $lat;
echo $lon;
echo "<script>document.writeln(aa);</script>";
?>



</body>
</html>