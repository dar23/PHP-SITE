
<?php 
session_start();
 
if(isset($_POST['submit_login'])){


 $username=$_SESSION['username']="dar23";
 $password=$_SESSION['password']="dar2345";



     if($username=='dar23' && $password=="dar2345"){
     

      header('Location:forms.php');

     
    echo '<script>
    
    
    setTimeout("location.reload()",0);
    
    
    
    </script>';




     // 
   

     }elseif($username!="dar23" || $password!="dar2345"){

       header('Location:index.php');

     }









}





?>