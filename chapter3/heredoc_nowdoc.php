<?php
// NOWDOC
$nowdoc = <<<MYTEXT
	My text.
MYTEXT;

echo $nowdoc;
?>

<br><br>

<?php
// HEREDOC
$a = 10;
$heredoc = <<<MYTEMPLATE
	Now we can use a variable, 5 + 5 = $a.
MYTEMPLATE;

echo $heredoc;
