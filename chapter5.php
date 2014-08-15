<?
	$price = array(
'gasket' => 15.29,
'wheel' => 75.25,
'tire' => 50.00
);

include ("functions.php");

/*pg. 123 */

echo br(),"<b>Extracting Multiple Values</b>", br();

$person = array("Fred", 35, "Betty");
list($name, $age, $wife) = $person;

echo $name, "<br/>", $age, "<br/>", $wife;

echo div(), br();

echo "<b>Sorting Associative arrays</b>", br();

$logins = array(
'njt'=> 415,
'kt' => 492,
'rl' => 652,
'jht'=> 441,
'jj' => 441,
'wt' => 402,
'hut'=> 309,
);

arsort($logins);

$numPrinted = 0;

echo "<table>\n";

foreach ($logins as $user => $time) {
echo("<tr><td>{$user}</td><td>{$time}</td></tr>\n");

if (++$numPrinted == 3) {
break; // stop after three
	}
}

echo "</table>";

div();
br();

echo "<b>Sorting Multiple arrays at once</b>", br();

$names = array("Tom", "Dick", "Harriet", "Brenda", "Joe");
$ages = array(25, 35, 29, 35, 35);
$zips = array(80522, '02140', 90210, 64141, 80522);


array_multisort($ages, SORT_ASC, $zips, SORT_DESC, $names, SORT_ASC);

for ($i = 0; $i < count($names); $i++) {
echo "{$names[$i]}, {$ages[$i]}, {$zips[$i]}\n";
}

div(); 

br();

echo "<b>Array_flip</b>", br();

$u2h = array(
'gnat' => "/home/staff/nathan",
'frank' => "/home/action/frank",
'petermac' => "/home/staff/petermac",
'ktatroe' => "/home/staff/kevin"
);

$h2u = array_flip($u2h);
$user = $h2u["/home/staff/kevin"]; 

echo $user;

div();

br();

$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
shuffle($weekdays);?>

<pre><?print_r($weekdays);?></pre>
<?
br();
echo "This will shuffle everytime you refresh it :)";

div();
br();

echo "<b> Sum of an Array </b>";
br();

$scores = array(98, 76, 56, 80);
$total = array_sum($scores);

echo $total;

div();
br();

function arrayUnion($a, $b)
{
$union = array_merge($a, $b); // duplicates may still exist
$union = array_unique($union);
return $union;
}

$first = array(1, "two", 3);
$second = array("two", "three", "four");

$union = arrayUnion($first, $second);?>
<pre><?print_r($union);?></pre>
<?

div();
br();

/*page 122*/

echo "<b>Adding value at the end of the array</b>";

$family = array("Fred", "Wilma");
$family[] = "Pebbles"; // $family[2] is "Pebbles"
?>
<pre><?print_r($family);?></pre>
<?

div();
br();

echo "<b> Adding values in range </b>";

$numbers = range(3, 14);?>

<pre><?print_r($numbers)?></pre>
<?

div();
br();

echo "<b> Getting the size of the array </b>";

$size = count($numbers);
echo "<br/> <br/>".$size;

div();
br();

echo "<b> Array Padding </b>";

$padded = array_pad($numbers, 20, 0);?>

<pre><?print_r($padded);?></pre>
<?
div();
br();

echo "<b>Multidimensional arrays</b>";

br();

$row0 = array(1, 2, 3);
$row1 = array(4, 5, 6);
$row2 = array(7, 8, 9);
$multi = array($row0, $row1, $row2);

$value = $multi[2][0];

echo("The value at row 2, column 0 is {$multi[2][0]}\n");

div();
br();

echo "<b> Extracting Multiple Values</b>";

br();

$persons = array("Mac", 25, "Lili");

list($name, $age, $wife) = $persons;

echo $name." ".$age." ".$wife;

div();
br();

echo "<b> Slicing an Array </b>";

$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
$middle = array_slice($people, 2, 2);?>

<pre><?print_r($middle);?></pre>

<?
div();
br();

echo "<b> Splitting an Array intp chunks</b>";

$nums = range(1, 7);
$rows = array_chunk($nums, 3);?>


<pre><?print_r($rows)?></pre>;
<?
div();
br();

echo "<b>Checking if an element exists </b>";

$a = array(0, NULL, '');
function tf($v)
{
return $v ? 'T' : 'F';
}
for ($i=0; $i < 4; $i++) { ?>
<pre><?printf("%d: %s %s\n", $i, tf(isset($a[$i])), tf(array_key_exists($i, $a))); ?></pre>
<?
}

div();
br();

echo "<b> Creating Variables from an array </b>";

br();

$shape = "round";
$array = array('cover' => "bird", 'shape' => "rectangular");
extract($array, EXTR_PREFIX_ALL, "book");
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";

div();
br();

echo "<b> Creating Array from Variables</b>";

br();

$color = "indigo";
$shape = "curvy";
$floppy = "none";
$a = compact("color", "shape", "floppy");?>

<pre><?print_r($a);?></pre>
<?
div();
br();

echo "<b> Calling a function for each array element </b>";

br();

$extraData = array('border' => 2, 'color' => "red");
$baseArray = array("Ford", "Chrysler", "Volkswagen", "Honda", "Toyota");
array_walk($baseArray, "walkFunction", $extraData);
function walkFunction($item, $index, $data)
{?>


<pre><?echo "{$item} <- item, then border: {$data['border']}";?>
<?echo " color->{$data['color']}<br />" ;?></pre>
<?
}

div();

echo "<b> Sorting Arrays </b>";

$logins= array(
'njt' => 415,
'kt' => 492,
'rl'  => 652,
'jht' => 441,
'jj' => 441,
'wt' => 402,
'hut' => 309,
);

arsort($logins);
$numPrinted = 0;
echo "<table>\n";
foreach ($logins as $user => $time) {
echo("<tr><td>{$user}</td><td>{$time}</td></tr>\n");

if (++$numPrinted == 3) {
break; // stop after three
}
}?>
<pre><?echo "</table>";?></pre>
<?

div();
?>
