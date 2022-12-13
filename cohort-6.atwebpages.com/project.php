<?php
require_once ('header.php');

$stmt0x01 = $connection->prepare("INSERT INTO projectz (post, site) VALUES (' ', 'lxl')");
$stmt0x01->execute();

$stmt0x02 = $connection->prepare("DELETE FROM projectz WHERE post=' ' AND site='lxl' ");
$stmt0x02->execute();

$stmt0x03=$db->prepare("SELECT projectz.id, members.user, projectz.user FROM projectz INNER JOIN members ON projectz.user=members.user ");  
$stmt0x03->execute();

$stmt0x04 = $db->prepare("SELECT projectz.id, profiles.user, projectz.user FROM projectz INNER JOIN profiles ON projectz.user=profiles.user");  
$stmt0x04->execute();

//$row_curr = $stmt0x03->rowCount();

require_once ('control.php');

// if user is not loggedin  
if (!$loggedin) {



?>


<div id='content_offline' >
<?php
if ($stmt0x03-> num_rows >= 0) {
echo "<div id='pheader'> <h1 class='projectz_head' ><i class='fas fa-project-diagram'></i>  xplore</h1></div> " .

" <div class ='container'>" ;

while ($row0x03 = $stmt0x03->fetch(PDO::FETCH_ASSOC)) {
echo  projects($row0x03['id'] , $row0x03['user']) ;
}
?>
</div>

<?php
      }else  {
      echo " EMPTY";
      }
?>

</div>
</div>


</body>
</html>

<?php
die();
}

// if user is  loggedin  
?>
<div class="third_display full-text"> 
<div class="third_display_content container">
<h1 class="third_display_content_head">TOP Projects
</h1></div>
</div>


<div id='content'>
<?php
if ($stmt0x03-> num_rows >= 0) {
echo "<div id='pheader'> <h1 class='projectz_head'>" .
"<a href='members.php?view=$user'><img src='$dp' style='width:33px; height:33px; object-fit:cover;' class='rounded-circle'></a> Home</h1></div> " .
  
  "<button class='post short-text' type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop'> ".
      "    <i class='fa-regular fa-plus fa-xl'></i>". 
       " </button>".   

" <div style='background:transparent; box-shadow:none' class ='container'>" ;
while ($row0x03 = $stmt0x03->fetch(PDO::FETCH_ASSOC)) {
echo  projects($row0x03['id'] , $row0x03['user'])  ;

}
?>
</div>
<?php  

      }else  {
      echo " EMPTY";
      }
?>

</div>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>




</body>
</html>







