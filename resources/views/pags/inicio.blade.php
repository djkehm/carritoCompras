@extends('master')

@section('contenido')
<script src="https://kit.fontawesome.com/6358d70998.js" crossorigin="anonymous"></script>
<div class="container-fixed">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="5000">

                    <div class="contenedor-imagen">
                        <div class ="contenedor-imagen-abajo">
                            <img src="{{asset('images/banner/1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        
                    </div>
                      
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <div class="contenedor-imagen">
                        <div class ="contenedor-imagen-abajo">
                            <img src="{{asset('images/banner/2.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        
                    </div>
                </div>
                <div class="carousel-item">
                <div class="contenedor-imagen">
                        <div class ="contenedor-imagen-abajo">
                            <img src="{{asset('images/banner/3.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--<span class="visually-hidden">Previous</span>-->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--<span class="visually-hidden">Next</span>-->
            </button>
        </div>

        <div class="row p-5">
            <div class="row p-5 bg-white opacity-75 rounded border">
                <!--
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 fixed">
                                <img src="{{asset('images/card/C1.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Estilo de vida</h5>
                                    <p class="card-text">Las zapatillas que usas en tus outfit de lifestyle</p>
                                    <p class="card-text"><small class="text-body-secondary">Ver zapatillas</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                        <div class="p-1">
                            <div class="p-1">
                                
                            </div>
                            <div id="carouselExample" class="carousel slide bg">
                                <div class="carousel-inner m-0">
                                    <div class="carousel-item active">
                                        <div class="row p-5 m-5">
                                            <div class="card-wrapper"> 
                                        
                                                <div class="card" style="width: 25rem;">
                                                    <img src="{{asset('images/card/C1.png')}}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text boton2">Traemos una colección de las zapatillas tendencia en el vestir urbano, con lindos modelos y buenos precios.</p>
                                                        <a href="#" class="boton2">Revisar</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card-wrapper">
                                            

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card-wrapper">

                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev swiper-button-next" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
</div>





                        </div>
                </div>
            </div>
        </div>
</div>


@endsection