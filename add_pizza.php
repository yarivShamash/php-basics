<?php

$email = '';
$title = '';
$ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

  if(isset($_POST['submit'])){
  // check email
    if (empty($_POST['email'])) {
      $errors['email'] = 'Email requiered. <br />';

    } else {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'invalid email address';

      };
    }; 
  // check title 
    if (empty($_POST['title'])) {
      $errors['title'] = 'Title requiered. <br />';

    } else {
      $title = $_POST['title'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        $errors['title'] = 'invalid title';

      };
    };
  // check ingredients
    if (empty($_POST['ingredients'])) {
      $errors['ingredients'] = 'At least one ingredient requiered <br />';

    } else {
      $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,[a-zA-Z\s]*)+$/', $ingredients)){
          $errors['ingredients'] = 'Ingredients must be comma saparated';

        };
    };

    //check if any errors are found:
    if(!array_filter($errors)){
      header('Location: index.php'); // Redirect to index.php
    };
    
    // if(array_filter($errors)){
    //   // echo 'errors found in the form';
    // } else {
    //   // echo 'no errors';
    //   header('Location: index.php'); // Redirect to index.php
    // }; // this if satament was used initially..

    // end of POST check
  //  htmlspecialchars() is a method to protect from XSS attacks
  };

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/header.php';?>

<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add_pizza.php" method="POST">

			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
      <div class="red-text"><?php echo $errors['email'] ?></div>
		
    	<label>Pizza Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title);?>">
      <div class="red-text"><?php echo $errors['title'] ?></div>
		
    	<label>Ingredients (comma separated):</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients);?>">
      <div class="red-text"><?php echo $errors['ingredients'] ?></div>
		
    	<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		
    </form>
	</section>

<?php include 'templates/footer.php';?> 

</html>
