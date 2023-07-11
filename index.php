<?php
session_start();
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Anggota Perpustakaan IIB Darmajaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="asset/style.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="asset\Logo Darmajaya_Horizontal 01.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="divider d-flex align-items-center my-4">
        <p class="lead fw-normal mb-0 me-3"><strong>Sistem Pendaftaran Anggota Perpustakaan IIB Darmajaya</strong></p>
        </div>
        <form method="post">
          <div class="divider d-flex align-items-center my-4">
          <p class="lead fw-normal mb-0 me-3">Login</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Nomor Pokok Mahasiswa</label>
            <input type="text" id="form3Example3" name="npm" class="form-control form-control-lg"
              placeholder="Enter a valid Nomor Pokok Mahasiswa" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button name= "login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="registration.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</section>
</body>
</html>