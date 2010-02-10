<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
</head>
<title>APINSTALL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<body>
<script type="text/javascript">
var refreshId = setInterval(function()
{
     $('#install').load('logprint.php');
}, 500);
</script>

<?php

require_once('class/class.install.php');
$install = new Installer;

$install->setLogPath('l.log');


echo '<div id="install"></div>';


$output = 'Starting nuclear reactions...';
$install->save($output);
$install->sleepThicks(1);
$output = 'Clearing cached data';
$install->save($output);
$install->sleepThicks(2);
$output = 'Finishing';
$install->save($output);
$install ->sleepThicks(4);
$output = 'Done';
$install->save($output);


?>
</body>
</html>