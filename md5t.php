<?php
if(isset($_GET["m"])){
$mm=md5(md5(md5($_GET["m"])));
echo $mm;


}
?>
<form method="get">
<input type="text" name="m">
<input type="submit">

</form>
