<?php
 $arr = [43 , 78 , 89 , 32];

 for ($i=0; $i < sizeof($arr) ; $i++) { 
      $randindex = rand(0 , sizeof($arr) - 1);
      $temp = $arr[$i];
      $arr[$i] = $arr[$randindex];
      $arr[$randindex] = $temp;
 }

 var_dump($arr);

