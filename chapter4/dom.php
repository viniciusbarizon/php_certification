<?php
$load = new DOMDocument ();

//$load->load ( '/path/my.xml' );
$load->loadHTML ( '<html><p>Hello</p><br/></html>' );
$load->loadXML ( '<root><name>PHP</name></root>' );
