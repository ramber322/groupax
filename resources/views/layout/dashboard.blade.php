<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    
   
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
                        <a class="nav-link" href="users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.blade.php">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contain">
        <!-- CODEs -->
        <div class="g1" style="background: white;">
            <ul class="ulvnavbar" style ="  display: inline-block;" >
                <li class="vnavbar"><a class="sidebar" href="#Foods"><img src ="https://cdn-icons-png.freepik.com/512/685/685352.png?ga=GA1.1.255964930.1711099355&" style ="position: relative; left: -8px; top: -2px; width: 25px; height: 25px;  display: inline-block;"> Foods</a></li>
                <li class="vnavbar"><a href="#Drinks"><img src ="https://cdn-icons-png.freepik.com/512/1652/1652494.png?ga=GA1.1.255964930.1711099355&" style ="position: relative; left: -8px; top: -2px; width: 25px; height: 25px; display: inline-block;"> Drinks</a></li>
                <li class="vnavbar"><a href="#JunkFood"><img src ="https://cdn-icons-png.freepik.com/512/3050/3050251.png?ga=GA1.1.255964930.1711099355&" style ="position: relative; left: -8px; top: -2px; width: 25px; height: 25px; display: inline-block;"> Junkfood</a></li>
                
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

          
<div class = "checkout" style ="width:170px; height:35px; background: black; position: fixed; bottom: 50px; right: 40px;">
<a href = "#purchase">
<p style = "color: white; text-align: center; margin-top: 4px;" > <b> Purchase </b> </p>
</a>
</div>

        </div>
    </div>
</body>
</html>
