<?php

if (PHPVer < 5) {
    require(COREDIR.'loader/loader.php4.php');
}else if (PHPVer == 5) {
    require(COREDIR.'loader/loader.php5.php');
} else if (PHPVer == 7) {
	//todo:写一套适合php7的loader
}