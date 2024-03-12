<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
   
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.blade.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prod.php">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contain">
        <!-- CODEs -->
        <div class="g1" style="background: white;">
            <ul class="ulvnavbar">
                <li class="vnavbar"><a href="#home">Foods</a></li>
                <li class="vnavbar"><a href="#news">Drinks</a></li>
                <li class="vnavbar"><a href="#contact">Junkfood</a></li>
                <li class="vnavbar"><a href="#about">About</a></li>
            </ul>
        </div>

        <div style="background: #36454F ; display:flex;flex-wrap:wrap;align-content:start;height:100vh;">
        @yield ('content')
        </div>

        <div class="g2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
               
                </tbody>
            </table>

          

        </div>
    </div>
</body>
</html>
