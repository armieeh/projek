<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB |  register</title>
  <link rel="stylesheet" href="{!! asset('assets/css/master.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <div>
    <section class="vh-100 gradient-custom">
      <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5">
    
                <div class="mb-md-4 mt-md-4 pb-5">
                <form action="/register" method="post">
                  
                  @csrf
    
                  <h2 class="fw-bold mb-2 text-uppercase text-center">REGISTER</h2>
                  <p class="text-white-50 mb-5 text-center">Please create your account!</p>
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Your name" required value="{{ old('name') }}"/>
                    @error('name')
                        <div>
                          {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control form-control-lg" @error('username') is-invalid @enderror placeholder="Your username" required value="{{ old('username') }}"/>
                    @error('username')
                        <div>
                          {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="no_hp">Nomer Hp</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control form-control-lg" @error('no_hp') is-invalid @enderror placeholder="123456789" required value="{{ old('no_hp') }}"/>
                    @error('no_hp')
                        <div>
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control form-control-lg" @error('email') is-invalid @enderror placeholder="aaaa@gmail.com" required value="{{ old('email') }}"/>
                    @error('email')
                        <div>
                          {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" @error('password') is-invalid @enderror placeholder="Password"required/>
                    @error('password')
                        <div>
                          {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="confirm">Konfirmasi Password</label>
                    <input type="password" name="confirm" id="confirm" class="form-control form-control-lg" @error('confirm') is-invalid @enderror placeholder="confirm"required/>
                    @error('confirm')
                        <div>
                          {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="text-center">
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
                  </div>

                </form>
    
                </div>
    
                <div>
                  <p class="mb-0 text-center">Do you have an account? <a href="/" class="text-white-50 fw-bold">Sign In</a>
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



{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB | {{ $title }}</title>
  <link rel="stylesheet" href="{!! asset('assets/css/master.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <div>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                  <form>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1cg">Your Name</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example3cg">Your Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cg">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button type="button"
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                        class="fw-bold text-body"><u>Login here</u></a></p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
</body>
</html> --}}