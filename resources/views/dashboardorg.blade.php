<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- css search bar -->
    <style>
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

        .card {
    padding: 21px 15px 21px 15px;
        }

        .nav-pills li button {
            color: black;
        }

        .nav-pills >.active {
            background-color: #003171;
            color: white;
        }

        .nav-pills >.active {
            background-color: #003171;
        }

        .nav-pills > button > .active {
            color:white;
        }




    </style>
</head>

<body>

<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src=
"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>



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

        <div class="" style="margin-top: 24px; border-bottom: 1px solid #B4B4B4;">
            <div class="row  px-3 justify-content-between">

                <div class="col-1 align-self-center gambarprofilstudent">
                    <img src="/gambar/profileicon.png" width="77.25" height="78.93" alt="">

                </div>

                <div class="col-9 align-self-center">
                    <h1 class="thirteen">ORGANIZATION XXXX</h2>
                        <h3 class="twelve">@Organization.email</h3>



                </div>
                <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">About</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>


        <div class="d-flex justify-content-start">
        <div >
               <p>Contact</p>
        </div>
        <div class="mx-4">
             <img src="/gambar/instagram.png" alt="">
        </div>
        <div >
             <img src="/gambar/Linkedin.png" alt="">

  </div>
  </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <h1>JOB OFFERS</h1>
                <a href="" style="color: black; text-decoration: underline;">View More</a>
            </div>
            <div>
                <a href="/inputjoboffer">
                <img src="/gambar/addbutton.png" alt="">
                </a>
            </div>
        </div>

        <div class="container " style="; margin-top: 24px; border-bottom: 1px solid #B4B4B4;">
            <div class="row  px-3 justify-content-between">


                <div class="col-9 align-self-center">
                    <h1 class="thirteen">MY PROFILE</h2>
                </div>
            </div>

            <ul class="nav nav-pills mb-3  d-sm-flex  justify-content-center " id="pills-tab" role="tablist">
                <li class=" btn active" role="presentation" style="border-radius: 50px;  width: 150px;
                height: 36px; font-family: 'Roboto'; font-size: 16px; ">
                <button class="fourteen active" style=" background-color:transparent; border: none;" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Past Offers</button>
                </li>
                <li class=" btn" style="border-radius: 50px; width: 150px;
                height: 36px; font-family: 'Roboto'; font-size: 16px;" role="presentation">
                <button class=" fourteen" style=" background-color:transparent; border: none;" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ongoing Offers</button>
                </li>
            </ul>


        </div>




        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 24px;">
            <div class="row  px-3 justify-content-between">



                <div class="col-1 align-self-center">
                    <img src="/gambar/Vector.png" alt="">

                </div>

                <div class="col-9">
                    <a class="twelve px-0" href="">Job Offer Category 1</a>
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
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="card  mx-auto " style="border: 1px solid #B4B4B4; margin-top: 13.95px;">
            <div class="row  px-3 justify-content-between">

                <div class="col-1 align-self-center">
                    <img src="/gambar/Vector.png" alt="">

                </div>
           
                <div class="col-9">
                    <a class="twelve px-0" href="">Job Offer Category 2</a>
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
        </div>
        </div>








        </div>

        <div class="deletebutton"><img src="/gambar/deletebutton.png" alt=""></div>

        <!-- Bottom Navbar -->
        <nav class="navbar navbar-custom  navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
            <ul class="navbar-nav nav-justified w-100">
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link text-center" style="height:48px !important;">
                        <img src="/gambar/whiteheart.png" alt="">
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <img src="/gambar/home.png" alt="">
                    </a>
                </li>
                {{-- <li class="nav-item dropup">
                    <a href="#" class="nav-link text-center" style="height:48px !important;">
                        <img src="/gambar/profile.png" alt="">
                    </a>

                </li> --}}
            </ul>
        </nav>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('ul.nav-pills > li')
                    .click(function (e) {
                $('ul.nav-pills > li')
                    .removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

</body>

</html>