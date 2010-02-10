<?php

class Installer
{
private $steps = 0;
public $logData;

public function setLogPath($path)
	{
	$this->path = $path;
	return $this->path;

	}

public function setSteps($count)
	{
	$this->steps = $count;
	return $this->steps;
	}

public function save($output)
	{
$this->logData = $output;

$fp = fopen($this->path, "a+"); 
$fw = fwrite($fp, $this->logData."\r\n");  //save
fclose($fp);
$this->steps++;

	}



}