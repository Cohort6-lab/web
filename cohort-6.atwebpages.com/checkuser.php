<?php
require_once 'functions.php';
if (isset($_POST['user']))
{
$user = sanitizeString($_POST['user']);
$result = queryMysql("SELECT * FROM members WHERE user='$user'");
if ($result->num_rows)
echo "<span class='taken'>&nbsp;&#x2718; " .
"This username is taken</span>";
else
echo "<span class='available'>&nbsp;&#x2714; " .
"This username is available</span>";
}

if(isset($_POST['email']))
{
$email = sanitizeString($_POST['email']);
$result = queryMysql("SELECT * FROM members WHERE email='$email'");
if ($result->num_rows)
echo "<span class='taken'>&nbsp;&#x2718; " .
"This Email is taken</span>";
else
echo "<span class='available'>&nbsp;&#x2714; " .
"This email is available</span>";

}
?>