
<?php
session_start();

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION["username"])) {
    header("Location:login/index.php"); // Redirect to the login page
    exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php

  include("root/db.php");
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll profile" style="--bs-scroll-height: 100px;">
             
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img
                    src="../assets/img/favicon.png"
                    class="rounded-circle"
                    height="25"
                    alt="Black and White Portrait of a Man"
                    loading="lazy"
                  />
                </a>
                <ul class="dropdown-menu profile-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login/logout_action.php">Log out</a></li>
                </ul>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>
   

<div class="contents">
<div class="side-menu">
        <ul>
            <li style="background-color: #14b0a945;"><a href="index.php"><i class="fa-solid fa-image"></i> Gallery</a></li>
            <li><a href="blog.php"><i class="fa-regular fa-file-lines"></i> Blog</a></li>
        </ul>
    </div>
    <div class="content">

      <div>
        <!--......gallery.........-->
        <div class="container-fluid" style="background-color: var(--blue);color:white;padding:10px;margin-bottom:20px;"><h4> Upload Image</h4></div>
      <div style="box-shadow: inset 0px 0px 3px rgb(60 64 67 / 40%);background: #f3f3f3 ;padding: 10px;padding:20px;" id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                   <form action="gallery_add_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                     

                <div class="form-group">
                <label>image name</label>
                <input class="form-control" type="text" name="p_name">
                
            </div><br>

           <div class="form-group">
             <label>Image </label><br>
             <input type="file" name="img1" class="validate[required]">
              </div><br>
                                        <button type="submit" class="btn btn-default" style="background-color: #14b0a9;color:white;">Submit</button>
                  </div>
                    </div>
              </form>
                    

                </div>
              
				
 
            </div>
			
  
</div>
       <!--......gallery-end.........-->

      <div>
      <div class="container-fluid" style="background-color: var(--blue);color:white;padding:10px;margin-top: 75px;"><h4> Edit Gallery</h4></div>
      <?php
      include ("gallery_select.php");
      ?>
     </div>
 
    

    </div>




</div>


</body>
</html>
<?php 


 ?>
