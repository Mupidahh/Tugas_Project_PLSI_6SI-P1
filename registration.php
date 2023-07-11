<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="asset/style_registration.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <img src="asset\Logo Darmajaya_Horizontal 01.png" alt="logo" width="400px">
            </a>
        </div>
    </nav>
</header>

<div class="container p-4 mt-4 mb-4" style="background-color: white;">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1 style="text-align: center;">Registrasi Keanggotaan Perpustakaan</h1>
            <p class="font-italic text-muted mb-0" style="text-align: center;">Institut Informatika dan Bisnis Darmajaya</p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form method="post" enctype="multipart/form-data">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                    <label for="namaDepan" class="form-label col-lg-12 mb-2"><strong>Nama Depan</strong></label>
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <img src="asset\icon\person_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="namaDepan" type="text" name="namaDepan" placeholder="Nama Depan" class="form-control bg-white border-left-0 border-md">
                    </div>
                    
                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                    <label for="namaBelakang" class="form-label col-lg-12 mb-2"><strong>Nama Belakang</strong></label>
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\person_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="namaBelakang" type="text" name="namaBelakang" placeholder="Nama Belakang" class="form-control bg-white border-left-0 border-md">
                    </div>
                    
                    <!-- NPM -->
                    <label for="npm" class="form-label col-lg-12 mb-2"><strong>Nomor Pokok Mahasiswa</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <img src="asset\icon\remember_me_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="npm" type="number" name="npm" placeholder="Nomor Pokok Mahasiswa" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Program Studi -->
                    <label for="prodi" class="form-label col-lg-12 mb-2"><strong>Program Studi</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\school_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt=""> 
                            </span>
                        </div>
                        <select id="prodi" name="prodi" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="">Program Studi</option>
                            <?php
                                $prodi = mysqli_query($conn,"SELECT * FROM prodi");
                                while($prodi_data=mysqli_fetch_array($prodi)){ 
                                    echo '<option value="' .$prodi_data['kd_prodi']. '"> '.$prodi_data['nama_prodi'].' </option>';
                                }; 
                            ?>
                        </select>
                    </div>

                    <!-- Tempat Lahir -->
                    <label for="tempatLahir" class="form-label col-lg-12 mb-2"><strong>Tempat Lahir</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <img src="asset\icon\local_hospital_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="tempatLahir" type="text" name="tempatLahir" placeholder="Tempat Lahir" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Tanggal Lahir -->
                    <label for="tanggalLahir" class="form-label col-lg-12 mb-2"><strong>Tanggal Lahir</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <img src="asset\icon\calendar_month_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="tanggalLahir" type="date" name="tanggalLahir" placeholder="Tanggal Lahir" class="form-control bg-white border-left-0 border-md">
                    </div>
                    
                    <!-- Status -->
                    <label for="status" class="form-label col-lg-12 mb-2"><strong>Status</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\checklist_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt=""> 
                            </span>
                        </div>
                        <select id="status" name="status" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="">Status</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Alumni">Alumni</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </div>

                     <!-- Alamat -->
                     <label for="alamat" class="form-label col-lg-12 mb-2"><strong>Alamat</strong></label>
                     <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\home_pin_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="alamat" type="text" name="alamat" placeholder="Alamat" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Phone Number -->
                    <label for="phoneNumber" class="form-label col-lg-12 mb-2"><strong>Nomor Telepon</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\call_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                            <option value="">+62</option>
                        </select>
                        <input id="phoneNumber" type="tel" name="phoneNumber" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                    </div>


                    <!-- Password -->
                    <label for="password" class="form-label col-lg-12 mb-2"><strong>Password</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\lock_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Photo -->
                    <label for="photo" class="form-label col-lg-12 mb-2"><strong>Upload Photo</strong></label>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <img src="asset\icon\image_FILL0_wght400_GRAD0_opsz48.svg" width="20px" alt="">
                            </span>
                        </div>
                        <input id="file" type="file" name="file" placeholder="Photo" class="form-control bg-white border-left-0 border-md">
                        
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-primary btn-block py-2" name="registration"> 
                            <span class="font-weight-bold">Create your account</span>
                        </button>                        
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Sudah Terdaftar? <a href="index.php" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</body>
<script>
  $(function () {
    $('input, select').on('focus', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
    });
    $('input, select').on('blur', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
    });
});
</script>
</html>