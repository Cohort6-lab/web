<?php
$dbhost = 'fdb33.awardspace.net';
$port    =  '';
$dbname  = '3946161_prol';
$dbuser  = '3946161_prol';
$dbpass  = 'Dumka0510';
$appname = 'Cohort-6 ';


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);



try {

	//create PDO connection
$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}



function createTable($name, $query)
{
queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
echo "Table '$name' created or already exists.<br>";
}


//

function queryMysql($query)
{
global $connection;
$result = $connection->query($query);
if (!$result) die($connection->error);
return $result;
}

//

function destroySession()
{
$_SESSION=array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');
session_destroy();
}

//

function sanitizeString($var)
{
global $connection;
$var =  strip_tags($var);
$var =  htmlentities($var);
$var =  stripslashes($var);
return $connection->real_escape_string($var);
}

//crypt not in use
function generateHash($password) {
    if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
        $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
        return crypt($password, $salt);}
    }


function verify($password, $hashedPassword) {
    return crypt ($password, $hashedPassword) == $hashedPassword ;
    }
//crypt not in use



function member_Profile_pics($user)
{

}


function showProfile($user)
{
$file_pointer = "uploads/$user/$user.jpg";
 if (file_exists($file_pointer)){
echo "<img src='uploads/$user/$user.jpg' style='float:left; width:80px; height:80px; border: 2px solid black;  object-fit: cover;' class='rounded-circle'>";
 }else{
 echo "<img src='img/default.png' style='float:left; width:80px; height:80px; border: 2px solid black object-fit: cover;' class='rounded-circle'>";
 }
 $result = queryMysql("SELECT * FROM members WHERE user='$user' OR email='$user'");
 if ($result->num_rows)
 {
$row = $result->fetch_array(MYSQLI_ASSOC);
echo stripslashes($row['status']) . "<br style='clear:left;'><br>";
 }
}

// profile view START

function profileview($user)
{
?>
<div class="parent" >
<?php
$file_pointer = "uploads/$user/$user.jpg";
 if (file_exists($file_pointer)){
echo 
"<img src='uploads/$user/$user.jpg'  class='proimage1'>".
 "<img src='uploads/$user/$user.jpg' class='proimage2 rounded-circle'>";
}else{
 echo 
 "<img src='img/backs.svg'  class='proimage1'>".
 "<img src='img/backs.svg' class='proimage2 rounded-circle'>";
 }
  echo 
  "<div class='followicon'> Follow</div> " .
  "<i class='fa-brands fa-ethereum pi_coin' data-bs-toggle='tooltip' title='Coming Soon!'></i> " .
 "<div class='backbutton'><i class='fa fa-arrow-left'></i></div> <div class='editbutton'><i class='fa-solid fa-gear fa-spin'></i></div> " .
 " <h3 > ". $user . " </h3> ";
 ?>


</div>

<?php
}
// profile view END


//D project post
function projects($id , $user)
{

 if (file_exists("uploads/$user/$user.jpg") &&  file_exists >= "1"){
echo "<a  href='members.php?view=$user'><img src='uploads/$user/$user.jpg' style='float:left; width:50px; height:50px; border: 2px solid black' class='rounded-circle'> </a>";
 }else{
echo "<a  href='members.php?view=$user'><img src='img/default.png' style='float:left; width:50px; height:50px; border: 2px solid black' class='rounded-circle'> </a>";
 } 
 $result = queryMysql("SELECT * FROM projectz WHERE  id='$id' AND user='$user'");
if ($result->num_rows)
 {
 ?>
 <div style=" word-wrap:break-word; width:100%; font-size:18px;">
 <?php
$row = $result->fetch_array(MYSQLI_ASSOC);
echo  "&nbsp; ". stripslashes($row['user']) . ""; 
 if ($row['post'] >= "1"){
?>
<a style="text-align:right;" href=mailto:<?php echo $row['code'];?> > <i class="fa fa-envelope"></i></a> 
<?php
}
echo  
// D  post text 
"<p  class='projectz_text'>" .
" ". stripslashes($row['post']) . "</p>";
// youtube post
if ($row['youtube'] >= "1"){
?>
<div class="posted_iframe"><span><h1>
<a href="https://www.youtube.com/embed/<?php echo $row['youtube'];?>">
        <i class="fa-solid fa-lock"> <i class="fa-solid fa-expand"></i></i></a></h1></span>
 <iframe  width="100%" height="340" marginheight="0" class="iframe" src="https://www.youtube.com/embed/<?php echo $row['youtube'];?>" frameborder="0" allowfullscreen>      
  Unsupporting browser
 </iframe></div> 
<?php

// D posted links
}elseif ($row['site'] >= "1"){
if (substr( $row['site'], 0, 7 ) === "http://"){
?>
<div class="posted_iframe "><span> <i class="fa-solid fa-unlock">
<i class="fa-solid fa-expand"></i></i></span> 
 <iframe  width="100%" height="340" marginheight="0" class="iframe " src="<?php echo $row['site'];?>" frameborder="0" allowfullscreen>      
  Unsupporting browser
 </iframe></div> 
<?php
}elseif (substr($row['site'], 0, 8 ) === "https://"){
?>
<div class="posted_iframe"><span><h1> 
<a href="<?php echo $row['site'];?>"><i class="fa-solid fa-lock"> <i class="fa-solid fa-expand"></i></i></a>
</h1></span>
 <iframe  width="100%" height="340" marginheight="0" class="iframe" src="<?php echo $row['site'];?>" frameborder="0" allowfullscreen>      
  Unsupporting browser 
 </iframe></div> 
<?php
}
}
}

?>
<div class="viewreply"><i class="fa-solid fa-share-nodes"></i> <i class="fa-regular fa-comment"></i> <i id="btn" class="fa-regular fa-eye"></i></div>
<hr>
 </div>
<?php
 }   

   
   
?>
