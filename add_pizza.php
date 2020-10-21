<?php

  if(isset($_POST['submit'])){
  // check email
    if (empty($_POST['email'])) {
      echo 'Email requiered. <br />';
    } else {
      echo htmlspecialchars($_POST['email']);
    }; 
  // check title 
    if (empty($_POST['title'])) {
      echo 'Title requiered. <br />';
    } else {
      echo htmlspecialchars($_POST['title']);
    };
  // check ingredients
    if (empty($_POST['ingredients'])) {
      echo 'At least one ingredient requiered <br />';
    } else {
      echo htmlspecialchars($_POST['ingredients']);
    };
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
			<input type="text" name="email">
			<label>Pizza Title</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated):</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

<?php include 'templates/footer.php';?> 

</html>
