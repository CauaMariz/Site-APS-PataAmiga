<?php
session_start();
if (isset($_POST["submit"])) {
    include 'conexao.php';

    $Senha = $_POST["Senha"];
    $Email = $_POST["Email"];
    $Nome = $_POST["Nome"];
    $Tel = $_POST["Tel"];
    $Cpf = $_POST["Cpf"];
    $cep = $_POST["cep"];
    $Data = date('d/m/Y');
    if ($Senha <>  '' && $Email <> '' && $Nome <> '' && $Tel <> '' && $cep <> '' && $Cpf <> '') {

        $Verisql = "SELECT * FROM usuarios WHERE email='$Email'";
        $config = $conexao->query($Verisql);

        if (mysqli_num_rows($config) >= 1) {
            unset($Email);
            echo "<script>alert('Já existe um usuário com este email')</script>";
        } else {
            $result = mysqli_query(
                $conexao,
                "INSERT INTO `usuarios`(`id`, `nome`, `email`, `usuario`, `senha`, `tipo`, `data`) VALUES 
        ('','$Nome','$Email','','$Senha','','$Data'
        )"
            );
            echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        }
    } else {
        header('Location: Cadastro.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <script src="home.js"></script>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pata_Amiga</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a059536d20.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

</head>

<body background="img/FundoBody.png">

    <nav class="menu-lateral">



        <ul>

            <li class="item-menu-lateral">
                <a href="home.php">

                    <span class="icon">
                        <i class="bi bi-house"></i>
                    </span>

                    <span class="txt-link">HOME</span>

                </a>
            </li>

            <li class="item-menu-lateral">
                <a href="#">

                    <span class="icon">
                        <i class="fa fa-paw"></i>
                    </span>

                    <span class="txt-link">
                        CADASTRO PET
                    </span>

                </a>
            </li>

            <li class="item-menu-lateral">
                <a href="#">

                    <span class="icon">
                        <i class="fa fa-bone"></i>
                    </span>

                    <span class="txt-link">
                        PRODUTOS
                    </span>

                </a>
            </li>

            <li class="item-menu-lateral">
                <a href="#">

                    <span class="icon">
                        <i class="bi bi-cart"></i>
                    </span>

                    <span class="txt-link">
                        CARRINHO
                    </span>

                </a>
            </li>

            <li class="item-menu-lateral">
                <a href="#">

                    <span class="icon">
                        <i class="bi bi-question-lg"></i>
                    </span>
                    <span class="txt-link">
                        CONSTITUCIONAL
                    </span>

                </a>
            </li>

        </ul>

    </nav>

    <header id="cabecalho">



        <div class="margem">

            <!--
                <input type="search" name="" id="barraPesquisa" class="barraPesquisa" list="barraPesquisa"
                    placeholder="Pesquisar">
    
                <button id="btnPesquisa">Pesquisar</button>
                <datalist id="barraPesquisa">
                    <option value="Rações">
                    <option value="Brinquedos">
                    <option value="Roupas para cachorro">
                    <option value="Casas para cachorros">
                    <option value="Cadastrar meu Pet">
                </datalist>
            -->

            <div class="logo">
                <?php
                if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
                    echo "<a href=\"Logout.php\" class=\"linkSair\">Sair</a>";
                    echo "<a href=\"pag.php\" class=\"linkPerfil\">Ver perfil</a>";
                }
                ?>
                <img src="img/icons8-login-arredondado-à-direita-50 (2).png" alt=""
                    style="width: 30px; height: 30px; line-height:100px; float: right; cursor: pointer;"
                    onclick="location.href='login.php'" class="imgCadastro">

                <img src="img/icons8-cadastro-48.png" alt="" class="imgLogin"
                    style="width: 35px; height: 35px; float: right; cursor: pointer;"
                    onclick="location.href='Cadastro.php'">


                <img src="img/LogoPataAmigaBranco.png" alt="LOGO_PATA_AMIGA" class="LogoPataAmiga">

            </div>

            <div id="perfil">

                <div id="nome">

                </div>


                <div id="img-login">


                </div>

            </div>

        </div>

    </header>

    <main class="conteudoMainCep">

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" class="FormCadastro">
            <main class="conteudoCep" style="padding:3%;">
                <h2 class="TituloCadastro">Cadastra-se</h2>
                <label for="CEP" id="label"></label> <br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Nome" aria-label="Nome"
                        aria-describedby="basic-addon1" id="Nome" name="Nome">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="CPF" aria-label="Recipient's username"
                        aria-describedby="basic-addon2" id="CPF" name="Cpf">
                    <span class="input-group-text" style="margin-left: -4%; margin-right: -1%;"></span>
                    <input type="password" class="form-control" placeholder="Senha" aria-label="Server" id="Senha" name="Senha">
                </div>

                <div class="mb-3">

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">exemplo@gmail.com</span>
                        <input type="email" class="form-control" aria-describedby="basic-addon3 basic-addon4"
                            placeholder="Seu Email" id="Email" name="Email">
                    </div>

                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Telefone" aria-label="Username" id="Tel" name="Tel">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Exe: 12345678</span>
                    <input type="text" class="form-control" placeholder="CEP" aria-label="Server" id="CEP" name="cep">
                </div>

                <div class="IconsCadastro">
                    <img src="img/icons8-google-logo-47.png" alt="">
                    <img src="img/icons8-facebook-novo-47.png" alt="">
                    <img src="img/icons8-outlook-47.png" alt="">
                    <img src="img/icons8-mac-os-50.png" alt="" style="width: 48px;">
                </div>
                <button type="submit" name="submit" onsubmit="Ver()">Enviar</button>
                <a href="login.php">Login</a>
            </main>
        </form>
        <div id="campo"></div>
    </main>

    <footer class="Rodape" style="margin-top:10vw">
        <div class="Bloco1">
            <h4>Inicio</h4>
            <a href="home.html">Home</a>
            <a href="#">Cadastro de Pet</a>
            <a href="#">Produtos</a>
            <a href="#">Carrinho</a>
            <a href="#">Constitucional</a>
        </div>
        <div class="Bloco2">
            <h4>Sobre Nós</h4>
            <a href="home.html">Contato</a>
            <a href="#">Informacoes</a>
            <a href="#">Trabalhe conosco</a>
        </div>
        <div class="Bloco3">
            <h4>Suporte</h4>
            <a href="home.html">FAC</a>
            <a href="#">Telefone</a>
            <a href="#">Chat</a>
        </div>
        <div class="Bloco4">
            <h4>Redes Sociais</h4>
            <img src="img/icons8-instagram-48 (1).png" alt="">
            <img src="img/icons8-facebook-novo-47.png" alt="">
        </div>
        <div class="Bloco5">
            <h4>Pata Amiga</h4>
            <a href="home.html">Politica e privacidade</a>
            <a href="#">Termos de uso</a>
        </div>
    </footer>

    <script src="CodigoCep.js"></script>
</body>

</html>