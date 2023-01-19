<!DOCTYPE html>
<html>
<head>
<style> 


body {
    margin: 0;
    padding: 0;
}
/* Gradient background */
.bg-gradient {
    background: linear-gradient(to top, #cf414b, #e45756, #fc6c61, #fe6b5b, #f76150, #f55e4d); /* Specify colors from bottom to top */
    height: 100vh;
    width: 100%;
}


.Text {
    margin-top: 300px;
}


/* Logo */
.center-content img {
    margin-top: 100px;
    margin-left: 550px;
}



/* Soft line */
.soft-line {
    width: 18%; /* Adjust the width as desired */
    margin: 30px auto 0; /* Add some margin to the top and center the line */
    border: 0;
    height: 10px;
    background-color: white; /* Change the background color to white */
    border-radius: 10px;
}

/* BUTTON*//* BUTTON *//* BUTTON *//* BUTTON */

div[class*=box] {
	height: 33.33%;
	width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center;
}




.btn {
	line-height: 50px;
	height: 50px;
	text-align: center;
	width: 250px;
	cursor: pointer;
}


/* 
========================
      BUTTON 
========================
*/
.btn-three {
	color: #FFF;
	transition: all 0.5s;
	position: relative;
}
.btn-three::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	opacity: 0;
	transition: all 0.3s;
	border: 1px solid rgba(255,255,255,1.5);
	transform: scale(1.2,1.2);
}
.btn-three:hover::before {
	opacity: 1;
	transform: scale(1,1);
}
.btn-three::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	background-color: rgba(255,255,255,0.2);
	transition: all 0.3s;
}
.btn-three:hover::after {
	opacity: 0 ;
	transform: scale(0.5,0.5);
}


</style>
</head>

<body class="bg-gradient">



<div class="center-content">
    <img src="/images/logo-link.png" alt="My Image">
</div>

<div class="Text">
<div class="box-3">
  <div class="btn btn-three">
    <span>START</span>
  </div>
</div>
<hr class="soft-line">
</div>

</body>
</html>