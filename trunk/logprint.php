<?php


$steps = 4;
$lines = count(file('l.log'));

$width = ($lines/$steps)*100;




echo'<div class="meter-wrap">
    <div class="meter-value" style="background-color: #0a0; width: '.$width.'%;">
        <div class="meter-text">
            '.$lines.'/'.$steps.'
        </div>
    </div>
</div><br>';

$f = file('l.log');
echo $f[$lines - 1];

?>