<?php
$text = '
<library>
	<book id="1">
		<name>PHP</name>
		<description>Learn PHP</description>
	</book>
</library>';

$xml = simplexml_load_string ( $text );
$elements = $xml->xpath ( '/library/book' );

print_r ( $elements );
