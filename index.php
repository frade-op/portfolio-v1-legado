<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site - Felipe</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/bg.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main id="main">
        <i class="fa-solid fa-xmark close" id="close" role="button" aria-label="Fechar"></i>

        <section class="content" id="content">
            <div class="items">
                <button id="icon-code" class="button-click">
                    <i class="fa-solid fa-code" aria-label="Ícone de código de programação" title="Linguagens e Frameworks"></i>
                </button>
                <button id="icon-briefcase" class="button-click">
                    <i class="fa-solid fa-briefcase" aria-label="Ícone de maleta de trabalho" title="Sobre meu trabalho"></i>
                </button>
                <button id="icon-lightbulb" class="button-click">
                    <i class="fa-solid fa-lightbulb" aria-label="Ícone de lâmpada" title="Pontos fortes e fracos"></i>
                </button>
                <button id="icon-clock" class="button-click">
                    <i class="fa-solid fa-clock-rotate-left" aria-label="Ícone de histórico" title="Histórico"></i>
                </button>
            </div>
            <div class="image">
                <div class="box-image">
                    <img src="assets/img/foto-perfil.png" alt="Foto de felipe frade de oliveira pereira">
                </div>
            </div>
        </section>
        <section class="modal" id="modal">
            <article id="text-code" class="text-code">
                <div>
                    <h1>Linguagens</h1>
                    <ul>
                        <li>Javascript - Alto</li>
                        <li>PHP - Alto</li>
                        <li>C++ - Médio</li>
                        <li>Python - Médio</li>
                        <li>Graphql - Médio</li>
                        <li>Java - Médio</li>
                        <li>Groovy - Baixo</li>
                    </ul>
                </div>
                <div>
                    <h1>Frameworks</h1>
                    <ul>
                        <li>
                            Javascript
                            <ul>
                                <li>Angular - Médio</li>
                                <li>React DOM - Médio</li>
                                <li>React Native - Médio</li>
                                <li>Vue - Médio</li>
                                <li>Express - Médio</li>
                                <li>Knex - Médio</li>
                            </ul>
                        </li>
                        <li>
                            PHP
                            <ul>
                                <li>Wordpress - Alto</li>
                                <li>CodeIgniter - Alto</li>
                                <li>Laravel - Baixo</li>
                            </ul>
                        </li>
                        <li>Bootstrap - Médio</li>
                    </ul>
                </div>
            </article>
            <article id="text-briefcase" class="text-briefcase">
                <div class="parts part-1">
                    <h1>Ondaweb</h1>
                    <p>
                        Uma empresa de desenvolvimento de sites, localizada em Porto Alegre, onde fiz estágio por mais de um ano.
                        Meu primeiro contato em um ambiente de trabalho.
                        Aprendi muita coisa sobre desenvolvimento front-end e comunicação profissional.
                    </p>
                </div>
                <div class="parts part-1">
                    <h1>CG contadores</h1>
                    <p>
                        Empresa onde trabalho até o determinado momento.
                        Onde evolui muito como programador, profissional e pessoa.
                        Estive em contato com diferentes partes do desenvolvimento de sites e sistemas em geral.
                        Minha carreira avançou bastante e hoje sou um dos líderes do meu time.
                    </p>
                </div>
            </article>
            <article id="text-lightbulb" class="text-lightbulb">
                <div class="parts part-1">
                    <h1>Pontos fortes</h1>
                    <ul>
                        <li>
                            Sou uma pessoa criativa e esforçada;
                        </li>
                        <li>
                            Consigo pensar fora da caixinha e isso geralmente me destaca;
                        </li>
                        <li>
                            Tenho facilidade em aprender lógicas diferentes e costumo me divertir com elas;
                        </li>
                        <li>
                            Gosto de desafios;
                        </li>
                        <li>
                            Tenho bom domínio do inglês;
                        </li>
                    </ul>
                </div>
                <div class="parts part-2">
                    <i class="fa-solid fa-lightbulb" aria-label="Ícone de lâmpada" title="Pontos fortes e fracos"></i>
                </div>
                <div class="parts part-3">
                    <h1>Pontos fracos</h1>
                    <ul>
                        <li>
                            Sou um pouco "teimoso";
                        </li>
                        <li>
                            Por vezes posso ser um pouco esquecido e estabanado;
                        </li>
                    </ul>
                </div>
            </article>
            <article id="text-clock" class="text-clock">
                <div class="parts part-1">
                    <p>
                        Nasci em Porto Velho, Rondônia. Aos 10 anos vim para o Rio Grande do Sul com meu pai, mãe e irmãos.
                        Minha mãe é professora e meu pai formado em administração.
                        Cursei ensino médio em escola pública e ainda não concluí o ensino superior.
                    </p>
                </div>
                <div class="parts part-2">
                    <span>
                        <i class="fa-solid fa-clock-rotate-left" aria-label="Ícone de histórico" title="Histórico"></i>
                    </span>
                </div>
                <div class="parts part-3">
                    <p>
                        Tenho muitos hobbies que não envolvem programação como cuidar de plantas, ler, ver séries e filmes e etc.
                    </p>
                </div>
            </article>
        </section>
        <div class="bg">
            <div class="left" id="left">
                <div>
                    <i class="fa-solid fa-code" aria-label="Ícone de código de programação" title="Linguagens e Frameworks"></i>
                </div>
            </div>
            <div class="right" id="right">
                <div>
                    <i class="fa-solid fa-code" aria-label="Ícone de código de programação" title="Linguagens e Frameworks"></i>
                </div>
            </div>
            <div class="top" id="top">
                <div>
                    <i class="fa-solid fa-briefcase" aria-label="Ícone de maleta de trabalho" title="Sobre meu trabalho"></i>
                </div>
            </div>
            <div class="bottom" id="bottom">
                <div>
                    <i class="fa-solid fa-briefcase" aria-label="Ícone de maleta de trabalho" title="Sobre meu trabalho"></i>
                </div>
            </div>
            <div class="center" id="center"></div>
            <div class="clock" id="clock"></div>
        </div>
    </main>
    <script src="assets/js/scripts.js"></script>
</body>
</html>