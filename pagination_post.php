<?php    

$limit_on_page_m=5;  // ile rekordów ma być na stronie;

        if(isset($_GET['page_m'])){   

        $current_page_m=$_GET['page_m'];
            
        

        }else{


        $current_page_m=1;    //obecna strona;


        }

$skip_page_m=($current_page_m-1)*$limit_on_page_m; // liczba pominiętych stron na której jest 10 rekordów


//$limit_ten="SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC LIMIT 10 ";


$number_of_result=mysqli_num_rows($result);  // wszystkie rekordy


$number_site=ceil($number_of_result/$limit_on_page); // ile stron jest obecnie 



?>