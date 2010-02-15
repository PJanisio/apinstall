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
require_once('class/class.install.php');

$install = new Installer();

?>
</head>
<body>


<?php 
$install->parseForm();

if(isset($_POST['submit']))
{

$install->setLogPath(''); //without trailing slash!
$install->setSteps(21);
$install->parseBar('#E54000', '#E54000');

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

$output = 'Form submiting';
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

$install->clearTemp(true); 


}


?>
</body>
</html>