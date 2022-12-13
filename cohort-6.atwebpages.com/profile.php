<?php
require_once 'header.php';
if (!$loggedin) {
header('Location: /index.php');
die();
}
?>
<div class= '' id='content' >

<?php
echo "<div class='w3-container w3-light-grey w3-content'> " . 
   " <div class='main'><h3>Edit Profile</h3> ";
$result = queryMysql("SELECT * FROM members WHERE user='$user' OR email='$user' ");

////////////////////////////////////////

//status upload start
//checking for escape strings/charaters start
if (isset($_POST['status']))
{
$status = sanitizeString($_POST['status']);
$status = preg_replace('/\s\s+/', ' ', $status);
if ($result->num_rows)
queryMysql("UPDATE members SET status='$status' where user='$user' OR email='$user'");
else queryMysql("INSERT INTO members VALUES('$user', '$status')" );
}
//checking for escape strings/charaters end

//displayed status start
else{
if ($result->num_rows)
{
$row = $result->fetch_array(MYSQLI_ASSOC);
$status = stripslashes($row['status']);
}
else $status = "";
}
$status = stripslashes(preg_replace('/\s\s+/', ' ', $status));
//displayed status end
//status upload end


$file_tmp = $_FILES['image']['tmp_name'];
$size = filesize($file_tmp);

//image upload start
if (isset($_FILES['image']['name']))
{
if (!file_exists("uploads/$user/")) {
    mkdir("uploads/$user/");
}
$target_dir = "uploads/$user/$user.jpg";
$typeok = TRUE;

// Check file size
if ($_FILES["image"]["size"] > 900000) {
  echo "Sorry, your file is too large.";
  $typeok = 0;
}

$typeok = TRUE;
switch($_FILES['image']['type'])
{
case "image/gif":
$src = imagecreatefromgif($target_dir); break;
case "image/jpeg": // Both regular and progressive jpegs
case "image/pjpeg": $src = imagecreatefromjpeg($target_dir); break;
case "image/png":
$src = imagecreatefrompng($target_dir); break;
default:
$typeok = FALSE; break;
}

// Check if $uploadOk is set to 0 by an error
if ($typeok == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir)) {
    echo "The file ". htmlspecialchars(basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}
}
showProfile($user);
echo <<<_END
<form method='post' action='profile.php' enctype='multipart/form-data'>
<h3>Enter or edit your details and/or upload an image</h3>
<textarea name='status' cols='20' rows='3'>$status</textarea><br>
_END;
?>


Image: <input type='file' name='image' size='3'> 
<input type='submit' value='Save'>
</form></div><br>


<?php
echo 'SEEN'. $xcore;
?>



</div>

</body>
</html>

