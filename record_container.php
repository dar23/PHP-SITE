


<div class='player_video_container'> <!--  videoplayer miejsce na filmiki   !-->
           
    <div class="video_player">
               
        <?php

require("connection.php");


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