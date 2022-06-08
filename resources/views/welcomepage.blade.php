<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/welcome.css" >
    <title>Welcome Page</title>
</head>
<style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #023880;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav a {
        padding: 8px 8px 8px 8px;
        text-decoration: none;
        font-size: 25px;
        color: #ffffff;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }

      </style>
<body>
  <div class="row">
    <div class="col-6">
      <img src="/gambar/pockits logo.png" alt="">
    </div>
  <div class="col-6" >
    <div class="menubutton text-end pt-2" style="margin-top:3px;">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#" style="margin-right: 15px">Contact Us</a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://127.0.0.1:8000/login" style="margin-right: 15px">Login</a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://127.0.0.1:8000/signup" style="margin-right: 15px">Sign Up</a>
          </div>
          <span style="font-size:30px;cursor:pointer;margin-right:29px;" onclick="openNav()"><img src="/gambar/Menu.png"> </span>
    <div class="col-2" style="margin-top:15px;">
        {{-- <div class="menu">
            <button class="btn btn-default">
            <img src="/gambar/Menu.png" alt="">
            </button>
         </div> --}}
    </div>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "180px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>
    </div>
</div>
  </div>

    </div>
    <div class="container bg-welcome">
        <div class="row text-center">
            <h1 class="text-dark">ALL YOUR EVENTS  IN A POCKET</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-2">

    </div>
    <div class="col-8">
        <p></p>
    </div>

    <div class="container bg-blue" >

    <div class="card">
        <div class="row justify-content-between text-center">
        <div class="col-4">
        <img src="/gambar/Star.png" alt="">
        <p>Check Out Highlights Event</p>
        </div>
        <div class="col-4">
        <img src="/gambar/bookmark-line.png" alt="">
        <p>Save Your Upcoming Event</p>
        </div>
        <div class="col-4">
        <img src="/gambar/upload-line.png" alt="">
        <p>Organizer? Register your Event</p>
        </div>
        </div>
        </div>
    </div>
    <div class="end">
        <div class="row">
        <div class="col-6">
        <img src="/gambar/pockits logo.png" alt="">
     </div>
        <div class="col-6" >
        <div align ="center">
          <p> CONTACT US</P>
          <img src="/gambar/instagram.png" alt="" class="me-1">

          <img src="/gambar/YouTube.png" alt="" class="me-1">
          <img src="/gambar/Linkedin.png" alt="" class="me-1">
      </div>
      </div>


    </div>
</body>
</html>
