<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >
    <link rel="icon" href="/favicon.ico" type="image/x-icon" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
      integrity="sha512-thoh2veB35ojlAhyYZC0eaztTAUhxLvSZlWrNtlV01njqs/UdY3421Jg7lX0Gq9SRdGVQeL8xeBp9x1IPyL1wQ=="
      crossorigin="anonymous"
    >
    <title>Sign Up</title>
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
        padding: 8px 8px 8px 32px;
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
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2">
        <div class="buttonback">
            <button class="btn btn-default">
                <a href="http://127.0.0.1:8000/">
            <img src="/gambar/backbutton.png" alt="" style="margin-left: 19px; margin-top: 23px">
        </a>
            </button>
        </div>
    </div>
    <div class="col-8">
        <p></p>
    </div>
    <div class="col-2">
    <div class="menubutton" style="margin-top: 8px; margin-right:25px; height:52px">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Contact Us</a>
          </div>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="/gambar/Menu.png"> </span>
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

    <div class="pockitsimg">
        <img src="/gambar/pockits gede.png" alt="" style="margin-left: 59px; margin-right: 60px; margin-top: 22px;">
    </div>

    <div class="word">
        <p style="font-family: 'Open Sans'; font-size: 28px; margin-left: 32px;">
            Sign up as
        </p>
    </div>

    <p style="bac"></p>
    <div class="button1" style="margin-left: 32px; margin-right: 22px;">
        <a href="http://127.0.0.1:8000/signupstudent" class="btn btn-success" style="border-radius: 12px; background-color: #023880; width: 262px;
        height: 52px; font-family: 'Open Sans'; font-size: 18px;">
        <p style="margin-top: 5px;">Student</p>
    </a>
    </div>
    <div class="button1" style="margin-left: 32px; margin-right: 22px; margin-top:47px">
        <a href="http://127.0.0.1:8000/signuporg" class="btn btn-success" style="border-radius: 12px; background-color: #023880; width: 262px;
        height: 52px; font-family: 'Open Sans'; font-size: 18px;">
        <p style="margin-top: 5px;">Organization</p>
    </a>
    </div>
</div>
</body>
</html>
