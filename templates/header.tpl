<html lang="en">
<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compatible view with Explorer 8-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Travel & Vacations</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="mainNavbar navbar navbar-dark d-flex align-items-center justify-content-between w-100">
        <a href="{BASE_URL}" class="mainNavbar__brand navbar-brand"><h3 class="mb-0">Travel & Vacation</h3></a>
        <a class="font-weight-bold text-light text-decoration-none mr-4" href="{if $login}logout{else}login{/if}">{if $login}Cerrar sesion{else}Iniciar sesion{/if}</a>
    </nav>
    <section id="showcase" class="d-flex align-items-center">
        <div class="container text-dark text-center">
            <h1 class="mb-4">Voyage Blog</h1>
            <h2 class="font-weight-light text-light">Experiencias compartidas para mejorar tu viaje</h2>
        </div>
    </section>