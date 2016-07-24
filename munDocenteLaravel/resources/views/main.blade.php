@extends('layouts.routes.normalroute')

@section('menus')
  
  @yield('menu')

@stop

@section('principal')
<!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
            
             <div class="4u 12u(mobile)">
             @if (Auth::guest())     
               @yield('login')
               @yield('area')
             @else
               @yield('area')
             @endif
               </div>
               
                <div class="8u 12u(mobile)">
                    <article class="box post">
                         <div id="slider" class="carousel slide" >
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="item1 active"></li>
                                <li class="item2"></li>
                                <li class="item3"></li>
                                <li class="item4"></li>
                                <li class="item5"></li>
                                <li class="item6"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class ="item active">
                                    <img src="images/img1.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img3.png">
                                </div>
                                 <div class ="item">
                                    <img src="images/img4.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img2.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img6.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img7.png">
                                </div>
                            </div>

                             <a class="left carousel-control" href="#slider" role="button">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slider" role="button">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br>

                        @yield('content')
  
                    </article>
      
                </div>
            </div>
        </div>
    </div>

    <div id="header-wrapper">
    <div id="header">
                <!-- Intro -->
        <section id="intro" class="container">
            <div class="row">
                <div class="4u 12u(mobile)">
                    <section class="first">
                        <i class="icon featured fa-suitcase"></i>
                        <header>
                            <h2>Convocatorias docente</h2>
                        </header>
                        <p>Entérate oportunamente sobre las oportunidades laborales del ámbito universitario y cumple con tus metas de crecimiento profesional.</p>
                        <br>
                        <a href="/teacher_call" class="button big">Ver más</a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="middle">
                        <i class="icon featured alt fa-book"></i>
                        <header>
                            <h2>Revistas científicas</h2>
                        </header>
                        <p>Ahorra tiempo conociendo las revistas científicas que a la fecha reciben artículos de tu área de interés.</p>
                        <br>
                        <a href="/scientific_magazine" class="button alt big">Ver más</a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="last">
                        <i class="icon featured alt2 fa-bullhorn"></i>
                        <header>
                            <h2>Eventos académicos</h2>
                        </header>
                        <p>Encuentra congresos, seminarios, conferencias y demás eventos académicos de tu interés para capacitación o presentación de tus resultados de investigación.</p>
                        <br>
                        <a href="/academic_event" class="button alt2 big">Ver más</a>
                    </section>
                </div>
            </div>
        </section>

    </div>
</div>
@stop