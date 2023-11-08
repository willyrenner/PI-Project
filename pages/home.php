<?php
    if (hasUser()) {
        header('Location: /dashboard');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emg-Manipulator</title>

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    <script src="js/modernizr.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light container-fluid py-3 position-sticky">
        <div class="container">
            <a class="navbar-brand d-flex" href="/">
                <img src="images/main-logo.png" width="60px" height="60px" alt="logo" class="me-3">
                <div class="d-flex flex-column">
                    <h5>EMG-Manipulator</h5>
                    <p class="text-muted">A Conexão entre Mente e Máquina</p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  active px-3" aria-current="page"
                                href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#projects">Projeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#blog">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#contact">Contato</a>
                        </li>
                        <a href="/users/login"><button type="button" class="btn btn-danger">Login</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="position-relative overflow-hidden py-4" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url(/images/banner-img.jpg)">
        <div class="container py-5 mt-5">
            <div class="row align-items-center py-5 mt-5">
                <div class="col-md-6 mb-5 mb-md-0">
                    <!-- <h6 class="text-white">Realiza seu teste</h6> -->
                    <h2 class="text-white fw-bold display-2">Venha fazer sua avaliação!</h2>
                    <p class="text-white">
                        Venha a nossa clínica realizar seu teste, e saber se está apto a utilizar
                        do nosso braço mecânico controlado por sinais de eletromiografia!
                    </p>
                    <ul class="list-unstyled">
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Totalmente legal, licenciado e segurado!
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Avaliação 100% Gratuita!
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Resultado em poucos minutos!
                        </li>
                    </ul>
                </div>
                <!-- <div class=" col-md-5 offset-md-1">
                    <form class="hero-form p-5" action="put.html">
                        <h3>Formulário</h3>
                        <div class="mb-4">
                            <label for="InputFirstName" class="form-label mb-0">Nome</label>
                            <input type="text" class="form-control border-0" id="InputFirstName">
                        </div>
                        <div class="mb-3">
                            <label for="InputLastName" class="form-label mb-0">Sobrenome</label>
                            <input type="text" class="form-control border-0" id="InputLastName">
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label mb-0">Email</label>
                            <input type="email" class="form-control border-0" id="InputEmail">
                        </div>
                        <div class="mb-3">
                            <label for="InputPhone" class="form-label mb-0">Telefone</label>
                            <input type="number" class="form-control border-0" id="InputPhone">
                        </div>
                        <div class="mb-3">
                            <label for="InputMessage" class="form-label mb-0">Mensagem</label>
                            <input type="text" class="form-control border-0" id="InputMessage">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </section>

    <section id="testimonial" class=" position-relative  py-5">
        <div class="container py-5">
            <h6 class="text-white">Avaliações</h6>
            <h2 class="text-white fw-bold display-4 mb-4">Nossos clientes felizes</h2>

            <div class="swiper testimonial-swiper mb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-content p-5">
                        <p>"Eu tive um acidente de carro e perdi meu braço esquerdo. 
                            O braço mecânico controlado por EMG foi incrivelmente útil na minha recuperação. 
                            Ele me permitiu recuperar a mobilidade e a independência mais rapidamente do que eu imaginava. 
                            Estou muito grato por essa tecnologia."</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/team3.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>João da Silva</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        <p>"Eu tive um acidente de carro e perdi meu braço esquerdo. 
                            O braço mecânico controlado por EMG foi incrivelmente útil na minha recuperação. 
                            Ele me permitiu recuperar a mobilidade e a independência mais rapidamente do que eu imaginava. 
                            Estou muito grato por essa tecnologia."</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/team3.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>João da Silva</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        <p>"Eu tive um acidente de carro e perdi meu braço esquerdo. 
                            O braço mecânico controlado por EMG foi incrivelmente útil na minha recuperação. 
                            Ele me permitiu recuperar a mobilidade e a independência mais rapidamente do que eu imaginava. 
                            Estou muito grato por essa tecnologia."</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/team3.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>João da Silva</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                


                </div>
            </div>
            <div class="swiper-pagination mb-5"></div>
        </div>

    </section>

    <section id="services" class="my-5 pt-5">
        <div class="container pt-5">
            <h6 class="">Nossos Serviços</h6>
            <h2 class=" fw-bold display-4 mb-4">O que oferecemos</h2>
            <div class="row">
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="mdi:home-roof"></iconify-icon>
                        <h5 class="services-heading mb-3">Coleta de Sinais de EMG</h5>
                        <p>Contamos a melhor linha de sensores para coleta de sinais de eletromiografia.
                        </p>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="mdi:weather-lightning"></iconify-icon>
                        <h5 class="services-heading mb-3">Classificação e Armazenamento</h5>
                        <p>Classificamos e armazenamos os sinais em nosso bancos de dados com tecnologia de ponta.
                        </p>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="mdi:hammer"></iconify-icon>
                        <h5 class="services-heading mb-3">Venda e Manutenção </h5>
                        <p>Trabalhamos com a Venda e Manutenção de braços mecânicos, contamos com 
                            equipamentos e materiais de alta qualidade para melhor atendermos nossos clientes!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class=" col-md-6 ps-md-5">
                    <img src="images/about-image.gif" width="800px" alt="image" class="img-fluid">
                </div>
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">quem somos</h6>
                    <h2 class=" fw-bold display-4 mb-3">EMG Manipulator</h2>
                    <p class="">
                        <b>EMG Manipulator </b>é um nome fícticio para o projeto "Controle de braço mecânico com 
                        sinais de EMG (eletromiografia)". <br>
                        
                        O projeto tem como ideia, construir um dispositivo capaz de organizar sinais de eletromiografia,
                        classificá-los utilizando Inteligência Artificial e convertê-los em movimentos em um braço mecânico robótico.
                    </p>
                    <!-- <a href="about.html" class="btn btn-primary service-btn mt-3">About us</a> -->
                </div>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container my-5 pb-5 ">
            <h6 class="text-center">PERGUNTAS FREQUENTES</h6>
            <h2 class="text-center fw-bold display-4 mb-5">TEMOS RESPOSTAS</h2>

            <div class="accordion col-md-8 offset-md-2" id="accordionPanelsStayOpenExample">

                <div class="accordion-item mt-3">
                    <h5 class="accordion-header border-0" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseOne">
                            O QUE É ELETROMIOGRAFIA?
                        </button>
                    </h5>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p>
                                A eletromiografia (EMG) é uma técnica de diagnóstico médico que envolve 
                                a medição da atividade elétrica dos músculos. Ela é frequentemente usada 
                                para avaliar o funcionamento do sistema neuromuscular e é uma ferramenta 
                                importante para médicos, fisioterapeutas e pesquisadores em diversas áreas. 
                                A EMG ajuda a detectar e diagnosticar problemas musculares, neurológicos e 
                                neuromusculares, além de fornecer informações valiosas sobre o controle muscular e 
                                a função dos nervos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            COMO A EMG É UTILIZADA NO PROJETO?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>
                                Após a coleta dos sinais de EMG, eles são armazenados no nosso banco de dados
                                para ser organizados e classificados por meio do nosso algorítmo utilizando
                                aprendizagem profunda (Deep Learning). 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            O QUE É INTELIGÊNCIA ARTIFICIAL?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint reprehenderit non quaerat, temporibus iure autem odit? At molestiae porro reprehenderit cupiditate eligendi quos eos ipsum quia natus? Ea, provident! Tenetur!</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            LOREM LOREM
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio veritatis labore sapiente debitis qui repellat aliquid molestias, non architecto placeat repellendus sint quas minus facere asperiores distinctio. Perspiciatis, dolorem cum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="my-5 ">
        <div class="container py-5">
            <div class="row align-items-center ">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                        <h6 class="">Artigos</h6>
                        <h2 class=" fw-bold mb-3">Relevantes</h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                        <a href="#"><img src="images/blog1.jpg" alt="image" class="img-fluid"></a>
                        <h6 class="my-3">Posted by: </h6>
                        <a href="#" class="text-decoration-none">
                            <h5 class="mb-3">Lorem</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore debitis dignissimos ex officia omnis commodi, numquam repellendus possimus, quis sapiente, tempora ab sint iure saepe error in earum deserunt? Unde?
                        </p>
                        <a href="#" class="btn btn-primary mt-3 mb-5">Read More</a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                        <a href="#"><img src="images/blog2.jpg" alt="image" class="img-fluid"></a>
                        <h6 class="my-3">Posted by: </h6>
                        <a href="#" class="text-decoration-none">
                            <h5 class="mb-3">Lorem</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptate ab sit quia non maiores rem, enim praesentium eaque? Eveniet praesentium autem delectus vitae natus quia velit iusto qui? Quia.
                        </p>
                        <a href="#" class="btn btn-primary mt-3 mb-5">Read More</a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                        <a href="#"><img src="images/blog3.jpg" alt="image" class="img-fluid"></a>
                        <h6 class="my-3">Posted by: </h6>
                        <a href="#" class="text-decoration-none">
                            <h5 class="mb-3">Lorem</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore id mollitia esse culpa pariatur cumque quia libero tempora doloremque commodi sit animi nobis, repellat beatae facere asperiores magni dolorum rem.
                        </p>
                        <a href="#" class="btn btn-primary mt-3 mb-5">Read More</a>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="cta" class="position-relative my-5">
        <div class="container my-5 py-5"></div>
    </section>

    <section id="footer">
        <div class="container footer-container mt-5 pt-3">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 ">

                <div class=" col-md-4 mt-5 mt-md-0 ">
                    <img src="images/main-logo.png" width="80px" alt="image" class="my-3">
                    <h5>EMG-Manipulator</h5>
                    <p class="text-muted">A Conexão entre Mente e Máquina</p>
                    <div class="d-flex align-items-center ">
                        <a href="#" target="_blank">
                            <iconify-icon class="social-link-icon active pe-4" icon="mdi:facebook"></iconify-icon>
                        </a>
                        <a href="#" target="_blank">
                            <iconify-icon class="social-link-icon pe-4" icon="mdi:twitter"></iconify-icon>
                        </a>
                        <a href="#" target="_blank">
                            <iconify-icon class="social-link-icon pe-4" icon="mdi:instagram"></iconify-icon>
                        </a>
                        <a href="#" target="_blank">
                            <iconify-icon class="social-link-icon pe-4" icon="mdi:linkedin"></iconify-icon>
                        </a>
                        <a href="#" target="_blank">
                            <iconify-icon class="social-link-icon pe-4" icon="mdi:youtube"></iconify-icon>
                        </a>
                    </div>
                </div>

                <div class="col-md-2 offset-md-1">
                    <!-- <h5 class="py-3">Our services</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof replacement</a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Damage repairs </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof repair</a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof Solar System</a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof coating</a></li>
                    </ul> -->
                </div>
                <div class="col-md-2 ">
                    <!-- <h5 class="py-3">Quick links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Our locations </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> About us </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Our gallery </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Privacy Policy</a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Contact us </a></li>
                    </ul> -->
                </div>
                <div class="col-md-3 ">
                    <h5 class="py-3" id="contact">Informações de Contato</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:location"></iconify-icon>
                            <a href="#" class="nav-link p-0 "> 163 Elm Drive, NYC, USA </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:call"></iconify-icon><a href="#"
                                class="nav-link p-0 "> +55 (84) 4002-8922 </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:mail"></iconify-icon><a href="#"
                                class="nav-link p-0 "> contato@emgmanipulator.com </a>
                        </li>

                    </ul>
                </div>
            </footer>
        </div>
        
        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 pt-4">
                <div class="col-md-6 d-flex align-items-center">
                    <p>© 2023 Emg Manipulator - Todos os Direitos Reservados</p>
                </div>
            </footer>
        </div>
    </section>

    <!-- script ================================================== -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>


</body>

</html>