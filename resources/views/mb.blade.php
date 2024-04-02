<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* Prevent scrolling */
  }

  .centered-div {
    width: 100vw; /* 100% of viewport width */
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .content {
    overflow:hidden;
    width: 80%; /* Adjust this value as needed */
    max-width: 350px; /* Adjust this value as needed */
    height: 100%;
    border: 1px solid black;
    position: relative; /* Added for absolute positioning */
    background: linear-gradient(to bottom, #E6E6FA 50%,#00008B 50%);
  }
  
  .circle-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    position: relative; /* Change fixed to relative */
    top: 5px;
    left: -40%; /* Use percentage value for left margin */
   
    z-index: 3; /* Increase the z-index to ensure it's above other elements */
}


  .triangle {
    width: 0;
    height: 0;
    border-left: 87px solid transparent;
    border-right: 87px solid transparent;
    border-top: 150px solid #E6E6FA; /* Adjust color and size as needed */
    margin-bottom: 171px;
  }

  .rectangles {
    width: 80%; /* Adjust this value as needed */
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: center;
  }
  
  /* Custom styles for modal */
  .modal-content {
    width: 80%; /* Adjust this value as needed */
    max-width: 350px; /* Adjust this value as needed */
    margin: auto;
	margin-top: 150px;
  }
::-webkit-scrollbar {
    display: none;
}
.circle-img:hover {
    transform: scale(1.1); /* Increase the size on hover */
    transition: transform 0.3s ease; /* Add smooth transition */
    cursor: pointer; /* Change cursor to pointer on hover */
  }
</style>
</head>
<body>
<div class="centered-div">
  <div class="content">
    <div class="rectangles">
      <div class="triangle"></div>
      <div class="triangle"></div>
    </div>
    <div class="circle-img mx-auto mb-3" id="circle-img" data-toggle="popover">
      <img src="https://cdn-icons-png.freepik.com/512/552/552721.png?ga=GA1.2.1745870953.1711975251&" class="img-fluid" alt="Profile Picture">
    </div>
	
	  <div class ="walletbalance" style =" 
  width: 50%;
  height: 50px;
  position: fixed;
  align-items:center;
  margin-top: 80px;
   margin-left: 90px;
  margin-right: auto;
  " >
   <h1 style ="margin-left: 10px;" > <img style = "width: 40px; height: 40px; margin-bottom: 13px; margin-right: 8px;" src ="https://cdn-icons-png.freepik.com/512/6897/6897755.png?ga=GA1.1.1745870953.1711975251&">500 </h1>
	</div>  <!-- walletbalanceend -->
	
	<div class ="displayedpurchases" style =" position: fixed;  height: 200px; width: 220px;margin-left: 65px;
  margin-right: auto; margin-top: 170px; display: flex; justify-content: center; /* align item horizontally */
        align-items: center; flex-direction: column;" >
  
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 200px; background: #36454F; ">
  new purchase
  </button>
  </div>
  
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 200px; background: #36454F; ">
  new purchase
  </button>
  </div>
   <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 200px; background: #36454F; ">
  new purchase
  </button>
  </div>
  
  </div>  <!--displayedpurcahsesend -->

  <div style="position: fixed; width: 200px; height: 45px; margin-left: 75px; margin-right: auto; bottom: 90px; display: flex; justify-content: center; align-items: center; background: #36454F; border: 1px solid white;">
    <a href="mbTransact" style="text-decoration: none; color: white; font-size: 18px; cursor: pointer; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">Transaction History</a>
</div>

  </div> <!--container end -->
  
  
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Purchased Items</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  
	  
	<div style="display: flex; justify-content: space-between;">
    <p>Coke</p>
    <p>20</p>
    </div>
	
	<div style="display: flex; justify-content: space-between;">
    <p>Spaghetti</p>
    <p>75</p>
    </div>
	
	<div style="display: flex; justify-content: space-between;">
    <p>Cobra</p>
    <p>25</p>
    </div>
	
	<div style="display: flex; justify-content: space-between;">
    <p>Tempura</p>
    <p>30</p>
    </div>
	 
	 
	 
	 <hr>  
	 <div style="display: flex; justify-content: space-between;">
    <h1>Total</h1>
    <h1>150</h1>
    </div>
	 


      </div>
      
    </div>
  </div>
</div>
  
  
  
  <!-- Hidden Popover Content -->
  <div id="popover-content" class="d-none">
    <a href="login">LOGOUT</a><br>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Initialize Popover -->
  <script>
    $(document).ready(function(){
      $('#circle-img').popover({
        content: function() {
          return $('#popover-content').html();
        },
        html: true
      });
    });
  </script>
</div>
</body>
</html>
