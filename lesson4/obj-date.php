<?php

$date = new DateTime('1991-02-03');
$date->modify('+50 days');
var_dump($date->format('d-m-Y'));

?>