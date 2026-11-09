<x-app-layout>
    <!-- Cargar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-custom-dark { background-color: #1a1a1a; }
        .bg-hero { background-color: #5d5554; color: #ffffff; }
        .btn-yellow { background-color: #e2f238; color: #000; font-weight: bold; border-radius: 0; border: none; }
        .btn-yellow:hover { background-color: #cce026; color: #000; }
        .feature-card { background-color: #635b5a; min-height: 220px; }
        .feature-card-body { background-color: #ffffff; color: #000; padding: 15px; margin-top: auto; }
        
        .nav-link-custom {
            color: #d1d1d1 !important;
            border: none !important;
            background: transparent !important;
            font-size: 0.95rem;
            padding: 8px 14px !important;
            text-decoration: none;
        }
        .nav-link-custom.active, .nav-link-custom:hover {
            color: #ffffff !important;
            font-weight: bold;
        }

        /* Ocultar barra superior por defecto de Laravel Breeze */
        nav.bg-white, header.bg-white { display: none !important; }
    </style>

    <x-slot name="header"></x-slot>

    <div class="py-3 bg-light">
        <div class="container">
            
            <!-- BARRA DE NAVEGACIÓN PRINCIPAL (SIN CONTENEDOR COLLAPSE) -->
            <nav class="navbar navbar-dark bg-custom-dark px-4 py-3 rounded-top">
                <div class="container-fluid p-0 d-flex justify-content-between align-items-center">
                    
                    <!-- EXTREMO IZQUIERDO: LOGO Y USUARIO -->
                    <div class="d-flex align-items-center gap-4">
                        <a class="navbar-brand fw-bold mb-0 lh-sm" href="#">
                            MR.HOP<br><small class="fw-normal fs-6">Cerveza Artesanal</small>
                        </a>

                        <!-- Menú desplegable del usuario logeado -->
                        <div class="dropdown">
                            <button class="btn btn-outline-light dropdown-toggle border-0 text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">Cerrar sesión</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- EXTREMO DERECHO: SECCIONES VISIBLES (INICIO, HISTORIA, CARTA, AMBIENTE, RESEÑAS) -->
                    <div class="d-flex align-items-center">
                        <ul class="nav nav-tabs border-0 gap-1 align-items-center m-0 p-0" id="mainTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-link-custom active" id="inicio-tab" data-bs-toggle="tab" data-bs-target="#inicio-panel" type="button" role="tab">Inicio</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-link-custom" id="historia-tab" data-bs-toggle="tab" data-bs-target="#historia-panel" type="button" role="tab">Historia</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-link-custom" id="carta-tab" data-bs-toggle="tab" data-bs-target="#carta-panel" type="button" role="tab">Carta</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-link-custom" id="ambiente-tab" data-bs-toggle="tab" data-bs-target="#ambiente-panel" type="button" role="tab">Ambiente</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-link-custom" id="resenas-tab" data-bs-toggle="tab" data-bs-target="#resenas-panel" type="button" role="tab">Reseñas</button>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <!-- CONTENIDO DINÁMICO DE LAS PESTAÑAS -->
            <main class="bg-white p-4 rounded-bottom shadow-sm">
                <div class="tab-content" id="mainTabsContent">

                    <!-- PESTAÑA: INICIO -->
                    <div class="tab-pane fade show active" id="inicio-panel" role="tabpanel">
                        <div class="bg-hero text-center p-5 rounded-1 mb-5">
                            <h4 class="mb-3">Cerveza Artesanal desde 2015</h4>
                            <h1 class="display-3 fw-bold mb-4">MR.Hop</h1>
                            <p class="fs-5 mx-auto mb-4" style="max-width: 650px;">
                                Birra fresca recién tirada, lúpulos seleccionados y cocina honesta para acompañar. Un templo cervecero en el corazón de la ciudad.
                            </p>
                            <div class="d-flex justify-content-center gap-3">
                                <button class="btn btn-yellow px-4 py-2" onclick="document.getElementById('carta-tab').click()">Ver carta</button>
                            </div>
                        </div>

                        <h2 class="text-center mb-4">Lo que hace única a MR.Hop</h2>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="feature-card d-flex flex-column justify-content-end p-3 rounded">
                                    <div class="feature-card-body rounded-bottom">
                                        <h5 class="m-0">Birra Artesanal</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-card d-flex flex-column justify-content-end p-3 rounded">
                                    <div class="feature-card-body rounded-bottom">
                                        <h5 class="m-0">Lúpulos Premium</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-card d-flex flex-column justify-content-end p-3 rounded">
                                    <div class="feature-card-body rounded-bottom">
                                        <h5 class="m-0">Cocina Honesta</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PESTAÑA: HISTORIA -->
                    <div class="tab-pane fade py-4" id="historia-panel" role="tabpanel">
                        <div class="bg-light p-5 rounded shadow-sm text-center">
                            <h2 class="mb-4">Nuestra Historia</h2>
                            <p class="fs-5 mx-auto" style="max-width: 750px;">
                                Fundado en 2015, MR.Hop nació con la pasión de ofrecer la mejor cerveza artesanal local. Seleccionamos cuidadosamente nuestros ingredientes para brindarte sabores únicos y experiencias inolvidables en cada pinta.
                            </p>
                        </div>
                    </div>

                    <!-- PESTAÑA: CARTA -->
                    <div class="tab-pane fade py-4" id="carta-panel" role="tabpanel">
                        <h2 class="text-center mb-4">Nuestra Carta</h2>
                        <div class="row g-4 text-center">
                            <div class="col-md-4">
                                <div class="border p-4 rounded shadow-sm h-100">
                                    <h4 class="mb-3">Cervezas de la Casa</h4>
                                    <p>IPAs, Stout, Amber Ale y variedades artesanales de temporada.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border p-4 rounded shadow-sm h-100">
                                    <h4 class="mb-3">Para Acompañar</h4>
                                    <p>Hamburguesas artesanales, papas rústicas y platillos para compartir.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border p-4 rounded shadow-sm h-100">
                                    <h4 class="mb-3">Bebidas y Postres</h4>
                                    <p>Opciones sin alcohol y postres artesanales de la casa.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PESTAÑA: AMBIENTE -->
                    <div class="tab-pane fade py-4" id="ambiente-panel" role="tabpanel">
                        <div class="bg-light p-5 rounded shadow-sm text-center">
                            <h2 class="mb-4">El Ambiente</h2>
                            <p class="fs-5">Un espacio único con buena música, iluminación cálida y la mejor atención para compartir con tus amigos.</p>
                        </div>
                    </div>

                    <!-- PESTAÑA: RESEÑAS -->
                    <div class="tab-pane fade py-4" id="resenas-panel" role="tabpanel">
                        <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="p-4 border-start border-4 border-warning bg-light rounded">
                                    <p class="fs-5 mb-2">"Excelente lugar para tomar buenas cervezas. La atención de los meseros es impecable."</p>
                                    <small class="text-muted fw-bold">- Cliente Frecuente</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 border-start border-4 border-warning bg-light rounded">
                                    <p class="fs-5 mb-2">"La comida es deliciosa y la música ambienta muy bien la noche."</p>
                                    <small class="text-muted fw-bold">- Visitante Local</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>