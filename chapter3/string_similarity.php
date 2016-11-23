<?php
$string1 = 'Av. PHP Certification Book';
$string2 = 'Street PHP Certification';
print similar_text ( $string1, $string2 );
?>

<br><br>

<?php
$percentage = 0;
similar_text ( $string1, $string2, $percentage );
echo $percentage . '% similar.';
?>

<br><br>

<?php
print levenshtein ( $string1, $string2 ); // distance between two strings.
?>

<br><br>

<?php
print levenshtein ( $string2, $string1 );
