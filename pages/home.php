<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="./Public/css/home.css" />
  <link rel="stylesheet" type="text/css" href="./Public/css/cards.css" />

  <link rel="stylesheet" href="./Public/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="./Public/css/style.css" />
  <link rel="stylesheet" href="./Public/css/menu.css" />
  <link rel="stylesheet" href="./Public/css/cardFilm.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>
<style>
  body {
    background-color: rgb(238, 238, 238);
  }

  @media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* medium - display 4  */
@media (min-width: 768px) {

    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(50%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-50%);
    }
}

/* large - display 6 */
@media (min-width: 992px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(50%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-50%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}
.movie-img {
	height:200px;width: 150px;background-color:  aqua;overflow: hidden;background-image: url("https://i.hizliresim.com/mX07R4.png");
	background-repeat:no-repeat;
	background-size: cover;
	object-fit: fill;
}

.movie-title {
	height: 40px; width:150px;background-color: black;overflow: hidden;
}

</style>
<?php
session_start();

if ($_SESSION['logado'] == false) {
  header("location: index.php");
}
include "Controllers/Functions.php";

$con = Conexao();

?>
<nav class="sidebar">
  <!-- close sidebar menu -->
  <div class="dismiss">
    <i class="fas fa-arrow-left"></i>
  </div>

  <div class="logo">
    <h3>
      Must Watch
    </h3>
  </div>

  <ul class="list-unstyled menu-elements">
    <li class="active">
      <a class="scroll-link" href="index.php?pagina=home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li>
      <a class="scroll-link" href="index.php?pagina=perfil"><i class="fas fa-user"></i> Perfil</a>
    </li>
    <li>
      <a class="scroll-link" href="index.php?pagina=insere"><i class="fas fa-film"></i> Inserir Filmes</a>
    </li>
    <li>
      <a class="scroll-link" href="index.php?pagina=list"><i class="fas fa-list"></i> Listar Filmes</a>
    </li>
    <li>
      <a class="scroll-link" href="index.php?pagina=logout"><i class="fas fa-power-off"></i> Sair</a>
    </li>
  </ul>

  <div class="dark-light-buttons">
    <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
    <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
  </div>
</nav>
<div class="overlay"></div>

<!-- open sidebar menu -->
<a class="btn btn-primary btn-customized open-menu mt-3" href="#" role="button">
  <i class="fas fa-align-left"></i> <span>Menu</span>
</a>
<!--  -->
<header class="navbar-fixed-top">
  <div class="" style="background-color: #ffd401">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class=" text-center mt-3" for="">Must Watch</h1>

        <form method="post" style="margin-left: 73%; margin-top: -4%;">
          <i class=" fas fa-search">
            <input style="width: 200px;height: 40px;box-shadow: 0 0 0 0;border: 0 none;outline: 0;" class="buscar" type="text" id="pesquisa" name="pesquisa" placeholder="Buscar por filme" />
            <button type="submit" style="height: 40px;background-color: #007083;" id="procurar" type="submit" name="procurar" class="btn text-light ">Buscar</button>
          </i>
        </form>
      </div>
    </div>
    <hr />
  </div>

  <section class="ftco-section ftco-no-pt ftco-no-pb" id="carousel">
    <div class="container-fluid px-0">
      <div class="row no-gutters justify-content-center">
        <div class="col-md-12">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="height: 500px">
              <div class="carousel-item active img" style="
                      background-image: url(./Public/iu.png);
                      background-color: gray;
                      background-repeat: no-repeat;
                      background-size: 100%;
                      background-position: 30% 100%;
                      height: 750px;
                    ">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                    <div class="col-md-8 text w-100 text-center">
                      <h2 class="mb-4">
                        Dunkirk
                      </h2>
                      <!--
                      <p>
                        <a href="#" class="btn btn-outline-white btn-round">veja mai</a>
                      </p>
                      -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item img" style="
                      background-image: url(./Public/joker.jpg);
                      background-color: gray;
                      background-repeat: no-repeat;
                      background-size: 100%;
                      height: 750px;
                    ">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                    <div class="col-md-8 text w-100 text-center">
                      <h2 class="mb-4">
                        Coringa
                      </h2>
                      <!--
                      <p>
                        <a href="#" class="btn btn-outline-white btn-round">veja mai</a>
                      </p>
                      -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item img" style="
                      background-image: url(./Public/pi.png);
                      background-color: gray;
                      background-repeat: no-repeat;
                      background-size: 100%;
                      background-position: 60% 150%;
                      height: 750px;
                    ">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                    <div class="col-md-8 text w-100 text-center">
                      <h2 class="mb-4">
                        As aventuras de Pi
                      </h2>
                      <!--
                      <p>
                        <a href="#" class="btn btn-outline-white btn-round">veja mai</a>
                      </p>
                      -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="ion-ios-arrow-round-back carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="ion-ios-arrow-round-forward carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>

<?php
if (isset($_POST['pesquisa'])) {
  $pesquisa = $_POST['pesquisa'];
  $result = "SELECT * FROM filmes WHERE nome LIKE '%$pesquisa%'";
  $resultado = mysqli_query($con, $result);


?>
  <div class="container">
    <div class="row justify-content-left">
      <label class="text-center genero mt-5 mb-3" for="">Sua pesquisa</label>
    </div>
    <div class="row">
      <?php
      while ($rows = mysqli_fetch_array($resultado)) {
      ?>
        <div class="card" style="background-image: url(./Public/img/filmes/<?php echo utf8_encode($rows['img']); ?>);" data-toggle="modal" data-target="#exampleModal<?php echo utf8_encode($rows['id']); ?>">
          <div class="card-overlay">
            <div class="items"></div>
            <div class="items head">
              <p><?php echo utf8_encode($rows['nome']); ?></p>
              <hr />
            </div>
            <div class="items price">
              <p class="new">Nota: <?php echo utf8_encode($rows['nota']); ?></p>
              <p class="new">Ano: <?php echo utf8_encode($rows['ano']); ?></p>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo utf8_encode($rows['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="margin-left: 20%" role="document">
            <div class="modal-content" style="
                width: 800px;
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
              ">
              <div class="">
                <div class="cardModal">
                  <div class="cardModal_left">
                    <img src="./Public/img/filmes/<?php echo utf8_encode($rows['img']); ?>" />
                  </div>
                  <div class="cardModal_right">
                    <button style="box-shadow: 0 0 0 0; border: 0 none; outline: 0" type="button" class="close pr-2" data-dismiss="modal" aria-label="Close">
                      <span class="fa fa-times-rectangle-o" aria-hidden="true"><img style="width: 25px; height: 30px" src="./Public/img/close.png" /></span>
                    </button>
                    <h1><?php echo utf8_encode($rows['nome']); ?></h1>

                    <div class="cardModal_right__details">
                      <ul>
                        <li><?php echo utf8_encode($rows['ano']); ?></li>
                        <li><?php echo utf8_encode($rows['duracao']); ?> min</li>
                        <li><?php echo utf8_encode($rows['genero']); ?></li>
                      </ul>
                      <div class="cardModal_right__rating" style="margin-left: 40%;">
                        <div class="cardModal_right__rating__stars">
                          <fieldset class="rating">
                            <?php
                            for ($i = 1; $i <= utf8_encode($rows['nota']); $i++) {

                              echo "
                            <label class='full' for='star1' title='$i star'></label>
                            ";
                            }
                            ?>
                          </fieldset>
                        </div>
                      </div>
                      <div class="cardModal_right__review">
                        <p>
                          <?php echo utf8_encode($rows['sinopse']); ?>
                        </p>
                        <a href="#" target="_blank">Read more</a>
                      </div>
                      <div class="cardModal_right__button">
                        <a href="#" target="_blank">WATCH TRAILER</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
<?php
}
?>

<div class="container">
  <div class="row justify-content-left">
    <label class="text-center genero mt-5 mb-3" for="">Drama</label>
  </div>
  <div class="row">
    <?php

    $query = "select * from filmes where genero like '%Drama' limit 5";
    $selecionar = mysqli_query($con, $query);

    while ($list = mysqli_fetch_assoc($selecionar)) {
    ?>
      <div class="card" style="background-image: url(./Public/img/filmes/<?php echo utf8_encode($list['img']); ?>);" data-toggle="modal" data-target="#exampleModal<?php echo utf8_encode($list['id']); ?>">
        <div class="card-overlay">
          <div class="items"></div>
          <div class="items head">
            <p><?php echo utf8_encode($list['nome']); ?></p>
            <hr />
          </div>
          <div class="items price">
            <p class="new">Nota: <?php echo utf8_encode($list['nota']); ?></p>
            <p class="new">Ano: <?php echo utf8_encode($list['ano']); ?></p>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal<?php echo utf8_encode($list['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-left: 20%" role="document">
          <div class="modal-content" style="
                width: 800px;
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
              ">
            <div class="">
              <div class="cardModal">
                <div class="cardModal_left">
                  <img src="./Public/img/filmes/<?php echo utf8_encode($list['img']); ?>" />
                </div>
                <div class="cardModal_right">
                  <button style="box-shadow: 0 0 0 0; border: 0 none; outline: 0" type="button" class="close pr-2" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-times-rectangle-o" aria-hidden="true"><img style="width: 25px; height: 30px" src="./Public/img/close.png" /></span>
                  </button>
                  <h1><?php echo utf8_encode($list['nome']); ?></h1>

                  <div class="cardModal_right__details">
                    <ul>
                      <li><?php echo utf8_encode($list['ano']); ?></li>
                      <li><?php echo utf8_encode($list['duracao']); ?> min</li>
                      <li><?php echo utf8_encode($list['genero']); ?></li>
                    </ul>
                    <div class="cardModal_right__rating" style="margin-left: 40%;">
                      <div class="cardModal_right__rating__stars">
                        <fieldset class="rating">
                          <?php
                          for ($i = 1; $i <= utf8_encode($list['nota']); $i++) {

                            echo "
                            <label class='full' for='star1' title='$i star'></label>
                            ";
                          }
                          ?>
                        </fieldset>
                      </div>
                    </div>
                    <div class="cardModal_right__review">
                      <p>
                        <?php echo utf8_encode($list['sinopse']); ?>
                      </p>
                      <a href="#" target="_blank">Read more</a>
                    </div>
                    <div class="cardModal_right__button">
                      <a href="#" target="_blank">WATCH TRAILER</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    } ?>
  </div>
</div>

<div class="container">
  <div class="row justify-content-left">
    <label class="text-center genero mt-5 mb-3" for="">Aventura</label>
  </div>
  <div class="row">
    <?php

    $query = "select * from filmes where genero like '%Aventura%' limit 5";
    $selecionar = mysqli_query($con, $query);

    while ($list = mysqli_fetch_assoc($selecionar)) {
    ?>
      <div class="card" style="background-image: url(./Public/img/filmes/<?php echo utf8_encode($list['img']); ?>);" data-toggle="modal" data-target="#exampleModal<?php echo utf8_encode($list['id']); ?>">
        <div class="card-overlay">
          <div class="items"></div>
          <div class="items head">
            <p><?php echo utf8_encode($list['nome']); ?></p>
            <hr />
          </div>
          <div class="items price">
            <p class="new">Nota: <?php echo utf8_encode($list['nota']); ?></p>
            <p class="new">Ano: <?php echo utf8_encode($list['ano']); ?></p>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal<?php echo utf8_encode($list['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-left: 20%" role="document">
          <div class="modal-content" style="
                width: 800px;
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
              ">
            <div class="">
              <div class="cardModal">
                <div class="cardModal_left">
                  <img src="./Public/img/filmes/<?php echo utf8_encode($list['img']); ?>" />
                </div>
                <div class="cardModal_right">
                  <button style="box-shadow: 0 0 0 0; border: 0 none; outline: 0" type="button" class="close pr-2" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-times-rectangle-o" aria-hidden="true"><img style="width: 25px; height: 30px" src="./Public/img/close.png" /></span>
                  </button>
                  <h1><?php echo utf8_encode($list['nome']); ?></h1>

                  <div class="cardModal_right__details">
                    <ul>
                      <li><?php echo utf8_encode($list['ano']); ?></li>
                      <li><?php echo utf8_encode($list['duracao']); ?> min</li>
                      <li><?php echo utf8_encode($list['genero']); ?></li>
                    </ul>
                    <div class="cardModal_right__rating" style="margin-left: 40%;">
                      <div class="cardModal_right__rating__stars">
                        <fieldset class="rating">
                          <?php
                          for ($i = 1; $i <= utf8_encode($list['nota']); $i++) {

                            echo "
                            <label class='full' for='star1' title='$i star'></label>
                            ";
                          }
                          ?>
                        </fieldset>
                      </div>
                    </div>
                    <div class="cardModal_right__review">
                      <p>
                        <?php echo utf8_encode($list['sinopse']); ?>
                      </p>
                      <a href="#" target="_blank">Read more</a>
                    </div>
                    <div class="cardModal_right__button">
                      <a href="#" target="_blank">WATCH TRAILER</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    } ?>
  </div>
</div>

<div class="container">
  <div class="row justify-content-left">
    <label class="text-center genero mt-5 mb-3" for="">Ação</label>
  </div>
  <div class="row">
    <?php

    $query = "select * from filmes where genero like '%Acao' limit 5";
    $selecionar = mysqli_query($con, $query);

    while ($list = mysqli_fetch_assoc($selecionar)) {
    ?>
      <div class="card" style="background-image: url(./Public/img/filmes/<?php echo utf8_encode($list['img']); ?>);" data-toggle="modal" data-target="#exampleModal<?php echo utf8_encode($list['id']); ?>">
        <div class="card-overlay">
          <div class="items"></div>
          <div class="items head">
            <p><?php echo utf8_encode($list['nome']); ?></p>
            <hr />
          </div>
          <div class="items price">
            <p class="new">Nota: <?php echo utf8_encode($list['nota']); ?></p>
            <p class="new">Ano: <?php echo utf8_encode($list['ano']); ?></p>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal<?php echo utf8_encode($list['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-left: 20%" role="document">
          <div class="modal-content" style="
                width: 800px;
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
              ">
            <div class="">
              <div class="cardModal">
                <div class="cardModal_left">
                  <img src="./Public/img/filmes/<?php echo utf8_encode($list['img']); ?>" />
                </div>
                <div class="cardModal_right">
                  <button style="box-shadow: 0 0 0 0; border: 0 none; outline: 0" type="button" class="close pr-2" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-times-rectangle-o" aria-hidden="true"><img style="width: 25px; height: 30px" src="./Public/img/close.png" /></span>
                  </button>
                  <h1><?php echo utf8_encode($list['nome']); ?></h1>

                  <div class="cardModal_right__details">
                    <ul>
                      <li><?php echo utf8_encode($list['ano']); ?></li>
                      <li><?php echo utf8_encode($list['duracao']); ?> min</li>
                      <li><?php echo utf8_encode($list['genero']); ?></li>
                    </ul>
                    <div class="cardModal_right__rating" style="margin-left: 40%;">
                      <div class="cardModal_right__rating__stars">
                        <fieldset class="rating">
                          <?php
                          for ($i = 1; $i <= utf8_encode($list['nota']); $i++) {

                            echo "
                            <label class='full' for='star1' title='$i star'></label>
                            ";
                          }
                          ?>
                        </fieldset>
                      </div>
                    </div>
                    <div class="cardModal_right__review">
                      <p>
                        <?php echo utf8_encode($list['sinopse']); ?>
                      </p>
                      <a href="#" target="_blank">Read more</a>
                    </div>
                    <div class="cardModal_right__button">
                      <a href="#" target="_blank">WATCH TRAILER</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    } ?>
  </div>
</div>

<footer class="py-5 mt-5 navbar-fixed-bottom" style="background-color: #ffd401">
  <div class="container">
    <p class="m-0 text-center">Copyright &copy; Must Watch 2020</p>
    <p class="m-0 text-center">
      Dalton Guimarães, Guilherme Antunes, Igor Carlos, Luccas Costa e Lucas
      Albuquerque
    </p>
  </div>
  <!-- /.container -->
</footer>