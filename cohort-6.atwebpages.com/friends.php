<?php
require_once 'header.php';
if (!$loggedin) die();

require_once ('control.php');
?>
<div id="content" class="row">
<div style="margin-top:30px;" class="col col-sm-8">
<div  class="row" >
<div class="col col-sm-6">  <button  type="button" class="btn btn-light btn-block"><h1 style="font-size:15px;">Followers</h1></button></div>
<div class="col col-sm-6">  <button type="button" class="btn btn-light btn-block"><h1 style="font-size:15px;">Following</h1></button></div>
</div>

<?php
if (isset($_GET['view'])) $view = sanitizeString($_GET['view']);
else
$view = $user;
if ($view == $user)
{
$name1 = $name2 = "Your";
$name3 = "You are";
}
else
{
$name1 = "<a href='members.php?view=$view'>$view</a>'s";
$name2 = "$view's";
$name3 = "$view is";
}
echo "<div class='main '>";
// Uncomment this line if you wish the user's profile to show here
// showProfile($view);
$followers = array();
$following = array();
$result = queryMysql("SELECT * FROM friends WHERE user='$view'");
$num = $result->num_rows;
for ($j = 0 ; $j < $num ; ++$j)
{ $row = $result->fetch_array(MYSQLI_ASSOC);
$followers[$j] = $row['friend'];
}
$result = queryMysql("SELECT * FROM friends WHERE friend='$view'");
$num = $result->num_rows;
for ($j = 0 ; $j < $num ; ++$j)
{
$row = $result->fetch_array(MYSQLI_ASSOC);
$following[$j] = $row['user'];
}
$mutual  = array_intersect($followers, $following);
$followers = array_diff($followers, $mutual); 
$following = array_diff($following, $mutual);
$friends  =  FALSE;
if (sizeof($mutual))
{
echo "<span class='subhead'>$name2 mutual friends</span><ul>";
foreach($mutual as $friend)
echo "<li><a href='members.php?view=$friend'>".
"$friend</a>";
echo "</ul>";
$friends = TRUE;
}
if (sizeof($followers))
{
echo "<span class='subhead'>$name2 followers</span><ul>";
foreach($followers as $friend)
echo "<li><a href='members.php?view=$friend'>$friend</a>";
echo "</ul>";
$friends = TRUE;
}
if (sizeof($following))
{
echo "<span class='subhead'>$name3 following</span><ul>";
foreach($following as $friend)
echo "<li><a href='members.php?view=$friend'>$friend</a>";
echo "</ul>";
$friends = TRUE;
}
if (!$friends) echo "<br>You don't have any friends yet.<br><br>";
echo "<a class='button' href='messages.php?view=$view'>" .
"View $name2 messages</a>";
?>
</div>
</div>

<div style="background:black; border-radius:15px; margin-top:30px;" class="col col-sm-4 overflow-auto full-text"> 
</div>

</div>
</body>
</html>





