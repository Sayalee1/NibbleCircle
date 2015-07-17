<?php

if (file_exists ('count.txt'))
{
$file = fopen ('count.txt', r);
$visits = fread($file, filesize ('count.txt'));
echo $visits + 1;
fclose($file);
$file = fopen ('count.txt', w);
fwrite($file,$visits+1);
}
else
{
$file = fopen ('count.txt', w);
fwrite($file, 412);
echo '412';
fclose($file);
}

?>