<?php
// ================
// Foreach pada PHP
// ================
// Foreach adalah
echo "<h2> Contoh Foreach </h2>";

$nama = array("elsa","anna","stephan");

for($a=0; $a<count($nama); $a++){
	echo $nama[$a]."<br/>";
}
?>