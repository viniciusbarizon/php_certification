<?php
// Strings are arrays.
$text = 'Zend Certified Engineer.';

for ( $i = 0; $i < strlen ( $text ); $i++ )
	print $text[$i];
?>

<br /><br />

<?php
// strstr.
$email = 'viniciusbarizon@gmail.com';
print strstr ( $email, '@' ); // until needle (inclusive).
?>

<br /><br />

<?php
print strstr ( $email, '@', true ); // before needle.
?>

<br /><br />

<?php
// substr.
$code = 'A3-99812.FFGD';
print substr ( $code, 0, 2 );
?>

<br /><br />

<?php
// Trim.
$book = ' PHP';
print trim ( $book );
?>

<br /><br />

<?php
$name = 'aPHPa';
print trim ( $name, 'a' );
?>

<br /><br />

<?php
print ltrim ( $name, 'a' );
?>

<br /><br />

<?php
print rtrim ( $name, 'a' );
?>

<br /><br />

<?php
// str_replace.
$text = 'I bought a blue book.';
print str_replace ( 'a blue', 'an orange', $text );
?>

<br /><br />

<?php
$text = 'I bought a blue and yellow book.';
print str_replace ( [ 'blue', 'yellow' ], [ 'black', 'orange' ], $text );
?>

<br /><br />

<?php
$substitutions = 0;
print str_replace ( [ 'blue', 'yellow' ], 'lilac', $text, $substitutions );
?>
<br />
<?php
print $substitutions . ' substitutions.';
?>

<br /><br />

<?php
// strcasecmp.
$string1 = 'olá!';
$string2 = 'OLá!';

if ( 0 === strcasecmp ( $string1, $string2 ) ) // case-insensitive.
	print 'Equals.';
?>

<br /><br />

<?php
$str1 = 'livroZCPE';
$str2 = 'livroZCPE';
var_dump ( strcmp ( $str1, $str2 ) ); // case-sensitive.
?>
<br />
<?php
var_dump ( strcmp ( strtolower( $str1 ), $str2 ) );
?>
<br />
<?php
$str1 = 'livroZCPER';
var_dump ( strcmp ( $str1, $str2 ) );
?>
<br />
<?php
var_dump ( strcmp ( $str2, $str1 ) );
?>





