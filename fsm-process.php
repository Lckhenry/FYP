<?php
$fsm = $_POST['fsm'];
$JSONFile = fopen("fsm.json","w") or die ("Unable to write the JSON!");
fwrite($JSONFile, $fsm);
fclose($JSONFile);

echo "JSON file is overwritten";

//execute the JSON parser
 ?>
