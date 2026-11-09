<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR.HOP - Crear Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffffff; font-family: sans-serif; }
        .bg-custom-dark { background-color: #1a1a1a; }
        .register-card { background-color: #dcdcdc; border-radius: 0; max-width: 550px; width: 100%; margin: 30px auto; padding: 35px; }
        .form-control { border-radius: 50rem; padding: 10px 20px; border: none; background-color: #ffffff; }
        .btn-black { background-color: #000000; color: #ffffff; border-radius: 50rem; padding: 10px; font-weight: bold; width: 100%; border: none; text-transform: uppercase; letter-spacing: 1px; }
        .btn-black:hover { background-color: #222222; color: #ffffff; }
        .nav-link-custom { color: #d1d1d1 !important; text-decoration: none; font-size: 0.95rem; }
        .nav-link-custom:hover { color: #ffffff !important; }
        label { font-size: 0.8rem; font-weight: bold; letter-spacing: 0.5px; color: #333; margin-bottom: 4px; }
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

    <!-- CONTENEDOR DE REGISTRO -->
    <div class="container d-flex justify-content-center align-items-center">
        <div class="register-card shadow-sm text-center">
            <h2 class="fw-bold mb-4" style="letter-spacing: 1px; font-family: sans-serif;">CREAR CUENTA</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre y Apellidos -->
                <div class="row mb-3">
                    <div class="col-md-6 text-start">
                        <label for="name" class="ps-3">NOMBRE</label>
                        <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus autocomplete="name">
                        <x-input-error :messages="$errors->get('name')" class="text-danger small mt-1 ps-3" />
                    </div>
                    <div class="col-md-6 text-start">
                        <label for="lastname" class="ps-3">APELLIDOS</label>
                        <input id="lastname" type="text" name="lastname" class="form-control" value="{{ old('lastname') }}" autocomplete="family-name">
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="mb-3 text-start">
                    <label for="email" class="ps-3">CORREO ELECTRONICO</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1 ps-3" />
                </div>

                <!-- Teléfono -->
                <div class="mb-3 text-start">
                    <label for="phone" class="ps-3">TELEFONO</label>
                    <input id="phone" type="text" name="phone" class="form-control" value="{{ old('phone') }}" autocomplete="tel">
                </div>

                <!-- Contraseña y Confirmar Contraseña -->
                <div class="row mb-4">
                    <div class="col-md-6 text-start">
                        <label for="password" class="ps-3">CONTRASEÑA</label>
                        <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1 ps-3" />
                    </div>
                    <div class="col-md-6 text-start">
                        <label for="password_confirmation" class="ps-3">CONFIRMAR CONTRASEÑA</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger small mt-1 ps-3" />
                    </div>
                </div>

                <!-- Botón Crear Cuenta -->
                <button type="submit" class="btn btn-black mb-3">Crear Cuenta</button>

                <!-- Enlace hacia Iniciar Sesión -->
                <div class="mt-2">
                    <a href="{{ route('login') }}" class="text-dark text-decoration-none small">
                        ¿Ya tienes cuenta? iniciar sesión
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>