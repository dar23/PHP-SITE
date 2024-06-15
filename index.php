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

 <div class="main_video">
    <div class='player_video_container'>
        <div class="video_player">
            <?php
            require("connection.php");

            $videos1 = "SELECT DISTINCT * FROM videos ORDER BY id DESC";
            $result = $conn->query($videos1);

            echo '<video controls>';
            while ($row = mysqli_fetch_array($result)) {
                echo '<source src="actually/' . $row['video_url'] . '" type="video/mp4">';
            }
            echo '</video>';
            ?>
        </div>

        <div class="records_container">
            <?php
            $limit_on_page = 30;  // ile rekordów ma być na stronie

            if(isset($_GET['page_v'])) {
                $current_page = $_GET['page_v'];
            } else {
                $current_page = 1;    // obecna strona
            }

            $skip_page = ($current_page - 1) * $limit_on_page; // liczba pominiętych stron na której jest 10 rekordów

            $count_query = "SELECT COUNT(*) as total FROM videos";
            $count_result = $conn->query($count_query);
            $total_rows = mysqli_fetch_array($count_result)['total'];

            $number_site = ceil($total_rows / $limit_on_page); // ile stron jest obecnie 

            $videos = "SELECT DISTINCT * FROM videos ORDER BY id DESC LIMIT $skip_page, $limit_on_page";
            $result = $conn->query($videos);

            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="place_to_video">'.
                        '<video class="video_record"><source src="actually/' . $row['video_url'] . '"></video>'.
                        '<div class="place_to_icon">'.
                            '<button class="link"><i class="material-symbols-outlined">share</i></button>'.
                            '<button class="messenger turn_on_off"><i class="fa-brands fa-facebook-messenger"></i></button>'.
                            '<button class="whatsupp turn_on_off"><i class="fa-brands fa-whatsapp"></i></button>'.
                        '</div>'.
                    '</div>';
            }
            ?>
        </div>
    </div>

    <ul class="paginator_video">
        <?php
        for ($page = 1; $page <= $number_site; $page++) {
            echo '<li><a class="async-page" href="index.php?page_v=' . $page . '">' . $page . ' </a></li>';
        }
        ?>
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function loadPage(page) {
        fetch('index.php?page_v=' + page)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const recordsContainer = doc.querySelector('.records_container');
                const paginatorVideo = doc.querySelector('.paginator_video');
                document.querySelector('.records_container').innerHTML = recordsContainer.innerHTML;
                document.querySelector('.paginator_video').innerHTML = paginatorVideo.innerHTML;
                
                attachPaginationEventListeners();
            })
            .catch(error => console.error('Error loading page:', error));
    }

    function attachPaginationEventListeners() {
        const links = document.querySelectorAll('.paginator_video a');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const page = this.getAttribute('href').split('page_v=')[1];
                loadPage(page);
            });
        });
    }

    attachPaginationEventListeners();
});
</script>






       <div class="post_memes_container">
    <div class="mems">     
        <?php   
        require("connection.php");

        $limit_on_page_m = 5;  // ile rekordów ma być na stronie

        if(isset($_GET['page_p'])){   // sprawdzanie numeru strony w URL
            $current_page_m = $_GET['page_p'];
        } else {
            $current_page_m = 1;    // obecna strona
        }

        $skip_page_m = ($current_page_m - 1) * $limit_on_page_m; // liczba pominiętych rekordów

        // Zapytanie, aby uzyskać liczbę wszystkich rekordów
        $count_query = "SELECT COUNT(*) as total FROM posts";
        $count_result = $conn->query($count_query);
        $total_rows = mysqli_fetch_array($count_result)['total'];

        $number_site = ceil($total_rows / $limit_on_page_m); // ile stron jest obecnie 

        // Zapytanie, aby uzyskać ograniczoną liczbę rekordów
        $post_query = "SELECT DISTINCT * FROM posts ORDER BY id DESC LIMIT $skip_page_m, $limit_on_page_m";
        $result = $conn->query($post_query);

        while ($rows = mysqli_fetch_array($result)) {
            echo '<div class="place_to_mems">'.
                    '<div class="picture_image"><img src="main/'.$rows['picture'].'"></div>'.
                    '<div class="title_picture"></div>'.
                '</div>';
        }
        ?>
    </div>   

    <ul class="paginator_mems">
        <?php
        for ($page_m = 1; $page_m <= $number_site; $page_m++) {
            echo '<li><a href="index.php?page_p=' . $page_m . '">' . $page_m . '</a></li>';
        }
        ?>
    </ul>
</div>
  

<script>
  document.addEventListener('DOMContentLoaded', function() {
    function loadPage(page) {
        fetch('index.php?page_p=' + page)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const memesContainer = doc.querySelector('.mems');
                const paginatorMems = doc.querySelector('.paginator_mems');
                document.querySelector('.mems').innerHTML = memesContainer.innerHTML;
                document.querySelector('.paginator_mems').innerHTML = paginatorMems.innerHTML;
                
                attachPaginationEventListeners();
            })
            .catch(error => console.error('Error loading page:', error));
    }

    function attachPaginationEventListeners() {
        const links = document.querySelectorAll('.paginator_mems a');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const page = this.getAttribute('href').split('page_p=')[1];
                loadPage(page);
            });
        });
    }

    attachPaginationEventListeners();
});
</script>

















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