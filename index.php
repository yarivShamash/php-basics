<?php 

// Variables and CONSTANTS:
  // Variables start with $ and a letter or _ as first character
  $heading_1 = 'Welcome to the world'; 
  $name = 'Yoshi';
  $age = 40;

  // Defining CONSTANTS:
  // define('CONSTANT_NAME <str>', CONSTANT_VALUE);
  define('MY_FIRST_CONSTANT', 'I\'m a constant, you can\'t change me!');

// Strings, can be placed between single OR double quotes ('my string' OR "me string")

  // Single quotes strings:
  $string_one = 'my email is: ';
  $string_two = 'mario123@theNetNinja.com';

  // String concatination, is done using a dot . between two strings

  $string_concatination = $string_one . $string_two;

  // Double quotes strings can be used to integrate variables

  $present_user = "Hey my name is $name";

  // Escaping special characters lie ', " and such in a string can be done by prepending them with a back-slash \
  $escape_1 = "Your mama said \"Come back home\"";
  $escape_2 = 'Your mama said "Come back home"'; // <-- this also works because the quotes are different. Singles can be used inside doubles as well

  // Targeting string letters
  $give_me_the_first_letter = $name[0]; // returns the first letter of the name variable

  // PHP offers many string functions: https://www.php.net/ref.strings
  

// Numbers

  // integers:
   $radius = 25;
  // float:
   $pi = 3.14;
  
  // Math operators: *, /, +, -,  ** <--number by the power of
    $circule_surface = $pi * $radius ** 2;

  // PHP offers many mathmatical functions: https://www.php.net/manual/en/ref.math.php OR https://www.phptpoint.com/php-numeric/ OR https://www.w3schools.com/php/php_ref_math.asp

// Arrays

  // Idexed Arrays  (Very similar to arrays in JS)
  $people_names = ['Shaun', 'Crystal', 'Raja'];
  $bird_names = array('Eagle', 'Pelican', 'Albatros', 'Kuku', 'Canary');

  // to echo entire arrays they need to be converted to strings before hand using 
  // the print_r(Array) function print readble
    $all_birds_names_echoble = print_r($bird_names);

  // array manipulations 
    $people_names[1] = 'Alex'; // replace Crystal with Alex
    $people_names[] = 'Ruben'; // add Ruben to the end of the array
    array_push($people_names, 'Hanan'); // add Hanan to the end of the array
    array_pop($people_names); // removes Hanan to the end of the array
    $popped = array_pop($people_names); // returns the value popped
    $count_people_names =  count($people_names); // counts the number of entries in the array

    $all_people_names_echoble = print_r($people_names);

    // Associative Arrays similar to JS objects. 'key' => 'value' pairs are stored in []
    
      $things_colors = ['pen' => 'blue', 'shirt'=>'pink', 'glass' => 'brown'];
      //changing the value of a key:
      $things_colors['glass'] = 'transparent';
      $color_of_my_shirt = $things_colors['shirt'];

    //MultiDimentional Arrays (arrays within arrays), basically:
     $multi_array = [[], [], [[], [], [] ]];
    // to access the nested values we can use:
      // $multi_array[2][3];

    // more array functions can be found: https://www.php.net/manual/en/ref.array.php

  // Loops:
    // For Loops:
    for ( $i = 0; $i < 5; $i++ ) {
      echo 'looping ' . $i . ' ';
    }; //here the number 5 could be replaced with count($whatever_array);

    // Foreach Loop:
    foreach ($bird_names as $bird_name) {
      echo 'bird name ' . $bird_name . '<br />';
    };

    // While loops
      $j = 0;
      while($j < count($bird_names)){
        echo $bird_names[$j] . ' is flying heigh' . '<br />';
        $j++;
      };
      
// Contiune and Break:
  // break is a keyword used to break out if a loop
  // continue keyword doen NOT continue forward with the loop but goes 
  // to the top of the condition and evaluates it again. It skips:

  foreach($bird_names as $bird_name) {
    if ($bird_name === 'Kuku'){
      echo 'Kuku NOOOOOO! I break';
      break;
    };

    if ($bird_name === 'Albatros') {
      continue;
    };
    echo $bird_name . ' was not skipped <br />';
  };
  echo '<br />';

//Booleans (true or false):
  // when echo-ing  true evaluates to "1" and false to "" 
  // comparisons are done with: ==, ===, !==, >, >=, <, <=
  // string comparisons is also interesting, check out: https://www.youtube.com/watch?v=hxYQA-nuIXY&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=10 about 8:00

//Conditional Statments:
  // if () {} elseif () {} else {}
  // or opperand is ||; and opperand is &&; there are more here: https://www.w3resource.com/php/operators/logical-operators.php#:~:text=The%20standard%20logical%20operators%20and,then%20perform%20the%20respective%20comparison.&text=is%20true%20if%20both%20%24x%20and%20%24y%20are%20true.&text=is%20true%20if%20either%20%24x%20or%20%24y%20is%20true.


//Functions:
  // In PHP functions are declared with the keyword function:
  function sayHello($name = 'Yariv'){
    echo 'G\'day ' . $name . '!';
    echo '<br />';
  };
  //arguments can get a default value, in this case $name = 'Yariv'

  sayHello(); //here name defaults to 'Yariv'
  sayHello('Dudy');

  // String templating in a function:
  function item_color($item){
    return "{$item['name']} is {$item['color']} <br />";
  }; 
  
    $bottle_color = item_color(['name' => 'Bottle', 'color' => 'green']);
    echo $bottle_color;
  
  //use 'return' like in JS
  //pass as many arguments as desired using a ','

// Scopes:
  // The principle is similar to JS with a few acceptions:

  // Accessing a variable outside the scope of the function:
    
    //1. Define a variable outside the scope of a function:

    $snack = 'Bamba';

    // 2. Declare a function:
    function i_like_snack() {

      // 3. Import the variable to the inner scope using the "global" keyword
      global $snack;
      echo "I love $snack <br />";
    };

    //4. Call the function:
    i_like_snack();

    // Note, when assigning a different value to a global variable, the value will change both in and out of the scope
    // We can also pass a variable to a function by referance using '&' like so:
    $food = 'Kuskus';
    echo $food . '<br />';

    function i_eat_snack(&$food){
      $food = 'Bisli';
      echo "I eat $food <br />";
    };
    i_eat_snack($food); //this will echo "I eat Bisli"

    echo $food . '<br />'; //$food now evaluates to Bisli because it was changed in the function above.


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile Name</title>
</head>
<body>
<h1><?php echo $heading_1; ?></h1>  
<h2><?php echo $color_of_my_shirt; ?></h2>  
<h2><?php echo $things_colors['glass']; ?></h2>  
</body>
</html>