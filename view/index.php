<?php
session_start();
$name = 'Login';
if(isset($_SESSION['username'])){
    $name = $_SESSION['username'];
}
var_dump($name);
die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/view/Vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/Assets/css/index.css">
    <!-- Alguns tipos de fonts -->
    <link href="/view/Vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic"
          rel="stylesheet" type="text/css">
    <title>ConsulteAgroJr</title>
</head>

<body id="page-top">
<div class="parallax-window" data-parallax="scroll" data-image-src="/view/Vendor/img/agroimg.jpg">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="mainNav">
            <div class="container">
                <div>
                    <a class="navbar-brand" href="#page-top">
                        <img src="/view/Assets/img/logo.png" width="270px" class="d-inline-block align-top" alt="Consultagro"
                             id="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-name" href="#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partners">Parceiros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/view/login.php"><?php echo $name; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <font face="Esphimere">
            <h1>Plantando ideias, colhendo resultados </h1>
        </font>
        <div class="row">
            <div class="offset-5 col-md-12">
            </div>
        </div>
    </div>
</div>

<main>
    <section class="sectionLight" id="about">
        <div class="container">
            <font face="Esphimere">
                <h3 id="about-title">Sobre Nós</h3>
            </font>
            <br>
            <div>
                <div class="about" id="about-content">
                    A ConsultAgro Júnior - Empresa Júnior de Agronomia UEFS, é uma instituição independente,
                    formada por acadêmicos do Curso de Agronomia da Universidade Estadual de Feira de Santana,
                    criada em 2016 e com sede própria na universidade, ela é composta atualmente por 16 membros
                    voluntários auxiliados por uma equipe de professores engenheiros agrônomos. A EJ presta
                    serviços
                    de consultoria técnica e realiza projetos tanto na área agrícola quanto na pecuária, se
                    destacando
                    pela dedicação dos membros, qualidade dos serviços e pelos preços mais acessíveis em relação ao
                    mercado.
                </div>
            </div>
        </div>
    </section>
    <section class="sectionBackground" id="services">
        <div class="container">
            <font face="Esphimere">
                <h3>Serviços</h3>
            </font>
            <br>
            <div class="row">
                <div class="col-4 sectionItem">1. Estudo do solo e Recomendação de abubação</div>
                <div class="col-4 sectionItem">2. Projetos de Crédito rural</div>
                <div class="col-4 sectionItem">3. Dia de campo - Difusão de tecnologia</div>
            </div>
            <div class="row">
                <div class="col-4 sectionItem">4. Consultoria zootécnica e agrícola</div>
                <div class="col-4 sectionItem">5. Medição e planta de imóveis rurais</div>
                <div class="col-4 sectionItem">6. CAR (Cadastro Ambiental Rural) / CEFIR</div>
            </div>
            <div class="row">
                <div class="col-4 sectionItem">7. Dimensionamento de sistemas de irrigação</div>
                <div class="col-4 sectionItem">8. Recuperação e manejo de pastagens</div>
                <div class="col-4 sectionItem">9. Recuperação de nascentes e reflorestamento</div>
            </div>
        </div>
    </section>
    </section>
    <section class="sectionLight" id="team">
        <div class="container" id="teamTable">
            <font face="Esphimere">
                <h3>Equipe</h3><br>
            </font>

            <div class="row">
                <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="/view/Assets/img/team/Angela.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Ângela dos Santos Lima</h5>
                        <p class="card-text">Diretora Presidente</p>
                    </div>
                </div>
                <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="/view/Assets/img/team/diogo.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Diogo Oliveira da Silva</h5>
                        <p class="card-text">Diretor Vice-Presidente</p>
                    </div>
                </div>
                <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="/view/Assets/img/team/angelica.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Angélica Rodrigues Souza</h5>
                        <p class="card-text">Diretora de Vendas e Negócios</p>
                    </div>
                </div>
                <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="/view/Assets/img/team/pedro.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Pedro Schmidt de Brito</h5>
                        <p class="card-text">Diretor Administrativo Financeiro</p>
                    </div>
                </div>


                <!--
                    Não achei as fotos dos de baixo ai comentei

                    <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="Assets/img/team/francisco.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Francisco de Assis Santana Oliveira</h5>
                        <p class="card-text">Diretor de Projetos</p>
                    </div>
                </div>
                <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="Assets/img/team/gabriel.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Gabriel Santos de Jesus</h5>
                        <p class="card-text">Diretor de Comunicação e Marketing</p>
                    </div>
                </div>
                <div class="card mb-3 col-3" style="width: 18rem;">
                    <img src="Assets/img/team/Emerson.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Emerson Mattheus Pereira Costa Freitas</h5>
                        <p class="card-text">Diretor de Gestão de Pessoas</p>
                    </div>
                </div>
            </div>


            A versão tabela que tá um lixo mas deixa no gatilho ai caso dê merda

            <table class="table">
                                        <tbody>
                    <tr class="rowLight">
                        <th scope="row">Diretora Presidente</th>
                        <td>Ângela dos Santos Lima</td>
                    </tr>
                    <tr class="rowGreen">
                        <th scope="row">Diretor Vice-Presidente</th>
                        <td>Diogo Oliveira da Silva</td>
                    </tr>
                    <tr class="rowLight">
                        <th scope="row">Diretora de Vendas e Negócios</th>
                        <td>Angélica Rodrigues Souza</td>
                    </tr>
                    <tr class="rowGreen">
                        <th scope="row">Diretor Administrativo Financeiro</th>
                        <td>Pedro Schmidt de Brito</td>
                    </tr>
                    <tr class="rowLight">
                        <th scope="row">Diretor de Projetos</th>
                        <td>Francisco de Assis Santana Oliveira</td>
                    </tr>
                    <tr class="rowGreen">
                        <th scope="row">Diretor de Comunicação e Marketing</th>
                        <td>Gabriel Santos de Jesus</td>
                    </tr>
                    <tr class="rowLight">
                        <th scope="row">Diretor de Gestão de Pessoas</th>
                        <td>Emerson Mattheus Pereira Costa Freitas</td>
                    </tr>
                </tbody>
            </table>-->

            </div>
        </div>
    </section>
    <section class="sectionBackground" id="partners">
        <font face="Esphimere">
            <h3>Parceiros</h3>
        </font>
        <br>
        <div class="container">
            <div class="row">
                <div class="offset-4 col-12">
                    <a href="https://www.acquanalise.com.br" target="_blank">
                        <img width="364" height="196" src="/view/Vendor/img/acquanalise.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionLight" id="events">
        <font face="Esphimere">
            <h3>Eventos</h3>
        </font>
        <br>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item" data-interval="10000">
                        <img class="d-block w-100" src="/view/Assets/img/a.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Capacitação dos membros da empresa</h1>
                                <p> Capacitação de mecanização agrícola na Fazenda Magalhães em Santo
                                    Estevão</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/view/Assets/img/b.jpg" alt="Second slide">
                        <div class="container" data-interval="10000">
                            <div class="carousel-caption">
                                <h1>Eventos no meio Academico</h1>
                                <p>O I Simpósio Tecnologia e Inovação Agropecuária</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/view/Assets/img/c.jpg" alt="Third slide">
                        <div class="container" data-interval="10000">
                            <div class="carousel-caption text-right">
                                <h1> Eventos fora da universade</h1>
                                <p> Demonstrativo de plantio de palma forrageira com espaçamentos diferentes
                                    na Feira de Graduação da UEFS, mostrando à comunidade o viés de
                                    consultoria que a Agronomia oferece.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">
                        <font face="Esphimere">ENTRE EM CONTATO</font>
                    </h2>
                </div>
            </div>
            <!-- CONTACT FORM-->

            <form role="form" method="POST" action=""
                  onsubmit="this.scrollPosition.value=(document.body.scrollTop || document.documentElement.scrollTop)"
                  class="contact-form">
                <br>
                <div class="row">
                    <input type="hidden" name="scrollPosition">

                    <input type="hidden" name="submitted" id="submitted" value="true">

                    <div class="col-lg-4 col-sm-4 zerif-rtl-contact-name"
                         data-scrollreveal="enter left after 0s over 1s">
                        <input required="required" type="text" name="myname" id="myname"
                               placeholder="Seu Nome"
                               class="form-control input-box"
                               value="">
                    </div>

                    <div class="col-lg-4 col-sm-4 zerif-rtl-contact-email"
                         data-scrollreveal="enter left after 0s over 1s">
                        <input required="required" type="email" name="myemail" id="myemail"
                               placeholder="Email"
                               class="form-control input-box"
                               value="">
                    </div>

                    <div class="col-lg-4 col-sm-4 zerif-rtl-contact-subject"
                         data-scrollreveal="enter left after 0s over 1s">
                        <input required="required" type="text" name="mysubject" id="mysubject"
                               placeholder="Assunto"
                               class="form-control input-box" value="">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-lg-12 col-sm-12" data-scrollreveal="enter right after 0s over 1s">
                        <textarea rows="6" name="mymessage" id="mymessage" class="form-control textarea-box"
                                  placeholder="Sua Mensagem"></textarea>
                    </div>
                </div>

                <br>
                <div class="row" style="float:right;">
                    <button class="btn btn-success" type="submit"
                            data-scrollreveal="enter left after 0s over 1s">Enviar
                        Mensagem
                    </button>
                </div>

            </form>

            <br><br>
            <hr class="my-4">
            <p class="mb-5"></p>
        </div>
    </section>
</main>

<footer>
    <div class="sectionBackground">
        <div class="row" id="footer">
            <div class="col-2">
            </div>
            <div class="col-2">
                <div id="email">
                    <img src="/view/Assets/img/email.png" alt="">
                    <p> consultagrojr@gmail.com</p>
                </div>
            </div>
            <div class="col-2">
                <div id="telefone">
                    <img src="/view/Assets/img/telefone.png" alt=""><br>
                    <p>(75) 3161-8400</p>
                </div>
            </div>
            <div class="col-2">
                <div id="instagram">
                    <a href="https://www.instagram.com/consultagrojr" target=" _blank"> <img src="/view/Assets/img/insta.png">
                        <p>@consultagrojr</p>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="facebook">
                    <a href="https://www.facebook.com/consultagrojr" target=" _blank"> <img src="/view/Assets/img/face.png"
                                                                                            alt="">
                        <p>@consultagrojr</p>
                    </a>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>

</footer>

<!-- js scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/view/vendor/js/jquery-slim.min.js"><\/script>')</script>
<script src="/view/Vendor/js/popper.min.js"></script>
<script src="/view/Vendor/js/bootstrap.min.js"></script>
<script src="/view/Vendor/js/holder.min.js"></script>

<script src="/view/Vendor/js/jquery.min.js"></script>
<script src="/view/Vendor/js/parallax.min.js"></script>
<script src="/view/Assets/js/creative.js"></script>
</body>

</html>