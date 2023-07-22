<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mundo do Café - Desperte seus sentidos com o sabor do café perfeito</title>
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">O sabor do café como você nunca provou antes!</span>
                <span class="site-heading-lower">Uma dose de felicidade em cada xícara.</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('home')}}">Início</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('about')}}">Sobre</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('products')}}">Produtos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('store')}}">Loja</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('images/intro.jpg')}}" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Café fresco</span>
                            <span class="section-heading-lower">Vale a pena beber</span>
                        </h2>
                        <p class="mb-3">Cada xícara do nosso café artesanal de qualidade começa com ingredientes de origem local e escolhidos a dedo. Depois de experimentá-lo, nosso café será um complemento maravilhoso para sua rotina matinal diária - nós garantimos!</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{route('store')}}">Visite-nos hoje!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nosso compromisso</span>
                                <span class="section-heading-lower">com você</span>
                            </h2>
                            <p class="mb-0">Quando você entra em nossa loja para começar o seu dia, nos dedicamos a oferecer um atendimento amigável, um ambiente acolhedor e, acima de tudo, produtos excelentes feitos com ingredientes da mais alta qualidade. Se não estiver satisfeito, informe-nos e faremos o possível para corrigir a situação!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Mundo do Café 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
