<!DOCTYPE HTML>
<HTML>
<head>
    <style>
        .error {color:red}
        </style>
    <link rel="stylesheet" href="sita.css">
    
</head>
<body>

<?PHP

$name = $email = $website = $gender= "";
$nameER = $emailER = $websiteER = $genderER = "";
$R = $nameER;


if ($_SERVER ["REQUEST_METHOD"] == "POST"){
if(empty($_POST["name"])) {
$nameER = "Name is required";
}else{
    $name = test_input($_POST["name"]);
    // if (!preg_match("@#$$%?//#$ffq;gwvv", $name))
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $nameER = "Only letters and white space allowed";
    }

}

if(empty($_POST["email"])) {
    $emailER = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailER = "Invalid email format";
        }
    }
    
if(empty($_POST["website"])) {
    $websiteER = "website is required";
    }else{
        $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteER = "Invalid URL";
        }    
    }

    if(empty($_POST['gender'])) {
        $genderER = "gender is required";
        }else{
            $gender = test_input($_POST["gender"]);
        }
    }
    

function test_input($data)
{
    // $data = "";
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
        ?>

<H1 style= color:aqua>Form validation</H1>
<span class="error">*******<?php echo $R;?></span>
<form method="POST" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
Name: <input type= "text" name= "name">
    <span class="error"><?php echo $nameER?></span><p>

Email: <input type= "text" name="email">
<span class="error"><?php echo $emailER?></span><p>

website: <input type= "text" name="website">
<span class="error"><?php echo $websiteER?></span><p>

Gender:
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="male">female
<input type="radio" name="gender" value="male">other
<span class="error"><?php echo $genderER; ?></span>
<br><br>
<input type="submit" name="submit" value="submit";>
</form>


<?php
echo "<h2 style= color:red>Your data </h2>";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $gender; 





?>
</HTML>
</body>
