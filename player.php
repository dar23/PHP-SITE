<?php





if(!empty($_FILES['my_video']['name'])  && isset($_POST['submit']) && isset($_FILES['my_video']['name'])){       
    
    $video_name=$_FILES['my_video']['name'];
    $tmp_name=$_FILES['my_video']['tmp_name'];
    $error=$_FILES['my_video']['error'];
    $describe_video=$_POST['describe_video'];
    

        if(!$error){

                $video_ex=pathinfo($video_name,PATHINFO_EXTENSION); // zwraca info o ścieżce do pliku

                $video_ex_lc=strtolower(($video_ex)); // wszystkie duże litery zostają pomniejszone


                $allowed_exs = array("mp4",'webm','avi','flv'); // jakie rozszerzenia video może mieć 

                    if(in_array($video_ex_lc,$allowed_exs)){ // jeżeli w tablicy  jest plik ze zmniejszonymi znakami oraz z rozszerzeniami

                        $new_video_name=uniqid("video-",true).'.'.$video_ex_lc;  // dodanie ms do nazwy plika

                          $video_upload_path="actually/".$new_video_name;  // ścieżka pliku, gdzie ma być zapisany

                                move_uploaded_file($tmp_name,$video_upload_path); // ładowanko 
                             
                               
                            
                                    $sql_videos="INSERT INTO videos(video_describe,video_url) VALUES('$describe_video','$new_video_name')"; //dodanie nazwy pliku do bd

                                    $mysqli_query= $conn->query($sql_videos); // zapytanie dodające nazwę pliku 





                    }else{
                        

                        $em = "Not uploaded file this type";
                        header("location:index.php?error=$em");



                    }





        }

        header('Location:index.php');


    }







    




    
































?>