<?php

/*
Title: Apinstall 0.0.3a
Author: Pawel 'Pavlus' Janisio
Source: http://code.google.com/p/apinstall/
License: GPLv3
*/

class Installer
{
public $steps = 0;
public $logData;
public $path;

public function __construct($jquery = NULL)
	{

		 set_time_limit(0); //we need to do this in case of windows users and usleep function
		
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

public function includeCss()
	{
	echo '<link href="bar.css" rel="stylesheet" type="text/css" />';
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

	public function generate($colour = NULL)
	{

		if(isset($colour))
			$this->colour = $colour;
				else $this->colour = '#84AEBE'; 
	
	
	$fp = fopen('print.php', "a+"); 
	$data = '<?php


$steps = '.$this->steps.';
$lines = count(file("'.$this->path.'"));

$width = round(($lines/'.$this->steps.')*100,1);
?>

<div class="meter-wrap">
    <div class="meter-value" style="background-color: '.$this->colour.'; width: <?php echo $width; ?>%;">
        <div class="meter-text">
		<?php echo $width; ?> %
        </div>
    </div>
</div>

<?php

$f = file("'.$this->path.'");
?>
<div class="output-text">
<?php
echo $f[$lines - 1]."
</div>"
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
		//we neeed to clear temporary files made by our script
	file_put_contents($this->path, '');
	file_put_contents('print.php', '');

	}



}