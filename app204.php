<?php
$x = 30;
$y = 12; //ลองเอา = ออก
$a = $x += $y; //30 + 12 = 42
$b = $x -= $y; //42 - 12 = 30
$c = $x /= $y; //30 / 12 = 2.5
$d = $x *= $y; //2.5 * 12 = 2.5
$e = $x **= $y; //30 ** 12 = 531,441,000,000,000,000

print $a ."<br>";
print $b ."<br>";
print $b ."<br>";
print $d ."<br>";
print $e;
