<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Material Seller</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
<style>
    .navbar {
      background-color: rgba(164, 207, 228, 0.984);
    }
  </style>
</head>

<body>
<div style="padding-left:90%;">

<?php
      session_start();
      ?>
</div>
  
   
  <div class="container-fluid">
    <!------------------------------------------- Navbar ------------------------------------------------>
    <nav class="navbar navbar-expand-lg " style="margin-top: 1%; padding: 1px;  border-radius: 2px;">
      <div class="container-fluid">
        <button style="width: 145px;" type="button" class="btn" data-bs-toggle="tooltip" title="MaterialSeller">
          <a class="navbar-brand" href="#">MaterialSeller</a></button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <button style="padding:1px ;" type="button" class="btn" data-bs-toggle="tooltip" title="Home">
                <a class="nav-link active" aria-current="page" href="construction_site.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path
                      d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                  </svg></a>
              </button>
            </li>
            <li class="nav-item">

              <button type="button" class="btn" data-bs-toggle="tooltip" title="About">
                <a class="nav-link active" href="about_us.php">About</a>
              </button>
            </li>
            <li class="nav-item">
              <button type="button" class="btn" data-bs-toggle="tooltip" title="Contact-us">
                <a class="nav-link active" href="contact_us.php">Contact</a>
              </button>
            </li>
            <!-- <li class="nav-item">
              <button type="button" class="btn" data-bs-toggle="tooltip" title="buy something">
                <a class="nav-link active" href="#">Buy</a>
              </button>
            </li> -->
            <li class="nav-item dropdown" style="padding-top: 8px ;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <abbr style="color: black;" class="nav-item active" href="#">Services</abbr>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#main_heading">Buy Material</a></li>
                <li><a class="dropdown-item" href="product_reg.php">Sell Material</a></li>

              </ul>
            </li>
          </ul>
          <?php error_reporting(0);
      session_start();
      if(isset($_SESSION['first_name'])){
        echo "Hi ". $_SESSION['first_name'];
       
      }
      ?>
          <!-- &emsp; -->
          <button type="button" class="btn" data-bs-toggle="tooltip" title="search something">
            <form class="d-flex" role="search" action="search.php" method="post">
              <input class="form-control me-2" type="search" placeholder="Search something" aria-label="Search" name="srch" required>
          </button>
          <input class="btn" style="border-color: black;" type="submit" value="Search"></button>
          </form>
        </div>
        &emsp;
      
        <button class="btn btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight" data-bs-toggle="tooltip">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
        </button>
      </div>
      </nav>
      
    <hr>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
      style="margin-top: 5%;margin-bottom: 5%;margin-right:1% ; border-radius: 4px;">
      <div class="offcanvas-header">
    

  <h4  id="offcanvasRightLabel">Account</h4>
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
        <center>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></center>
<?php error_reporting(0);
          session_start();
          $name=$_SESSION['first_name'];
          $l_name=$_SESSION['last_name'];
          $email=$_SESSION['email'];
          if(isset($_SESSION['first_name'])){
            echo "<div style='padding: 2%;padding-top:2px';>";
            echo "<center><div>";
            echo "$name ";
            echo "$l_name <br>";
            echo "$email";
            echo "</div></center>";
            echo "</div>";
            ?>
<br>
<br>

            <div class="container text-center">
  <div class="row g-2">
    <div class="col-6" >
    <a class='nav-link active btn' href='regd_pro.php'>
      <div  class="p-3 border bg-light" >Registerd Material </div>
    </a>
    </div>
    <div class="col-6">
    <a class='nav-link active btn' href='f_password.php'>
      <div class="p-3 border bg-light">Forgot password</div></a>
    </div>
    <div class="col-6" >
    <a class='nav-link active btn' href='product_reg.php'>
      <div  class="p-3 border bg-light" >Sell Material </div>
    </a>
    </div>
    <div class="col-6">
    <a class='nav-link active btn' href='#main_heading'>
      <div class="p-3 border bg-light">Buy Material</div></a>
    </div>
    <div class="col-6">
    <a class='nav-link active btn' href='construction_site.php'>
      <div class="p-3 border bg-light"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path
                      d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                  </svg></div></a>
    </div>
    <div class="col-6">
    <a class='nav-link active btn' href='logout.php'>
      <div class="p-3 border bg-light"><svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='red' class='bi bi-power' viewBox='0 0 16 16'>
            <path d='M7.5 1v7h1V1h-1z'/>
            <path d='M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z'/>
          </svg></div></a>
    </div>
  </div>
</div>
           <?php } 
          else{
            ?>
            <br>
            <div class="container text-center">
              <p>Please login</p>
  <div class="row g-2">
    <div class="col-6" >
    <a class='nav-link active btn' href='login.html'>
      <div  class="p-3 border bg-light" >Login </div>
    </a>
    </div>
    <div class="col-6">
    <a class='nav-link active btn' href='reg.html'>
      <div class="p-3 border bg-light">Register</div></a>
    </div>
    <center>

      <div class="col-6" >
        <a class='nav-link active btn' href='f_password.php'>
          <div  class="p-3 border bg-light" >Reset Password </div>
        </a>
      </div>
    </div>
  </center>
</div>
    </div>
    <?php } ?>
          </div>