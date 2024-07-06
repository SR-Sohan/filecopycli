<?php 

$longOptions = ["c:","o:"];


$options = getopt("",$longOptions);

$inputFile = $options['c'];
$outputFile = $options['o'];

$fileContent = file_get_contents($inputFile);

file_put_contents($outputFile,$fileContent);
