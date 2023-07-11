<?php

$conn = mysqli_connect("localhost","root","","perpustakaan"); 


// Add Registration
if(isset($_POST['registration'])){
    $firstName = $_POST['namaDepan'];
    $lastName = $_POST['namaBelakang'];
    $fullName = $firstName . ' ' . $lastName;
    
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $status = $_POST['status'];
    $alamat = $_POST['alamat'];
    $phoneNumber = '+62' + $_POST['phoneNumber'];
    $password = $_POST['password'];

    // Photo Upload
    $fileName = $_FILES['file']['name'];

    $location = "photo/".$fileName;
    move_uploaded_file($_FILES['file']['tmp_name'],$location);
    $photo = $location;
    
    $regist_detail_user = mysqli_query($conn,"INSERT INTO detail_akun VALUES (
        '$npm', 
        '$prodi', 
        '$fullName', 
        '$tempatLahir',
        '$tanggalLahir', 
        '$status',
        '$alamat',
        '$phoneNumber',
        '$photo'
        )
        ");

    $akun = mysqli_query($conn,"INSERT INTO akun VALUES (
        '$npm', 
        '$password'
        )
        ");
    $time_regist = date('Y-m-d H:i:s');
    $registered = mysqli_query($conn,"INSERT INTO pendaftaran VALUES (
        '$npm', 
        '$time_regist'
        )
        ");
    
    if($registered && $regist_detail_user && $akun){ 
        header('location:index.php'); 
        echo 'Succes';
    } else{ 
        echo 'gagal';
        header('location:registration.php'); 
    }
};

// Login
if( isset($_POST["login"]) ) {
    $npm = $_POST["npm"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM akun WHERE id_anggota = '$npm' AND password = '$password'");

    $data = mysqli_query($conn, "select nama from detail_akun WHERE id_anggota = '$npm'"); 

    while($fetch=mysqli_fetch_array($data)){ 
        $nama = $fetch['nama'];
    };
     
    $row = mysqli_fetch_array($result);
    $number_rows =  mysqli_num_rows($result);

    if ( ($number_rows > 0)) {
            $_SESSION["login"] = True;
            $_SESSION["npm"] = $npm;
            $_SESSION["nama"] = $nama;
            header('location:index-home.php');            
            exit;

        } else {
            echo "<script>alert('NPM atau password Anda salah. Silahkan coba lagi!')</script>";
        };
};
?>