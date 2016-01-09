# Apinstall v0.0.6 (project closed) #


_The end of blank pages while running PHP intensive scripts._


### [DEMO](http://www.pvls.pl/api/install.php) ###
(works with: IE, Opera, Firefox, Chrome, Safari)


---


## Functionalities: ##

  * Intensive php processes can be visible to user
  * Application installing process visible to user
  * Fun dealing with process bar ;)


---


## How it`s made? It is hard? ##

Class is very simple to implement its consist of:

  * 80% of PHP
  * 5% of CSS
  * 15% of jQuery javascript


---


## Example ##
(full example avaible in zip archive: install.php)


Put this in your site header 

&lt;header&gt;



&lt;/header&gt;

**```
require_once('class/class.install.php'); //inlude apinstall class

$install = new Installer(); //initialize it
```**

Then this can be in body tags or whatever you want


&lt;body&gt;



&lt;/body&gt;



```

$install->setLogPath('/home/user/public_html/apinstall'); //path to logfile
//no trailing slash!

$install->setSteps(3); //set how many steps there will be (3 in this example)

$install->defineBar('#E54000', '#E54000'); //choose colour of ( bar, text)

$install->placeholder(); //define place for your progress bar
```

Then create submision form, don`t forget: **form id="apiform" target="progressFrame"** and
**input id="apisubmit"** for submit button.

For example it can looks like in the example:

```
<form id="apiform" target="progressFrame" method="post">
<input id="apisubmit" type="submit" name="submit" value="Show me how it works!"> 
					</form>
```


Ok, main part of this script:

```
#1 step
$output = 'Sending mails'; //title of this process
$install->save($output);
/*
Process itself (f.e sending mails)
*/

#2 step
$output = 'Optimizing database';
$install->save($output);
/*
Optimizing database code
*/

//Inform user that script has finished

#3 step
$output = 'Completed';
$install->save($output);
$install->delay(5); //make delay in seconds to show finished state longer.

```


## Advanced options ##


If you have already included jQuery library put true inside initiatior
```
$install = new Installer(true); //initialize it
```


Delay function can be also smller than 1 second.
Remember to add this function under your process code.
```
$install->delay(0.20); //0.2 sec of delay
```

Clearing temporary files can be used in two ways:
```
$install->clearTemp(); //clear files

$install->clearTemp(true); //delete files
```


---


## Restrictions ##

  1. Work on PHP 5.0 or higher
  1. Class have to be initialized in head sector
  1. Logfile path folder have to be writable
  1. Animation of progress bar visibility from 0.1 sec **not less**


---



