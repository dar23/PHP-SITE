
<?php 

require ('connection.php') ;
require('admin.php');

require('player.php');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style\admin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Panel admina</title>
</head>
<body>
    
<div class="panel">


<form method="post" enctype="multipart/form-data" class="form_zero">
    <div class="main">MEMY</div>
    <input type="text" name="main_title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="main_text"></textarea>
        <input type="file" name="main_file"></input> 
        <input type="submit" name="submit"></input> 
</form>

<form method="post"  enctype="multipart/form-data">
    <div class="main">VIDEO</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
    <input type="text" name="describe_video"></input> 
  
    <input type="file" name="my_video"></input> 
    <input type="submit" name="submit" value="upload"></input> 
    
     
       
</form>



<form method="post"  enctype="multipart/form-data">
    <div class="main">EMAIL</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>



</div>

<script src="js/panel.js"></script>

</body>
</html>