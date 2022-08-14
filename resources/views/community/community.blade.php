<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DigiPoF</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="css/community.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('adminlte.partial.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Community</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Owner</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          @yield('content')
          <img class="milestone" src="pp/milestone.JPG" alt="" width="400">
          <div class="community"><h1></h1>
            <a color="#000000" href="https://www.instagram.com/muhdastinf_/">1. Muhammad Dastin Fauzi (16521083)</a><h1></h1>
            <a href="http://www.instagram.com/thoriq__ramadhan">2. Muhammad Thoriq Ramadhan (16521096)</a><h1></h1>
            <a href="https://www.instagram.com/asyifashfr/">3. Asyifa Nurul Shafira (16521132)</a><h1></h1>
            <a href="https://www.instagram.com/karinarahadiani/">4. Karina Rahadiani (16521179)</a><h1></h1>
            <a href="https://www.instagram.com/marvel_subekti/">5. Marvel Subekti (16521220)</a><h1></h1>
            <a href="https://www.instagram.com/rayhanpot/">6. Rayhan Hanif Maulana Pradana (16521234)</a><h1></h1>
            <a href="https://www.instagram.com/samuel._eric/">7. Samuel Eric Yonatan (16521256)</a><h1></h1>
            <a href="https://www.instagram.com/fadhlannazhif/">8. Fadhlan Nazhif Azizy (16521311)</a><h1></h1>
            <a href="https://www.instagram.com/nathaniaclista/">9. Nathania Calista Djunaedi (16521392)</a><h1></h1>
            <a href="https://www.instagram.com/rei.aja_/">10. Rei Arriel Clyfton (16521407)</a><h1></h1>
            <a>11. Maggie Zeta RS (16521475)</a><h1></h1>
            <a href="https://www.instagram.com/ps_ldm/">12. Bagus Lathif Firmansyah (16521506)</a><h1></h1>
            <a href="https://www.instagram.com/mrifkyf_778/">13. Muhammad Rifky Fachrizain (16521510)</a><h1></h1>
            <a href="https://www.instagram.com/afnanramadhan/">14. Afnan Edsa Ramadhan (16521542)</a>
          </div>
        </div>
        <!-- /.card-body -->
    
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
{{-- <script src="{{../../plugins/bootstrap/js/bootstrap.bundle.min.js}}"></script> --}}
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../../dist/js/demo.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>