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
    <link rel="stylesheet" type="text/css" href="../../css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="../../css/styles.css">

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
                <img src="../../images/main-logo.png" width="60px" height="60px" alt="logo" class="me-3">
                <div class="d-flex flex-column">
                    <h5>EMG-Manipulator</h5>
                    <p>A Conexão entre Mente e Máquina</p>
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
                            <a class="nav-link text-uppercase  px-3" href="/#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="/#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="/#projects">Projeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="/#blog">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="/#contact">Contato</a>
                        </li>
                        <a href="/users/login"><button type="button" class="btn btn-danger">Login</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="position-relative overflow-hidden py-4"
        style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url(/images/banner-img.jpg)">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center py-5">
                <div class=" col-md-5">
                    <form class="hero-form p-5" action="/users/store" method="post">
                        <h3>Cadastro</h3>
                        <div class="mb-4">
                            <label for="InputUser" class="form-label mb-0">Usuário</label>
                            <input type="text" class="form-control border-0" id="InputFiInputUserrstName" name="user">
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label mb-0">Senha</label>
                            <input type="password" class="form-control border-0" id="InputPassword" name="password" onkeyup="verifyPass()">
                        </div>
                        <div class="mb-3">
                            <label for="InputCheckPassword" class="form-label mb-0">Repetir Senha</label>
                            <input type="password" class="form-control border-0" id="InputCheckPassword" name="verify" onkeyup="verifyPass()">
							<p class="form-label" id="verification"></p>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label mb-0">Email</label>
                            <input type="email" class="form-control border-0" id="InputEmail" name="email">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	<script>
		function verifyPass() {
	
			var password = document.getElementById('InputPassword').value;
			var check = document.getElementById('InputCheckPassword').value;
			var verification = document.getElementById('verification');
			
			if (check.length === 0) {
				verification.innerHTML = "";
			} else if (password.length === 0) {
				verification.innerHTML = "";
			} else if (password !== check) {
				verification.innerHTML = "As senhas não coincidem";
			} else {
				verification.innerHTML = "As senhas coincidem";
			}
		}
	</script>
	
    <section id="footer">
        <div class="container footer-container mt-5 pt-3">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 ">

                <div class=" col-md-4 mt-5 mt-md-0 ">
                    <img src="../../images/main-logo.png" width="80px" alt="image" class="my-3">
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