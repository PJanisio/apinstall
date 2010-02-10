<?php

/*
Title: Apinstall 0.0.1
Author: Pawel 'Pavlus' Janisio
License: GPLv3
*/

class Installer
{
private $steps = 0;
public $logData;

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

	public function clearFile()
	{

	file_put_contents($this->path, '');

	}



}