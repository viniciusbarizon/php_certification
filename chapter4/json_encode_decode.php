<?php
print json_encode ( [
	'zcpe' => [
		'basic',
		'advanced'
	]
]);

print '<br><br>';

print json_encode ( [
	'zcpe' => [
		'bas"ic',
		'advanced'
	]
], JSON_HEX_QUOT );

print '<br><br>';

print json_encode ( [
	'zcpe' => [
		'bas<ic',
		'advanced'
	]
], JSON_HEX_TAG );

print '<br><br>';

print json_encode ( [
	'zcpe' => [
		'bas<ic',
		'adva"nced'
	]
], JSON_HEX_QUOT | JSON_HEX_TAG, 2 );

print '<br><br>';

$json = '{"zcpe":["basic","advanced"]}';
print_r ( json_decode ( $json ) );
