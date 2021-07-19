<?php
$names=["omar" , "ahmed" , "jorge", "kareeeeem"];
$longestName = strlen($names[0]);
$theName = " ";
foreach($names as $index => $name){
  if(strlen($name) > $longestName){
      $longestName = strlen($name);
      $theName = $name;
  }
}

echo "$theName";
