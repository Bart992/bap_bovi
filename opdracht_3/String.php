<?php

$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str);
$str_camel = ucwords($str);
$str_uppers = strtoupper($str);
$str_random = str_shuffle($str);
$str_switch = strrev($str);
$str_number = str_word_count($str);
$str_char = strlen($str);


echo '<b> output </b>';
echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_camel . '</p>';
echo '<p>' . str_replace("PHP", "HTML", "This is some text. I will be using PHP string functions to change it") . '</p>';
echo '<p>' . $str_switch . '</p>';
echo '<p>' . $str_uppers . '</p>';
echo '<p>' . $str_random . '</p>';
echo "<b>The number of words in the string:</b>" . '<p>' . $str_number . '</p>';
echo "<b>The number of characters in the string:</b>" . '<p>' . $str_char . '</p>';
