<?php

echo substr("hello world",0) ,"<br>";
// it returns a part of string

echo strtolower("HELLO world"),"<br>";
//lower case

echo strrev("gfedcba"),"<br>";
// reverse

echo strtoupper("hello world"),"<br>";
//upper case

echo substr_compare("hello","world",0),"<br>";
// compare if 1 bigger 1, equal 0, 2 big -1

echo substr_count("HELLO WORRLD","world is nice"),"<br>";
//occurence of words

echo "hello world","<br>";
//concatenate

echo trim("  hi hello "),"<br>";
//removes white space

echo ord("d"),"<br>";
//shows acii

echo strlen("hello");
//string length

?>
