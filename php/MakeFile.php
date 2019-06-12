<?php
$FileName = $_POST['module'];

$myfile = fopen('../Modules/' . $FileName . '.php' , 'w') or die("Unable to open file!");
$content = "<?php require 'Module_File.php'; ?>";
fwrite($myfile, $content);
fclose($myfile);

header('Location: ../Admin.html');
?>


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