<?php
// Soundex.

$str1 = 'Michael Douglas Barbosa Araujo';
$str2 = 'Michel Douglas Barbosa Araujo';

$phonetic_str1 = soundex ( $str1 );
$phonetic_str2 = soundex ( $str2 );

if ( $phonetic_str1 == $phonetic_str2 )
	echo "$str1 and $str2 are phonetically equals.";
?>

<br><br>

<?php
if ( $phonetic_str1 == 'M243' && $phonetic_str2 == 'M243' )
	echo "$str1 and $str2 have the right phonetic.";
?>

<br><br>

<?php
if ( ( $phonetic_str1 == $phonetic_str2 ) == 'M243' )
	echo "$str1 and $str2 have the right phonetic.";
?>

<br><br>

<?php
// Metaphone.

$phonetic_str1 = metaphone ( $str1 );
$phonetic_str2 = metaphone ( $str2 );
var_dump ( $phonetic_str1 );
