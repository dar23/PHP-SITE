<?php    

$limit_on_page=10;  // ile rekordów ma być na stronie;

        if(isset($_GET['page'])){   

        $current_page=$_GET['page'];
            
        

        }else{


        $current_page=1;    //obecna strona;


        }

$skip_page=($current_page-1)*$limit_on_page; // liczba pominiętych stron na której jest 10 rekordów


//$limit_ten="SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC LIMIT 10 ";

$query="SELECT *FROM entries_videos";
$result=mysqli_query($conn,$query);
$number_of_result=mysqli_num_rows($result);





 




















?>