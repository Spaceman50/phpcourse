
<?php include("variables.php"); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  		<?php include("navbar.php"); ?>
  <div class="container">
  		<div class="jumbotron">
  <h1 class="display-4">Welcome to Guitar World!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
 
</div>

  	<br/>
  	<center>
    <h1>

    	<?php

//Print out to the screen


/*

This is a
multiple line
comment


*/

echo "Hello World<br>"; //This echos text to the screen
$first_name = "Anthony<br>";
$Favourite_number = 3;

Echo $first_name;


$last_name = $first_name;

//Maths operators
//+ - * / % (Modulus - the remainder of a division) **  (Raise to a power)



echo 41 + 4;


$num_1 = 54;
$num_2 = 7;

echo $num_1 + $num_2;

echo "<br/>";


//Below the double plus signs signifies an increment of 1

// Note that the increment or decrement signs placd before the varaiable will action the increment or decrement BEFORE echoing to the screen

//If you insert the increment or decrement signs AFTER the echo command. Then the increment or decrement action will be taken AFTER the echo to the screen and therefore you will not see the result until you echo the same varible to the screen again
echo ++$num_1;

echo "<br/>";

//Below the double minus signs are a decrement of 1
echo --$num_2;
echo "<br/>";

//CONCATENATE

$first_name = "Mark";
$last_name = "Dungey";

//ONCATENATE uses a dot to join two strings together. The inverted commes contain a space.

echo $first_name . " " . $last_name;

	//Comparison operators
		/* == Equal to
			!= 	Not equal to
			>	greater Than
			< 	Less han
			>= 	Greater Than or Equal to
			<= 	Less than or equal to
		*/
		echo "<br/>";

$num_3 = 56;
$num_4 = 5;
var_dump($num_3 == $num_4);
echo "<br/>";

//Escape characters

// The \ escape character is used to be able to print the  normal command inverted commes to screen.
// This just tells php to ignore anything betwen the \ characters

// Single quotes can be used instead to prevent a conflict

echo "And then  she said: \"You're UGLY!\"";
echo "<br/>";

// If Else statements

if ($first_name == "Mark") {echo "Hello Mark! How are you?";}
else {echo "You're not Mark! Who are you?";}

echo "<br/>";

// If elseif statements
$num_5=40;
$num_6=5;

If ($num_5 > 100) {
	echo $num_5 . " is greater than 10";
} elseif ($num_6 == 4) {
	echo $num_6 . " equals 5!";
	# code...
} else {
	echo $num_5 . " is less than 50";
}

echo "<br/>";

	//Arrays - Numeric
	$last_names = array("Elder" , "Smith", "Poppins");
	$first_names = array("John" , "Steve" , $last_names);
echo $first_names[2][1];

echo "<br/>";

echo $last_names[count($last_names) - 1];

echo "<br/>";

//Arrays - Associative

		$fav_pizza = array(
			"John" =>"Pepperroni",
			"Steve" =>"Cheese",
			"Mary" =>"Mushroom"
);

			echo $fav_pizza["John"];
			echo "<br/>";


			echo count($fav_pizza);


echo "<br/";


	// Loops -- While
	$counter = 0;
	while ($counter < 10){
		echo "The count is: $counter<br/>";
		$counter++;

	}

	echo "<br/>";

	// Loops -- for
	for ($count = 0; $count <= 10; $count++) {
		echo "The count is $count <br/>";
	}
	
		// Lopps -- foreach

		$names = array("John", "Steve", "Mary");

		foreach ($names as $value) {
			echo "$value<br/>";

		
		}

		// Functions
		function helloThere($first_name, $Last_name) {
			return "Hello There $first_name $Last_name!";

		}

		$answer =  helloThere("John", "Elder");

		echo $answer;
		
		echo "<br/>";

		// Random Function

		echo mt_rand(0,100);

		echo "<br/>";

			// Date Function

		echo date("Y");

		echo "<br/>";

		echo date('y');

		echo "<br/>";

		echo date('l jS \of F, Y');

		echo "<br/>";

		$todays_day = date('l');
		echo "Today is $todays_day";

		echo "<br/>";

		$todays_day = date('Y');
		echo "Copyright (c) $todays_day - All rights Reserved";

		echo "<br/>";

		// String Manipulation

		$stuff = "John Elder is a PHP Coding Monster";

		echo str_replace("Monster", "Dork", $stuff);

		echo "<br/>";

		$stuff = "john elder";

		echo strtoupper($stuff);

		echo "<br/>";

		echo ucwords($stuff);

		echo "<br/>";

		echo ucfirst($stuff);

		echo "<br/>";

		echo strtolower($stuff);

		echo "<br/>";

			$stuff = "John eLder";

		echo lcfirst($stuff);

		echo "<br/>";

		echo strlen($stuff);

		echo "<br/>";

		echo str_shuffle($stuff);

		echo "<br/>";

		//Include Function
		echo "Copyright (c) " . date("Y") . " - ALL Rights Reserved";

		echo "<br/>";

		include("variables.php");



include("footer.php");











;?>
	
	</center>
</h1>























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>



<?php



