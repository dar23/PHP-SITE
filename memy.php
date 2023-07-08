<?php  require("connection.php");
    
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="stylesheet" href="style/memy.css">

<body>
 

<?php



  $sql_humor_gallery = "SELECT DISTINCT * FROM humor_post ORDER BY id DESC";
  $result=$conn->query($sql_humor_gallery);
  

echo '<div class="gallery_post">';

while($row=mysqli_fetch_array($result)){


 echo '<img class="photo"  src="processed/'.$row["pictures"].'">'; // zmiana ścieżki na processed
 

}
echo'<div class="place_big_photo">'.'</div>';


?>







<script src="js/memy.js"></script>










































</body>



































</head>