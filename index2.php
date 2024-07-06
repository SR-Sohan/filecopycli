<?php 

$shortoptions = "f:t:";
$longoptions = ["f:","t:"];

$options = getopt('',$longoptions);

$from = $options['f'];
$to = $options['t'];


for($i=$from;$i<=$to;$i++){
    echo $i.PHP_EOL;
}

