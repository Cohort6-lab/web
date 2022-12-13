<?php
require_once 'header.php';
if (!$loggedin) die("<script type='text/javascript'> location.href = 'login.php';</script>");
 
 require_once ('control.php'); 
 
 ?>
 <div class="third_display full-text"> 
 
 <input type="text" class="search_bar" placeholder="Search Cohort">
  
<div  class="third_display_content container"><h1 class="third_display_content_head">TOP Projects
</h1></div>
</div>

 
<?php 
 
echo " <div  id='content'>" ;


/*PROFILE PAGE */

if (isset($_GET['view']))
{
$view = sanitizeString($_GET['view']);

if ($view == $user) $name = "Your.";
else  $name = "$view's";

echo

//"<h3 class='pro-head_name'>$name Profile</h3> ";
profileview($view);
echo 
// "<a class=' button' href='messages.php?view=$view'>" .
// "View $name POST</a> ".

" <div class='container full-text'></div> ";
die("</div></body></html>");
}

/*Followers code*/
if (isset($_GET['add']))
{
$add = sanitizeString($_GET['add']);
$result = queryMysql("SELECT * FROM friends WHERE user='$add' AND friend='$user'");
if (!$result->num_rows)
queryMysql("INSERT INTO friends VALUES ('$add', '$user' , NULL)");
}

/*unfollow code*/
elseif (isset($_GET['remove']))
{
$remove = sanitizeString($_GET['remove']);
queryMysql("DELETE FROM friends WHERE user='$remove' AND friend='$user'");
}

/*list of all member code*/
$result = queryMysql("SELECT * FROM members ORDER BY user AND RAND() ");
$num  = $result->num_rows;

echo "<div id='pheader'><h1 class='projectz_head'>" .
"<a href='members.php?view=$user'><img src='$dp'style='width:33px; height:33px; object-fit:cover;' class='rounded-circle'></a> Connect</h1></div><br> <ul class='ul1'>";
for ($j = 0 ; $j < $num ; ++$j)
{
$row = $result->fetch_array(MYSQLI_ASSOC);


if ($row['user'] == $user)  continue;


 
echo "<li class='boxz wow fadeInDown animated ' data-wow-duration='.9s' > ".
" <a  href='members.php?view=". $row['user'] . "'>" ;

$file_pointer = "uploads/".$row['user'] . "/". $row['user'] .".jpg";
if (file_exists($file_pointer)){
echo "<img src= ". $file_pointer ." style='width:50px; height:50px;  object-fit: cover;' class='rounded-circle'>";
}
else{
echo "<img src='img/default.png' style='width:50px; height:50px;  object-fit: cover;' class='rounded-circle'>";
}


echo " &nbsp; " .$row['user']. "<div class='user_4_mem'>@".$row['user']."</div></a>";

$follow = "Connect";
$result1 = queryMysql("SELECT * FROM friends WHERE user='" . $row['user'] . "' AND friend='$user'");
$t1 = $result1->num_rows;
$result1 = queryMysql("SELECT * FROM friends WHERE user='$user' AND friend='" . $row['user'] . "'");

$t2 = $result1->num_rows;
if (($t1 + $t2) > 1)  echo "<img class='xcom_mutual'>";
elseif ($t1)   echo " ";
elseif ($t2)     {echo " <span class='xcom'>_</span>"; 
$follow = "Connector";}

if (!$t1) echo " <a href='members.php?add=" .
$row['user'] . "'><span class='xcom'>$follow</span></a>"; 
else echo " <a id='a' class='xcom' data-replace='Disconnect' href='members.php?remove=" .
$row['user'] . "'><span >Connected</span></a>";

echo "<p>"  .$row['status']. "</p> <div class='footer_line'>Rank: <img src='img/rank/bar0.svg' style='width:30px; height:25px;'> </div> " .
"<div class='footer_line_ii'> 12k Connections</div>";
}
?>


</ul> 
</div>


</div>


<script>

// You could easily add more colors to this array.
var colors = ['#0d4eb5', '#c40808',   '#0c5417',  '#808000', '#0c3d54',  '#000000', '#000080', '#f54260'];
var boxes = document.querySelectorAll(".boxz");

for (i = 0; i < boxes.length; i++) {
  // Pick a random color from the array 'colors'.
  boxes[i].style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
  boxes[i].style.width = '100%';
  boxes[i].style.height = 'fit-content';
  boxes[i].style.display = 'inline-block';
}
</script>


</body>
</html>











