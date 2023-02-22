<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.108.0">
        <title>accionAR : visualizador</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="css/sign-in.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">    
        <link href="css/sidebar.css" rel="stylesheet">
        <script src="js/funciones.js"></script>
        <!-- leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    </head>
    <body>
        <main class="d-flex flex-nowrap">
            <div class="b-example-divider b-example-vr"></div>
            <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
                <span class="fs-5 fw-semibold">accionAR</span>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Mapas Generales
                        </button>
                        <div class="collapse show" id="home-collapse">
                            <form  method="post">    
                            
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li>Provincias</li>
                            </ul>
                            </form>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Indicadores de salud
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Bajo peso por provincia</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Bajo peso por departamento</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Bajo peso por fracción y radio censal</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="b-example-divider b-example-vr"></div>
        </main>
        <div id="container">
            <div id="mapid"></div>
        </div>       
        <!-- mapa -->
        <script type="text/javascript" src="js/mapa.js"></script>
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="js/sidebar.js"></script>
    </body>
</html>