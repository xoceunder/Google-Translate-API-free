<?php
require_once (dirname(__FILE__).'/Google_Client.php');

$source = 'es';
$target = 'en';
$text = 'buenos días';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

// Good morning
echo $result;
