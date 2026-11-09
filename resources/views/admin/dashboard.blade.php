<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - MR. HOP</title>
    <!-- Puedes usar Tailwind o estilos CSS propios -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar Superior -->
    <header class="bg-black text-white px-8 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <span class="text-xl font-bold tracking-wider">MR.HOP</span>
            <span class="text-xs text-amber-500 uppercase">Cerveza Artesanal</span>
        </div>
        <nav class="hidden md:flex space-x-6 text-sm">
            <a href="#" class="hover:text-amber-400">Inicio</a>
            <a href="#" class="hover:text-amber-400">Historia</a>
            <a href="#" class="hover:text-amber-400">Carta</a>
            <a href="#" class="hover:text-amber-400">Ambiente</a>
            <a href="#" class="hover:text-amber-400">Reseñas</a>
        </nav>
        <div class="flex items-center space-x-4">
            <span class="text-amber-400 font-semibold">Admin Principal</span>
            <!-- Botón de Salir (Logout de Breeze) -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-300 hover:text-white underline">Salir</button>
            </form>
        </div>
    </header>

    <!-- Alerta de Bienvenida -->
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 px-8 text-sm">
        Bienvenido, Admin!
    </div>

    <!-- Contenido Principal -->
    <main class="max-w-7xl mx-auto px-6 py-8">
        
        <div class="text-center mb-10">
            <h1 class="text-4xl font-serif tracking-wide text-gray-900">Panel Administración</h1>
            <p class="text-gray-600 mt-1">Bienvenido, {{ Auth::user()->name }}</p>
        </div>

        <!-- Tarjetas de Estadísticas (Grid Superior) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-gray-300 p-6 rounded shadow-sm text-center">
                <h3 class="text-lg font-medium text-gray-800">Pedidos Totales</h3>
                <p class="text-2xl font-bold mt-2">--</p>
            </div>
            <div class="bg-gray-300 p-6 rounded shadow-sm text-center">
                <h3 class="text-lg font-medium text-gray-800">Pendientes</h3>
                <p class="text-2xl font-bold mt-2">--</p>
            </div>
            <div class="bg-gray-300 p-6 rounded shadow-sm text-center">
                <h3 class="text-lg font-medium text-gray-800">En Progreso</h3>
                <p class="text-2xl font-bold mt-2">--</p>
            </div>
            <div class="bg-gray-300 p-6 rounded shadow-sm text-center">
                <h3 class="text-lg font-medium text-gray-800">Entregados Hoy</h3>
                <p class="text-2xl font-bold mt-2">--</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="bg-gray-300 p-6 rounded shadow-sm text-center">
                <h3 class="text-lg font-medium text-gray-800">Usuarios</h3>
                <p class="text-2xl font-bold mt-2">--</p>
            </div>
            <div class="bg-gray-300 p-6 rounded shadow-sm text-center">
                <h3 class="text-lg font-medium text-gray-800">Reseñas</h3>
                <p class="text-2xl font-bold mt-2">--</p>
            </div>
        </div>

        <!-- Tabla de Pedidos Recientes -->
        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-black text-amber-400 text-sm">
                        <th class="py-3 px-4">#</th>
                        <th class="py-3 px-4">Cliente</th>
                        <th class="py-3 px-4">Fecha</th>
                        <th class="py-3 px-4">Total</th>
                        <th class="py-3 px-4">Estado</th>
                        <th class="py-3 px-4">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-800">
                    <tr>
                        <td class="py-3 px-4 font-semibold">#2</td>
                        <td class="py-3 px-4">Miguel Angel</td>
                        <td class="py-3 px-4">15/06/2026</td>
                        <td class="py-3 px-4">$550</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-200 px-3 py-1 rounded text-sm">Entregado</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="bg-gray-200 hover:bg-gray-300 px-4 py-1 rounded text-sm border border-gray-400">Ver</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-semibold">#1</td>
                        <td class="py-3 px-4">Miguel Angel</td>
                        <td class="py-3 px-4">15/06/2026</td>
                        <td class="py-3 px-4">$410</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-200 px-3 py-1 rounded text-sm">Entregado</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="bg-gray-200 hover:bg-gray-300 px-4 py-1 rounded text-sm border border-gray-400">Ver</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</body>
</html>  