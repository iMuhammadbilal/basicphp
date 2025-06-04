<!-- today my 1st day on php language -->

<!-- what is php? -->
<!-- php is a server side scripting language -->
<!-- php is used to create dynamic web pages -->
<!-- php is a free and open source programming language -->
<!-- php is not case sensitive -->
<!-- php can be embedded into HTML -->
<!-- different between javascript and php -->
<!-- javascript is a client side scripting language -->
<!-- php is a server side scripting language -->

<?php

// echo is used to output data to the screen
echo "Hello World!"; // this is a single line comment

echo "Today is my first day on PHP language!"; // this is another single line comment

// echo phpinfo(); // this will output the php information

// this is a multi line comment
/*
this is a multi line comment
*/
?>

<!-- PHP variables -->
<?php
// variables are used to store data
$variable_name = "value";
// variables can be used to store different types of data
$integer_variable = 10; // integer
$float_variable = 10.5; // float
$string_variable = "Hello World!"; // string
$boolean_variable = true; // boolean

// printing variables
echo $integer_variable; // outputs: 10

$txt = "W3Schools.com";
echo "I love $txt!"

// Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y.

$x = 5;
$y = 10;
echo $x + $y;


$name = 'Linus'; // this is a global variable
function myTest() {
  global $name; // the global keyword is used to access a global variable from within a function
  $name = 'Tobias'; // this will change the value of the global variable $name
}
myTest(); // now $name is changed to 'Tobias' inside the function
echo $name; // outputs: Tobias


$name = 'Linus'; // this is a global variable
function myTest() { // this is a local variable
  $GLOBALS['name'] = 'Tobias'; // the $GLOBALS array is used to access global variables from within a function
  // this will change the value of the global variable $name
}
myTest(); // now $name is changed to 'Tobias' inside the function   
echo $name; // outputs: Tobias

print "Hello World!"; // print is also used to output data to the screen, but it is a language construct, not a function
// print is similar to echo, but it can only take one argument and returns 1, so it can be used in expressions


$x = 5;
echo 'The price is $x'; // outputs: The price is $x, because single quotes do not parse variables
echo "The price is $x"; // outputs: The price is 5, because double quotes parse variables


//Get the length of the string "Hello World!".
$length = strlen("Hello World!"); // strlen() function returns the length of a string
echo "The length of the string is: $length"; // outputs: The length of the string is: 12

//Reverse the string "Hello World!".
$reversed = strrev("Hello World!"); // strrev() function reverses a string
echo "The reversed string is: $reversed"; // outputs: The reversed string is: !dlroW olleH

// Replace the word "World" with the word "Dolly".

$original_string = "Hello World!";
$replaced_string = str_replace("World", "Dolly", $original_string); // str_replace() function replaces a substring with another substring
echo "The original string is: $original_string"; // outputs: The original string is: Hello World!


// What will be the result of $z in the following code example:
$x = 5; // this is a variable
$y = 10; // this is a variable
$z = "$x . $y"; // The result will be: $z = "5 . 10", because the double quotes parse the variables and concatenate them with a dot in between
echo "The value of z is: $z"; // outputs: The value of z is: 5 . 10

$name = "Muhammad Bilal Khan";
echo = substr($name, 0, 7); // substr() function returns a part of a string, starting from index 0 and ending at index 7
echo "The first 7 characters of the name are: " . substr($name, 2, 7); // outputs: The first 7 characters of the name are: Muhammad 


// arrays types in php
// 1. indexed arrays
// 2. associative arrays
// 3. multi-dimensional arrays

// indexed array
$colors = array("Red", "Green", "Blue"); // this is an indexed array
echo "The first color is: " . $colors[0]; // outputs: The first color is: Red

// associative array 
//associative arrays are arrays that use named keys that you assign to them
$ages = array("Muhammad" => 25, "Bilal" => 30, "Khan" => 35); // this is an associative array
echo "Muhammad's age is: " . $ages["Muhammad"]; // outputs: Muhammad's age is: 25

// multi-dimensional array
// mutli-dimensional array is an array that contains other arrays as its elements
// real world use case of multi-dimensional array is to store data in a table format
$students = array(
    array("name" => "Muhammad", "age" => 25, "grade" => "A"),
    array("name" => "Bilal", "age" => 30, "grade" => "B"),
    array("name" => "Khan", "age" => 35, "grade" => "C")
);

//print multi-dimensional array
echo "The first student's name is: " . $students[0]["name"]; // outputs: The first student's name is: Muhammad

//what is object in php? define about object in php?
// An object is an instance of a class. A class is a blueprint for creating objects.
class Car {
    public $color; // property
    public $model; // property

    public function __construct($color, $model) { // constructor
        $this->color = $color; // this refers to the current object
        $this->model = $model; // this refers to the current object
    }

    public function getDetails() { // method
        return "Car model: " . $this->model . ", Color: " . $this->color;
    }
}


// how many ways to create object in php



?>