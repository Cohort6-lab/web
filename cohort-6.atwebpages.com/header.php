<?php
session_start();

//error_reporting(E_ERROR | E_PARSE);
echo "<!DOCTYPE html>\n<html><head>";
require_once 'functions.php';            
$userstr = '';



if (isset($_SESSION['user']))
{
$user = $_SESSION['user'];
$loggedin = TRUE;
$userstr = "($user)";
}
else $loggedin = FALSE;
 
echo 
" <meta charset='UTF-8' /> " .
 " <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /> " .
  " <meta name='viewport' content='width=device-width, initial-scale=1' > " .

"<title>$appname$userstr</title>" .
  "<link rel='shortcut icon' type='image/png' href='img/FINAL.png'/>" .
  "<link href='https://fonts.googleapis.com/css2?family=Montserrat900&family=Ubuntu:wght@700&display=swap' rel='stylesheet'>" .

 " <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>".
  " <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>".
  "<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>" .
  
  
"  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v6.1.1/css/all.css'>".

" <link href='https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css' rel='stylesheet' /> " .
" <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>" .
 //formally jquery/2.1.1

 "  <link href='http://cohort-6.atwebpages.com/css/style.css' type='text/css' rel='stylesheet'> ".
  " <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'> " .
   
  " <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> ".
"<script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>".
"<script> new WOW().init(); </script>" .
"<noscript>Please Enable JavaScript!</noscript>".
// Wait for window load
"<script> $(window).load(() => { $('.se-pre-con').fadeOut('slow');;});   </script> " .
	


"</head><body> <div class='se-pre-con'></div>";




if ($loggedin){
echo
"";  
/* 
"    <section id='header'  class='container-fluid '> ".
   
   "  <nav id='navs'  class='navbar navbar-expand-sm  navbar-dark  wow fadeInDown animated' data-wow-duration='.4s' >".
   "   <div  class='container-fluid '> " .
    "    <a class='navbar-brand' href='members.php?view=$user'>  &nbsp;<i class='icon'><img src='img/$user.jpg'  style='width:40px; height:40px;' class='rounded-circle ' >  </i> </a> ".
     "   <button class='navbar-toggler collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapsibleNavbar'> ".
      "    <span class='toggler-icon  top-bar'></span>".
       "    <span class='toggler-icon middle-bar'></span>".
       "    <span class='toggler-icon bottom-bar'></span>".
       " </button>".
       " <div class='collapse navbar-collapse' id='collapsibleNavbar'>".
        "  <ul class='navbar-nav ms-auto'>".
         "    <li class='nav-item'>".
          "    <a class='nav-link' href='profile.php'><i class=' fas fa-user'></i> </a> ".
           " </li>" .
           "   <li class='nav-item'> " .
          "    <a class='nav-link' href='members.php'><i class='fa-solid fa-people-group'></i></a> " .
           " </li>" .
 
         "   <li class='nav-item'> " .
          "    <a class='nav-link' href='friends.php'>DOC</a> " .
           " </li>" .
            "<li class='nav-item'> " .
            "  <a class='nav-link' href='#'>ABOUT</a> " .
            "</li> " .
            "<li class='nav-item'> " .
            "  <a class='nav-link' href='profile.php'><i class='fa-solid fa-gear fa-spin'></i></a> " .
        "    </li>    " .
        "  </ul> ".
        "</div> ".
     " </div> ".
   " </nav> ".
*/
}

else{
;


}

?>
