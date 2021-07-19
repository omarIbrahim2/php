<?php
$lenght = 5;
$randomPass = "";
for ($i=0; $i < $lenght ; $i++) { 
    $randNum = rand(33 , 126);
     $randomPass .= chr($randNum);
}

echo "$randomPass";
