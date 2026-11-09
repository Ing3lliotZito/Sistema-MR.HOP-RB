<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR.HOP - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffffff; font-family: sans-serif; }
        .bg-custom-dark { background-color: #1a1a1a; }
        .login-card { background-color: #dcdcdc; border-radius: 0; max-width: 480px; width: 100%; margin: 40px auto; padding: 40px; }
        .form-control { border-radius: 50rem; padding: 10px 20px; border: none; }
        .btn-black { background-color: #000000; color: #ffffff; border-radius: 50rem; padding: 10px; font-weight: bold; width: 100%; border: none; }
        .btn-black:hover { background-color: #222222; color: #ffffff; }
        .nav-link-custom { color: #d1d1d1 !important; text-decoration: none; font-size: 0.95rem; }
        .nav-link-custom:hover { color: #ffffff !important; }
    </style>
</head>
<body>

    <!-- NAVBAR SUPERIOR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-dark px-4 py-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold lh-sm" href="/">
                MR.HOP<br><small class="fw-normal fs-6">Cerveza Artesanal</small>
            </a>
            <div class="ms-auto">
                <ul class="navbar-nav flex-row gap-4 align-items-center">
                    <li><a class="nav-link-custom" href="/">Inicio</a></li>
                    <li><a class="nav-link-custom" href="/#historia">Historia</a></li>
                    <li><a class="nav-link-custom" href="/#carta">Carta</a></li>
                    <li><a class="nav-link-custom" href="/#ambiente">Ambiente</a></li>
                    <li><a class="nav-link-custom" href="/#resenas">Reseñas</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENEDOR LOGIN -->
    <div class="container d-flex justify-content-center align-items-center">
        <div class="login-card shadow-sm text-center">
            <h2 class="fw-bold mb-4" style="letter-spacing: 1px;">INICIAR SESIÓN</h2>

            <!-- Mensaje de estado -->
            <x-auth-session-status class="mb-3 text-success" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Correo Electrónico -->
                <div class="mb-3 text-start">
                    <label for="email" class="form-label ps-3 text-secondary small fw-bold">Correo Electronico</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1 ps-3" />
                </div>

                <!-- Contraseña -->
                <div class="mb-4 text-start">
                    <label for="password" class="form-label ps-3 text-secondary small fw-bold">Contraseña</label>
                    <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1 ps-3" />
                </div>

                <!-- Botón Entrar -->
                <button type="submit" class="btn btn-black mb-3">ENTRAR</button>

                <!-- Enlaces adicionales -->
                <div class="mt-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-dark text-decoration-none small d-block mb-2">
                            ¿Olvidaste tu Contraseña?
                        </a>
                    @endif
                    <a href="{{ route('register') }}" class="text-dark text-decoration-none small d-block">
                        ¿No tienes cuenta?, registrate aquí
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>