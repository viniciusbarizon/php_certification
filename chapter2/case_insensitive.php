<?php
$a = 0;

if ( EMPTY ( $a ) )
	echo 'Hello, I am empty.';

CLASS Dog
{
	public function bark ()
	{
		echo 'au au au';
	}
}

$german_shepherd =  new Dog ();
$german_shepherd->bark ();