<?php
printf ( '%s PHP Certification %s.', 'Zend', '5.5' );
?>

<br><br>

<?php
printf ( '%2$s PHP Certification %1$s.', '5.5', 'Zend' );
?>

<br><br>

<?php
printf ( 'My name is %2$s %1$s.', 'Barizon', 'Vinicius' );
?>

<br><br>

<?php
//printf ( 'My name is %2$s %1$s %3$s.', 'Barizon', 'Vinicius' ); // warning.

printf ( 'PHP %f', '5.5' ); // 5.500000.
?>

<br><br>

<?php
printf ( 'PHP %.1f', '5.5' ); // 5.5.
?>

<br><br>

<?php
printf ( '%s %s.', 'Hello', 'PHP' );

sprintf ( '%s %s.', 'Hello', 'PHP' ); // returns the string, do not print.
?>

<br><br>

<?php
echo sprintf ( '%s %s.', 'Hello', 'PHP' );
?>

<br><br>

<?php
vprintf ( '%s PHP Certification %s.', [ 'Zend', '5.5' ] );

vsprintf ( '%s PHP Certification %s.', [ 'Zend', '5.5' ] ); // returns the string, do not print.
?>

<br><br>

<?php
echo vsprintf ( '%s PHP Certification %s.', [ 'Zend', '5.5' ] );
?>

<br><br>

<?php
$file = fopen ( 'my-file.txt', 'w+' );
fprintf ( $file, 'Hello %s.', 'PHP' );

// fprintf ( $file, 'Hello %s.', [ 'PHP' ] ); // warning.

