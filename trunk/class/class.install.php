<?php

/*
Title: Apinstall 0.0.4b
Author: Pawel 'Pavlus' Janisio
Source: http://code.google.com/p/apinstall/
License: GPLv3
*/

class Installer
{
public $steps = 0;
public $logData;
public $path;
public $logFileName = NULL;
public $printFileName = NULL;


public function __construct($jquery = NULL)
	{

		 set_time_limit(0); //we need to do this in case of windows users and usleep function
		 $this->printFileName = sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).'.php';  //generate random 
		 echo '<link href="bar.css" rel="stylesheet" type="text/css" />'; //include css file
		
		
		if(!isset($jquery)){
		//include google jQuery libraries
		echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>';
			}
			else
			{
			//echo 'Warning: jQuery libraries are not included!';
			}
		

		//include javascript
		echo "<script type='text/javascript'>
	
		var refreshId = setInterval(function()
{
     $('#apinstall').load('".$this->printFileName."');
}, 200);
	


</script>";

	}


public function setLogPath($path)
	{
	$this->path = $path.'/'.$this->logFileName = sha1($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']).'.log';
	
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

	
	
	$fp = fopen($this->printFileName, "a+"); 
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

	public function clearTemp($delete = NULL)
	{
		if($delete == 1)
		{
		@unlink($this->path);
		@unlink($this->printFileName);
		}
		else
		{
		//clear temporary files made by our script
	@file_put_contents($this->path, ''); 
	@file_put_contents($this->printFileName, '');
		}

	}



}