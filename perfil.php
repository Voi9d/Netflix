<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" type="image/x-icon" href="./img/Icon/netflix.png">
<title>Netflix Brasil - assistir a séries online, assistir a filmes online</title>
<?php
      require_once './controller/autenticationController.php';
?>

      <?php
      @session_start();
      //echo ('bem vindo '. $_SESSION['login']);
?>

<?php
$perfis = array(
    array(
        "nome" => "Gabriel",

        "imagem" => "./img/Perfis/Gabriel.jpg"
    ),
    array(
        "nome" => "Julia",
        "imagem" => "./img/Perfis/Julia.jpg"
    ),
    array(
        "nome" => "Kids",
        "imagem" => "./img/Perfis/Kids.jpg"
    )
);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="CSS/styleEscolha.css">
<title></title>

  <style>
    .profile img {
      width: 200px;
      height: 200px;
      margin-top: 200px;
    }

    h1{
      position: relative;
      top: 150px;
    }

  </style>
</head>
  <body>
    <div class="container text-center">
      <h1>Quem está assistindo?</h1>

            <?php foreach ($perfis as $perfilId => $perfil) : ?>

              <div class="container-profile d-flex justify-content-between">
              <div class="profile">
                  <a href="movies.php?id=<?php echo $perfilId; ?>">
                      <img src="<?php echo $perfil['imagem']; ?> " />
                  </a>
              <p><?php echo $perfil['nome']; ?></p>
              </div>

            <?php endforeach; ?>

      </div>
  </body>
</html>