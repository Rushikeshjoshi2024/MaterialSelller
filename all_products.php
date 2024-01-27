<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All products</title>

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
  <div class="container-fluid">
    <!----------------------------------------- Navbar ------------------------------------------------>
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

            <li class="nav-item dropdown" style="padding-top: 8px ;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <abbr style="color: black;" class="nav-item active" href="#">Services</abbr>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="construction_site.php">Buy Material</a></li>
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
          <button type="button" class="btn" data-bs-toggle="tooltip" title="search something">
            <form class="d-flex" role="search" action="search.php" method="post">
              <input class="form-control me-2" type="search" placeholder="Search something" aria-label="Search" name="srch" required>
          </button>
          </form>
        </div>
        &emsp;
        <button class="btn btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight" data-bs-toggle="tooltip">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
      </div>
    </nav>

    <hr>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
      style="margin-top: 5%;margin-bottom: 5%;margin-right:1% ; border-radius: 4px;">
      <div class="offcanvas-header" style="background-color: rgba(164, 207, 228, 0.984);">


        <h5 class="offcanvas-title" id="offcanvasRightLabel">Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <br>
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
          $userid=$_SESSION[`user_id`];

          if(isset($_SESSION['first_name'])){
            echo "<div style='padding: 2%;padding-top:2px';>";
            echo "<center><div>";
            echo "$name ";
            echo "$l_name <br>";
            echo "$userid <br>";
            echo "$email";
            echo "</div></center>";
            echo "</div></center>";
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
    <a class='nav-link active btn' href='construction_site.php#main_heading'>
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
    <div style="padding-top:23%; padding-left:2%;">
<a href="termandcondition.html">
<p>Terms & Conditions</p></a> 
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
      <a class='nav-link active btn' href='login.php'>
        <div  class="p-3 border bg-light" >Login </div>
      </a>
      </div>
      <div class="col-6">
      <a class='nav-link active btn' href='reg.php'>
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
  <center><div style="padding-top:60%;">
<a href="termandcondition.html">
<p>Terms & Conditions</p></a>   </center>
</div>
      </div>
      <?php } 
    echo "</div>";
     
      
$conn = mysqli_connect('localhost', 'root', '', 'construction_site');  
if(!$conn) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}     
      
          $sql="SELECT * FROM `product_info`";
          $result = mysqli_query($conn, $sql);  
          $count = mysqli_num_rows($result); 
          ?>
      <?php
          while($row= mysqli_fetch_assoc($result))  {  
            if($count>0){
               $r= $row['Material name'];
               $fname= $row['First name'];
               $lname= $row['Last name'];
               $state= $row['State'];
               $city= $row['City'];
               $mquantity= $row['Material quantity'];
               $sprice= $row['Selling price'];
               $color= $row['Material color'];
              $mid=$row['Material_id'];
              $address=$row['Address'];
              $material_image=$row['Material photo'];
               ?>
      <div class="card mb-4" style="max-width: 100%; ">
        <div class="row g-1">
          <div class="col-md-4">
            <img src="image/<?=$material_image?>" class="img-fluid rounded-start" style="height: 280px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <style>
                table {
                  width: 100%;
                }

                th,
                td {
                  border: 1px solid black;
                  padding: 15px;
                }
              </style>
              <table style="width:100%; ">
                <tr>
                  <th>Material Name</th>
                  <th>Seller Name</th>
                  <th>State</th>
                  <th>city</th>
                </tr>
                <tr>
                  <td>
                    <?=$r?>
                  </td>
                  <td>
                    <?=$fname." ".$lname?>
                  </td>
                  <td>
                    <?=$state?>
                  </td>
                  <td>
                    <?=$city?>
                  </td>
                </tr>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>

                </tr>

                <tr>
                  <th>Seller address</th>
                  <th>Material quantity</th>
                  <th>selling price</th>
                  <th>Material color</th>
                </tr>
                <tr>
                  <td>
                    <?=$address?>
                  </td>
                  <td>
                    <?=$mquantity?>
                  </td>
                  <td>
                    <?=$sprice?>/unit
                  </td>
                  <td>
                    <?=$color?>
                  </td>
                </tr>
              </table>
              <br>
              <center>
                <?php
                echo "<a href='perticular_product.php?id=$mid' type='button' class='btn btn-outline-primary'>View </a>";
                ?>
              </center>
            </div>
          </div>
        </div>
      </div>
      <hr>


      <?php } }
             
                ?>

    </div>
    <!------------------------------------------- Footer ------------------------------------------------>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="construction_site.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact-us</a>
      </li>

      <li class="nav-item">
        <a href="#top" id="myBtn" title="Go to top">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-arrow-up"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
          </svg></a>
      </li>
    </ul>
    <hr>
    <ul class="nav justify-content">
      <li>
      <a> Copyright © 2022 MaterialSeller</a>
        <a style="padding-left: 1020px;">
        </a>
        <button type="button" class="btn" data-bs-toggle="tooltip" title="Facebook">
          <a href="https://www.facebook.com/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook"
              viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </a>
        </button>
        <button type="button" class="btn" data-bs-toggle="tooltip" title="Instagram">
          <a href="https://www.instagram.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram"
              viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg></a>
        </button>
        <button type="button" class="btn" data-bs-toggle="tooltip" title="Github">
          <a href="https://www.github.com/login" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github"
              viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg></a>
        </button>
        <button type="button" class="btn" data-bs-toggle="tooltip" title="Twitter">
          <a href="https://www.twitter.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter"
              viewBox="0 0 16 16">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg></a>
        </button>
        <button type="button" class="btn" data-bs-toggle="tooltip" title="e-mail">
          <a href="https://www.gmail.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at"
              viewBox="0 0 16 16">
              <path
                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
              <path
                d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
            </svg></a>
        </button>
      </li>
    </ul>
    <br>
  </div>
</body>

</html>