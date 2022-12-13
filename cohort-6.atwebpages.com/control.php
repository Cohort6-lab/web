
<?php

if ($loggedin){
 if (file_exists("uploads/$user/$user.jpg") &&  file_exists >= "1"){
 $dp = "uploads/$user/$user.jpg" ;
}else{
$dp =  "img/default.png";
}

echo
"<div class='full-text' id='sideBarz'>" .
"<img  class='card-img-top center' src='img/logoz.svg' alt='Card image'> " .
"<div  style='margin-top:67px;'  class='inner_sideBarz'>".
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='Project'> <h1 style='font-size:20px; line-height: 1.9;'> <i class='fas fa-project-diagram fa-xl'></i> Projects</h1> </a> <br> ".
"<a href='messages.php'><h1 style='font-size:20px; line-height: 1.9;'> <i class=' fa-solid fa-microscope fa-xl'></i> Research</h1> </a> <br>" .
"<a href='messages.php'><h1 style='font-size:20px; line-height: 1.9;'>  <i class=' fas fa-message fa-xl'></i> Messages</h1></a> <br>" .
"<a  href='profile.php'><h1 style='font-size:20px; line-height: 1.9;'>  <i class=' fas fa-user fa-xl'></i> Profile</h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'> </h1></a> <br>" .

"<a  href='logout.php'> <h1 style='font-size:20px; line-height: 1.9;'><i class='fa fa-sign-out fa-xl' aria-hidden='true'></i> Sign-out </h1> </a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a class='post_icon' href='' data-bs-toggle='modal' data-bs-target='#staticBackdrop'> POST</a> <br>" .

"</div>".
"</div> ".

"<div class='mid-text' id='sideBarz'>" .
"<img  class='card-img-top center' src='img/logoz.svg' alt='Card image'> " .
"<div  style='margin-top:67px;'  class='inner_sideBarz'>".
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='Project'> <h1 style='font-size:20px; line-height: 1.9;'> <i class='fas fa-project-diagram fa-xl'></i></h1> </a> <br> ".
"<a href='messages.php'><h1 style='font-size:20px; line-height: 1.9;'> <i class=' fa-solid fa-microscope fa-xl'></i></h1> </a> <br>" .
"<a href='messages.php'><h1 style='font-size:20px; line-height: 1.9;'>  <i class=' fas fa-message fa-xl'></i></h1></a> <br>" .
"<a  href='profile.php'><h1 style='font-size:20px; line-height: 1.9;'>  <i class=' fas fa-user fa-xl'></i></h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'> </h1></a> <br>" .
"<a  href='logout.php'> <h1 style='font-size:20px; line-height: 1.9;'><i class='fa fa-sign-out fa-xl' aria-hidden='true'></i></h1> </a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a class='post_icon' href='' data-bs-toggle='modal' data-bs-target='#staticBackdrop'></a> <br>" .

"</div>".
"</div> ".

"<div class='short-text navbar-expand'  id='sideBarz'>" .
"<div class='navbar-nav inner_sideBarzsm'>"  .
"<a href='messages.php'><i class='material-icons'>home</i></a> ". 
"<a href='profile.php'><i class='fa-solid fa-gear' fa-2xl'></i></a> " .
"<a href='logout.php'><i class='fa fa-sign-out fa-2xl' ></i></a> ".
"</div>" .
"</div>";



}
else{



echo
//"<div class='' id='page'>".
"<div style='' class='full-text' id='sideBarz'>" .
"<img  class='card-img-top center' src='img/logoz.svg' alt='Card image'> " .
"<div style='margin-top:97px; width:194px; ' class='inner_sideBarz'>".
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='friends.php'> <h1  style='font-size:20px; line-height: 1.9;'> <i class='fas fa-project-diagram fa-xl'></i> Projects </h1> </a> <br> ".
"<a href='messages.php'><h1 style='font-size:20px; line-height: 1.9;'> <i class=' fa-solid fa-microscope fa-xl'></i> Research </h1> </a> <br>" .
"<a href='Doc.php'><h1 style='font-size:20px; line-height: 1.9;'>  <i class='fas fa-file fa-xl'></i> DOCS</h1></a> <br> " .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'><i class='fa-solid fa-people-group'fa-xl'></i> COMMUNITIES</h1></a> <br>" .
"<a href='login.php'><h1 style='font-size:20px; margin-top:80px; line-height: 1.9;'>Sign-in <i class='fas fa-sign-in-alt fa-xl' aria-hidden='true'></i></h1> </a> <br>" .
"<a href='signup.php'><h1 style='font-size:20px; margin-top:20px; line-height: 1.9;'>Sign-up  <i class='fa-solid fa-user-plus fa-xl' aria-hidden='true'></i></h1></a> <br>" .
"</div>".
"</div> ".


"<div class='mid-text' id='sideBarz'>" .
"<img  class='card-img-top center' src='img/logoz.svg' alt='Card image'> " .
"<div style='margin-top:67px;' class='inner_sideBarz'>".
"<a href='members.php?view=$user'><h1 style='font-size:20px;'></h1></a> <br>" .
"<a href='friends.php'> <h1  style='font-size:20px; line-height: 1.9;'> <i class='fas fa-project-diagram fa-xl'></i></h1> </a> <br> ".
"<a href='messages.php'><h1 style='font-size:20px; line-height: 1.9;'> <i class=' fa-solid fa-microscope fa-xl'></i></h1> </a> <br>" .
"<a href='Doc.php'><h1 style='font-size:20px; line-height: 1.9;'>  <i class='fas fa-file fa-xl'></i></h1></a> <br> " .
"<a href='members.php?view=$user'><h1 style='font-size:20px;'><i class='fa-solid fa-people-group'fa-xl'></i></h1></a> <br>" .
"<a href='login.php'><h1 style='font-size:20px; margin-top:10px; line-height: 1.9;'><i class='fas fa-sign-in-alt fa-xl' aria-hidden='true'></i></h1> </a> <br>" .
"<a href='signup.php'><h1 style='font-size:20px; margin-top:5px; line-height: 1.9;'><i class='fa-solid fa-user-plus fa-xl' aria-hidden='true'></i></h1></a> <br>" .
"</div>".
"</div> ".


"<div class='short-text navbar-expand' id='sideBarz'>" .
"<div class='navbar-nav inner_sideBarzsm'>"  .
"<a href='signup.php' class='sideBarz_icon'>Sign-up</a>".
"<a href='login.php' class='sideBarz_icon'>Log-in </a> ".
"</div>".
"</div>";

}
?>
