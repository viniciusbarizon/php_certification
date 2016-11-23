<?php
$text = 'abcde';
print strpos ( $text, 'b' ); // 1
?>

<br><br>

<?php
if ( strpos ( $text, 'b' ) >= 0 )
	print 'Find b.';
?>

<br><br>

<?php
print strpos ( $text, 'a' ); // 0
?>

<br><br>

<?php
if ( strpos ( $text, 'a' ) ) // does not work.
	print 'Hello world.';

if ( strpos ( $text, 'f' ) === false )
	print 'Do not find f.';
?>

<br><br>

<?php
if ( strpos ( $text, 'a', 1 ) === false )
	print 'Do not find a.';

if ( false === strpos ( $text, 'a', -1 ) ) // warning.
	print 'Hello world.';
?>

<br><br>

<?php
// stripos is case-insensitive.
if ( stripos ( $text, 'A' ) >= 0 )
	print 'Find A.';
