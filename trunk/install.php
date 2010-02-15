<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>APINSTALL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

//include class
require_once('class/class.install.php');

//initialize class
$install = new Installer();

?>
</head>
<body>
<!-- Rememer to add form id="apiform" and target="progressFrame" to make script working -->
<center><form id="apiform" target="progressFrame" method="post">
					<input id="apisubmit" type="submit" name="submit" value="Show me how it works!"> 
					</form></center>
<?php 


//load form, define progress bar colours
$install->placeholder();

if(isset($_POST['submit']))
{
//set path to temp files f.e /home/otsoft/public_html/apinstall
$install->setLogPath(''); //without trailing slash!

//set number of process steps
$install->setSteps(21);

//define colours
$install->defineBar('#E54000', '#E54000');


//define your process output
$output = 'Setting class variables';
$install->save($output);
$install->delay(0.5);

$output = 'Disabling time limit';
$install->save($output);
$install->delay(0.5);

$output = 'Generating random numbers';
$install->save($output);
$install->delay(1);

$output = 'Including CSS stylesheet';
$install->save($output);
$install->delay(0.5);

$output = 'Including jQuery javascript from Googleapis.com';
$install->save($output);
$install->delay(1);

$output = 'Including jQuery javascript';
$install->save($output);
$install->delay(0.5);

$output = 'Form generation';
$install->save($output);
$install->delay(0.6);

$output = 'Setting log path';
$install->save($output);
$install ->delay(0.4);

$output = 'Defining number of steps';
$install->save($output);
$install ->delay(0.8);

$output = 'Setting progress bar variables';
$install->save($output);
$install ->delay(1);

$output = 'Form submition';
$install->save($output);
$install->delay(0.9);

$output = 'Creating temporary PHP file';
$install->save($output);
$install ->delay(1);

$output = 'Animate progress bar';
$install->save($output);
$install ->delay(0.7);

$output = 'Save output to log file';
$install->save($output);
$install ->delay(0.7);

$output = 'Initialize delay';
$install->save($output);
$install ->delay(0.7);

$output = 'Animate progress bar';
$install->save($output);
$install ->delay(0.8);

$output = 'Animate progress bar';
$install->save($output);
$install ->delay(0.5);

$output = 'Animate progress bar';
$install->save($output);
$install ->delay(0.4);

$output = 'Animate progress bar';
$install->save($output);
$install ->delay(0.2);

$output = 'Clear temporary files';
$install->save($output);
$install ->delay(0.5);

$output = 'Finish loading';
$install->save($output);
$install ->delay(0.8);

//clear temporary data (true == deleting files, nothing == clearing files)

$install->clearTemp(true); 


}


?>
</body>
</html>