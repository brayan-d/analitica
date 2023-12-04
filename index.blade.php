<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio | Analítica Solidaria</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      #text{
            margin-top: 20px;
            
        }

        #btnNosotros{
            margin-top: 20px;
            margin-left: 5%;
        }
b, strong {
    font-weight: bolder;
    font-family:Arial, Helvetica, sans-serif;
}
h5{
    font-family: 'judson' sans-serif;
    text-align: center;
}
.card-text-container {
    margin-top: 0;
    margin-bottom: 1rem;
    color: #008282;
    text-align: center;
    font-family: 'judson' sans-serif;
   
}
.card-text{
    font-size: 30px;
}

.card-text-container p {
    margin-top: 0.5rem; /* Espacio entre los párrafos */
}
@font-face {
  font-family: 'judson';
  src: url('font/Judson-Bold.ttf') format('truetype'); /* Ruta a tu archivo de fuente */
  /* Otras propiedades de la fuente, como weight y style, si son aplicables */
}
@font-face {
  font-family: 'inria';
  src: url('font/InriaSans-Bold.otf') format('opentype'); /* Ruta a tu archivo de fuente */
  /* Otras propiedades de la fuente, como weight y style, si son aplicables */
}
@font-face {
  font-family: 'inika';
  src: url('font/Inika-Regular.ttf') format('truetype'); /* Ruta a tu archivo de fuente */
  /* Otras propiedades de la fuente, como weight y style, si son aplicables */
}


.font-p {
    font-family: 'judson' sans-serif;
}

    </style>
</head>
<body>
    <!-- CABECERA -->
    
       @include('partials.navbar')
    
<!-- -->
@include('partials.cab')

<!-- carousel -->

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-left: 267px; width: 1530px;">
  <div class="carousel-indicators">
    <!-- Indicators here -->
  </div>
  <div class="carousel-inner">
    @foreach ($noticia as $key => $item)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
      <img src="{{ asset($item->image_noticia) }}" class="d-block w-100" style="max-height: 520px;" alt="..."> <!-- Ajusta max-height según tus necesidades -->
      <div class="carousel-caption" style="text-align: center; color: white; background-color: rgba(0, 0, 0, 0.5); font-family: 'inria';">
        <p class="font-p">Tu texto explicativo aquí.</p>
        <p class="font-p">Descripcion.</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



  
<!-- iconos -->  
<br>
<div class="container mt-4">
    <div class="row text-center">
        @foreach ($iconos as $icono)
            <div class="col-md-3">
                <div class="icon-box">
                    <!-- Coloca la imagen dinámica -->
                    <img src="{{ asset($icono->image_icono) }}" alt="{{ $icono->name_icono }}" class="img-fluid" style="height: 140px; width: 180px; margin-left:70px">
                    <br>
                    <br>
                    <a class="fas fa" style="color: #000; text-decoration: none; font-size: 20px; margin-left:70px; font-family: ui-rounded;" ><span>{{ $icono->name_icono }}</span></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- contenido -->

<br>
<div class="container mt-4">
    <div class="row">
        @foreach ($contenido as $contenido)
            <div class="col-md-6">
                <img src="{{ asset($contenido->image_contenido) }}" alt="{{ $contenido->titulo_contenido }}" class="img-fluid" alt="Imagen" height="500px" width="500px">
            </div>
            <div class="col-md-6" id="text">
                <a class="fas fa" style="color:RGB(0 130 130);text-decoration: none;font-size: 40px;" href="#"><span><b>{{ $contenido->titulo_contenido }}</b></span></a>
                <br><br>
                <h5 > {{ $contenido->texto_contenido }}
                       </h5>
                       <br>
    
                       <a href="#" class="btn btn-primary btn-lg btn-block" style="background-color: RGB(0, 130, 130); border: RGB(0, 130, 130);">
  <i class="fas fa-arrow-right"></i>
  <b>{{ $contenido->name_boton }}</b>
</a>

    
            </div>
        @endforeach
    </div>
</div>
<br>
<br>
<br>
<br>
<!-- Productos -->
<div class="fas fa">
    <h1 style="margin-left:840px; border:#000;">INFORMES</h1>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-14">
            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-lg-4">
                        <div class="card mb-3" style="border-radius: 30px;">
                            <img src="{{ asset($producto->image_path) }}" alt="{{ $producto->name }}"  style=" height: 250px; width: 103%; border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 0; border-bottom-right-radius: 0; margin-left: -4px;">
                                                                                            
                            <div class="card-body">
                                <h5 class="card-title" style="font-family:ui-rounded;font-size:16px;">{{ $producto->name }}</h5>
                                <div class="card-text-container">
                                    <p class="card-text" style="font-size:24px; font-family:judson;">{{ $producto->description }}</p>
                                    <p class="card-precio"><small class="text-muted" style="font-size:24px; font-family:ui-rounded; font-size:16px">Precio: {{ $producto->price }} COP</small></p>
                                    </div>

                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $producto->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $producto->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $producto->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $producto->image_path }}" id="img" name="img">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <div class="card-footer" style="background-color: white;">
                                    <div class="row">
                                     <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                        <h6 style="font-size: 17px; font-family: 'judson';"><i class="fa fa-shopping-cart" style="margin-right: 5px;"></i> Agregar al carrito</h6>
                                     </button>
                                    </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<!-- boletin -->
<br>
@include('footer.boletin')
<!-- footer -->
<br>
@include('footer.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

