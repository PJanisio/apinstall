<html>
<head>
</head>
<title>APINSTALL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<body>

<center>
<form method="post">
<input type="submit" name="submit" value="Submit"> 
</form>
</center>



<?php

if(isset($_POST['submit']))
{
require_once('class/class.install.php');

$install = new Installer();

$install->includeCSS();
$install->setLogPath('raport.log');
$install->setSteps(12);
$install->generate('#84AEBE');



echo '<div id="apinstall"></div>';


$output = 'Submiting form';
$install->save($output);
$install->delay(2);

$output = 'Including Apinstall class';
$install->save($output);
$install->delay(0.20);

$output = 'Initializing Apinstall class';
$install->save($output);
$install->delay(0.5);

$output = 'Including CSS stylesheet';
$install->save($output);
$install->delay(0.20);

$output = 'Including jQuery javascript';
$install->save($output);
$install->delay(0.20);

$output = 'Setting logfile path';
$install->save($output);
$install->delay(0.30);

$output = 'Is writable?';
$install->save($output);
$install->delay(0.20);

$output = 'Setting steps of process';
$install->save($output);
$install ->delay(0.30);

$output = 'Generation of PHP temp file';
$install->save($output);
$install ->delay(1);

$output = 'Parsing and displaying progress bar';
$install->save($output);
$install ->delay(2);

$output = 'Initialize delays';
$install->save($output);
$install ->delay(1);

$output = 'Clean temporary files.';
$install->save($output);
$install ->delay(5);

$install->clearTemp();

}
?>
</body>
</html>