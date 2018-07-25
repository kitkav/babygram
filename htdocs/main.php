<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Main Page</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="BabyGram" href="BabyGram/index.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    body {
      background-size: cover;
      background-color: white;
      /*background-image: url('camera-3000953_640.png');*/
      background-image: url(../../BabyCollage2.png);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center center;
      /*background-size: 90%;*/
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <div class="main-title">
    <h1 style="font-family: Calibri; font-size: 4em;">BabyGram</h1>
    <i style="color:lightgrey;">"A baby is a wishing well. Everyone puts their hopes, their fears, their pasts, their two cents in."</i>
    <hr>
    </div>
    <div class="start-btns">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <div id="images"></div>
    <button class="button" onclick="document.getElementById('id03').style.display='block'"><i class="fa fa-upload"></i> Upload</button>
    <button class="button" onclick="document.getElementById('id04').style.display='block'"><i class="fa fa-list"></i> Browse</button>
    <button class="button" onclick="window.location.href='logout.php'"><i class=""></i> Log Out</button>
    </div>
  </div>

<!--Upload Modal-->
  <div id="id03" class="w3-modal w3-animate-opacity">
    <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          Upload
          <button onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">X</button>
        </h4>
      </div>
      <div class="modal-body">
        <p>Please choose a photo to upload.</p>
        <hr>
        <form action="upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
    </br>
			<input type="submit" value="Submit" name="submit">
		</form>
      </div>
    </div>
  </div>
  </div>

<!--Gallery Modal-->
  <div id="id04" class="w3-modal w3-animate-opacity">
    <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          Galleries
          <a onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">X</a>
        </h4>
      </div>
      <main class="main-content">
      <ul class="thumbnail-list">
      <div class="modal-body">
        <form onload="gallery.php" action="gallery.php">
          
          <input type="submit" value="View User Gallery" name="submit" >
        </form>
      </div>
      </ul>
      </main>
    </div>
  </div>
  </div>

<!--Scripts-->
  <script src="main.js" charset="utf-8"></script>
  <script src="browse.js" charset="utf-8"></script>
  <script src="gallery_modal.js" charset="utf-8"></script>
  <script src="gallery.js" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <!--footer-->
  <footer style="padding: 15px;">

    <div class="container" style="text-align:center;">
      <p style="display:inline;"><a href="about.html">About Us</a> | <a href="support.html">Support</a>
        | <a href="jobs.html">Jobs</a> | <a href="terms.html">Terms</a> | <a href="language.html">Language</a>
      </p>
        <p>
          <ul class="list-inline mb-0 " style="display:inline;">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/jackie/">
                <i class="fa fa-fw fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://plus.google.com/communities/113075194636442434542">
                <i class="fa fa-fw fa-google-plus"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/Cinnabon">
                <i class="fa fa-fw fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.linkedin.com/school/california-state-university-fullerton/">
                <i class="fa fa-fw fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </p>
      <p>&copy 2018 BabyGram</p>
    </div>
  </footer>
</body>

</html>
