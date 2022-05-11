<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
    <link rel="shortcut icon" href="Resimler/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
 <div >
   <p>
       <?php
         $user =$_POST["User"];
         $pass =$_POST["Pass"];
         if($adsoyad && $sifre) 
         {
            if($adsoyad == "b211210061@sakarya.edu.tr" && $sifre=="b211210061")
            {  
                echo "HOŞGELDİNİZ ". $user;
        
            }
            else
            {
                header("location:index.html"); 
        
            }
         } 
         else 
         {
          header("location:index.html"); 
         }
       ?>
   </p>
 </div>
</html>