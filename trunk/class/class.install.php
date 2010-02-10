<?php

/*
Title: Apinstall 0.0.2
Author: Pawel 'Pavlus' Janisio
License: GPLv3
*/

class Installer
{
public $steps = 0;
public $logData;
public $path;

public function __construct($jquery = NULL)
	{
		
		if(!isset($jquery)){
		//include google jQuery libraries
		echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>';
		}
		else
		{
			//echo 'Warning: jQuery libraries are not included!';
		}

		//include javascript
		echo "<script type='text/javascript'>
		var refreshId = setInterval(function()
{
     $('#apinstall').load('print.php');
}, 10);
</script>";



	}

public function setLogPath($path)
	{
	$this->path = $path;
	return $this->path;

	}

	public function showPath()
	{

	return $this->path;

	}

public function setSteps($count)
	{
	$this->steps = $count;
	return $this->steps;
	}

	public function showSteps()
	{

		return $this->steps;
	}

	public function generatePrint()
	{
	
	
	$fp = fopen('print.php', "a+"); 
	$data = '<?php


$steps = '.$this->steps.';
$lines = count(file("'.$this->path.'"));

$width = round(($lines/'.$this->steps.')*100,2);
?>
<div class="meter-wrap">
    <div class="meter-value" style="background-color: #0a0; width: <?php echo $width; ?>%;">
        <div class="meter-text">
		<?php echo $width; ?> %
        </div>
    </div>
</div><br>
<?php

$f = file("'.$this->path.'");
echo $f[$lines - 1];

?>';

	$fw = fwrite($fp, $data);  //save
	fclose($fp);


	}

public function delay($sec)
	{
	$this->sleepTime = abs($sec);

	
    if ($this->sleepTime < 1)
       return usleep($this->sleepTime*1000000); 
    else
       return sleep($this->sleepTime);
	}



public function save($output)
	{
$this->logData = $output;

$fp = fopen($this->path, "a+"); 
$fw = fwrite($fp, $this->logData."\r\n");  //save
fclose($fp);
$this->steps++;

	}

	public function clearTemp()
	{

	file_put_contents($this->path, '');
	file_put_contents('print.php', '');

	}



}