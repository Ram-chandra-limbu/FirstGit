


<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 


<?php

$nameER = $emailER = $gender = $comment = $Website = "";

$name = $email = "";
$gender = "";
$comment = "";
$website = "";

if($_SERVER["REQUEST_METHOD"]= "POST") {
  if(empty($_POST["name"])) {
    $nameER= "You must enter your name";
}
    else{
    $name = test_input($_POST["name"]);
    }

  if(empty($_post["email"])) {
    $emailER = "Please enter your email";
  }else{  $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $websiteER = "";
  }else{
    $website = test_input($_POST["website"]); 
  }

  if (empty($_POST["comment"])) {
    $commentER = "";
  }else{
  $comment= test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
$genderER= "Gender is empty";
}else{
    $gender = test_input($_POST["gender"]);
}
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = test_input($_POST["name"]);
//   $email = test_input($_POST["email"]);
//   $website = test_input($_POST["website"]);
//   $comment = test_input($_POST["comment"]);
//   $gender = test_input($_POST["gender"]);
  
// }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Input your data Here SuZuKi</h1>
<p><span calss="error">* required to filled</span></P>
<form method= "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type = "text" name= "name"><p>
<span class= "error">* <? echo $nameER;?></span>
<br><br>;
Email: <input type = "text" name= "email"><p>
<span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
Website: <input type= "text" name="website"><p>
  <span class = "error"><?Php echo $website ?></span>
comment: <textarea name= "comment" rows="4" cols= "40"></textarea><br>


gender:
<input type="radio" name= "gender" value= "female">Female
<input type="radio" name= "gender" value= "male">Male
<input type="radio" name= "gender" value= "other">other
<input type=submit name="Submit" value="submit">
<span class = "error"><?php echo $gender ?></span>
</form>

<?php
echo "<h1>Your input data</h1><br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;




?>
</body>
</html>
