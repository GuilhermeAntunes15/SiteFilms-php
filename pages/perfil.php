<head>
  <title>Perfil</title>
  <link rel="stylesheet" type="text/css" href="./Public/css/login.css" />
  <link rel="stylesheet" href="./Public/css/menu.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>
  body {
    background-image: url();
  }
</style>
<?php
session_start();

if ($_SESSION['logado'] == false) {
  header("location: index.php");
}
include "Controllers/Functions.php";

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
    <li>
      <a class="scroll-link" href="index.php?pagina=home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="active">
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
<a class="btn btn-primary btn-customized open-menu mt-4" href="#" role="button">
  <i class="fas fa-align-left"></i> <span>Menu</span>
</a>

<header class="navbar-fixed-top ">
  <div class="" style="background-color: #ffd401">
    <div class="container pb-2">
      <div class="row justify-content-center">
        <h1 class=" text-center mt-4" for="">Must Watch</h1>
      </div>
    </div>
    <hr />
  </div>
</header>
<?php

$id = $_SESSION['id'];
$query = "SELECT * FROM usuario WHERE id=$id";

$con = Conexao();
$conn = mysqli_query($con, $query);

while ($list = mysqli_fetch_assoc($conn)) {
?>
  <div class="formulario-perfil col-lg-4">
    <label class="text-center cadastro" style="margin-top: 7%">Perfil</label>
    <div class="row justify-content-md-center">
      <form method="post" action="Controllers/Op.php?opcao=editar" class="mt-3">
        <div class="form-group" for="nome" data-validate="Coloque seu nome">
          <label for="txtNome">Nome:</label>
          <br />
          <input class="dados" type="nome" name="txtNome" id="txtNome" value="<?php echo $list['nome'] ?>" required placeholder="Nome" />
          <span class="" data-placeholder="&#xe82a;"></span>
        </div>

        <div class="form-group" for="email" data-validate="Coloque seu email">
          <label for="txtEmail">Email:</label>
          <br />
          <input class="dados" type="email" name="txtEmail" value="<?php echo $list['email'] ?>" id="txtEmail" required placeholder="Email" />
          <span class="" data-placeholder="&#xe82a;"></span>
        </div>

        <div class="form-group" for="senha" data-validate="Coloque sua Senha">
          <label for="txtSenha">Senha:</label>
          <br />
          <input required class="dados" type="password" id="txtSenha" name="txtSenha" placeholder="Senha" />
          <span class="" data-placeholder="&#xe80f;"></span>
        </div>

        <div class="form-group">
          <button type="submit" class="botao-cadastro mt-3 text-light">
            Alterar
          </button>
        </div>

      </form>
    </div>
  </div>
<?php
} ?>
<footer class="py-4 mt-5 navbar-fixed-bottom" style="background-color: #ffd401">
  <div class="container">
    <p class="m-0 text-center">Copyright &copy; Must Watch 2020</p>
    <p class="m-0 text-center">
      Dalton Guimarães, Guilherme Antunes, Igor Carlos, Luccas Costa e Lucas
      Albuquerque
    </p>
  </div>
  <!-- /.container -->
</footer>

