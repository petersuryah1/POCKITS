<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentDashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

<!-- css search bar -->
<style>

body{
 background-color:#fff;
 font-family: "Poppins", sans-serif;
 font-weight: 300;
}

.container {
    margin-top: 48px;
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
 top: 9px;
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

/* font  */
.twelve {
    font-family: 'Roboto';
    font-size: 12px;
    font-weight: 400;
}
.fourteen {
    font-family: 'Roboto';
    font-size: 14px;
    font-weight: 700;
}
.greyfont {
    color: #B4B4B4;
}
.fourteen-400{
    font-family: 'Roboto';
    font-size: 14px;
    font-weight: 400;
}

</style>
</head>

<body>

<div class="container">
   

    <div class="row justify-content-between">
        <div class="col-2">
            <img src="/gambar/profileicon.png" style="margin-right: 14px;">
        </div>
        
            <div class="col justify-content-beetwen mt-2 mb-3">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here.." name="search">
                <button class="btn btn-outline-secondary" type="submit"><img src="gambar\searchicon.png" style="width:15px; height:15px"></button>
                </div>           
            </div>
    </div>


    
    @foreach($joboffer as $job)
    <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 24px;">
    <div class="row  px-3 justify-content-between">
   
        <div class="col-1 align-self-center">
            <img src="/gambar/Vector.png" alt="">
           
        </div>

        <div class="col-9">
            <a class="twelve px-0" href="{{route('detailJoboffer', $job->id)}}">{{$job->kategori}}</a>
            <h2 class="fourteen">{{$job->namajoboffer}}</h2>
            <h3 class="twelve">{{$job->idPerusahaan}}</h3>
            <div class="d-flex align-self-bottom">
                <h4 class="twelve greyfont mb-0">Regist by</h4>
                <p class="twelve ms-4 mb-0">{{$job->tanggalPenerimaan}}</p>
            </div>

            
            <div class="d-flex ">
                <h4 class="twelve greyfont">Job Offer on</h4>
                <p class="twelve ms-2">{{$job->tanggalPenutupan}}</p>
            </div>
        </div>
        
    </div>
    </div>
    @endforeach

    
    
<!-- Bottom Navbar -->
<nav class="navbar navbar-custom  navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="#" class="nav-link text-center" style="height:48px !important;">
                <img src="/gambar/whiteheart.png" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="/gambar/home.png" alt="">
            </a>
        </li>
        <li class="nav-item dropup">
            <a href="#" class="nav-link text-center" style="height:48px !important;" >
                <img src="/gambar/profile.png" alt="">
            </a>
            
        </li>
    </ul>
</nav>
</div>




    
</body>

</html>