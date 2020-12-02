<head>
  <title>Home</title>

  <link rel="stylesheet" href="./Public/css/menu.css" />

</head>

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
    <li>
      <a class="scroll-link" href="index.php?pagina=home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li>
      <a class="scroll-link" href="index.php?pagina=perfil"><i class="fas fa-user"></i> Perfil</a>
    </li>
    <li>
      <a class="scroll-link" href="index.php?pagina=insere"><i class="fas fa-film"></i> Inserir Filmes</a>
    </li>
    <li class="active">
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

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Genero</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php

    $query = "select * from filmes";
    $selecionar = mysqli_query($con, $query);

    while ($list = mysqli_fetch_assoc($selecionar)) {
   ?>
    <tr>
      <th scope="row"><?php echo utf8_encode($list['id']); ?></th>
      <td><?php echo utf8_encode($list['nome']); ?></td>
      <td><?php echo utf8_encode($list['genero']); ?></td>
      <td><a href="Controllers/Op.php?opcao=excluir&id=<?php echo $list["id"]; ?>">Excluir</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

