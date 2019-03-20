<!DOCTYPE html>
<html>
    <head>


    </head>
    <body>


      

      <?php

        if ($_POST){
          if (isset($_POST['login']) && $_POST['login'] &&
              isset($_POST['email']) && $_POST['email'] &&
              isset($_POST['pass']) && $_POST['pass']{

            $link =  @mysqli_connect('localhost','nemecmi','jebediahkerman2','nemecmi') or die('Sevice unaccesible');
            $data =  mysqli_querry($link, query:"SELECT * FROM 'PR_uzivatele'");

            while($radek = mysqli_fetch_array($data)){
              if($radek['login'] == $_POST['login'])
                $error = true;
            }
            if(!$error){
              $Hpassw = md5($_POST['pass']);

              $sql = "INSERT INTO PR_uzivatele (login, pass, email) VALUES ($_POST['login'], $Hpassw, $_POST['email'])";

              mysqli_querry($link, query:$sql);


            }else {
              echo "username already exist";
            }

          }
          else
            echo "formular neni vyplneny";
        }

       ?>

    </body>
</html>
