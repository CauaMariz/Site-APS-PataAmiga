<?php
session_start();
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
        .BannersHome {
            width: 935px;
            height: 520px;
            border-radius: 20px;
            overflow: hidden;
            position: absolute;
            left: 52%;
            top: 5%;
            transform: translate(-50%, 50%);
            box-shadow: 1px 1px 6px 1px grey;
        }

        .slides {
            display: flex;
            width: 400%;
            height: 100%;
        }

        .slides input {
            display: none;
        }

        .imgs {
            width: 25%;
            transition: .6s;
        }

        .imgs img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .nav {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translate(-50%);
            display: flex;
        }

        .nav .navs {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid grey;
            margin: 6px;
            cursor: pointer;
            transition: .9s;
        }

        #radio-1:checked~.one {
            margin-left: 0;
        }

        #radio-2:checked~.one {
            margin-left: -25%;
        }

        #radio-3:checked~.one {
            margin-left: -50%;
        }

        .nav .navs:hover {
            background-color: aliceblue;
            border: 1px solid aliceblue;
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
        <div class="BannersHome">
            <div class="slides">
                <input type="radio" name="radio" id="radio-1" checked>
                <input type="radio" name="radio" id="radio-2">
                <input type="radio" name="radio" id="radio-3">

                <div class="imgs one">
                    <img src="img/BannerCatalogoAcessorios.jpg" alt="">
                </div>
                <div class="imgs">
                    <img src="img/BannerHome.jpg" alt="">
                </div>

                <div class="imgs">
                    <img src="img/BannerCatalogoRacoes.jpg" alt="">
                </div>

            </div>
            <div class="nav">
                <label for="radio-1" class="navs"></label>
                <label for="radio-2" class="navs"></label>
                <label for="radio-3" class="navs"></label>
            </div>
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

    <script src="TrocaImgHome.js"></script>
</body>

</html>