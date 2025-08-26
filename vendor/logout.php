<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"/>
  <style>
    .v-r-from{
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }
    .form-container {
      background: rgba(255, 255, 255, 0.25); /* more transparent white *//* Transparent white */
      backdrop-filter: blur(20px) saturate(180%); /* Strong blur + saturation */
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      border-radius: 1rem;
      padding: 2rem;
      width: 30rem;
      max-width: 100%;
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.25); /* subtle border */
      box-shadow: 0 8px 32px rgba(0,0,0,0.25); /* glass shadow */
    }
    .form-control {
      background: rgba(255, 255, 255, 0.1) !important;
      border-radius: 50rem;
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.8);
    }
    .form-control:focus {
      box-shadow: 0 0 0 0.25rem rgba(128, 0, 128, 0.5);
      border-color: #6f42c1;
    }
    .input-icon {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: #a855f7;
      pointer-events: none;
    }
    .bg-image {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }
    .link-purple {
      color: #a855f7;
    }
    .link-purple:hover {
      text-decoration: underline;
      color: #c084fc;
    }
  </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center position-relative overflow-hidden v-r-from">

  <img src="/assets/images/product-small-3.jpg" 
       alt="Abstract background" class="bg-image">

  <form aria-label="Login form" class="form-container text-white">
    <h2 class="text-center mb-4 fw-semibold">Login</h2>

    <!-- Username -->
    <div class="mb-3 position-relative">
      <input type="text" class="form-control pe-5" placeholder="Username" aria-label="Username"/>
      <i class="fas fa-user input-icon"></i>
    </div>

    <!-- Password -->
    <div class="mb-3 position-relative">
      <input type="password" class="form-control pe-5" placeholder="Password" aria-label="Password"/>
      <i class="fas fa-lock input-icon"></i>
    </div>

    <!-- Remember + Forgot -->
    <div class="d-flex justify-content-between align-items-center mb-4 small">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember Me</label>
      </div>
      <a href="#" class="link-purple">Forgot password?</a>
    </div>

    <!-- Login Button -->
    <button type="submit" class="btn btn-light w-100 rounded-pill">Login</button>

    <!-- Register -->
    <p class="mt-3 text-center small">
      Don't have an account? 
      <a href="#" class="fw-semibold text-white text-decoration-underline">Register</a>
    </p>
  </form>

</div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
