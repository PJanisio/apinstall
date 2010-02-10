<html>
<head>
</head>
<title>APINSTALL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="bar.css" rel="stylesheet" type="text/css" />
<body>


<?php

require_once('class/class.install.php');

$install = new Installer();


$install->setLogPath('l.log');
$install->setSteps(6);
$install->generate('#35464D');




echo '<div id="apinstall"></div>';


$output = 'Starting nuclear reactions...';
$install->save($output);
$install->delay(1);

$output = 'Clearing cached data';
$install->save($output);
$install->delay(2);

$output = 'Polishing';
$install->save($output);
$install ->delay(0.5);

$output = 'Making blowjob';
$install->save($output);
$install ->delay(2);

$output = 'Farting loudly';
$install->save($output);
$install ->delay(2);

$output = 'Done';
$install->save($output);
$install ->delay(5);

$install->clearTemp();




?>
</body>
</html>