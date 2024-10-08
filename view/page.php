<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    @font-face {
      font-family: 'Migra-Extrabold';
      src: url('../assets/fonts/Migra-Extrabold.ttf') format('truetype');
      font-weight: bold;
      font-style: bold;
      
    }

    body {
      font-family: 'Migra-Extrabold';
      color: #ffff;
    }

    .section {
      padding: 50px;
    }

    
    .logo {
      width: 450px;
      margin-top: -110px
    }
    .section-1 {
      background-color: black;
      padding-top: -100px;
      padding-bottom: 0;
      height: 100vh;
    }

    .section-1 h1 {
      margin-top: -50px; 
      font-size: 48px; 
    }

    .scroll-down {
      font-family: 'Arial', sans-serif;
      position: absolute;
      bottom: 80px;
      left: 50%;
      transform: translateX(-50%);
      background-color: transparent;
      border: 2px solid white;
      padding: 20px 45px;
      color: white;
      text-transform: uppercase;
      font-size: 16px;
      cursor: pointer;
      
    }

    .section-2 {
      background-color: #e0e0e0;
    }

    .section-3 {
      background-color: #cccccc;
    }
  </style>
</head>
<body>

  <!-- Section 1 -->
  <section class="section section-1 text-center">
    <div class="container">
    <img src="../assets/images/unearthed_no_background.png" alt="Logo" class="logo">
    <h1 class="display-4">Raising a generation <br>  of kingdom-minded <br> business leaders</h1>
    <button class="scroll-down">scroll down</button>
     
    </div>
  </section>

  <!-- Section 2: About Us -->
  <section class="section section-2 text-center">
    <div class="container">
      <h2>About Us</h2>
      <p>Learn more about what we do and our mission.</p>
    </div>
  </section>

  <!-- Section 3: Contact -->
  <section class="section section-3 text-center">
    <div class="container">
      <h2>Contact</h2>
      <p>Get in touch with us for more information.</p>
    </div>
  </section>

  <!-- Bootstrap JS (Optional if you need JavaScript components like modals) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
