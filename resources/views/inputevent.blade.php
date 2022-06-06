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
    <title>Edit Event</title>
    <style>
         .form-input {
  width:336px;
  padding-left:20px;
  padding-right:20px;
  padding-bottom:20px;
  padding-top:20px;
  background:#023880;
  margin-top: 10px;

}
.form-input input {
  display:none;

}
.form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#023880;
  color:#fff;
  font-size:15px;
  font-family:"Open Sans",sans-serif;
  font-weight:300;
  border-radius:15px;
  cursor:pointer;
}

.form-input img {
  width:100%;
  display:none;

  margin-bottom:30px;
}
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
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
                <img src="/gambar/backbutton.png" alt="" style="margin-left: 19px; margin-top: 23px">
                </button>
            </div>
        </div>
    <div class="col-8">
        <p></p>
    </div>
    <div class="col-2">
        <div class="menubutton" >
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
<br>
<div class="form-input">
    <div class="preview">
      <img id="file-ip-1-preview">
    </div>
    <label for="file-ip-1">Upload Logo</label>
    <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
  </div>
  <script type="text/javascript">
    function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
  </script>
  <br>
    <div class="formstudent" style="margin-left: 28px; margin-right: 37px">
        <form action="/action_page.php">
            <label>Job name:</label>
            <input type="text" class="form-control mt-3 mb-3" placeholder="Input username">
            <label>Job category:</label>
            <input type="text" class="form-control mt-3" placeholder="Input your organization name">
            <div class="row">
            <div class="col-6">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Open recruitment:</label>
              <input type="date" class="form-control" id="email" placeholder="" name="email">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Closed recruitment:</label>
              <input type="date" class="form-control" id="email" placeholder="" name="email">
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-6">
            <div class="mb-3 mt-3">
              <p>Registration?</p>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3 mt-3">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                    <label class="form-check-label" for="radio1">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                    <label class="form-check-label" for="radio1">No</label>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-6">
            <div class="mb-3 mt-3">
              <label for="date" class="form-label">Start regist:</label>
              <input type="date" class="form-control" id="email" placeholder="" name="email">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3 mt-3">
              <label for="date" class="form-label">End regist:</label>
              <input type="date" class="form-control" id="email" placeholder="" name="email">
            </div>
        </div>
        </div>
        <label>Location:</label>
            <input type="text" class="form-control mt-3 mb-3" placeholder="Input your location">
          <div class="mb-3 mt-3">
                <label for="comment">Job description:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
              <div class="row">
                <div class="col-6">
                <div class="mb-3 mt-3">
                  <p>Requirement?</p>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 mt-3">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                        <label class="form-check-label" for="radio1">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                        <label class="form-check-label" for="radio1">No</label>
                </div>
                </div>
            </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="comment">Requirement:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
              <label>How to regist?</label>
              <input type="text" class="form-control mt-3 mb-3" placeholder="">
              <p style="bac"></p>
    <div class="button1" style="margin-left: 12px; margin-right: 22px;">
        <a href="#" class="btn btn-success" style="border-radius: 12px; background-color: #023880; width: 262px;
        height: 52px; font-family: 'Open Sans'; font-size: 18px;">
        <p style="margin-top: 5px;">Submit</p>
    </a>
    </div>
    </form>
    </div>

</div>
</body>
</html>