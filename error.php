<?php 

   const back_url = "http://localhost/larava";

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
   <title>Page Not Found!</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="./public/css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="./public/Admin/style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="./public/Admin/css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="./public/Admin/css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="./public/Admin/css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="./public/Admin/css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="./public/Admin/css/custom.css" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="./public/Admin/js/semantic.min.css" />
</head>
<body class="inner_page error_404">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="error_page">
               <div class="center">
                  <div class="error_icon">
                     <img class="img-responsive" src="./public/Admin/images/layout_img/error.png" alt="#">
                  </div>
               </div>
               <br>
               <h3>PAGE NOT FOUND !</h3>
               <P>YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</P>
               <div class="center"><a class="main_bt" href="<?php echo back_url;?>">Go To Home Page</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
</body>
</html>