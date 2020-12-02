<head>
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="./Public/css/login.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<div class="formulario-cadastro col-lg-4">
  <label class="text-center cadastro" style="margin-top: 7%">Cadastro</label>
  <div class="row justify-content-md-center">
    <form method="post" action="Controllers/Op.php?opcao=cadastro" class="mt-3">
      <div class="form-group" for="nome" data-validate="Coloque seu nome">
        <label for="txtNome">Nome:</label>
        <br />
        <input class="dados" type="nome" name="txtNome" id="txtNome" required placeholder="Nome" />
        <span class="" data-placeholder="&#xe82a;"></span>
      </div>

      <div class="form-group" for="email" data-validate="Coloque seu email">
        <label for="txtEmail">Email:</label>
        <br />
        <input class="dados" type="email" name="txtEmail" id="txtEmail" required placeholder="Email" />
        <span class="" data-placeholder="&#xe82a;"></span>
      </div>

      <div class="form-group" for="senha" data-validate="Coloque sua Senha">
        <label for="txtSenha">Senha:</label>
        <br />
        <input required class="dados" type="password" id="txtSenha" name="txtSenha" placeholder="Senha" />
        <span class="" data-placeholder="&#xe80f;"></span>
      </div>

      <div class="form-group" for="senhaConf" data-validate="Coloque sua Senha">
        <label for="txtSenhaConf">Confirme sua Senha:</label>
        <br />
        <input required class="dados" type="password" id="txtSenhaConf" name="txtSenhaConf" placeholder="Confirme sua Senha" />
        <span class="" data-placeholder="&#xe80f;"></span>
      </div>

      <div class="form-group">
        <button type="submit" class="botao-cadastro text-light">
          Cadastre-se
        </button>
      </div>

    </form>
  </div>
</div>