<html>
<script src="jq141.js"></script>
<body>
<script type="text/javascript">
var refreshId = setInterval(function()
{
     $('#install_log').load('logprint.php');
}, 500);
</script>

<?php

require_once('class/class.install.php');
$install = new Installer;

$install->setLogPath('l.log');


echo '<div id="install_log"></div>';


$output = 'Starting nuclear reactions...';
$install->save($output);
sleep(2);
$output = 'Clearing cached data';
$install->save($output);
sleep(1);
$output = 'Finishing';
$install->save($output);
sleep(4);
$output = 'Done';
$install->save($output);




?>
</body>
</html>