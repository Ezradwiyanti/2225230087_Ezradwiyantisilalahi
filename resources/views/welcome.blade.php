<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style>
    body {
      background-image: url("{{ asset('/images/gambar.jpg')}}");
    }
    img {
        width: 40px;
        height: 160px;
    }
    .card{
        width: 500px;
        height: 250px;
        margin-left: 400px;
        margin-top: 100px;
        background: #df549a5e;
      }
    .btn {
        margin-left: 100px;
        padding: 10px;
        width: 250px;
        height: 50px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        background: rgba(241, 203, 166, 0.822);
    }
    .btn:hover {
        background: rgb(5, 5, 5);
        color: white;
    }
  </style>


      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Mahasiswa Pendidikan Matematika</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Hobi dan Cita-Cita</h6>
          <p class="card-text">Deskripsi : Hallo, Isi Form Berikut Ya</p>
          <a href="{{ url('/student') }}" class="btn ">Go to my application</a>
        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>