<html>
<body>

<!--Variable Interpolation pg. 77-->

<b>Variable Interpolation</b><br/>
<p>There are two ways to interpolate variables: <br/><br/></p>
1. Put the variable name in a double-quoted string<br/><br/>
<?
$who = 'Kaye-san';
$what = 'traineeee';
echo "$who wa $what desu!";
?>
<br/><br/>
2. Surround the variable being interpolated with curly braces <br/><br/>
<?
$n = 12;
echo "You are the {$n}th person";

/* Single-Quoted Strings pg. 78 */

echo "<br/><br/><b>Single-Quoted Strings</b><br/><br/>";

$name = 'Fred';
$str = 'Hello, $name'; // single-quoted
echo $str; // this will not echo the value of $name


echo "<br/><br/><b>Strip Tags</b><br/><br/>";
/*Strip tags pg. 78 */

$input = '<p>Howdy, &quot;Cowboy&quot;</p>';
$output = strip_tags($input);
// $output is 'Howdy, &quot;Cowboy&quot;'

echo $output;

echo "<br/>";

$in = 'The <b>bold</b> tags will <i>stay</i><p>';
$out = strip_tags($input, '<b>');
// $output is 'The <b>bold</b> tags will stay'
echo $out;


echo "<br/>";
echo str_repeat('_.-.', 20);
/*Heredoc pg. 79 */

echo "<br/><br/><b>Heredoc</b><br/></br>";

$clerihew = <<< EndOfQuote
Sir Humphrey Davy<br/>
Abominated gravy.<br/>
He lived in the odium <br/>
Of having discovered sodium. <br/>
EndOfQuote;
echo $clerihew;

$dialogue = <<< NoMore
<br/>"It's not going to happen!"
He raised an eyebrow. "Want<br/>
NoMore;

echo $dialogue;

$ws = <<< Enough
boo

hoo
Enough;

echo $ws;


echo "<br/>";
echo str_repeat('_.-.', 20);


/*Encoding and Escaping pg. 86 */

echo "<br/><br/><b>Encoding and Escaping</b><br/></br>";


$string = htmlentities("Einstürzende Neubauten");
echo $string;

echo "<br/><br/>";

$input = <<< End
"Stop pulling my hair!" Jane's eyes flashed.
End;

$double = htmlentities($input);
echo $double;

echo "<br/><br/>";
// &quot;Stop pulling my hair!&quot;Janes eyes flashed.&lt;p&gt;
$both = htmlentities($input, ENT_QUOTES);
echo $input;
echo "<br/><br/>";
// &quot;Stop pulling my hair!&quot; Jane&#039;s eyes flashed.&lt;p&gt;
$neither = htmlentities($input, ENT_NOQUOTES);
echo $neither;
// "Stop pulling my hair!" Jane\'s eyes flashed.&lt;p&gt;


echo "<br/>";
echo str_repeat('_.-.', 20);

/*Print if pg. 81 */


?>
<br/><br/><b>Print "It worked" if "test" was printed</b><br/><br/>
<?
if (print("test")) {
print("It worked!");
}

/*printf pg. 80 */

echo "<br/><br/><b>printf in heredoc</b><br/><br/>";

printf(<<< Template
%s is %d years old.
Template
, "Fred", 35);


echo "<br/>";
echo str_repeat('_.-.', 20);

/*Cleaning Strings pg. 85 */
echo "<br/><br/><b>Removing White Spaces</b><br/><br/>";


$title = "I love Training Center";
$str1 = ltrim($title); // $str1 is “I love Training Center \n”
$str2 = rtrim($title); // str2 is “     I love Training Center”
$str3 = trim($title);  // str3 is “I love Training Center”

echo $str1; 
echo "<br/><br/>";
echo $str2;
echo "<br/><br/>";
echo $str3;


/* Changing case pg. 86 */

echo "<br/><br/><b>Changing Case</b><br/><br/>";


$string1 = "FELICIA kaye";
$string2 = "andrew garfield";
print(strtolower($string1)); 
echo "<br/>";
print(strtoupper($string1)); 
echo "<br/>";
print(ucfirst($string2)); 	 
echo "<br/>";
print(ucwords($string2));	


echo "<br/>";
echo str_repeat('_.-.', 20);


/* SQL : Adding Slashes pg. 908*/

echo "<br/><br/><b>Add Slashes</b><br/><br/>";

$string = <<< EOF
"It's never going to work," she cried,
as she hit the backslash (\) key.
EOF;
$string = addslashes($string);
echo $string;
echo "<br/><br/>";
echo stripslashes($string);

/*addcslashes*/

echo "<br/><br/><b>addcslashes</b><br/><br/>";

echo addcslashes("hello\tworld\n", "\x00..\x1fz..\xff");


echo "<br/>";
echo str_repeat('_.-.', 20);

/*STRING COMPARISON*/

echo "<br/><br/><b>Comparison using == and ===</b><br/><br/>";

$o1 = 3;
$o2 = "3";
if ($o1 == $o2) {

	echo("== returns true<br>");
}
if ($o1 === $o2) {

	echo("=== returns true<br>");
}

echo "<br/><br/><b>comparison operators (<,<=,>,>=)</b><br/><br/>";

$him = "Fred";
$her = "Wilma";

if ($him < $her) {
	print "{$him} comes before {$her} in the alphabet.\n";
}

echo "<br/><br/><b>strcmp()</b><br/><br/>";

$nu = strcmp("PHP Rocks", 5);
echo($nu);

echo "<br/><br/><b>strcasecmp</b><br/><br/>";

$n = strcasecmp("Fred", "frED");
// $n is 0

echo $n;

echo "<br/><br/><b>similar_text()</b><br/><br/>";

$string1 = "Felicia kaye";
$string2 = "Felicia Kay";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent);

echo "<br/><br/><b>The very weird levenshtein</b><br/><br/>";

$similarity = levenshtein("metamorphosis", "metamorphoses"); // $similarity is 1
echo "$similarity";

echo "<br/><br/>";

echo levenshtein('would not', 'wouldn\'t', 500, 1, 1);

echo "<br/>";
echo str_repeat('_.-.', 20);

echo "<br/><br/><b>Substring</b><br/><br/>";

$name = "Fred Flintstone";
$fluff = substr($name, 6, 4);
$sound = substr($name, 11);

echo "$fluff<br/><br/>";


echo "$sound";

echo "<br/><br/><b>substr_replace</b><br/><br/>";

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 7);

echo $farewell;

echo "<br><br><b>Use a length of 0 to insert without deleting:</b><br><br/>";

$farewell = substr_replace($farewell, "kind ", 9, 0);

echo $farewell;


echo "<br><br><b>Use a replacement of \"\" to delete without inserting:</b><br><br/>";

$farewell = substr_replace($farewell, "", 8);

echo $farewell;

echo "<br><br><b>Here is how you can insert at the beginning of the string:</b><br><br/>";

$farewell = substr_replace($farewell, "now it's time to say ", 0, 0); 

echo $farewell;

echo "<br><br><b>A negative value for start indicates the number of characters from the end of the string from which to start the replacement:</b><br><br/>";

$farewell = substr_replace($farewell, "riddance", -3);

echo $farewell;

echo "<br/>";

echo str_repeat('_.-.', 20);

echo "<br><br><b>Explode and Implode</b><br><br/>";

$input = 'Fred,25,Wilma';
$fields = explode(',', $input);

$fields2 = explode(',', $input, 2);


echo "$fields<br><br/>";

echo "$fields2<br><br/>";


$fields = array('Fred', '25', 'Wilma');
$string = implode(',', $fields);

echo "$string<br/>";

echo str_repeat('_.-.', 20);

echo "<br><br><b>Tokenizing</b><br><br/>";

$string = "Fred,Flintstone,35,Wilma";
$token = strtok($string, ",");
while ($token !== false) {
echo("{$token}<br />");
$token = strtok(",");
}

echo str_repeat('_.-.', 20);
echo "<br><br><b>parse_url</b><br><br/>";

$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
print_r($bits);

/* Character Classes pg. 102 */

echo str_repeat('_.-.', 20);

echo "<br><br><b>Character Classes</b><br><br/>";

$match = preg_match("/c[aeiou]t/", "I cut mu hand");

if ($match == 1) {
	echo "true";
}
else{
	echo "false";
}

/* preg_replace_callback pg. 116*/ 

echo "<br/>";

echo str_repeat('_.-.', 20);

echo "<br><br><b>preg_replace_callback</b><br><br/>";

function titlecase($s)
{
return ucfirst(strtolower($s[0]));
}
$string = 'goodbye cruel world';
$new = preg_replace_callback('/\w+/', 'titlecase', $string);
echo $new;

echo "<br/>";

echo str_repeat('_.-.', 20);

echo "<br><br><b>preg_quote</b><br><br/>";

echo preg_quote('$5.00 (five bucks)');

?>


</body>
</html>