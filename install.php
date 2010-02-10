<html>
<head>
<?php 
require_once('class/class.install.php');

$install = new Installer();
?>
</head>
<title>APINSTALL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="bar.css" rel="stylesheet" type="text/css" />
<body>


<center>
<form method="post">
<input type="submit" name="submit" value="Submit"> 
</form>
</center>

	<div id="apinstall"></div>


<?php

if(isset($_POST['submit']))
{


$install->includeCSS();
$install->setLogPath('/home/otsoft/public_html/blog/apinstall'); //without trailing slash!
$install->setSteps(12);
$install->generate('#84AEBE');

$output = 'Submiting form';
$install->save($output);
$install->delay(2);

$output = 'Including Apinstall class';
$install->save($output);
$install->delay(1);

$output = 'Initializing Apinstall class';
$install->save($output);
$install->delay(1);

$output = 'Including CSS stylesheet';
$install->save($output);
$install->delay(1);

$output = 'Including jQuery javascript';
$install->save($output);
$install->delay(1);

$output = 'Setting logfile path';
$install->save($output);
$install->delay(1);

$output = 'Is writable?';
$install->save($output);
$install->delay(0.6);

$output = 'Setting steps of process';
$install->save($output);
$install ->delay(1);

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