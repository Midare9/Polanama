<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($j == 1 || ($i == 1 || $i == 9) && $j < 9 || $j == 9 && $i != 1 && $i != 9) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
echo "\n";
for ($i=1; $i<=9; $i++) {
  for ($j=1; $j<=9; $j++) {
 if ($i==1 || $i==5 || $j==1 || $j==9) {
     echo '*'; }
   else {
     echo ' '; }
   }
  echo "\n";
 }
echo "\n";
for ($i=1; $i<=9; $i++) {
  for ($j=1; $j<=9; $j++) {
 if ($i==$j || $j==1 || $j==9) {
     echo '*'; }
   else {
     echo ' '; }
   }
  echo "\n";
 }
echo "\n";
for ($i=1; $i<=9; $i++) {
  for ($j=1; $j<=9; $j++) {
 if ($j==1 || $j==9 || $i==9) {
     echo '*'; }
   else {
     echo ' '; }
   }
  echo "\n";
 }
?>


