<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
<style>
  body, html {
    height: 100%;
    background: #f8f9fa;
  }
  .login-bg {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* Tambahkan background image di sini */
    background: #f8f9fa url('{{ asset('image/bg-telkom.jpg') }}') no-repeat center center;
    background-size: cover;
  }
  .login-card {
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    padding: 2.5rem 2rem;
    width: 100%;
    max-width: 400px;
    background: #fff;
  }
  .login-logo {
    max-width: 90px;
    margin-bottom: 1.5rem;
  }
</style>
  </style>
</head>
<body>
  <div class="login-bg">
    <div class="login-card">
      <div class="text-center">
        <a href="{{ route('login') }}">
<img src="{{ asset('image/logo-telkom-indonesia.jpg') }}" alt="Logo" class="login-logo">        </a>
      </div>
      <h3 class="text-center mb-2 fw-bold">MojangGaulROC1</h3>
      <p class="text-center text-muted mb-4">Login to access your account</p>

      @if(session('message'))
        <div class="alert alert-info" role="alert">
          {{ session('message') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
          <input id="email" name="email" type="text"
                 class="form-control @error('email') is-invalid @enderror"
                 placeholder="Enter your username" value="{{ old('email') }}" required autofocus>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <input id="password" name="password" type="password"
                 class="form-control @error('password') is-invalid @enderror"
                 placeholder="Password" required>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input" name="remember" type="checkbox" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <button type="submit" class="btn btn-dark w-100 mb-2">Login</button>

        @if (Route::has('password.request'))
          <div class="text-center mt-2">
            <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
          </div>
        @endif
      </form>
    </div>
  </div>
</body>
</html>