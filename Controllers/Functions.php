<?php

    //include_once "Include/conexao.php"; // se algo der errado o resto da pag ainda é executado

    function Conexao()
    {

        $conn = mysqli_connect("localhost", "root", "", "projfilm") or die("Erro ao se conectar com o Banco");

        return $conn;
    }

    function Login($email, $senha)
    {
        session_start();
        $conn = Conexao();

        if (!empty($email && $senha)) {
        
            $query = "SELECT id, email, senha FROM usuario WHERE email='$email' && senha = '$senha'";
            $con = mysqli_query($conn, $query);
        
            //$result = mysqli_num_rows($conn);
        
            $result = mysqli_fetch_assoc($con);
        
            if ($result) {
                $_SESSION['erro'] = 0;
                $_SESSION['logado'] = true;
        
                $id = $result['id'];
                $_SESSION['id'] = $id;
        
                header("location: ../index.php?pagina=load");
            } else {
                $_SESSION['erro'] = 1;
                $msg = "<div class='alerta error'>usuario ou senha incorretos</div>";
                $_SESSION['msg'] = $msg;
        
                $_SESSION['logado'] = false;
                header("location: ../index.php?pagina=login");
            }
        } else {
            $_SESSION['erro'] = 1;
            $msg = "<div class='alerta error'>Preencha os campos</div>";
            $_SESSION['msg'] = $msg;
        
            $_SESSION['logado'] = false;
            header("location: ../index.php?pagina=login");
        }

    }

    function Sair()
    {
        session_start();
        $_SESSION['logado'] = 'false';

        session_destroy();

        header("location: ./index.php?pagina=login");
    }

    function Cadastro()
    {
        session_start();
        $conn = Conexao();

        $nome = $_POST["txtNome"];
        $email = $_POST["txtEmail"];
        $senha = hash("sha512", md5($_POST["txtSenha"]));

        if ($_POST["txtSenha"] == $_POST["txtSenhaConf"]) {
            if (!empty($email && $nome  && $_POST['txtSenha'])) {
                $sql = "insert into usuario (nome, email, senha) values ('$nome', '$email', '$senha');";
                $sqlInsCadastro = mysqli_query($conn, $sql) or die("Erro ao inserir");

                $n = mysqli_affected_rows($conn);

                if ($n) {
                    $_SESSION["cadastro"] = 1;
                    header("location: ../index.php?pagina=login");
                } else {
                    $_SESSION["cadastro"] = 0;
                    $_SESSION["msg2"] = "<div class='alerta error'>Erro ao cadastrar</div>";
                    header("location: ../index.php?pagina=cadastro");
                }
            } else {
                $_SESSION["cadastro"] = 0;
                $_SESSION["msg2"] = "<div class='alerta error'>Preencha os campos</div>";
                header("location: ../index.php?pagina=cadastro");
            }
        } else {
            $_SESSION["cadastro"] = 0;
            $_SESSION["msg2"] = "<div class='alerta error'>Confirmação de senha incorreto</div>";
            header("location: ../index.php?pagina=cadastro");
        }

    }

    function Editar()
    {
        session_start();
        $conn = Conexao();
        if (!empty($_POST['txtEmail'] && $_POST['txtSenha'] && $_POST['txtNome'])) {
            $email = $_POST['txtEmail'];
            $nome = $_POST['txtNome'];
            $senha = hash("sha512", md5($_POST["txtSenha"]));
        
            $id = $_SESSION['id'];
        
            $query = "update usuario set nome = '$nome', email = '$email', senha = '$senha' where id = $id ; ";
            $con = mysqli_query($conn, $query);
        
            //$result = mysqli_num_rows($conn);
        
            $alter = mysqli_fetch_assoc($con);
        
            if ($alter) {
                header("location: ../index.php?pagina=home");
            } else {
                $_SESSION['erro'] = 1;
                $msg = "<div class='alerta error'>usuario ou senha incorretos</div>";
                $_SESSION['msg'] = $msg;
        
                header("location: ../index.php?pagina=perfil");
            }
        } else {
            $_SESSION['erro'] = 1;
            $msg = "<div class='alerta error'>Preencha os campos</div>";
            $_SESSION['msg'] = $msg;
        
            header("location: ../index.php?pagina=perfil");
        }
    }

    function Pesquisar(){

        session_start();

        $conn = Conexao();
        $pesquisa = $_POST['pesquisa'];

        $query = "SELECT * FROM filmes WHERE nome like '%$pesquisa%'";
        $con = mysqli_query($conn, $query);
        return $con;
    }

    function InsereFilmes(){
        
        $conn = Conexao();

        $titulo = utf8_decode($_POST['txtNome']);
        $nota = $_POST['txtNota'];
        $genero = utf8_decode($_POST['txtGenero']);
        $duracao = $_POST['txtDuracao'];
        $sinopse = utf8_decode($_POST['txtSinopse']);
        $ano = $_POST['txtAno'];
        $msg = false;

        $arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:""; //

        if(isset($_FILES['arquivo'])){
            echo "QAAAAAAAAAA";
            $nome = $arquivo['name'];
            //move_uploaded_file($_FILES['arquivo']['tmp_name'], './upload' . $nome);
            $tiposPermitidos = ['jpg', 'jpeg', 'png'];
            $tamanho = $arquivo['size'];
            $extensao = explode('.', $nome);
            $extensao = end($extensao);
            $novoNome = rand() . "-$nome" ;
            
            if(in_array($extensao, $tiposPermitidos)){
                if($tamanho > 1000000){
                    echo "O tamnho do arquivo é muito grande";
                }
                else{

                    echo "O arquivo foi enviado" ;
                    header('Location: ../index.php?pagina=home');
                    $move = move_uploaded_file($_FILES['arquivo']['tmp_name'], '../Public/img/filmes/' . $novoNome);
                    echo $novoNome;
                    mysqli_query($conn, "insert into filmes (nome, nota, genero, duracao, sinopse, ano, img) values ('$titulo','$nota','$genero','$duracao','$sinopse','$ano','$novoNome')");
                }

            }else
            {
                echo "Tipo de arquivo ou tanho não permitido";
            }
        }
    }

    function Excluir($id)
    {
        $conn = Conexao();

        $sqlDelete = mysqli_query($conn, "Delete from filmes Where id = $id");
        header("location: ../index.php?pagina=list");
    }
?>