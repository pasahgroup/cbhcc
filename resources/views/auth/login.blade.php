  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8fafc; /* Light background from your layout */
    }
    .login-container {
      margin-top: 5rem;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .card-header {
      background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%); /* Blue gradient */
      color: #fff;
      font-weight: bold;
      text-align: center;
      border-bottom: none;
      border-radius: 1rem 1rem 0 0;
      padding: 1.5rem 1rem;
    }
    .form-label {
      font-weight: 500;
    }
    .btn-primary {
      background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%); /* Blue gradient */
      border: none;
      border-radius: 2rem;
      padding: 0.75rem 1.5rem;
      font-weight: bold;
      color: #fff;
      transition: background-color 0.3s;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #3730a3 0%, #0891b2 100%); /* Darker blue gradient on hover */
    }
    .text-danger {
      color: #dc3545 !important;
    }
    .logo {
      max-width: 300px; /* Adjust size as needed */
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <main class="login-form">
    <div class="container login-container">
      <div class="row justify-content-center">
        <!-- Changed the column width to col-md-8 from col-md-6 -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <img src="../../img/logo.png" alt="Logo" class="logo mx-auto d-block">
              Login to your existing account
            </div>
            <div class="card-body">
              <!-- Display messages -->
              @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Well!</strong> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if($message = Session::get('info'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Ops!</strong> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Sorry!</strong> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              <!-- Login Form -->
              <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email_address" class="form-label">Email Address</label>
                  <input type="text" id="email_address" placeholder="enter your email" class="form-control" name="email" required autofocus>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="enter your password" name="password" required>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input type="checkbox" name="remember"  class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                  </div>
                </div>


                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <br>
<div class="mb-3">
                  <div class="form-check">
                    <label class="form-check-label" for="remember">New User? <a href="">Sign Up</a> </label>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap 5 JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






































