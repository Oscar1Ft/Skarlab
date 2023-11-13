
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Título de la página</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Additional CSS Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');

        header {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header img {
            margin-right: 20px;
        }

        html, body {
            height: 100%;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(
                200deg,
                rgba(0, 59, 200, 0.7), 
                rgba(20, 120, 64, 0.7) 
            ), url(https://i0.wp.com/hipertextual.com/wp-content/uploads/2017/03/color-degradado-fondos-degradados-multicolor-51200.jpg?w=1560&ssl=1);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .bg-body-tertiary {
            --bs-bg-opacity: 35%;
            background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity))!important;
        }
    </style>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
    <img src="{{ asset('logo.png') }}" alt="Logo">
        <p style="color: white;">Nutriendo tu vida de manera orgánica</p>
    </header>
    @include('modulos.nav')

    @yield('contenido')

    @include('modulos.footer')
</body>
</html>