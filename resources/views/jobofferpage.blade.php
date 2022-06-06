<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .nounderline{
        text-decoration: none;
    }

    .fourteen-400{
    font-family: 'Roboto';
    font-size: 14px;
    font-weight: 400;
    }

    .fourteen-700{
    font-family: 'Roboto';
    font-size: 14px;
    font-weight: 700;
    }

    .twelve-400{
    font-family: 'Roboto';
    font-size: 12px;
    font-weight: 400;
    }

    .greyfont {
    color: #B4B4B4;
    }

    .twelve {
    font-family: 'Roboto';
    font-size: 12px;
    font-weight: 400;

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
        <div class="row">
            <div style="margin-top: 20px;">
            <a href="#"  style="color:black; margin-left: 24px; " class="nounderline fourteen-400">  <img src="/gambar/Arrow 1.png" alt="">  <span> Back </span></a>
            </div>
        </div>

        <div class="row" style="margin-top: 20px; padding: 35px 70px;">
            <img src="/gambar/jobofferimg.png" width="222px" height="150px" alt="">
        </div>

        <p class="fourteen-700" style="text-align:center">{{$joboffer->namajoboffer}}</p>
        <p class="twelve-400" style="text-align:center">{{$joboffer->perusahaan->namaPerusahaan}}</p>

        <hr>

        <div class="d-flex align-self-bottom justify-content-end">
                <h4 class="twelve-400 greyfont mb-0">Regist by</h4>
                <p class="twelve ms-4 mb-0">{{$joboffer->tanggalPenerimaan}}</p>
            </div>


            <div class="d-flex justify-content-end">
                <h4 class="twelve greyfont">Job Offer on</h4>
                <p class="twelve-400 ms-2">{{$joboffer->tanggalPenutupan}}</p>
            </div>

            <h3 class="fourteen-700" style="text-align: center">Job Detail</h3>

            <p class="fourteen-400"style="text-align:center">{{$joboffer->deskripsi}}</p>


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
                    <a href="studentprofilews" class="nav-link text-center" style="height:48px !important;">
                        <img src="/gambar/profile.png" alt="">
                    </a>

                </li>
            </ul>
        </nav>


    </div>


</body>

</html>
