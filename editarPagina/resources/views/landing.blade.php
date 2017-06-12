<!DOCTYPE html>
<html>
    <head>
        <title>Landing</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Nayith">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vertical-rhythm.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">        

        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Cargando...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Home Section -->
            <section class="home-section bg-dark-alfa-70 parallax-2 fixed-height-small sep-movil" data-background="{{ asset('uploads/organization_'.$organization->id_organization.'/paralax1_idOrganization_'.$organization->id_organization.'.jpg') }}" id="home">
                <div class="js-height-parent container">
                    
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <input type="hidden" name="organization" id="organization" value="{{ $organization->id_organization }}">


                            
                            <h2 class="hs-line-14 font-alt mb-20 mb-xs-30">
                               <div id="titulo1" onclick="edition(this)" >{{ $organization->landing->configs[0]["value"] }} </div>

                                
                               <div id="titulo2" onclick="edition(this)" >
                                   {{ $organization->landing->configs[1]["value"] }}
                               </div> 

                                
                               <b id="titulo3Grueso"  onclick="edition(this)" >{{ $organization->landing->configs[2]["value"] }}</b>
                            </h2>

                            <h1 class="hs-line-8 no-transp font-alt mb-20 mb-xs-30" id="titulo4" onclick="edition(this)">
                                {{ $organization->landing->configs[3]["value"] }}
                            </h1>
                            
                             <input type="file" class="" name="paralax1" id="paralax1">

                            <div class="left">
                                <button class="btn btn-success btn-lg" id="guardar">Guardar cambios</button>
                            </div>


    <div class="local-scroll top-login mb-80"><form>
    <input type="text" placeholder="Usuario:" name="">
    <span class="hidden-xs">&nbsp;</span>
    <input type="text" placeholder="Contraseña:" name="">
    <span class="hidden-xs">&nbsp;</span>
    <a href="" class="btn btn-color-p btn-border-w btn-medium btn-round" id="ingresar" onclick="edition(this)">{{ $organization->landing->configs[4]["value"] }}</a>
    </form></div>

    <div class="">
    <a href="" class="btn btn-mod btn-border-w btn-small btn-round mb-20" id="olvido_contrasena" onclick="edition(this)">{{ $organization->landing->configs[5]["value"] }}</a>
    <span class="hidden-xs">&nbsp;</span>
    <a href="solicitar-cuenta.html" class="btn btn-color-s btn-border-w btn-small btn-round mb-20" id="solicitar_cuenta" onclick="edition(this)">{{ $organization->landing->configs[6]["value"] }}</a>
    </div>
                            
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    
                </div>
            </section>
            <!-- End Home Section -->
            
            
            <!-- Navigation panel -->
            <nav class="main-nav stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                            <img  class="logo" src="{{ asset('images/logo.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="#home">Inicio</a></li>
                            <li><a href="#descripcion">Descripción</a></li>
                            <li><a href="#beneficios">Beneficios</a></li>
                            <li><a href="#actualidad">Actualidad</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                            <li><a href="#home">Mi Cuenta</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- About Section -->
            <section class="page-section" id="descripcion">
                <div class="container relative">
                    
                    <h2 class="font-alt align-center mb-30 mb-sm-40 titulo-tops" onclick="edition(this)" id="programa_formacion">
                        {{ $organization->landing->configs[7]["value"] }}
                    </h2>
                    <div class="align-center">
                        <img class="" src="{{ asset('uploads/organization_'.$organization->id_organization.'/logo2.png') }}" width="300" alt="" />
                    </div>
                    <div class="col-md-offset-4">
                        <input type="file" class="" name="logo2" id="logo2">
                    </div>
                    
                </div>
            </section>
            <!-- End About Section -->
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->

<!-- Call Action Section -->
<section class="page-section bg-dark-alfa-70 pt-0 pb-0 banner-section bg-dark" data-background="{{ asset('uploads/organization_'.$organization->id_organization.'/paralax3.jpg') }}">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            
                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <h3 class="banner-heading font-alt" id="tituloParalax3" onclick="edition(this)"> {{ $organization->landing->configs[8]["value"] }}</h3>
                                    <div class="banner-decription" id="descripcionParalax3" onclick="edition(this)">
                                        {{ $organization->landing->configs[9]["value"] }}
                                    </div>
                                    <div class="local-scroll">
                                        <a href="solicitar-cuenta.html" id="botonParalax3" class="btn btn-color-p btn-w btn-medium btn-round" onclick="edition(this)">{{ $organization->landing->configs[10]["value"] }}</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-6 banner-image wow fadeInUp" data-wow-duration="1.2s">
                            <img src="{{ asset('uploads/organization_'.$organization->id_organization.'/promo-1.png') }}" alt="" />
                            <input type="file" name="promo" id="promo">
                        </div>
                        
                    </div>
                    <input type="file" name="paralax3" id="paralax3">
                </div>
</section>
<!-- End Call Action Section -->
            
<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Features Section -->
            <section class="page-section" id="beneficios">
                <div class="container relative">
                    
                    <h2 class="font-alt align-center mb-30 mb-sm-40 titulo-tops" id="tituloBeneficio" onclick="edition(this)">
                        <?php $titleBenefits = explode(" ", $organization->landing->benefits[0]["title"]); ?>
                        <?php $quantity = (round(count($titleBenefits)/2)); ?>
                        @for ($i = 0; $i < $quantity; $i++ )
                            {{ $titleBenefits[$i]  }}
                        @endfor
                        <b>
                            @for ($i = $quantity; $i < count($titleBenefits); $i++ )
                                {{ $titleBenefits[$i]  }}
                            @endfor
                        </b>
                    </h2>
                    <p class="align-center mb-70 mb-sm-40" id="descripcionBeneficio" onclick="edition(this)">
                        {{ $organization->landing->benefits[0]["content"] }}
                    </p>
                    
                    <!-- Features Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-flag"></span>
                                </div>
                                <h3 class="alt-features-title font-alt" id="tituloBeneficio1" onclick="edition(this)">{{ $organization->landing->benefits[1]["title"] }}</h3>
                                <div class="alt-features-descr align-left" id="descripcionBeneficio1" onclick="edition(this)">
                                    {{ $organization->landing->benefits[1]["content"] }}
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <h3 class="alt-features-title font-alt" id="tituloBeneficio2" onclick="edition(this)">{{ $organization->landing->benefits[2]["title"] }}</h3>
                                <div class="alt-features-descr align-left" id="descripcionBeneficio2" onclick="edition(this)">
                                    {{ $organization->landing->benefits[2]["content"] }}
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-hotairballoon"></span>
                                </div>
                                <h3 class="alt-features-title font-alt" id="tituloBeneficio3" onclick="edition(this)">{{ $organization->landing->benefits[3]["title"] }}</h3>
                                <div class="alt-features-descr align-left" id="descripcionBeneficio3" onclick="edition(this)">
                                    {{ $organization->landing->benefits[3]["content"] }}
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-heart"></span>
                                </div>
                                <h3 class="alt-features-title font-alt" id="tituloBeneficio4" onclick="edition(this)">{{ $organization->landing->benefits[4]["title"] }}</h3>
                                <div class="alt-features-descr align-left" id="descripcionBeneficio4" onclick="edition(this)">
                                    {{ $organization->landing->benefits[4]["content"] }}
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-linegraph"></span>
                                </div>
                                <h3 class="alt-features-title font-alt" id="tituloBeneficio5" onclick="edition(this)">{{ $organization->landing->benefits[5]["title"] }}</h3>
                                <div class="alt-features-descr align-left" id="descripcionBeneficio5" onclick="edition(this)">
                                    {{ $organization->landing->benefits[5]["content"] }}
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <h3 class="alt-features-title font-alt" id="tituloBeneficio6" onclick="edition(this)">{{ $organization->landing->benefits[6]["title"] }}</h3>
                                <div class="alt-features-descr align-left" id="descripcionBeneficio6" onclick="edition(this)">
                                    {{ $organization->landing->benefits[6]["content"] }}
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                    </div>
                    <!-- End Features Grid -->
                
                </div>
</section>
<!-- End Features Section -->

            
<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Blog Section -->
            <section class="page-section" id="actualidad">
                <div class="container relative">
                 

                     <h2 class="font-alt align-center mb-30 mb-sm-40 titulo-tops">
                        Actualidad del programa <b>Innovación para Todos</b>
                    </h2>
                    <p class="align-center mb-70 mb-sm-40">
                    Conoce de cerca cómo vamos con nuestro proceso de formación como organización. Aquí te contamos algunas novedades
                    </p>
                    
                    <div class="row multi-columns-row">
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">
                            
                            <div class="post-prev-img">
                                <a href="pagina-blog.html"><img src="{{ asset('images/img1.jpg') }}" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                New Web Design Trends
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                John Doe | 10 December
                            </div>
                            
                            <div class="post-prev-text">
                                Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor 
                                consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="pagina-blog.html" class="btn btn-mod btn-gray btn-round">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                            
                            <div class="post-prev-img">
                                <a href="pagina-blog.html"><img src="{{ asset('images/img2.jpg') }}" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                Minimalistic Design Forever
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                John Doe | 9 December
                            </div>
                            
                            <div class="post-prev-text">
                                Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor 
                                consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="pagina-blog.html" class="btn btn-mod btn-gray btn-round">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
                            
                            <div class="post-prev-img">
                                <a href="pagina-blog.html"><img src="{{ asset('images/img3.jpg') }}" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                Hipster&rsquo;s Style in&nbsp;Web
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                John Doe | 7 December
                            </div>
                            
                            <div class="post-prev-text">
                                Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor 
                                consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="pagina-blog.html" class="btn btn-mod btn-gray btn-round">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->

                        <div class="col-sm-12 col-md-12 col-lg-12 mb-md-50 mt-80 align-center">
                        <a href="blog-todos.html" class="btn btn-color-p2 btn-large btn-round">VER TODAS</a>
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Blog Section -->  
            
<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->        
            
            
            <!-- Testimonials Section -->
            <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="images/bg-top-login.jpg">
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">Nombre Persona</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">Nombre Persona</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">Nombre Persona</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
            </section>
            <!-- End Testimonials Section -->
            
            
     <!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->         
            
            
            
            <!-- Contact Section -->
            <section class="page-section sec-pd-menor" id="contacto">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Contacto
                    </h2>
                    
                    <div class="row mb-60 mb-xs-40">
                        
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                
                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Teléfono
                                        </div>
                                        <div class="ci-text">
                                            +57 000 0000000
                                        </div>
                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Dirección
                                        </div>
                                        <div class="ci-text">
                                            calle 100 # 50-50 B
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Email
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:info@sudominio.com">info@sudominio.com</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Email -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Contact Form -->                            
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <form class="form contact-form" id="contact_form">
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Nombre" pattern=".{3,100}" required>
                                        </div>

                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Teléfono" pattern=".{3,100}" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Message -->
                                        <div class="form-group">                                            
                                            <textarea name="message" id="message" class="input-md round form-control" style="height: 130px;" placeholder="Mensaje"></textarea>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="clearfix">
                                    
                                        <div class="align-center pt-10">
                                            <button class="submit_btn btn btn-color-p2 btn-medium btn-round" id="submit_btn">Enviar</button>
                                        </div>
                              
                                    
                                </div>
                                
                                
                                
                                <div id="result"></div>
                            </form>
                            
                        </div>
                    </div>
                    <!-- End Contact Form -->
                    
                </div>
            </section>
            <!-- End Contact Section -->
            
            
    <!-- Section -->
            <section class="page-section sec-pd-menor mb-20">
                <div class="container relative">
                    <h2 class="section-title font-alt mb-20 mb-sm-40">
                        Aliados
                    </h2>
                    <!-- Features Grid -->
                    <div class="item-carousel owl-carousel">
                        
                        <!-- Features Item -->
                        <div class="features-item">
                            <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                        <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="features-item">
                         <img src="{{ asset('images/logo-aliado.jpg') }}" alt="" />
                        </div>
                        <!-- End Features Item -->
                        
                    </div>
                    <!-- Features Grid -->
                
                </div>
            </section>
            <!-- End Section -->         
      
    <!-- Foter -->
    <footer class="page-section sec-pd-menor bg-gray-lighter footer pb-60">
    <div class="container">
         
         <!-- Social Links -->
                    <div class="footer-social-links mb-40 mb-xs-60">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links --> 

                    <!-- Footer Logo -->
    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
    <p><b>Potenciado por:</b>
    <br><br>
    <img src="{{ asset('images/logo-rutan.png') }}" alt="" />
    <span class="hidden-xs ml-20">&nbsp;</span>
    <img src="{{ asset('images/logo-globoavans.png') }}" alt="" /></a>
                        </p>
                    </div>
                    <!-- End Footer Logo -->
                    
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; 2017</a>.
                        </div>
                        <!-- End Copyright -->
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.localScroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.viewport.mini.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.simple-text-rotator.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/contact-form.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

        <style type="text/css">
           .left {
            float: right;
            right: 0 !important;
            height: auto;
            margin-top: 100px;
            padding: 0em;
            position: fixed;
            top: 70px;
            z-index: 99999;
        }
        </style>



        <script type="text/javascript" src="http://www.appelsiini.net/download/jquery.jeditable.js"></script>

        <script type="text/javascript">

            //declarar variables
            var titulo1 =  "";
            var titulo2 =  "";
            var titulo3Grueso =  "";
            var titulo4 =  "";
            var organization =  "";
            var values =  "";
            var ingresar = "";
            var olvido_contrasena = "";
            var solicitar_cuenta = "";
            var programa_formacion = "";
            var tituloParalax3 = "";
            var descripcionParalax3 = "";
            var botonParalax3 = "";
            var paralax3 = "";
            var promo = "";
            var tituloBeneficio = "";
            var descripcionBeneficio = "";
            var tituloBeneficio1 = "";
            var descripcionBeneficio1 = "";
            var tituloBeneficio2 = "";
            var descripcionBeneficio2 = "";
            var tituloBeneficio3 = "";
            var descripcionBeneficio3 = "";
            var tituloBeneficio4 = "";
            var descripcionBeneficio4 = "";
            var tituloBeneficio5 = "";
            var descripcionBeneficio5 = "";
            var tituloBeneficio6 = "";
            var descripcionBeneficio6 = "";
            var benefitValues = "";
            var data = new FormData();

            
            $("#guardar").on('click',function(){

                initialize();
                prepare();   
                savePage(); 
                   
            });


            function initialize()
            {
                titulo1 = $("#titulo1").html();
                titulo2 = $("#titulo2").html();
                titulo3Grueso = $("#titulo3Grueso").html();
                titulo4 = $("#titulo4").html();
                ingresar = $("#ingresar").html();
                olvido_contrasena = $("#olvido_contrasena").html();
                solicitar_cuenta = $("#solicitar_cuenta").html();
                programa_formacion = $("#programa_formacion").html();
                data.append('paralax1', $( '#paralax1' )[0].files[0] );
                data.append('logo2', $( '#logo2' )[0].files[0] );   
                tituloParalax3 = $("#tituloParalax3").html();  
                descripcionParalax3 = $("#descripcionParalax3").html(); 
                botonParalax3 = $("#botonParalax3").html(); 
                organization = $("#organization").val();
                data.append('paralax3', $( '#paralax3' )[0].files[0] ); 
                data.append('promo', $( '#promo' )[0].files[0] ); 
                tituloBeneficio = $("#tituloBeneficio").html(); 
                descripcionBeneficio = $("#descripcionBeneficio").html();
                tituloBeneficio1 = $("#tituloBeneficio1").html(); 
                descripcionBeneficio1 = $("#descripcionBeneficio1").html();
                tituloBeneficio2 = $("#tituloBeneficio2").html(); 
                descripcionBeneficio2 = $("#descripcionBeneficio2").html();
                tituloBeneficio3 = $("#tituloBeneficio3").html(); 
                descripcionBeneficio3 = $("#descripcionBeneficio3").html();
                tituloBeneficio4 = $("#tituloBeneficio4").html(); 
                descripcionBeneficio4 = $("#descripcionBeneficio4").html();
                tituloBeneficio5 = $("#tituloBeneficio5").html(); 
                descripcionBeneficio5 = $("#descripcionBeneficio5").html();
                tituloBeneficio6 = $("#tituloBeneficio6").html(); 
                descripcionBeneficio6 = $("#descripcionBeneficio6").html();
                //valores del config
                values = [titulo1, titulo2, titulo3Grueso, titulo4, ingresar, olvido_contrasena, solicitar_cuenta,programa_formacion, tituloParalax3, descripcionParalax3, botonParalax3];
                //valores del benefinicio
                benefitValues = [tituloBeneficio, descripcionBeneficio,tituloBeneficio1, descripcionBeneficio1,tituloBeneficio2, descripcionBeneficio2,tituloBeneficio3, descripcionBeneficio3,tituloBeneficio4, descripcionBeneficio4,tituloBeneficio5, descripcionBeneficio5,tituloBeneficio6, descripcionBeneficio6];

            }


            function prepare()
            {
                //guardar los valores del config en values
                for (var i = 0; i < values.length; i++) {
                    data.append('values[]', values[i]);
                }
                //guardar los valores del beneficio en benefitValues
                for (var i = 0; i < benefitValues.length; i++) {
                    data.append('benefitValues[]', benefitValues[i]);
                }
                data.append('organization', organization);
            }


            function savePage()
            {
                 $.ajax({
                    url: 'landing/store',
                    method : "POST",
                    processData: false,
                    contentType: false,
                    data: data,
                    }).done(function(info){

                        console.log(info);
                        info = JSON.parse(info);

                        if(info.status)
                        {
                            alert("Cambios guardados");
                            //location.reload(true);
                        }
                        else
                        {
                            alert("Error al guardar");
                        }
                    });
            }


            function edition(element)
            {
                $(element).attr('contenteditable','true');
            }

            $.ajaxSetup({
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
        </script>
        
    </body>
</html>
