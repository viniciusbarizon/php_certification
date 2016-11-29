<?php
$text = 'Let is apply an expression here!';
print preg_replace ( '/!/', '?', $text );
?>

<br><br>

<?php
print preg_replace ( [ '/!/', '/here/' ], '?', $text );
?>

<br><br>

<?php
$text = 'The event will be on 11/12, you can review on 10/22.';
print preg_replace ( '/\/\d{2}/', '${1}', $text );
?>

<br><br>

<?php
print preg_replace ( '/\/\d{2}/', '${2}', $text );
?>

<br><br>

<?php
$text = '!Let is apply an expression here!';
print preg_replace ( '/!/', '', $text, 1 );

preg_replace ( '/!/', '', $text, -1, $occurs );

print $occurs;
