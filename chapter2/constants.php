<?php
define ( '1CONSTANT', 'valor' ); // Invalid.
define ( '_CONSTANT', 'valor' ); // Valid.
define ( 'myconstant', 'valor' ); // Valid.
define ( '$CONSTANT', 'valor' ); // Invalid.

echo 'teste';