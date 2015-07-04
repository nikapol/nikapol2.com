<?php
$mysqli = new Mysqli('localhost', 'root', '18081986', 'nikapol_bd');
$mysqli->set_charset('UTF8');
$resylt = $mysqli->query("SELECT * FROM yslygi");
$vuvod = mysqli_fetch_assoc($resylt);
do 
{
    echo $vuvod ['yslyga'];
    echo '<br/>';
    echo $vuvod ['cena'];
    echo '<br/>';
}
 while ($vuvod = mysqli_fetch_assoc($resylt));
 
?>