
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
                            echo '<li>' . '<a href = "index.php?page=' . $page_m . '"  >' . $page_m . ' </a>' . '</li>';
                        }

                        ?>

                 </ul>
   

   </div>
