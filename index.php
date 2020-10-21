<?php
// Include and Require:
  //include is similar to JS import but it's a function
echo 'PHP block starts here <br />';
include('include_me.php'); // can also be written as include 'include_me.php'
require('require_me.php'); // can also be written as require 'require_me.php'

//If using include on a file which does not exist we will get an error but code does not break.
// require will break the code from continuing yet everything above will still run.

 echo 'end of PHP block.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile Name</title>
</head>
<body>
<!-- <h1><?php echo $heading_1; ?></h1>   -->
<h2><?php include 'include_me.php'; ?></h2>  
<h2><?php require 'require_me.php'; ?></h2>  
</body>
</html>
