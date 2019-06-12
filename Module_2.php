<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Module 1</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- Quick css-->
  <style>
    .color {
      color: black;
    }
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="Foto/logo-summa-welzijn.jpg" width="200" height="100">
      </div>
      <div class="list-group list-group-flush">
        <li data-toggle="collapse" data-target="#eenpunteen" class="list-group-item list-group-item-action bg-white">
          <a><i class="fa fa-globe fa-lg"></i> 1.1</a>
        </li>
        <ul class="sub-menu collapse" id="eenpunteen">
          <a href="#" id="theorie_1">Theorie</button><br>
            <a href="#">Opdrachten</a>
        </ul>

        <li data-toggle="collapse" data-target="#eenpunttwee" class="list-group-item list-group-item-action bg-white">
          <a><i class="fa fa-globe fa-lg"></i> 1.2</a>
        </li>
        <ul class="sub-menu collapse" id="eenpunttwee">
          <a href="#">Film/Video</a><br>
          <a href="#">Opdrachten</a>
        </ul>

        <li data-toggle="collapse" data-target="#eenpunt3" class="list-group-item list-group-item-action bg-white">
          <a><i class="fa fa-globe fa-lg"></i> 1.3</a>
        </li>
        <ul class="sub-menu collapse" id="eenpunt3">
          <a href="#">Film/Video</a><br>
          <a href="#">Opdrachten</a><br>
          <a href="#">Theorie</a><br>
          <a href="#">Film/Video</a>
        </ul>

        <li data-toggle="collapse" data-target="#eenpunt4" class="list-group-item list-group-item-action bg-white">
          <a><i class="fa fa-globe fa-lg"></i> 1.4</a>
        </li>
        <ul class="sub-menu collapse" id="eenpunt4">
          <a href="#">Praktijk Opdracht</a><br>
        </ul>
        </li>

        <li data-toggle="collapse" data-target="#eenpunt5" class="list-group-item list-group-item-action bg-white">
          <a><i class="fa fa-globe fa-lg"></i> 1.5</a>
        </li>
        <ul class="sub-menu collapse" id="eenpunt5">
          <a href="#">Theorie en Opdracht</a><br>
        </ul>
        </li>




      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button id="menu-toggle">&#9776; Toon Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link" href="../Project-pedagogisch/Home/index.html" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Home
              </a>
            </li>

            <li>
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Other
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../Project-pedagogisch/Home/index.html">Home</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Login.php">Uitloggen</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4" id="Module_1">Module 1</h1>
        <p id="module_1">
          <img src="Foto/Theorie_Lezen.jpg" width="100" height="75" />
          Theorie:
          <br>
          <div class="content-output"></div>
          <a class="dropdown-item" href="../Project-pedagogisch/Home/index.html">Home</a>
          <form action="" method="post" enctype="multipart/form-data">

              <input type="file" name="file" size="50" />
          
              <br />
          
              <input type="submit" value="Upload" />
          
          </form>
          <?php
            error_reporting(0);
            try {
              $targetfolder = "pdf/";
              $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
              
              if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
                echo"file uploaded";
              } else {
                echo "";
              }
            
              $pdf = $_FILES['file']['name'];

              #Upload van file
              if(!isset($pdf)) {
                  echo "No File Uploaded";
              } else {
                  echo "file has been uploaded";
              } 

              $file =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
              echo"<iframe width=90%; height=500px; src='pdf/".basename($file,".php").".pdf' ><iframe>";
            } catch (\Throwable $th) {
              console.log('upload error');
            }
          ?>
      </div>
      </p>

      <div class="invisible" id="makes">
        <h1 class="mt-4" id="1__1">1.1</h1>
        
        <h2>
         
        </h2>
        <p>
         
        </p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

    

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });


    $(document).ready(function () {
      $("#theorie_1").click(function () {
        $("#Module_1, #module_1").hide();
      });

      $("#theorie_1").click(function () {
        $("#makes").removeClass("invisible");
      });
    });
  </script>
  <script type="text/javascript">

    var input_textarea = document.querySelector('.content-input');
    var output_div = document.querySelector('.content-output');
    var save_button = document.querySelector('.save-button');

    save_button.addEventListener('click', updateOutput);

    output_div.textContent = localStorage.getItem('content');
    input_textarea.value = localStorage.getItem('content');

    function updateOutput() {
      localStorage.setItem('content', input_textarea.value);

      output_div.textContent = input_textarea.value;
    }

  </script>
</body>

</html>