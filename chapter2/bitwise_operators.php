<?php
/* 7 * 2 ^ 9.
2 ^ 9 = 2 * 2 * 2 * 2 * 2 * 2 * 2 * 2 * 2 = 512.
7 * 512 = 3585.
*/
print ( 7 << 9 ); print '<br/>';

/* 4 / 2 ^ 6.
2 ^ 6 = 2 * 2 * 2 * 2 * 2 * 2 = 64.
4 / 64 = 0,0625 = 0.
*/
print ( 4 >> 6 ); print '<br/>';

/* ~x = -x -1.
~7 = -7 - 1 = -8.
*/
print ( ~7 );