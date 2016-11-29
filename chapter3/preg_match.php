<?php
$text = 'PHP Certification Book';
$pattern = '/Book/';

if ( preg_match( $pattern, $text) )
	print 'Pattern found.';
?>

<br><br>

<?php
preg_match ( $pattern, $text, $occurs );
print_r ( $occurs );
?>

<br><br>

<?php
$text = 'PHP Certification Book Other Book';
preg_match ( $pattern, $text, $occurs );
print_r ( $occurs );
?>

<br><br>

<?php
preg_match_all ( $pattern, $text, $occurs );
print_r ( $occurs );
?>