<?php
include("../res/x5engine.php");
$nameList = array("wd2","aca","x4p","pkr","55n","ncf","fax","m5e","s8e","4z5");
$charList = array("P","A","7","Z","C","5","L","Y","M","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
