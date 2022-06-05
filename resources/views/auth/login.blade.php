<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB | login</title>
  <link rel="stylesheet" href="{!! asset('assets/css/master.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <div>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 ">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show text-center mt-5 mb-5" role="alert">
                {{ session('success') }}
                </div>
              @endif
              @if (session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show text-center mt-5 mb-5" role="alert">
                {{ session('loginError') }}
                </div>
              @endif
                <div class="mb-md-5 mt-md-4 pb-5">
    
                  <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                  <p class="text-white-50 mb-5 text-center">Please enter your login and password!</p>
    
                  <form action="/login" method="POST">
                    @csrf
                    <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Input Your Email" value="{{ old('email') }}" required/>
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                  </div>
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" required/>
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                  </div>
                  
                  <div class="text-center">
                    <button class="btn btn-outline-light btn-lg px-5 text-center" type="submit">Login</button>
                  </div>
    
                  <div>
                  </div>
                </form>
                <p class="mb-0 text-center">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a>
                </p>
                
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
</body>
</html>







{{-- @extends('layouts.auth')

@section('authcontent')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweetalert::alert')
 <form action="/actionlogin" method="POST">
  @csrf
  <div>
    <script>
    function contoh() {

      swal({

          title: "Berhasil!",

          text: "Pop-up berhasil ditampilkan",

          icon: "success",

          button: true

      });

  }
</script>
    <label for="username" class="form-label">Username</label>
    <input id="username" class="form-control @error ('username') is invalid @enderror" name="username" placeholder="Masukkan Username"  type="text"required>
    @error('username')
        <p>
          {{ $message }}
        </p>
    @enderror
  </div>
  <div>
    <label for="password" class="form-label">Password</label>
    <input id="password" class="form-control @error ('password') is invalid @enderror" name="password" placeholder="Masukkan password"  type="password"required>
    @error('password')
        <p>
          {{ $message }}
        </p>
    @enderror
  </div>
  <div>
    <button type="submit" class="btn-btn-secondary">Login</button>
  </div>
 </form>
@endsection --}}