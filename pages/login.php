<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./Public/css/login.css" />

  <link rel="stylesheet" type="text/css" href="./Public/css/cadastroA.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<div class="formulario col-lg-4">
  <label class="text-center login" style="margin-top: 10%">Login</label>
  <div class="row justify-content-md-center">
    <form method="post" action="Controllers/Op.php?opcao=entrar" class="mt-4">
      <div class="form-group" for="email" data-validate="Coloque seu email">
        <label for="txtEmail">Email:</label>
        <br />
        <input class="dados" type="email" name="txtEmail" id="email" required placeholder="Email" />
        <span class="" data-placeholder="&#xe82a;"></span>
      </div>

      <div class="form-group" for="senha" data-validate="Coloque sua Senha">
        <label for="txtSenha">Senha:</label>
        <br />
        <input required class="dados" type="password" id="senha" name="txtSenha" placeholder="Senha" />
        <span class="" data-placeholder="&#xe80f;"></span>
      </div>

      <div class="form-group">
        <button type="submit" class="botao text-light">Login</button>
      </div>

      <a href="?pagina=cadastro" style="text-decoration: none" class="cad">
        <div class="arrow"></div>
        Cadastre-se
      </a>
    </form>
  </div>
</div>