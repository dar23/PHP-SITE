<?php
require("connection.php");
require('logowanie.php');

require('hamburger.php');
require('player.php');
require('linki_fonts.php');
?>

<!DOCTYPE html>
<html lang="pl" class="html_class">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dariusz Hozer</title>
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
    <link rel="stylesheet" href="style/mem_post.css">
    <script src="https://kit.fontawesome.com/6d745535f9.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


</head>

<body>
<nav>
 
 <ul>
 
     <li class="button_admin"><a>DODAJ FILMIK</a></li>
     <li class="button_admin"><a>DODAJ MEMA</a></li>
     <li class="button_admin"><a>ZAREJESTRUJ SIĘ</a></li>
     <li class="button_admin"><a>LOGIN</a></li>
 </ul>
 
 </nav>    


    <!-- główna strona -->





    
     <!-- wyszukiwarka plików 
        <div class="search_container">  
            <form method="post">
                <label for="search" class="label_search">
                    <div class="common_element">
                        <i class=" fa fa-search loop " aria-hidden="true"></i></input>
                         <input type="text" name="searching" class="input_search" autocomplete="off" />
                    </div>
                </label>
            </form>
        </div> --> 





<div class='player_video_container'> <!--  videoplayer miejsce na filmiki   !-->
           
    <div class="video_player">
               
        <?php

                $videos1 = "SELECT DISTINCT * FROM videos ORDER BY id DESC ";
                $result = $conn->query($videos1);

                echo '<video controls>';

                while ($row = mysqli_fetch_array($result)) {
                    echo '<source src="actually/' . $row['video_url'] . '" type="video/mp4">';
                }

                echo  '</video>';

                ?>

    </div>



    <div class="records_container">
               
        <?php

                require("pagination_video.php");

                $videos = "SELECT DISTINCT * FROM videos ORDER BY id DESC LIMIT $skip_page, $limit_on_page ";
                $result = $conn->query($videos);

                while ($row = mysqli_fetch_array($result)) {

                    $descr = $row['video_describe'];

                    echo '<div class="place_to_video">'.

                                            
                                 '<video class="video_record" >'.'<source src="actually/' . $row['video_url'] . '">' . '</video>'.
                                                                           
                                            '<div class="place_to_icon">'.

                                                     '<button class="link">'.'<i class="material-symbols-outlined">share</i>'.'</button>'.
                                                     
                                                     '<button class="messenger turn_on_off" >'.'<i class="fa-brands fa-facebook-messenger"></i>'.'</button>'.

                                                     '<button class="whatsupp turn_on_off" >'.'<i class="fa-brands fa-whatsapp"></i> '.'</button >'.

                                             '</div>'
                        .'</div>';
                };

                ?>

            </div>

            <ul class="paginator_video">

                <?php

                for ($page = 1; $page <= $number_site; $page++) {
                    echo '<li>' . '<a href = "index.php?page=' . $page . '" >' . $page . ' </a>' . '</li>';
                }
                
                  

               ?>

            </ul>
</div>  <!--koniec playera z galerią video -->



    <div class="post_memes_container">
        <div class="mems">     
            <?php   
             require("pagination_post.php");

                    $post="SELECT DISTINCT * FROM posts ORDER BY id DESC LIMIT $skip_page_m, $limit_on_page_m";
                    $result=$conn->query($post);
                    
                    while ($rows = mysqli_fetch_array($result)) {

                            echo '<div class="place_to_mems">'.



                                    '<div class="picture_image">'.'<img src="main/'.$rows['picture'].'">'.'</div>'. // tu dodaj zmnienną zawierającą dostęp do obrazka
                                    '<div class="title_picture">'.'</div>'.   
                                  





                                '</div>';

                    }

                      
            ?>

            </div>   


 

                <ul class="paginator_mems">

                        <?php


                 


                        for ($page_m = 1; $page_m <= $number_site; $page_m++) {
                            echo '<li>' . '<a href = "index.php?page=' . $page_m . '" >' . $page_m . ' </a>' . '</li>';
                        }

                        ?>

                 </ul>
       

   </div>
















    <!--   PART TWO SITE (DOWN PART)    -->
    <div id="panel">
        <form method="post">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
                <input type="checkbox">
                <label class="check" for="checkbox">Zapamiętaj mnie!</label>
                <input type="submit" value="Login" name="submit_login" onclick="reloadpage()">
            </div>
        </form>
    </div>


               


    <script src="js/icon.js"></script>
    <script src="js/logowanie.js"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/search.js"></script>
    <script src="js/videos.js"></script>
    <script src="js/second_player.js"></script>
    <script src="js/hidden_scroll.js"></script>
    <script src="js/social_media.js"></script>
  <script src="js/scroll_effect.js"></script> 
    <script src="js/hidden_scroll_2.js"></script>
</body>

</html>