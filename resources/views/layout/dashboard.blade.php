<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
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
    <div class="g1" style="background: white;">
        <ul class="ulvnavbar" style ="  display: inline-block;" >
            <li class="vnavbar"><a class="sidebar" href="dashboard"><img src ="{{asset('assets/images/burger.png')}}" style ="position: relative; left: -8px; top: -2px; width: 25px; height: 25px;  display: inline-block;"> Foods</a></li>
            <li class="vnavbar"><a href="ctdrinks"><img src ="{{asset('assets/images/soda.png')}}" style ="position: relative; left: -8px; top: -2px; width: 25px; height: 25px; display: inline-block;"> Drinks</a></li>
            <li class="vnavbar"><a href="ctchips"><img src ="{{asset('assets/images/chips.png')}}" style ="position: relative; left: -8px; top: -2px; width: 25px; height: 25px; display: inline-block;"> Chips</a></li>
            <a href="login"> <img src ="{{asset('assets/images/poweroff.png')}}" style ="width: 60px; height: 60px; position: fixed; bottom: 40px; left: 40px;"> </a>
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
                <!-- Table body content goes here -->
            </tbody>
        </table>

        <div class="checkout">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ConfirmationModal" style="position: fixed; bottom: 50px; right: 80px;">
                Purchase
            </button>
            <p style="color: white; text-align: center; margin-top: 4px;"><b>Purchase</b></p>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container d-flex justify-content-center">
                    <form id="purchaseForm" action="{{ route('products.store') }}" method="post" style="width:50vw; min-width:300px;">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Student ID:</label>
                                <input type="text" class="form-control" name="studentid" placeholder="2020-XXXXX" id="studentid" maxlength ="10">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="showSecondModal()">Verify</button>
            </div>
        </div>
    </div>
</div>

<!-- Second Modal -->
<div class="modal fade" id="secondModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>Username: Moses</h1>
                <h2>Balance: 99999999</h2>
                <h3>Total Cost: 8700</h2>
                <button type="button" class="btn btn-primary" onclick="showThirdModal()">Confirm Purchase</button>
            </div>
        </div>
    </div>
</div>

<!-- Third Modal -->
<div class="modal fade" id="thirdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Complete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
                <h3>Purchase Complete</h2>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function showSecondModal() {
      
        $('#ConfirmationModal').modal('hide');
        $('#secondModal').modal('show');
    }

    function showThirdModal() {
       
        $('#secondModal').modal('hide');
        $('#thirdModal').modal('show');
    }

 
</script>
<script>
var inputBox = document.getElementById("studentid");

inputBox.addEventListener("input", function() {
  inputBox.value = inputBox.value.replace(/[^\d-]|-(?=.*-)/g, "").slice(0, 10);
});
</script>
</body>
</html>
