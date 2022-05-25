<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- css search bar -->
<style>

body{
 background-color:#eee;
 font-family: "Poppins", sans-serif;
 font-weight: 300;
}

.height{
 height: 100vh;
}


.search{
position: relative;
box-shadow: 0 0 40px rgba(51, 51, 51, .1);
  
}

.search input{

 height: 60px;
 text-indent: 25px;
 border: 2px solid #d6d4d4;


}


.search input:focus{

 box-shadow: none;
 border: 2px solid blue;


}

.search .fa-search{

 position: absolute;
 top: 20px;
 left: 16px;

}

.search button{

 position: absolute;
 top: 5px;
 right: 5px;
 height: 50px;
 width: 110px;
 background: blue;

}
/* css back button */
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}

/* bottom navbar */
.navbar {
  border-radius : 5px;
}
.navbar-custom {
  background-color: #023880;
}
</style>
</head>

<body>

<div class="container">
    <div>
    <a href="#"  class="previous round">  <img src="/gambar/Arrow 1.png" alt=""> </a> Back to Dashboard
    </div>



    <div class="row  d-flex justify-content-center align-items-start">

        <div class="col-md-8">

            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control" placeholder="Search">
                
            </div>
            
        </div>
        
    </div>


    <div class="card mx-5">
    <div class="row px-5  justify-content-around">
   
        <div class="col-2">
            <img src="/gambar/Vector.png" alt="">
           
        </div>

        <div class="col-5">
            <a href="">Job Offer Category</a>
            <h2>Job Name</h2>
            <h3>Company Name</h3>

            <div class="d-flex">
                <h4>Regist by</h4>
                <p>DD-MM-YYY</p>
            </div>

            
            <div class="d-flex">
                <h4>Job Offer on></h4>
                <p>DD-MM-YYY</p>
            </div>
        </div>
        
</div>
</div>
    
<!-- Bottom Navbar -->
<nav class="navbar navbar-custom  navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="/gambar/whiteheart.png" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="/gambar/home.png" alt="">
            </a>
        </li>
        <li class="nav-item dropup">
            <a href="#" class="nav-link text-center" role="button" id="dropdownMenuProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <img src="/gambar/profile.png" alt="">
            </a>
            
        </li>
    </ul>
</nav>
</div>




    
</body>

</html>