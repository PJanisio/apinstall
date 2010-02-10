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
$install->setSteps(11);
$install->generate('#84AEBE');




echo '<div id="apinstall"></div>';


$output = 'Opening connection';
$install->save($output);
$install->delay(2);

$output = '1 socket found';
$install->save($output);
$install->delay(0.5);

$output = '2 socket found';
$install->save($output);
$install->delay(0.5);

$output = '3 socket found';
$install->save($output);
$install->delay(0.5);

$output = '4 socket found';
$install->save($output);
$install->delay(0.5);

$output = '5 socket found';
$install->save($output);
$install->delay(0.5);


$output = 'Injecting source code';
$install->save($output);
$install ->delay(3);

$output = 'Closing connections';
$install->save($output);
$install ->delay(1);

$output = 'Cleaning temp files';
$install->save($output);
$install ->delay(2);

$output = 'Escaping from wife ;)';
$install->save($output);
$install ->delay(1);

$output = 'Finished.';
$install->save($output);
$install ->delay(5);

$install->clearTemp();




?>
</body>
</html>