<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style/science.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>




<?php
require('connection.php');
require('admin.php');


  $sqli = "SELECT DISTINCT * FROM science";
  $result=$conn->query($sqli);
  

echo '<div class="place_to_posts">';  

while($row = mysqli_fetch_array($result)){
  $rowtitle=$row['title'];
  $rowwith=$row['articles'];
echo "<div class='main_post'>"
  
      .'<div class="photo">'
      .'<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'">'
      ."<div class='title'>".'<p class="pe">'.mb_strimwidth("$rowtitle",0,35,"...").'</p>'. "</div>".'</a>'
      .'</div>'
    
      ."</div>";
     

    }

  
echo '</div>'; 
?>

  
</body>
</html>