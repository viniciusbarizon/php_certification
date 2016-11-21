<?php
opcache_compile_file ( 'opcache.php' );

opcache_reset ();

print '<pre>'; print_r ( opcache_get_status () );

print '<pre>'; print_r ( opcache_get_configuration () );