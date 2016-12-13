<?php
$xml = '
<library>
	<book id="1">
		<name>PHP</name>
		<description>Learn PHP</description>
	</book>
</library>
';

$doc = new DOMDocument ();
$doc->loadXML ( $xml );

$xpath = new DOMXPath ( $doc );
$elements = $xpath->query ( '/library/book' );

print_r ( $elements );

foreach ( $elements as $element )
	print $element->nodeValue;

echo '<br><br>';

$xml = '
<library>
	<shelf id="C2">
		<book id="1">
			<name>PHP</name>
			<description>Learn PHP</description>
		</book>
		<book id="1">
			<name>PHP</name>
			<description>Learn PHP</description>
		</book>
	</shelf>
	<shelf id="D1">
		<book id="5">
			<name>Bitwise</name>
			<description>Bitwise manipulation</description>
		</book>
	</shelf>
</library>
';

$doc->loadXML ( $xml );

$xpath = new DOMXpath ( $doc );
$elements = $xpath->query ( '//book' );

print_r ( $elements );

$elements = $xpath->query ( '/library/shelf[@id="D1"]//book' );
print_r ( $elements );
