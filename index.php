<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herbs</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<style>
  /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
  <a class="navbar-brand me-5 fw-bold fs-3" href="index.php" style="font-family: cursive">Herbs-to-Home</a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">ABOUT</a>
        </li>
        
     
      
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>

<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#RegisterModal">
  Register
</button>

</div>
    </div>
  </div>
</nav>


<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control shadow-none">
  </div>

  <div class="mb-4 ">
    <label class="form-label">Password</label>
    <input type="password" class="form-control shadow-none">
  </div>
    <div class="d-flex align-items-center justify-content-between mb-2" >
      <button type="submit" class="btn btn-dark shadow-none">
        LOGIN
      </button>



      <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    
      </form>
      </div>
  </div>



  
</div>



<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note:- Your Details Must Match With Your ID</span>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Name</label>
    <input type="text" class="form-control shadow-none">

          </div>
          <div class="col-md-6 p-0">
          <label class="form-label">Email address</label>
    <input type="email" class="form-control shadow-none">

          </div>
          <div class="col-md-6 p-0">
          <label class="form-label">Phone Number</label>
    <input type="number" class="form-control shadow-none">

          </div>
          <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Picture</label>
          <input type="file " class="form-control shadow-none">

          </div>
          <div class="col-md-12 p-0">
          <label class="form-label">Address</label>
          <textarea class="form-control shadow-none" rows="1"></textarea>


          </div>

          <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Pincode</label>
          <input type="number" class="form-control shadow-none">

          </div>
          <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Date-of-Birth</label>
    <input type="date " class="form-control shadow-none">

          </div>
          <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Password</label>
    <input type="password " class="form-control shadow-none">

          </div>
          <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Confirm Password</label>
    <input type="password " class="form-control shadow-none">

          </div>
        </div>
      </div>

      <div class="text-center my-1">
      <button type="submit" class="btn btn-dark shadow-none">
        Register
      </button>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    
      </form>
      </div>
  </div>



  
</div>

<br><br><br>

<div class="container-fluid">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/3.png"class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/2.png"class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/1.png"class="w-100 d-block">
      </div>
    </div>
  </div>
</div>
<br><br><br>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PRODUCTS</h2>
<div class="container">
<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
  <div class="col-lg-3 col-md-3 text-center bg-white rounded shadow py-4 my-3">
    <img src="images/pickle.svg" width="200px">
    <br><br><br>
    <label class="form-label" style="font-family: cursive">Pickle</label>
  </div>
  <div class="col-lg-3 col-md-3 text-center bg-white rounded shadow py-4 my-3 pb-3">
    <img src="images/ofvv.svg" width="250px">
    <br><br><br>
    <label class="form-label" style="font-family: cursive">Organic Vegetable</label>
  </div>
  <div class="col-lg-3 col-md-3 text-center bg-white rounded shadow py-4 my-3">
    <img src="images/mas.svg" width="250px">
    <br><br><br>
    <label class="form-label" style="font-family: cursive">Spices</label>
  </div>
</div>
</div>


<div class="container">
<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
  <div class="col-lg-3 col-md-3 text-center bg-white rounded shadow py-4 my-3">
    <img src="images/hon.svg" width="200px">
    <br><br><br>
    <label class="form-label" style="font-family: cursive">Pure Honey</label>
  </div>
  <div class="col-lg-3 col-md-3 text-center bg-white rounded shadow py-4 my-3">
    <img src="images/wp.svg" width="200px">
    <br><br><br>
    <label class="form-label" style="font-family: cursive">Wood Pressed Oil</label>
  </div>
  <div class="col-lg-3 col-md-3 text-center bg-white rounded shadow py-4 my-3">
    <img src="images/dpq.svg" width="200px">
    <br><br><br>
    <label class="form-label" style="font-family: cursive">Dairy Products</label></div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",

      autoplay:
      {
        delay:1500,

      },

    });
  </script>

</body>
</html>