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
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Mistura perfeita</span>
                                <span class="section-heading-lower">Cafés & chás</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset("images/products-01.jpg")}}" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Temos orgulho de nosso trabalho, e isso fica evidente. Toda vez que você pedir uma bebida de nós, garantimos que será uma experiência que vale a pena. Seja o nosso mundialmente famoso cappuccino venezuelano, um refrescante chá gelado de ervas ou algo tão simples como uma xícara de café preto de origem especial, você voltará para pedir mais.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Guloseimas deliciosas, alimentos saborosos</span>
                                <span class="section-heading-lower">Padaria & cozinha</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset("images/products-02.jpg")}}" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Nosso cardápio sazonal oferece deliciosos lanches, produtos assados e até refeições completas perfeitas para o café da manhã ou almoço. Sempre que possível, obtemos nossos ingredientes de fazendas locais e orgânicas, além de fornecedores premium para produtos especiais.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Do mundo inteiro</span>
                                <span class="section-heading-lower">Grãos especiais a granel</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset("images/products-03.jpg")}}" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Viajar pelo mundo em busca de café da melhor qualidade é algo de que nos orgulhamos. Ao nos visitar, você sempre encontrará novos blends de todo o mundo, principalmente de regiões da América Central e do Sul. Vendemos nossos blends em pequenas e grandes quantidades. Visite-nos pessoalmente para obter mais detalhes.</p></div>
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
