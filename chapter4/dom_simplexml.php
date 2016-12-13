<?php
/* From DOM to SimpleXML. */
class MyElement extends SimpleXmlElement { }

$no = new DOMDocument ();
$no->loadXML ( '<root></root>' );

simplexml_import_dom ( $no, 'MyElement' );

/* From SimpleXML to DOM. */
$no = new SimpleXmlElement ( '<root/>' );
dom_import_simplexml ( $no );
