<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

body {
	background-color: #00008B;
	
}
.flex-container-parent-left {
	display: flex; 
	
	width: 260px; 
	flex-direction: column; 
	flex-wrap: wrap; 
	position: fixed; 
	top: 0px; 
	left: 0px;
}

.flex-container-parent-right {
	display: flex; 
	
	width: 260px; 
	flex-direction: column; 
	flex-wrap: wrap; 
	position: fixed; 
	top: 0px; 
	right: 0px;
}


.flex-container-child {
	display: flex; 
	
	width: 260px; 
	flex-direction: row; flex-wrap: wrap
	
}

.boxnum1blue {
	width:60px;
	height:60px;
	background-color:#191970;
	border: 1px solid white;
}
.boxnum2white {
	width:60px;
	height:60px;
	background-color:	#7393B3	;
	border: 1px solid white;
}

.form-center {
	 width: 400px;
  height: 400px;
  position: absolute;
  top: 54%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
 
	
}

h1 {
  color: white; 
  
}

</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="flex-container-parent-left">


<div class="flex-container-child">
  <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   </div>
   
   <div class="flex-container-child">

   <div class = "boxnum2white"></div>
   <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   </div>
   
   <div class="flex-container-child">
   <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   </div>
  
   <div class="flex-container-child">
    <div class = "boxnum2white"></div>
   </div>


</div>



<div class="flex-container-parent-right">

<div class="flex-container-child" style="flex-direction: row-reverse">
  <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   </div>
   
   <div class="flex-container-child" style="flex-direction: row-reverse">

   <div class = "boxnum2white"></div>
   <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   </div>
   
   <div class="flex-container-child" style="flex-direction: row-reverse">
   <div class = "boxnum1blue"></div>
   <div class = "boxnum2white"></div>
   </div>
  
   <div class="flex-container-child" style="flex-direction: row-reverse">
    <div class = "boxnum2white"></div>
   </div>


</div>


<img src="{{asset('assets/images/spclogo.png')}}" style ="height: 150px; width: 150px;position: fixed;  top: 18%;
  left: 50%;
  transform: translate(-50%, -50%);">

<h1 style ="  position: fixed;  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);"> LOGIN </h1>



<div class ="form-center">

@yield ('content')
</div>



</body>
</html>
