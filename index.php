<?php
  
if(isset($_GET["col"]))
{
  $var=$_GET['col'];
}else{
  $var="1";
}
$dto=0;
$dto2="";
include '../colaboradores.php';
if($dto==0)
{
  $dto="";
}else{
  if($var==2118)
  {
    $dto=$dto." Dto."; 
  }else{
    $dto=$dto." € Dto.";  
  }

}

$tpk="https://www.tecs.es/tecs/campamentos/verano-ingles-puerto-kids/?utm_source=colaboradores&utm_medium=landing&utm_campaign=landing_colab";
$tpt="https://www.tecs.es/tecs/campamentos/verano-ingles-puerto-teens/?utm_source=colaboradores&utm_medium=landing&utm_campaign=landing_colab";
$mv="https://www.tecs.es/tecs/campamentos/verano-ingles-magic-village/?utm_source=colaboradores&utm_medium=landing&utm_campaign=landing_colab";
$lv="https://www.tecs.es/tecs/campamentos/verano-ingles-little-village/?utm_source=colaboradores&utm_medium=landing&utm_campaign=landing_colab";
$tc="https://www.tecs.es/tecs/campamentos/verano-ingles-tecs-college/?utm_source=colaboradores&utm_medium=landing&utm_campaign=landing_colab";
$tlw="https://www.tecs.es/tecs/cursos-en-el-extranjero/inglaterra/gales/?utm_source=colaboradores&utm_medium=landing&utm_campaign=landing_colab";

$enable-shadows

?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Campamentos de Verano 2023</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="index.css" rel="stylesheet" />
        <link rel="icon" href="../../../../favicon.ico">

    </head>


    <body>
        
        <!-- Logo Bar-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <img class="logos" id="logo-tecs" src="https://www.tecs.es/col/logos/logo20.jpg">

                <img  class="logos" id="logo-colab" src="https://www.tecs.es/tecs/col/logos/<?=$logo?>">
            </div>
        </nav>
        
        <!-- Hero-->
        <header class="hero">
            <div class="container position-relative">
                <div class="row justify-content-center">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Camapmentos de Verano 2023</h1>
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                   
                                </div>                 
                                <!-- Info Request Button-->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <center><a class="btn btn-lg btn-primary" href="https://info.tecs.es/inscripnew.asp?col=<?=$var?>" role="button">Solicita Información</a></center>
                                </div>
                                <!-- Reserve Button-->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <center><a class="btn btn-lg btn-primary" href="https://datos.tecs.es/tecsnet/reserva.asp?col=<?=$var?>" role="button">Reserva Ahora</a></center>
                                </div>
                                
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
        </header>


        <!-- Discount -->

        <section class="discount">
                <center><h1 class="display-5 white"><?=$dto?></h1>
                <h3 class="display-5 white"><?=$dto2?></h3></center>

        </section>


        <!-- Reasons-->

        <section class="reasons bg-light text-center">
            
            <div class="container spaced">

                <div class="row">
                    <h2 class="mb-5">¿Por qué TECS</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <img class="reason-logos" src="resources/images/nativo.jpg">
                        <h3>Personal Nativo<br>y Titulado</h3>
                    </div>
                    <div class="col-lg-3">
                        <img class="reason-logos" src="resources/images/ratio.jpg">
                        <h3>Ration 1:4<br>Staff / Campistas</h3>
                    </div>
                    <div class="col-lg-3">
                        <img class="reason-logos" src="resources/images/idioma.jpg">
                        <h3>Contacto con<br>el Idioma</h3>
                    </div>
                    <div class="col-lg-3">
                        <img class="reason-logos" src="resources/images/bienestar.jpg">
                        <h3>Sistema Completo<br>de Bienestar</h3>
                    </div>

                </div>

            </div>  

        </section>

        <!-- Camps-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('resources/images/kids.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Puerto Kids</h2>
                        <ul class="lead mb-0">
                            <li>Edad: 7 a 13 años</li>
                            <li>Fechas: 2-15 Julio | 16-29 Julio | 30 Julio-12 Agosto</li>
                        </ul>
                        <a class="btn btn-lg btn-primary spaced" href="https://www.tecs.es/tecs/docs/sc/descriptivos/descriptivotpk.pdf" role="button">Ver más</a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('resources/images/teens.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Puerto Teens</h2>
                        <ul class="lead mb-0">
                            <li>Edad: 14 a 17 años</li>
                            <li>Fechas: 2-15 Julio | 16-29 Julio | 30 Julio-12 Agosto</li>
                        </ul>
                        <a class="btn btn-lg btn-primary spaced" href="https://www.tecs.es/tecs/docs/sc/descriptivos/descriptivotpt.pdf" role="button">Ver más</a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('resources/images/magic.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Magic Village</h2>
                        <ul class="lead mb-0">
                            <li>Edad: 11 a 14 años</li>
                            <li>Fechas: 2-15 Julio</li>
                        </ul>
                        <a class="btn btn-lg btn-primary spaced" href="https://www.tecs.es/tecs/docs/sc/descriptivos/descriptivotmv.pdf" role="button">Ver más</a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('resources/images/little.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Little Village</h2>
                        <ul class="lead mb-0">
                            <li>Edad: 14 a 17 años</li>
                            <li>Fechas: 16-29 Julio </li>
                        </ul>
                        <a class="btn btn-lg btn-primary spaced" href="https://www.tecs.es/tecs/docs/sc/descriptivos/descriptivotlv.pdf" role="button">Ver más</a>
                    </div>
                </div>                
            </div>
        </section>


        <!-- Testimonials-->
        <section id="bluebackground" class="testimonials text-center bg-light">
            <div class="bluebackground" >
                <h2 class="mb-5">Que dicen nuestras familias...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <h5>Familia Galet</h5>
                            <p class="font-weight-light mb-0">"Tercer año consecutivo y cada vez mejor. Sois una gran familia y así nos lo hacéis llegar a través del trato a nuestro hijo. El año que viene repetimos!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <h5> Familia Muñoz Lavado	</h5>
                            <p class="font-weight-light mb-0">"BEl campamento logra lo que los padres queremos, que aprendan, y lo que los chavales quieren, pasarlo muy bien. Enhorabuena. Increíble que nuestro hijo, al hablar con nosotros, lo hiciera en inglés. Creo que eso lo dice todo"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <h5> Familia Anton	</h5>
                            <p class="font-weight-light mb-0">"Creemos que es un gran campamento, muy bien organizado, con muchas actividades y gran personal. Muchas gracias por todo y esperemos que el año que viene podamos repetir"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        <section id="gallery">
            <h2 class="mb-5 text-center">Nuestras Instalaciones</h2>

                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <img class="instalacion" src="resources/images/instalacion-1.jpg">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <img class="instalacion" src="resources/images/instalacion-2.jpg">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <img class="instalacion" src="resources/images/instalacion-3.jpg">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <img class="instalacion" src="resources/images/instalacion-4.jpg">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <img class="instalacion" src="resources/images/instalacion-5.jpg">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                        <img class="instalacion" src="resources/images/instalacion-6.jpg">
                    </div>
                </div>
            </section>
                <section class="cta">
                    <div class="container position-relative">
                        <div class="row justify-content-center">
                                <div class="text-center text-white">
                                    <!-- Page heading-->
                                    <img id="logo-blanco" src="resources/images/logo-blanco.png">
                                    <h1 class="mb-5">Are you Ready?</h1>
                                    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                           
                                        </div>                 
                                        <!-- Info Request Button-->
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <center><a class="btn btn-lg btn-primary" href="https://info.tecs.es/inscripnew.asp?col=<?=$var?>" role="button">Solicita Información</a></center>
                                        </div>
                                        <!-- Reserve Button-->
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <center><a class="btn btn-lg btn-primary" href="https://datos.tecs.es/tecsnet/reserva.asp?col=<?=$var?>" role="button">Reserva Ahora</a></center>
                                        </div>
                                        
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                </section>




        <footer class="text-center">
            <p> © TECS 2023</p>
        </footer>

    </body>
</html>
