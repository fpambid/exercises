<html>

<b>Individual String</b>
<br/> <br/>

<?php

/* Individual String*/
$string = 'Hello';
for ($i=0; $i < strlen($string); $i++) {
printf("The %dth character is %s\n", $i, $string{$i});
?><br/><?
}
?>
<br/>
<b>Escaping Single Quote</b>
<br/> <br/>

<?
/*String*/

$name = 'Tim O\'Reilly';// escaped single quote, without the "\" it will display an error because there are 3 single quotes
echo $name;
?>


</html>
?>