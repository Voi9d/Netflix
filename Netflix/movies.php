
<?php
      require_once './controller/autenticationController.php';
?>

<?php

$perfis = array(
    array(
        "nome" => "Gabriel",
        "filmes" => array("Matrix", "Inception", "Avatar"),
        "genero" => array(
            "Ação" =>array("https://i.ytimg.com/vi/JkoSAwJUwAo/maxresdefault.jpg", "https://ntvb.tmsimg.com/assets/p23711562_v_h8_ad.jpg?w=1280&h=720", "https://teoriageek.com.br/wp-content/uploads/2023/04/poster-a-mae-jennifer-lopez.jpg", "./img/Filmes/Ação/MistérioemParis.jpeg", "./img/Filmes/Ação/AgenteOculto.jpg", "./img/Filmes/Ação/SangueeOuro.jpg"),
            "Ficção Ciêntifica" =>array("./img/Filmes/CI/CI.jpg", "./img/Filmes/CI/CI2.jpg", "./img/Filmes/CI/CI3.jpg", "./img/Filmes/CI/CI4.jpg", "./img/Filmes/CI/Paraíso.jpg", "./img/Filmes/CI/SombraLunar.jpg")
        )
    ),
    array(
        "nome" => "Julia",
        "filmes" => array("Titanic", "Forrest Gump", "The Shawshank Redemption"),
        "genero" => array(
            "Drama" => array("./img/Filmes/Drama/UmaLindaVida.jpg", "./img/Filmes/Drama/2Corações.jpg", "./img/Filmes/Drama/h1.jpg", "./img/Filmes/Drama/h2.jpg", "./img/Filmes/Drama/h3.jpg"),
            "Romance" => array("./img/Filmes/Romance/h1", "./img/Filmes/Romance/h2", "./img/Filmes/Romance/h3", "./img/Filmes/Romance/h4", "./img/Filmes/Romance/h5")
        )
    ),
    array(
        "nome" => "Kids",
        "idade" => 10,
        "filmes" => array("Frozen", "Toy Story", "The Lion King"),
        "genero" => array(
            "Infantil" => array("./img/Filmes/Kids/h1.jpg", "./img/Filmes/Kids/h2.jpg", "./img/Filmes/Kids/h3.jpg", "./img/Filmes/Kids/h4.jpg", "./img/Filmes/Kids/h5.jpg"),
            "Animação" => array("./img/Filmes/Animação/h1.jpg", "./img/Filmes/Animação/h2.jpg", "./img/Filmes/Animação/h3.jpg", "./img/Filmes/Animação/h4.jpg", "./img/Filmes/Animação/h5.jpg")
        )
    )
);

// Pega o ID do perfil da query string
$perfilId = $_GET['id'];

// Obtem o perfil correspondente
$perfil = $perfis[$perfilId];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./img/Icon/netflix.png">
    <title>Netflix Brasil - assistir a séries online, assistir a filmes online</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap"rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styleMovies.css">
    <style>
        .back-image {
    width: 100%;
    height: 60rem;
    font-size: 18px;
    background: linear-gradient(rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),
<?php
    echo($perfilId==2) ?'url("./img/Capas/Nimona.jpg")' : 'url("./img/Capas/Bright.jpg")'; 
    
?>;
    min-height: 30.5em;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: flex-end;
  }
    </style>
  </head>

  <body>

    <div class="contenedor">
      <header>
        <div class="header">
          <div>
            <a href="perfil.php"><h2>NETFLIX</h2></a>
          </div>

          <div>
            <nav>
              <a href="#">Inicio</a>
              <a href="#">Filmes</a>
              <a href="#">Séries</a>
              <a href="perfil.php">Perfil</a>
              <a href="./controller/logout.php?cod=logout">Sair</a>
            </nav>
          </div>
        </div>
      </header>
    </div>
     
    <div class="back-image">
      <main class="contenedor bomba" >
          
          <h1><?php echo ($perfilId == 2) ? "Nimona" : "Bright";?></h1>
         <p class="descripccion">  
        <?php   
        if($perfilId == 2){
            echo "Um cavaleiro é acusado de um crime que não cometeu, "
            . "e a única pessoa que pode ajudá-lo a provar sua inocência é Nimona, "
            . "uma adolescente que muda de forma e que também pode ser um monstro que ele jurou matar.";
            
            } else{
             echo "Humanos, orcs, elfos e fadas coexistem desde o início dos tempos. "
                . "Dois policiais, um humano e um orc, se tornam parceiros de trabalho, e precisam superar suas diferenças já que os orcs são vistos como rudes e perigosos.";
            }
        ?>
        </p>
        <?php      
       if($perfilId == 0 || $perfilId == 1){ 
        echo('<a href="https://youtu.be/6EZCBSsBxko" ><button role="button" class="boton"><i class="fas fa-play"></i>Trailer</button></a>
        <a href="#"><button role="button" class="boton"><i class="fas fa-info-circle"></i>Mais Informação</button></a>');
      }else{
        echo('<a href="https://youtu.be/yBiU39bUFlA"><button role="button" class="boton"><i class="fas fa-play"></i>Trailer</button></a>
        <a href="#"><button role="button" class="boton"><i class="fas fa-info-circle"></i>Mais Informação</button></a>');
        
      }
      ?>
      </main>
    </div>

    <div class="filmes">
<?php foreach ($perfil['genero'] as $genero => $filmes) : ?>
    <h2 class="genero"><?php echo $genero; ?></h2>
    <div class="suggestSection contenedor">
        <div class="suggestUpper">
            <div class="owl-carousel">
                <?php foreach ($filmes as $filme) : ?>
                    <div class="col">
                        <img src="<?php echo $filme; ?>" class="img-fluid" alt="Filme imagem">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div> 
<?php endforeach; ?>
</div>

    <script>
      $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
              items: 5
          });
      });
    </script>
    </script>

  </body>
</html>