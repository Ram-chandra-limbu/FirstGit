
<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
  <body>
  
  // $path="C:\Users\DELL\Desktop\soul1.txt";
// $myfile =fopen("C:\Users\DELL\Desktop\soul1.txt", "r" ) or die ("unable to open file");
// echo fgets($myfile,filesize("C:\Users\DELL\Desktop/soul1.txt"));
// fclose($myfile); 





// $myfile=fopen("C:\Users\DELL\Desktop\soul1.txt", "r") or die ("unable to open file");
// echo feof($myfile,filesize("C:\Users\DELL\Desktop\soul1.txt"));
// fclose($myfile);


// $myfile = fopen("C:\Users\DELL\Desktop/soul1.txt","r") or die("unable to open file");
// while(!feof($myfile)) {
//  echo fgets($myfile) . "<br>";
// }
// fclose($myfile);

// $myfile= fopen("txt file/soul2.txt", "w") or die("unable to open file");
// $txt= "ram is ram, ram is non of then other\n";
// fwrite($myfile, $txt);
// $txt= "ram is a good person";
// fwrite($myfile, $txt);
// fclose($myfile);


// $myfile = fopen("txt file/soul2.txt", "a") or die("Unable to open file!");
// $txt = "Sita ram\n";
// fwrite($myfile, $txt);
// $txt = "ram sita\n";
// fwrite($myfile, $txt);
// fclose($myfile);


// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["txt file/soul.txt"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["txt file/soul.txt"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["txt file/soul.txt"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// //if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
// ?>
//   </body>
// </html>


<!-- 
// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
// ?>
// <html>
// <body>

// <?php
// if(!isset($_COOKIE[$cookie_name])) {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// } -->


<?php
$_SESSION["favcolor"]= "blue";
$_SESSION["favanimal"] = "cat";
echo "Love the guy.";

</body>
</html>