<?php
include("dictionary.php");


$d = new Dictionary("integer", "string");

$d->Add(2,"Orrange");$d->Add(1,"Apple");


echo "The elements of the array are";
foreach($d->Get() as $r) echo $r;


?>