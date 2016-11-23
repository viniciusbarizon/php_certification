<?php
// Explode.

$params = '1,2,3,4';
$arr = explode ( ',' , $params );
print_r ( $arr );
?>

<br><br>

<?php
$_GET [ 'category' ] = 'notebook-case-pen-eraser';
$category = $_GET [ 'category' ];
$categories = explode ( '-' , $category );
print_r ( $categories );
?>

<br><br>

<?php
$categories = explode ( '-' , $category, 2 );
print_r ( $categories );
?>

<br><br>

<?php
// Implode.

$categories = [ 'case', 'pen', 'eraser' ];
print implode ( ',', $categories );
?>

<br><br>

<?php
$categories = [
	'case' => 'a',
	'pen' => 'b',
	'eraser' => 'c',
]; // implode ignores the keys.
print implode ( ',', $categories );

