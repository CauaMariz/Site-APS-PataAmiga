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
        button {
            cursor: pointer;
            font-family: sans-serif;
        }

        .imgCarrinho {
            height: 100px;
            width: 100px;
            border-radius: 6px;
        }

        main {
            padding: 0 120px 120px;
        }

        main .page-title {
            font-size: 40px;
            padding: 70px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            color: #eee;
            text-align: center;
        }

        main .content {
            display: flex;
        }

        section {
            flex: 1;
            display: flex;
        }

        aside {
            min-width: 250px;
            background-color: transparent;
        }

        table {
            width: 100%;
            border-collapse: collapse;

            thead {
                tr {
                    border-bottom: 3px solid #eee;

                    th {
                        text-align: left;
                        padding-bottom: 10px;
                        text-transform: uppercase;
                        color: white;
                    }

                }

            }

            tbody {
                tr {
                    border-bottom: 3px solid #eee;

                    td {
                        padding: 30px 0;
                    }
                }

            }


        }

        .product {
            display: flex;
            align-items: center;

            .info {
                margin-left: 30px;

                .name {
                    font-size: 20px;
                    margin-bottom: 10px;

                }

                .category {
                    color: white;
                }
            }
        }

        .qty {
            background: #eee;
            display: inline-flex;
            padding: 0px 0;
            justify-content: space-around;
            align-items: center;
            min-width: 70px;
            border-radius: 5px;
            overflow: hidden;
            height: 30px;

            span {
                margin: 0 10px;
            }

            buttom {
                display: flex;
                align-items: center;
                background: transparent;
                border: 0;
                padding: 0 10px;
                font-size: 20px;
                height: 100%;

            }
        }

        .remove {
            background: #eee;
            border: 0;
            width: 30px;
            height: 30px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;

        }

        aside {
            margin-left: 80px;

            .box {
                margin-bottom: 15px;
                border: 1px solid #ccc;
                background: #eee;
                color: #222;

                header {
                    padding: 15px 20px;
                    font-size: 18px;
                    border-bottom: 1px solid #ccc;

                }

                .info {
                    padding: 20px;
                    font-size: 16px;

                    >div {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 10px;
                        color: #555;
                    }

                }

                footer {
                    padding: 15px 20px;
                    background: #ddd;
                    font-size: 18px;

                }

            }

            .b1 {
                color: #418cbe;
                background: transparent;
                border: 0;
                display: flex;
                align-items: center;
                font-size: 16px;
            }

            .b2 {
                border: 0;
                padding: 15px 0;
                color: white;
                background-color: #56be41;
                display: block;
                width: 100%;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-size: 16px;
            }
        }

        .Rodape {
            margin-top: 20vw;
        }

        .conteudo {
            background-color: #418cbe;
            margin-top: 6vw;
            border-radius: 10px;
        }

        .remove {
            appearance: none;
            border-radius: 0;
            outline: none;
            position: relative;

        }

        .remove:checked:before {

            border-radius: 0;
            opacity: 1;
            border-bottom: 3px solid #418cbe;
            border-right: 3px solid #418cbe;
            transform: rotate(45deg);
        }

        .remove:before {
            transition: all .4s ease-in-out;
            position: absolute;
            content: '';
            height: 15px;
            width: 9px;
            border-radius: 50%;
            opacity: 0;
            transform: rotate(-10deg);
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



    <main class="conteudo" style="height:auto;">
        <div class="page-title">
            Seu Carrinho de Compras
        </div>
        <div class="content">
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th></th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product">
                                    <img src="img/BrinquedosCaes1.png" alt="brinquedocaes1" class="imgCarrinho">
                                    <div class="info">
                                        <div class="name">Corda Dental Bone Grande para Cães</div>
                                        <div class="category">Brinquedos</div>
                                    </div>


                                </div>
                            </td>
                            <td>R$ 23,99</td>
                            <td>
                                <div class="qty">
                                    <button>-</button>
                                    <span>2</span>
                                    <button>+</button>
                                </div>
                            </td>
                            <td>R$ 47,98</td>
                            <td>
                                <input type="checkbox" class="remove" name="grupo" checked></input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product">
                                    <img src="img/BrinquedosCaes2.png" alt="brinquedocaes1" class="imgCarrinho">
                                    <div class="info">
                                        <div class="name">Pneu Borracha Extra Forte LCM para Cães</div>
                                        <div class="category">Brinquedos</div>
                                    </div>


                                </div>
                            </td>
                            <td>R$ 88,99</td>
                            <td>
                                <div class="qty">
                                    <button>-</button>
                                    <span>2</span>
                                    <button>+</button>
                                </div>
                            </td>
                            <td>R$ 177,98</td>
                            <td>
                                <input type="checkbox" class="remove" name="grupo2"></input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product">
                                    <img src="img/AcessoriosCaes2.png" alt="brinquedocaes1" class="imgCarrinho">
                                    <div class="info">
                                        <div class="name">Cama São Benedito Pet Europa Luxo Sued</div>
                                        <div class="category">Acessórios</div>
                                    </div>


                                </div>
                            </td>
                            <td>R$ 79,99</td>
                            <td>
                                <div class="qty">
                                    <button>-</button>
                                    <span>2</span>
                                    <button>+</button>
                                </div>
                            </td>
                            <td>R$ 159,98</td>
                            <td>
                                <input type="checkbox" class="remove" name="grupo3"></input>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <aside>
                <div class="box">
                    <header>Resumo da Compra</header>
                    <div class="info">
                        <div><span>Sub-Total</span><span>R$ 385,94</span></div>
                        <div><span>Frete</span><span>Gratuito</span></div>
                        <div><button class="b1">Adicionar cupom de desconto<i class='bx bx-right-arrow-alt'></i></button></div>
                    </div>
                    <footer>
                        <span>Total</span>
                        <span>R$ 385,94</span>
                    </footer>
                </div>
                <a href="pagamento.php" style="text-decoration:none"><button class="b2">Finalizar Compra</button></a>
            </aside>
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

</body>

</html>