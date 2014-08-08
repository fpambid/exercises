<html>
<body>

<b> Returning Values </b><br/>
<p> This will double our input "1" 3 times and
	the output will be: </p> 
<?

/*RETURNING VALUES*/

function doubler($value)
{
return $value << 3; //doubles $value 3 times
}
$value = 1;
?>

<b>
<?echo doubler($value);?>
</b><br></br>

Our input here is 2.. And the output will be: <br/><br/>

<b>
<?echo doubler(2); // once the function is defined, you can now use it in other parts of the program
?>
</b><br/><br/>


<b> Calling a Function </b><br/>
<p> <b>strlen()</b> is a built-in function that returns the length of a string </p>
<?
/*CALLING A FUNCTION*/
/*strlen*/
// strlen() is a built-in function that returns the length of a string
$length = strlen("supercalifragilisticexpialidocious"); // $length is now 34
?>
supercalifragilisticexpialidocious = <b><?echo $length;?></b><br/><br/>

<!--strcat-->

<b> String Concatenation </b><br/><br/>

<?
function strcat($left, $right)
{
return $left . $right;
}

$first = "This is a ";
$second = " complete sentence!";
echo strcat($first, $second);
?>
<br/><br/>

<b>Passing Parameters by Reference</b><br/><br/>
	Value 3 is doubled <br/>

<?
/*PASSING PARAMETERS BY REFERENCE*/

function doublerr(&$value)
{
$value = $value << 1;
}
$a = 3;
doublerr($a);
?>

Output is: <?echo $a;?>

<br/><br/><b> Variable Parameters </b><br/>
	Argument Counter <br/>

<?
/*VARIABLE PARAMETERS pg. 70*/
	function countList()
	{
		if (func_num_args() == 0){
			return false;
		}

			else {
			$count = 0;

				for ($i = 0; $i < func_num_args(); $i++){
				$count += func_get_arg($i);
				}

	return $count;

			}
	}
	echo countList(32, 25, 365); // outputs "422"
?>
<br/><br/><b>Return Values</b><br/><br/>
<?

/*RETURN VALUES pg. 73*/

$names = array("Fred", "Barney", "Wilma", "Betty");

function &findOne($n) {
	global $names;
	return $names[$n];
}

for($i=0; $i<=3; $i++){
	echo $names[$i]; ?>
	<br/>

<?
}

$person =& findOne(1);
$person = "Barnetta";
// Barney
// changes $names[1]
?> 

<br/>

<?
for($i=0; $i<=3; $i++){
echo $names[$i]; 
?><br/>
<?
}
?>
</body>
</html>