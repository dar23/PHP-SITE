      
           <div class="records_container">
                      
                      <?php
             

              $limit_on_page=30;  // ile rekordów ma być na stronie;
              
              
              
                      if(isset($_GET['page_v'])){   
              
                      $current_page=$_GET['page_v'];
                      
              
                      }else{
              
              
                      $current_page=1;    //obecna strona;
              
              
                      }
              
              $skip_page=($current_page-1)*$limit_on_page; // liczba pominiętych stron na której jest 10 rekordów
              
              
              //$limit_ten="SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC LIMIT 10 ";
              
              
              $number_of_result=mysqli_num_rows($result);  // wszystkie rekordy
              
              
              $number_site=ceil($number_of_result/$limit_on_page); // ile stron jest obecnie 
              
              
         
              
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
              
           
       
              
              </div>  <!--koniec playera z galerią video -->
       
              
       
       
       <ul class="paginator_video">
              
              <?php
       
                  for ($page = 1; $page <= $number_site; $page++) {
                      echo '<li>' . '<a href = "index.php?page_v=' . $page . '" >' . $page . ' </a>' . '</li>';
                  }
                  
              ?>
       
              </ul>
       
       
       </div>
       