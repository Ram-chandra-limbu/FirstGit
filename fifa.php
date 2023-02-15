<?php

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Define variables and set to empty values
  $name = $email = $password = "";

  // Check if name is empty
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  // Check if email is empty
  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }

  // Check if password is empty
  if (empty($_POST["password"])) {
    $password_error = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  // If there are no errors, submit the form
  if (!isset($name_error) && !isset($email_error) && !isset($password_error)) {
    echo "Form submitted successfully!";
    exit;
  }
}

// Function to sanitize input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!-- The form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name;?>">
  <span class="error"><?php echo $name_error;?></span>
  <br><br>
  <label for="email">Email:</label>
  <input type="text" id="email" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $email_error;?></span>
  <br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo $password;?>">
  <span class="error"><?php echo $password_error;?></span>
  <br><br>
  <input type="submit" value="Submit">
</form>