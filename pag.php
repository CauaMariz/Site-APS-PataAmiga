<?php
session_start();
if (empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    echo "<script>location.href=\"home.php\"</script>";
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

    <style>
        h5 {
            display: block;
            text-align: center;
        }

        header {
            width: 100%;
            height: 80px;
            box-shadow: 0 0 5px 0 grey;
            text-align: center;
            align-items: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

            a {
                display: inline;
                float: right;
                margin-right: 2%;
                text-decoration: none;
            }

            h2 {
                display: flex;
                justify-content: center;
            }
        }

        section {
            display: block;
            margin: 0 auto;
            width: 100%;
            height: 500px;
            border: 1px solid red;
        }

        h2 {
            display: flex;
            margin: 0 auto;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .campo {
            width: 300px;
            display: flex;
            margin-bottom: 10%;
            margin-top: 2%;
        }

        ul {
            list-style: none;
            display: inline;
        }

        input,
        button {
            padding: 5px;
            border: 1px solid grey;
            background-color: azure;
            border-radius: 10px;
        }

        input {
            display: flex;
            margin: 0 auto;
        }

        .campo {
            display: none;
            margin-bottom: 5%;
        }

        .campo2 {
            display: none;

        }

        .campo3 {
            display: none;
        }

        .style {
            display: block;
        }

        button {
            display: block;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            color: #242424;
            width: 200px;
            margin-right: 10%;
        }

        button:hover {
            transition: 0.3s ease-in-out;
            transform: translateX(-2%);
            background-color: rgb(50, 163, 255);
            color: aliceblue;
        }

        .CampoUser {
            display: block;
            margin: 0 auto;
            margin-top: 5%;
            background-color: #418cbe;
            box-shadow: 1px 1px 5px 1px rgba(236, 236, 236, 0.61);
            width: 70%;
            min-height: 80%;
            height: auto;
            padding-top: 2%;
            padding-bottom: 2%;
            align-items: center;
            border-radius: 10px;

        }

        .Buttons {
            justify-items: center;
            margin-left: 10%;

        }

        .LogoPataAmiga {
            margin-left: 2%;
        }

        .tituloSeuPerfil {
            margin: 0 auto;
            height: 70px;
            align-items: center;
        }

        li>button {
            background-color: rgb(50, 163, 255);
            color: aliceblue;
            width: 100px;
        }

        .nomeUser {
            color: white;
        }

        .TituloBemVindo {
            display: inline;
            text-align: center;
            margin-left: 4%;
        }

        .conteudo {
            margin-top: -5%;
        }

        .imgIcon {
            width: 100px;
            position: absolute;
            margin-top: 5%;
            margin-left: 1.5%;
        }

        .linkImgUser {
            position: absolute;
            margin-left: 2%;
            margin-top: 13%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 13px;
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        .linkImgUser:hover {
            text-decoration: underline;
        }

        .conteudo {
            margin-bottom: 10%;
        }
    </style>
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
                <a href="carrinho.php">

                    <span class="icon">
                        <i class="bi bi-cart"></i>
                    </span>

                    <span class="txt-link">
                        CARRINHO
                    </span>

                </a>
            </li>

            <li class="item-menu-lateral">
                <a href="institucional.php">

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
    <main class="conteudo">
        <h2 class="tituloSeuPerfil">Seu perfil</h2>

        <div class="CampoUser">
            <img src="img/icons8-usuário-homem-com-círculo-96.png" alt="" class="imgIcon">
            <a href="#" class="linkImgUser">Alterar Imagem</a>

            <h2 class="TituloBemVindo">Bem Vindo <span class="nomeUser"><?= $_SESSION['nome'] ?></span></h2>
            <div class="Buttons">


                <button onclick="Funcao()" style="margin-bottom:2%;margin-top:5%;">Alterar nome de usuário</button>
                <form action="verificacaoLoginPHP.php" method="post" class="campo" style="margin-right:10%;">
                    <ul>
                        <li><input type="text" placeholder="Novo nome de usuário: " name="newNameUser" id="inputNomeUser"></li>
                        <li><input type='email' name='EmailLogin' placeholder='Digite seu Email: ' id="inputEmail"></li>
                        <li><input type='password' name='SenhaLogin' placeholder='Digite sua Senha: ' id="inputSenha"></li>
                        <li><button name="btn" id="btn" type="submit" style="margin:2% 33%">Alterar</button></li>
                    </ul>

                </form>

                <button onclick="FuncaoEmail()" style="margin-bottom:2%">Alterar Email</button>
                <form action="verificacaoEmailPHP.php" method="post" class="campo2" style="margin-right: 12%;">
                    <ul>

                        <li><input type="email" placeholder="Novo Email: " name="novoEmail" id="inputNomeUser"></li>
                        <li><input type='email' name='Email' placeholder='Digite seu Email: ' id="inputEmail"></li>
                        <li><input type='password' name='Senha' placeholder='Digite sua Senha: ' id="inputSenha"></li>
                        <li><button name="btn" id="btn" type="submit" style="margin-top:3%; margin-bottom:13%;">Alterar</button></li>
                    </ul>

                </form>

                <button onclick="FuncaoSenha()" style="margin:2% 10%  2% 0">Alterar Senha</button>

                <form action="verificacaoSenhaPHP.php" method="post" class="campo3" style="margin-right: 12%;">
                    <ul>
                        <li><input type="password" placeholder="Nova Senha: " name="novaSenha" id="inputNomeUser"></li>
                        <li><input type='email' name='Email' placeholder='Digite seu Email: ' id="inputEmail"></li>
                        <li><input type='password' name='Senha' placeholder='Digite sua Senha: ' id="inputSenha"></li>
                        <li><button name="btn" id="btn" type="submit" style="margin-top:3%;">Alterar</button></li>
                    </ul>
                </form>
            </div>
        </div>
    </main>

    <footer class="Rodape">
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
    <script src="script.js"></script>
</body>

</html>