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

	public function stepsNum()
	{

		return $this->steps;
	}

	public function generatePrint()
	{
	
	
	$fp = fopen('print.php', "a+"); 
	$data = '<?php


$steps = '.$this->steps.';
$lines = count(file("'.$this->path.'"));

$width = ($lines/'.$this->steps.')*100;


?>

<div class="meter-wrap">
    <div class="meter-value" style="background-color: #0a0; width: <?php echo $width; ?>%;">
        <div class="meter-text">
		<?php echo $lines."/";?>'.$this->steps.'
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

public function sleepThicks($sec)
	{
	$this->sleepTime = $sec;
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

	public function clearFiles()
	{

	file_put_contents($this->path, '');
	file_put_contents('print.php', '');

	}



}