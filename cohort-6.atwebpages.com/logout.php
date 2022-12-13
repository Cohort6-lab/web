<?php
require_once 'header.php';
header('Location: /index.php');
if (isset($_SESSION['user']))
{
destroySession();

echo "<div class='main'>You have been logged out. Please " .
"<a href='index.php'>click here</a> to refresh the screen.";

}
else echo "<div class='main'><br>" .
" ";
?>

<br> <br> </div>
</body>
</html>

