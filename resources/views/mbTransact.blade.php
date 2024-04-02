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
    z-index: 2; /* Ensure the circle image is above other elements */
    position: fixed;
    top: 5px; /* Adjust the top margin */
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
</style>
</head>
<body>
<div class="centered-div">

  <div class="content">
    <a href ="mb"> <img style ="position: fixed; width: 50px; height: 50px; margin-left: 5px;"src="https://cdn-icons-png.freepik.com/512/13742/13742341.png?ga=GA1.1.1730158141.1712038229&"> </a>
    <div class="rectangles">
      <div class="triangle"></div>
      <div class="triangle"></div>
    </div>
    
   
    
	
	
	
	<div class ="displayedpurchases" style =" position: fixed;  height: 200px; width: 220px;margin-left: 65px;
  margin-right: auto; margin-top: 170px; display: flex; justify-content: center; /* align item horizontally */
        align-items: center; flex-direction: column;" >
  
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 220px; background: #36454F; ">
  new balance +50..
  </button>
  </div>
  
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 220px; background: #36454F; ">
  you purchased..
  </button>
  </div>
   <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 220px; background: #36454F; ">
  your remaining balance..
  </button>
  </div>
  
  </div>  <!--displayedpurcahsesend -->



  </div> <!--container end -->
  
  
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Balance</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  
	  
	<div style="display: flex; justify-content: space-between;">
    <p>Amount</p>
    <p>50</p>
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
