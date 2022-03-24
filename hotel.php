<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Pemesanan Online berbasis web</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container py-1">
  <h1><a class="navbar-brand" href="#">HOTEL HEBAT</a></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Hotel</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kamar">Kamar</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fasilitas">Fasilitas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
  <div class="text-center">
    <img src="img/b.jpg" alt="Selamat Hotel Di Hotel Hebat" width="960" height="500">
  </div>
</br>
  <center>
  <table cellpadding="10">
  <tr>
    <td>Tanggal Cek In</td>
    <td>Tanggal Cek Out</td>
    <td>Jumlah Kamar</td>
  </tr>
  <tr>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="number" min="1" max="300"></td>
    <td><button>Pesan</button></td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td colspan="4"><h1>Form Pemesanan</h1></td>
  </tr>
  <tr>
    <td>Nama Pemesanan</td>
    <td><input type="text" name="" id=""></td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="email" name="" id=""></td>
  </tr>
  <tr>
    <td>no handphone</td>
    <td><input type="text" name="" id=""></td>
  </tr>
  <tr>
    <td>Nama tamu</td>
    <td><input type="text" name="" id=""></td>
  </tr>
  <tr>
    <td>Tipe kamar</td>
    <td><input type="text" name="" id=""></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="button" value="Konfirmasi Pemesanan"></td>
  </tr>
</center>
</body>
</html>
