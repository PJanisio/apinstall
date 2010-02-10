<?php

$f = file('l.log');
$lines = count(file('l.log'));
echo $f[$lines - 1];

?>