
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Título de la página</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery y JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

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
            background-attachment: fixed; /* Hace que el fondo sea estático */
            background-size: cover; /* Cubrir toda la pantalla sin repetir */
            background-position: center;
        }
</style>
</head>
<body>
    <header>
        <img src="\logo.png" alt="Logo">
        <p style="color: white;">Nutriendo tu vida de manera orgánica</p>
    </header>
    @include('modulos.nav')

    @yield('contenido')
    
</body>
</html>