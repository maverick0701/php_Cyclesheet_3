<?php

//opening the file
$fptr=fopen("index.txt",'r');

$counter="";

//reading file line by line 
while($a=fgets($fptr))
{
    $counter.=$a;
}

//displayig txt in browser
echo $counter;

//opening new file
$fopen=fopen('copy.txt','w');

//writing to new file
fwrite($fopen,$counter);

//closing the file
fclose($fopen);
fclose($fptr);
?>