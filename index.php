<?php
include_once "classes/translate.class.php";
$str = 'Hello my name is x';
$tr = new translate();
echo $tr->translator($str, $tr->langDetect($str), 'fr');