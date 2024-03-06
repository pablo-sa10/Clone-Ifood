<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: iFood RC Titulos, iFood RC Textos, helvetica, sans-serif;
        }

        :root {
            --vermelho: #ea1d2c;
            --vermelho_escuro: #cc1825;
            --verde: #b7d255;
            --verde_escuro: #9eb53e;
            --cinza_claro: #eee;
            --cinza_escuro: #717171;
            --cinza_mais_escuro: #3e3e3e;
        }

        .bgVermelho {
            background-color: var(--vermelho)
        }

        .textVermelho {
            color: var(--vermelho)
        }

        .section {
            /* background-image: url(../assets/img/cozinha.jpg); */
            background-size: cover;
            /* background-repeat: no-repeat; */
            margin-top: 140px;
            background-image: url(../assets/img/imgFundo.png);
            padding-bottom: 180px;
        }

        .imagem {
            width: 100%;
            /* margin-top: 50px; */
        }

        #card-res {
            background-color: var(--vermelho);
            transition: transform 0.3s ease-in-out;
            transform: scale(1);
        }

        #card-res:hover {
            transform: scale(1.05);
        }

        .btnRest {
            background-color: var(--vermelho_escuro);
        }

        #card-mer {
            background: var(--verde);
            transition: transform 0.3s ease-in-out;
            transform: scale(1);
        }

        #card-mer:hover {
            transform: scale(1.05);
        }

        .btnMer {
            background-color: var(--verde_escuro);
        }

        .icon {
            font-size: 30px;
        }

        .texto_footer {
            font-size: 12px;
            color: var(--cinza_escuro)
        }

        a {
            text-decoration: none;
            color: var(--cinza_mais_escuro);
            font-size: 15px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-3 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><svg viewBox="0 -0.35492335728912394 1004 566.9724898595939" xmlns="http://www.w3.org/2000/svg" width="100" height="100">
                        <g fill="#ea1d2c">
                            <path d="M0 304.6h76.41l42.46-211.2H42.45zM46.66 68.21h76.73L136 5.02H59.3zm59.47 295.82h76.42l46.69-228.18h57.31L295 93.4h-56.21l2.13-9.55c3.18-18 9.55-38.21 38.2-38.21 17 0 32.91 1.06 48.82 8.49l8.5-44.57A167.8 167.8 0 0 0 281.25 0c-61.56 0-104 36.09-119.93 93.4h-26.53l-8.49 42.45h26.53z" />
                            <path d="M348.11 308.85c90.21 0 152.83-81.73 152.83-148.59 0-49.88-45.64-71.11-90.21-71.11-98.73 0-152.83 88.14-152.83 148.59 0 49.88 46.7 71.11 90.21 71.11m242 0c90.21 0 152.83-81.73 152.83-148.59 0-49.88-46.7-71.11-91.28-71.11-98.7 0-152.82 88.09-152.82 148.59 0 49.88 47.76 71.11 91.27 71.11m277-4.25h75.35L1004 4.29h-76.41l-18.05 89.15-31.84-3.18c-74.29 0-142.21 95.51-142.21 163.44 0 27.59 18 55.19 48.82 55.19 43.51 0 74.29-21.23 87-42.46h4.24zM631.48 462.74a295 295 0 0 1-212.26 66.86c-100.83-6.37-173-83.85-185.73-165.57h4.24c23.35 51 79.6 98.71 148.59 106.13 70 8.49 153.89-23.34 199.52-66.86l-50.94-39.27h153.89l-34 163.45-22.29-63.68z" />
                        </g>
                    </svg></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Entregador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Restaurante e Mercado</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Carreiras</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">iFood Card</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn mx-2 btn-outline textVermelho fw-bold" style="font-size: 13px;">Criar Conta</button>
                        <button class="btn mx-2 btn-danger bgVermelho px-4 py-2" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="section">
            <div class="container">
                <div class="">
                    <h1 class="text-center pt-5 fw-bold">Faça mercado no iFood</h1>
                    <p class="text-center">Entregamos tudo o que precisa na porta da sua casa, de hortifruti a itens de limpeza</p>
                </div>
                <form action="">
                    <div class="d-flex justify-content-center mt-5 mb-2 row">
                        <input type="text" placeholder=" Em que endereço você está?" class="col-md-4 rounded border p-2" style="background-color: #eee; ">
                        <button class="btn btn-danger bgVermelho mx-2 px-4 py-2 col-md-3">Ver mercados próximos</button>
                    </div>
                </form>
                <div class="mt-5">
                    <div class="text-center">
                        <button class="btn bg-white border rounded-5">Frios</button>
                        <button class="btn bg-white border rounded-5">Laticínios</button>
                        <button class="btn bg-white border rounded-5">Feira</button>
                        <button class="btn bg-white border rounded-5">Bebidas</button>
                        <button class="btn bg-white border rounded-5">Doces</button>
                        <button class="btn bg-white border rounded-5">Massas frescas</button>
                        <button class="btn bg-white border rounded-5">Limpeza</button>
                    </div>
                    <div class="text-center mt-2">
                        <button class="btn bg-white border rounded-5">Padaria</button>
                        <button class="btn bg-white border rounded-5">Higiene</button>
                        <button class="btn bg-white border rounded-5">Congelados</button>
                        <button class="btn bg-white border rounded-5">Carnes</button>
                        <button class="btn bg-white border rounded-5">Cervejas</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5">
            <div class="d-flex justify-content-center row">
                <div id="card-res" class="col-md-4 col border rounded-4 py-3 d-flex mx-3 mb-3">
                    <div class="flex-column text-center">
                        <div class=" d-md-block d-none">
                            <h3 class="my-3 text-white fw-bold">Restaurante</h3>
                            <button class="btnRest btn mt-5 mb-2 fw-bold text-white">Ver opções</button>
                        </div>
                        <div class="d-md-none d-block">
                            <h3 class="my-3 text-white fw-bold">Restaurante</h3>
                            <img class="imagem landing-v2-multi-categories-big-link__image landing-v2-multi-categories-big-link__image--restaurant" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/restaurant.png" alt="Ver opções">
                            <button class="btnRest btn mt-5 fw-bold text-white">Ver opções</button>
                        </div>
                    </div>
                    <div class="d-md-block d-none">
                        <img class="imagem landing-v2-multi-categories-big-link__image landing-v2-multi-categories-big-link__image--restaurant" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/restaurant.png" alt="Ver opções">
                    </div>
                </div>
                <div id="card-mer" class="col-md-4 col border py-3 rounded-4 d-flex mx-3 mb-3">
                    <div class="flex-column text-center">
                        <div class="d-md-block d-none">
                            <h3 class="my-3 text-white fw-bold">Mercado</h3>
                            <button class="btnMer btn fw-bold text-white mt-5 mb-2">Ver opções </button>
                        </div>
                        <div class="d-md-none d-block">
                            <h3 class="my-3 text-white fw-bold">Mercado</h3>
                            <img class="imagem landing-v2-multi-categories-big-link__image landing-v2-multi-categories-big-link__image--market" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/market.png" alt="Buscar lojas">
                            <button class="btnMer btn fw-bold text-white mt-5">Ver opções</button>
                        </div>
                    </div>
                    <div class="d-md-block d-none" style="">
                        <img class="imagem landing-v2-multi-categories-big-link__image landing-v2-multi-categories-big-link__image--market" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/market.png" alt="Buscar lojas">
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <h3>Os melhores restaurantes</h3>
        </section>
    </main>

    <footer class="container">
        <div class="d-flex">
            <div class="p-5 d-flex flex-column text-start">
                <button class="btn text-start">iFood</button>
                <button class="btn text-start">Site Institucional</button>
                <button class="btn text-start">Fale conosco</button>
                <button class="btn text-start">Carreiras</button>
                <button class="btn text-start">Entregadores</button>
            </div>
            <div class="p-5 d-flex flex-column">
                <button class="btn text-start">Descubra</button>
                <button class="btn text-start">Cadastre seu Restaurante ou Mercado</button>
                <button class="btn text-start">iFood Shop</button>
                <button class="btn text-start">iFood Card</button>
                <button class="btn text-start">Blog iFood Empresas</button>
            </div>
            <div class="p-5 d-flex flex-column">
                <button class="btn text-start">Social</button>
                <div class="">
                    <button class="btn icon"><i class="bi bi-facebook"></i></button>
                    <button class="btn icon"><i class="bi bi-twitter"></i></i></button>
                    <button class="btn icon"><i class="bi bi-youtube"></i></button>
                    <button class="btn icon"><i class="bi bi-instagram"></i></button>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex">
            <div class="row">
                <div class="col-1" style="margin-right: 20px;">
                    <a href="#"><img src="../assets/img/iconFod.png" alt=""></a>
                </div>
                <div class="col-4 mt-2">
                    <p class="texto_footer m-0 mb-2">© Copyright 2024 - Pablo - Desenvolvido para afins de estudos S.A.</p>
                    <p class="texto_footer m-0 mb-4">CNPJ 14.380.200/0001-21 / Avenida dos Autonomistas, nº 1496, Vila Yara, Osasco/SP - CEP 06.020-902</p>
                </div>
                <div class="d-flex col-6 mt-3 ">
                    <div class="row">
                        <a href="" class="col-3 fw-bold">
                            <span>Termos e condições de uso</span>
                        </a>
                        <a href="" class="col-3 fw-bold">
                            <span>Código de conduta</span>
                        </a>
                        <a href="" class="col-3 fw-bold">
                            <span>Privacidade</span>
                        </a>
                        <a href="" class="col-3 fw-bold">
                            <span>Dicas de segurança</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>