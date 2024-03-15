<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    

    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.blade.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.blade.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.blade.php">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <table class="table text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Email</th>
          <th scope="col">Balance</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   @yield ('content')

</tbody>
</table>
</div>
</body>
</html>