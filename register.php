<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>NotMyFace</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
    
<body>
<div class="registrace">

<h2>Registration</h2>
<form action="" method="POST"> <!-- GET/POST -->
    <br><label for="login">login</label><br>
    <br><input type="text" id="login" name="login" min="0"><br>
    <br><label for="mail">mail</label><br>
    <br><input type="text" id="mail" name="mail" min="0"><br>
    <br><label for="heslo">Heslo</label><br>
    <br><input type="text" id="heslo" name="heslo" min="0"><br>
    <br><input type="submit" value="Submit"><br>
</form>
    </div>
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
