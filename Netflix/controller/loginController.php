<?php
if ($_POST) {
      $email = $_POST['email'];
      $senha = $_POST['password'];
      @$lembrar = $_POST['lembrar'];
      
      if ($email == 'admin@admin' && $senha == '123') {
          session_start();
          $_SESSION['login'] = $email;
          

          //Se o checkbox estiver selecionado
          if(isset($lembrar)){
            if($lembrar == 1){
                //Criar Cookie - nome, valor, tempo de vida em segundos
                setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 segundos = 1 dia
            }
          }else{
            //se ele não estiver selecionado e o cookie existir.... Destruo
            if(isset($_COOKIE['email'])){
                //destruir o cookie
                setcookie('email','', time() - 867634348568735400, "/");
            }
        }
          header('location:../perfil.php');
          
      } else {
          //Login inválido 
          header('location:../loginPage.php?cod=171');
      }
  } else {

      header('location:../index.php');
  }

  ?>
