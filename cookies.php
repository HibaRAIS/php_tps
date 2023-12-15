<?php
    setcookie('username', 'hiba', time()+3600*24*10);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cookies</title>
        <meta charset="utf-8">
       
    </head>
    
    <body>
        <h1>cookies</h1>
        <?php
             if(isset($_COOKIE['username'])){
                echo "Votre nom est " .$_COOKIE['username'];
            }
        ?>
       
    </body>
</html>