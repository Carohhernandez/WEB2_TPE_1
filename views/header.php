<html lang="en">
<head>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><title>Travel & Vacations</title>
</head>
<body>
    <nav class="mainNavbar navbar navbar-expand-md navbar-dark">
        <a href="<?php echo path?>" class="mainNavbar__brand navbar-brand"><h3 class="mb-0">Travel & Vacation</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navLinks">
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo path;?>explore.php">EXPLORE <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GUESTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
            </ul>
        </div>
    </nav>

