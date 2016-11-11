<?php
/* Value. */
$a = 10;
$b = $a;
$b = 20;

echo $a; // 10
echo $b; // 20


/* Reference. */
$a = 'By value';
$b = &$a;

$a = 'E agora?';

print $a; // E agora?
print $b; // E agora?