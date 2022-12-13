<?php
require_once 'header.php';
//if  a user is logged in already goto to project page
if (isset($_SESSION['user'])){
?>
<script type='text/javascript'> location.href = 'Projects';</script>;
<?php
}
?>
<img  class="card-img-top center" src="img/logoz.svg" alt="Card image">

<?php
echo " <div class='main'><h1>Sign in @COHORT</h1>";
$error = $user = $pass = "";
if (isset($_POST['user']))
{
$user = sanitizeString($_POST['user']);
$pass = sanitizeString($_POST['pass']);
if ($user == "" || $pass == "")
$error = "<i style ='background-color:red;' class='fas fa-exclamation-triangle wow shake animated' data-wow-duration='.9s'> Input required </i><br>";
else
{
$result = queryMySQL("SELECT user, email, pass FROM members WHERE  (user='$user' OR  email='$user')  AND pass='".hash('sha256', $pass) ."'");
if ($result->num_rows == 0)
{
$error = "<span class='error wow fadeInLeft animated' data-wow-duration='.9s' style ='background-color:red;' > <i class='fas fa-exclamation-triangle'> Username / Password invalid</i> </span><br><br>";
}else
{ 
$user = preg_replace('/\s+/', '', $user);
  $sql = "SELECT * FROM members WHERE user LIKE '%$user%' OR email LIKE '%$user%';";  
  $resultx = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($resultx); 
  if($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($resultx)){
  $switch = $row['user'] ;
  
  }
 } 


$_SESSION['user'] = $switch;
$_SESSION['pass'] = $pass;
die("<script type='text/javascript'> location.href = 'Projects';</script> ");}
 }
 }
echo <<<_END
<form method='post' action='login.php'>$error

        <div class='google_in'><img src="img/google.svg">Sign in with Google</div> <hr class='white_line '>

<div class='form-group'> <label for='user'>email address or username </label>
  <input required style='display:none' type='text' maxlength='30' name='user' value='$user'/>
 </div> 

<div class='form-groupII'> <label for='pass'> Password </label> 
 <input style='display:none'  type='password' maxlength='30' name='pass' value='$pass' id='myInput'/>
<input type="checkbox" onclick="myFunction()"/>
</div>

_END;
?>



<button type='button' class="post_iconII">Next</button>

<div class='google_in'><a href=''>¿Forgot password </a></div> 

<p class='signup_txt'>Dont have an account? <a href='signup.php'> Sign up</a> </p>


<a href="index.php" class="post_iconII_back"><i class="fa-solid fa-x"></i></a>

</form>
</div>

</body>
</html>

 <script src="login.js"></script> 

