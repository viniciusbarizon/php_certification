<?php
$myXml = '<root/>';
simplexml_load_string ( $myXml );

class MySimpleXml extends SimpleXMLElement { }

simplexml_load_string ( $myXml, 'SimpleXMLElement' );

simplexml_load_string ( $myXml, 'SimpleXMLElement', LIBXML_NOERROR );

simplexml_load_string ( $myXml, 'SimpleXMLElement', LIBXML_NOERROR, 'namespace' );

$myXml = <<<XMLDATA
<zce>
	<basic>
		<syntax>
			PHP tags, Bitwise
		</syntax>
	</basic>
</zce>
XMLDATA;

$myXml = new SimpleXMLElement ( $myXml );
$myXml->basic;

$myXml->children ();
