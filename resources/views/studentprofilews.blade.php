<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- css search bar -->
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

        body {
            background-color: #fff;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        .height {
            height: 100vh;
        }


        .search {
            position: relative;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);

        }

        .search input {

            height: 60px;
            text-indent: 25px;
            border: 2px solid #d6d4d4;


        }


        .search input:focus {

            box-shadow: none;
            border: 2px solid blue;


        }

        .search .fa-search {

            position: absolute;
            top: 9px;
            left: 16px;

        }

        .search button {

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
            border-radius: 5px;
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

        .fourteen-400 {
            font-family: 'Roboto';
            font-size: 14px;
            font-weight: 400;
        }

        .thirteen {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 100%;
        }

        .deletebutton img {
            position: fixed;
            width: 52px;
            height: 52px;
            right: 15px;
            bottom: 60px;
        }

        .gambarprofilstudent {
            width: 77.25px;
            height: 78.93px;
        }

    </style>
</head>

<body>

    <div class="container">
        {{-- <div>
            <a href="#" style="color:black;" class=""> <img src="/gambar/Arrow 1.png" alt=""> <span
                    class="fourteen-400"> Back to Dashboard </span></a>
        </div> --}}



        <div class="row  d-flex justify-content-center align-items-start">

            <div class="col-md-8">

                {{-- <div class="search">
                    <i class="fa fa-search"></i>
                    <input style="border: 1px solid #B4B4B4; height: 33px;" type="text" class="form-control"
                        placeholder="Search">

                </div> --}}

            </div>

        </div>

        <div class="  " style="; margin-top: 24px; border-bottom: 1px solid #B4B4B4;">
            <div class="row">

                <div class="col-3 ">
                    <img src="/gambar/profileicon.png" width="77.25" height="78.93" style="">
                </div>

                <div class="col-7 " width="200"style="margin-top:19px;">
                    <h1 class="thirteen">STUDENT NAME</h2>
                        <h3 class="twelve">email@integra</h3>
                </div>

                <div class="col-2 " >
                    <div class="menubutton text-end pt-2" style="margin-top:3px;">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="/login" style="margin-right: 15px">Log Out</a>
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

        <div class="container " style="; margin-top: 24px; border-bottom: 1px solid #B4B4B4;">
            <div class="row  px-3 justify-content-between">


                <div class="col-9 align-self-center">
                    <h1 class="thirteen">MY PROFILE</h2>
                </div>
            </div>
            <div class="row  px-3 justify-content-between " style="margin-bottom: 15px">

                <a href="#" class="btn btn-success col" style="border-radius: 50px; background-color: #023880; width: 150px;
                height: 36px; font-family: 'Roboto'; font-size: 16px; margin-right:25px">
                    <p class="fourteen" style="align-self-center">History</p>
                </a>
                <a href="#" class="btn col" style="border-radius: 50px; width: 150px;
                height: 36px; font-family: 'Roboto'; font-size: 16px;margin-right:25px">
                    <p class="fourteen" style="align-self-center ">Profile Detail</p>
                </a>

            </div>
        </div>

        <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 24px;">
            <div class="row  px-3 justify-content-between">

                <div class="col-1 align-self-center">
                    <img src="/gambar/Vector.png" alt="">

                </div>

                <div class="col-9">
                    <a class="twelve px-0" href="">Job Offer Category</a>
                    <h2 class="fourteen">Job Name</h2>
                    <h3 class="twelve">Company Name</h3>
                    <div class="d-flex align-self-bottom">
                        <h4 class="twelve greyfont mb-0">Regist by</h4>
                        <p class="twelve ms-4 mb-0">DD-MM-YYY</p>
                    </div>


                    <div class="d-flex ">
                        <h4 class="twelve greyfont">Job Offer on</h4>
                        <p class="twelve ms-2">DD-MM-YYY</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 13.95px;">
            <div class="row  px-3 justify-content-between">

                <div class="col-1 align-self-center">
                    <img src="/gambar/Vector.png" alt="">

                </div>

                <div class="col-9">
                    <a class="twelve px-0" href="">Job Offer Category</a>
                    <h2 class="fourteen">Job Name</h2>
                    <h3 class="twelve">Company Name</h3>
                    <div class="d-flex align-self-bottom">
                        <h4 class="twelve greyfont mb-0">Regist by</h4>
                        <p class="twelve ms-4 mb-0">DD-MM-YYY</p>
                    </div>


                    <div class="d-flex ">
                        <h4 class="twelve greyfont">Job Offer on</h4>
                        <p class="twelve ms-2">DD-MM-YYY</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 13.95px;">
            <div class="row  px-3 justify-content-between">

                <div class="col-1 align-self-center">
                    <img src="/gambar/Vector.png" alt="">

                </div>

                <div class="col-9">
                    <a class="twelve px-0" href="">Job Offer Category</a>
                    <h2 class="fourteen">Job Name</h2>
                    <h3 class="twelve">Company Name</h3>
                    <div class="d-flex align-self-bottom">
                        <h4 class="twelve greyfont mb-0">Regist by</h4>
                        <p class="twelve ms-4 mb-0">DD-MM-YYY</p>
                    </div>


                    <div class="d-flex ">
                        <h4 class="twelve greyfont">Job Offer on</h4>
                        <p class="twelve ms-2">DD-MM-YYY</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 13.95px;">
            <div class="row  px-3 justify-content-between">

                <div class="col-1 align-self-center">
                    <img src="/gambar/Vector.png" alt="">

                </div>

                <div class="col-9">
                    <a class="twelve px-0" href="">Job Offer Category</a>
                    <h2 class="fourteen">Job Name</h2>
                    <h3 class="twelve">Company Name</h3>
                    <div class="d-flex align-self-bottom">
                        <h4 class="twelve greyfont mb-0">Regist by</h4>
                        <p class="twelve ms-4 mb-0">DD-MM-YYY</p>
                    </div>


                    <div class="d-flex ">
                        <h4 class="twelve greyfont">Job Offer on</h4>
                        <p class="twelve ms-2">DD-MM-YYY</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="deletebutton"><img src="/gambar/deletebutton.png" alt=""></div>

        <!-- Bottom Navbar -->
        <nav class="navbar navbar-custom  navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="/wishlist" class="nav-link text-center" style="height:48px !important;">
                        <img src="/gambar/whiteheart.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/studentDashboard" class="nav-link text-center">
                        <img src="/gambar/home.png" alt="">
                    </a>
                </li>
                <li class="nav-item dropup">
                    <a href="/studentprofilews" class="nav-link text-center" style="height:48px !important;">
                        <img src="/gambar/profile.png" alt="">
                    </a>

                </li>
            </ul>
        </nav>
    </div>





</body>

</html>
