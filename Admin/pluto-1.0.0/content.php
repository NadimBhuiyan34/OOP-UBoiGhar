<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store/include/config.php");
if(isset($_POST['submit']))
{
    $bannertitle=$_POST['bannertitle'];
    $bannercaption=$_POST['bannercaption'];
    $bannerimage=$_FILES['bannerimage'];
    $image_name=$bannerimage['name'];
    $image_tmp_name=$bannerimage['tmp_name'];
    $qur= "INSERT INTO carousel ( `image`, `CarouselTitle`, `CarouselCaption`) VALUES ( ' $image_name', '$bannertitle', '  $bannercaption')";
    $result=mysqli_query($con,$qur);
    if ($result) {
         echo "Inserted";
      }
      else {
        echo "Not inserted";
      }
      if(!empty( $image_name))
      {
          $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store/include/images/banner/";
          move_uploaded_file ( $image_tmp_name,$loc.$image_name);
      }
      else
      {
          echo "your file is empty";
      }

 
    

}


?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ADMIN|UBoiGhar</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/color_2.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->


      <style>

html {
  background: #282828;
  text-align: center;
  font-size: 10px;
}

body {
  margin: 0;
  font-size: 2rem;
  display: flex;
  flex: 1;
  min-height: 100vh;
  align-items: center;
}

 
      </style>
   </head>
   <body class="">
   <div class="container w-50 card py-2">
     <div class="card-header">
     <h4 class="center">Insert Slider</h4>
     </div>
   <form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 ">
    <label for="CarouselTitle" class="form-label">Banner Title</label>
    <input type="text" class="form-control" id="CarouselTitle" name="bannertitle" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Caption</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="bannercaption" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="bannerimage" required>
  </div>
   
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>
         
   
  
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style2.js"></script>
      <script>src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"</script>
   </body>
</html>