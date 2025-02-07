<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>sisfo</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            background: url('https://img.freepik.com/free-photo/anime-car-city_23-2151710949.jpg?t=st=1731893831~exp=1731897431~hmac=9eab4ca6e1baf55614230861c22d274b309b437579bc6bf6c613b700bb6df0e6&w=1380') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
        }
        .login-card {
            background-color: #f2f2f2  ;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: auto;
            margin-bottom: auto;
            display: flex;
            flex-direction: column;
            justify-content: center; 
            height: 100%;
            opacity: 97%;
        }
        .profile-image {
            width: 400px; 
            height: 400px; 
            border-radius: 50%; 
            object-fit: cover; 
            margin: 0 auto; 
            display: block; 
        }
    </style>
</head>

<body>

  <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center" style="height: 100vh;"> 
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 login-card">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block text-center">
                                <img src="https://media.tenor.com/O5EGwZuV3sEAAAAi/wave-hi.gif" alt="Profile Image" class="profile-image">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                                    </div>
                                    <form class="user" action="/sesi/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" value="{{Session::get('email')}}" placeholder="Masukan Alamat Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukan Password Anda" required>
                                        </div>
                                        <button type="submit" class="btn btn-submit btn-user btn-block">LOGIN</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>