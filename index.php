<?php  require("connection.php"); require('logowanie.php');require('menu.php');require('hamburger.php'); require('player.php');
   
?>


<!DOCTYPE html>

<head>
    <html lang="pl">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/hamburger.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/search_form.css">
    <link rel="stylesheet" href="style/logowanie.css">
    <link rel="stylesheet" href="style/three_post.css">
    <link rel="stylesheet" href="style/main_post.css">
    <link rel="stylesheet" href="style/news.css">  
    <link rel="stylesheet" href="style/three_news.css">
    <link rel="stylesheet" href="style/video_post.css"> 
    <link rel="stylesheet" href="style/translate_menu.css"> 
    <link rel="stylesheet" href="style/part_1.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dariusz Hozer</title>
    <?php require('linki_fonts.php'); ?>
</head>

<body>

<!-- główna strona -->  

<div class="part_1">

  
        
            <div class="search_container">   <!-- wyszukiwarka plików -->
               <form  method="post">
                 <label for="search" class="label_search">
                   <div class="common_element">  
                      <i class=" fa fa-search loop " aria-hidden="true"></i></input>
                      <input type="text" name="searching"class="input_search" autocomplete="off" />
                   </div>
                 </label>
                </form>
             </div>



<div class='player'> <!--  videoplayer miejsce na filmiki   !-->
    
            <div class="video_player">  

                      <?php
                        
                        $videos1 = "SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC ";
                    
                        $result=$conn->query($videos1);

                          echo '<video controls  >';
                                              
                                  while ($row = mysqli_fetch_array($result)){
                                    
                                      echo '<source src="actually/'.$row['video_url'].'  "type="video/mp4">';
                                  
                                      }

                                '</video>';
                                            
                      ?>

                </div>

                      
    <div class="records_video">
        

                  <?php    
 
          require("pagination_video.php");
        

         
                            
                $videos = "SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC LIMIT $skip_page, $limit_on_page ";
               
                $result=$conn->query($videos);


         
                
                    while($row = mysqli_fetch_array($result)){
                                          
                              $descr=$row['video_describe'];
                       
                              echo '<div class="video_container">'
                              .'<video class="video_list" >'.'<source src="actually/'.$row['video_url'].'   ">'.'</video>'
                              .'<div class="record_video">'.'<p class="title_text_video">'.mb_strimwidth("$descr",0,250,"...").'</p>'.'</div>'                                                      
                              .'</div>';
                          };
       
                  ?>
                                          
                </div>                       
       


     <ul class="paginator_video">           
             
             
      <?php      
           
           for($page = 1; $page<= $number_site; $page++) {  
                            
                echo '<li>'.'<a href = "index.php?page=' . $page . '" >' . $page . ' </a>'.'</li>';  
                    
              }  
             
      ?>    
      
      
            </ul>       


</div>  



<div class="place_to_posts"> <!--  miejsce na aktualne posty   !-->
        
      
          <div class='main_post'> 

                  <?php    
                
                  $sqli = "SELECT DISTINCT * FROM posts ORDER BY id DESC LIMIT 1";
                        
                  $result=$conn->query($sqli);
                  

                        while($row = mysqli_fetch_array($result)){
                                    
                          $rowtitle=$row['title'];
                          
                          $rowwith=$row['articles'];

                            echo '<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'">'.'</a>'                       
                                  ."<div class='title'>"
                                  .'<p class="title_text_main">'.mb_strimwidth("$rowtitle",0,30,"...").'</p>' 
                                  .'</div>'; 
                                      
                        
                        };
                
                        $sqli = "SELECT DISTINCT * FROM posts ORDER BY id DESC LIMIT 10";
                       
                        $result=$conn->query($sqli);

                  ?>

          </div>

         <div class='entries_post'>   
                  
            <?php             
                        
                 while($row = mysqli_fetch_array($result)){
                            
                      $rowtitle=$row['articles'];

                            echo '<div class="one_entry">'
                                .'<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'"  class="photos"  >'                      
                                ."<div class='header_entry'>"
                                .'<p class="title_text">'.mb_strimwidth("$rowtitle",0,230,"...").'</p>' .'</a>' 
                                .'</div>'   
                                .'</div>';   
                              
                        };
                  
                  ?>       
                
         </div>







         <ul class="paginator_post">           
             
             
             <?php      
                  
                  for($page = 1; $page<= $number_site; $page++) {  
                                   
                       echo '<li>'.'<a href = "index.php?page=' . $page . '" >' . $page . ' </a>'.'</li>';  
                           
                     }  
                    
             ?>    
             
             
                   </ul>    









</div>           
        











            <!--   PART TWO SITE (DOWN PART)    --> 


            <!--<div class="part_2">--> 
  
    


<?php 

 echo '<div id="panel">
        <form method="post" >
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
            <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
            <input type="submit" value="Login" name="submit_login" onclick="reloadpage()">
            </div>  
        </form>
     </div>';

  ?>

<script src="js/icon.js"></script>

<script src="js/logowanie.js"></script>

<script src="js/hamburger.js"></script>


<script src="js/search.js"></script>



<script src="js/videos.js"></script>


<script src="js/second_player.js"></script>


<script src="js/hidden_scroll.js"></script>



<script src="js/scroll_effect.js"></script>











</body>
</html>
