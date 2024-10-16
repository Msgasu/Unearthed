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

    @font-face {
      font-family: 'Museo Sans';
      src: url('../assets/fonts/MuseoSans-100.otf') format('opentype'), /* Adjust the path and format if necessary */
          url('../assets/fonts/MuseoSans-100.otf') format('opentype');
      font-weight: normal;
    }


    body {
      font-family: 'Migra-Extrabold';
      color: #ffff;
    }

    .section {
      padding: 50px;
      height: 110vh;
    }

        /* @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px); 
        transform: scale(0.4);/* Optional: Adds a slight upward movement 
      }
      to {
        opacity: 1;
        transform: translateY(0);
        transform: scale(1);
      }
    } */

    @keyframes fadeIn {
      from {
        opacity: 0; /* Start invisible */
      }
      to {
        opacity: 1; /* End fully visible */
      }
    }


    @keyframes fadeInGrow {
      from {
        opacity: 0;
        transform: scale(0.5); /* Start at half size */
      }
      to {
        opacity: 1;
        transform: scale(1); /* End at normal size */
      }
    }


    .logo {
      width: 550px;
      margin-top: -200px;
      margin-left: 5%;
      filter: brightness(1.2); /* Make the logo brighter */
      /*box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5); Add a shadow to create a bold effect*/
      animation: fadeInGrow 5s ease forwards; /* Apply fade-in and grow animation */
    }

    .section-1 {
      background-image: url('../assets/images/picture_1.jpg'); /* Replace with your image path */
      background-size: 125%; /* Ensures the background covers the entire section */
      background-position: center 20%; /* Centers the background image */
      background-repeat: no-repeat; /* Prevents the image from repeating */
      height: 100vh;
      color: white; /* Ensure the text remains visible */
      padding-top: -100px;
      padding-bottom: 0;
      position: relative;
    }


    .section-1::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
      z-index: 1;
    }

    .section-1 .container {
      position: relative;
      z-index: 2; /* Ensures the content is above the overlay */
    }

    .section-1 h1 {
      margin-top: -70px; 
      font-size: 48px; 
      animation: fadeIn 5s ease forwards; /* Increased duration to 1.5s */
      animation-delay: 0.5s; /* Delay the text fade-in */

    }

    .scroll-down {
      font-family: 'Arial', sans-serif;
      position: absolute;
      bottom: -150px;
      left: 50%;
      transform: translateX(-50%);
      background-color: transparent;
      border: 2px solid white;
      padding: 20px 80px;
      color: white;
      text-transform: uppercase;
      font-size: 16px;
      cursor: pointer;
      
    }

    .section-2 {
      background-image: url('../assets/images/picture_2.jpg'); /* Replace with your image path */
      background-size: cover; /* Ensures the background covers the entire section */
      background-position: center; /* Centers the background image */
      background-repeat: no-repeat; /* Prevents the image from repeating */
      color: black; /* Adjust text color if necessary */
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .section-2::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3); /* White overlay with 0.05% opacity */
      z-index: 1;
    }
    .section-2 .container {
      height: 100%; 
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 2;
    }

    .card-1 {
      color:black;
      background-color: #F8F0DE;
      width: 110vw; 
      height: 80%; 
      border-radius: 5px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .about-text {
      font-family: 'Museo Sans', sans-serif; 
      animation: fadeIn 3s ease forwards; /* Increased duration to 1.5s */
      animation-delay: 0.5s; /* Delay the text fade-in */
}

.section-3 {
  background-color: #f8f1e6; /* Light background color */
  padding: 40px 0; /* Add some padding */
}

.img-fluid {
  width: 60vw; /* Ensure the image takes the full width of the column */
  height: 400px; /* Set a fixed height */
  object-fit: cover; /* Maintain aspect ratio and cover the space */
  
}

h5 {
  font-family: 'Migra-Extrabold'; /* Use the same font for headings */
  margin-top:20px;
  font-size:30px; 
  color:#000 /* Space between image and heading */
}

p {
 
  color: #000; /* Dark gray text for better readability */
  font-family: 'Museo Sans';
  margin-top:10px; 
  font-size:23px; 
}


@keyframes flyIn {
    from {
      opacity: 0;
      transform: translateX(-100px); /* Fly in from left */
    }
    to {
      opacity: 1;
      transform: translateX(0); /* End at normal position */
    }
  }

  @keyframes flyInRight {
    from {
      opacity: 0;
      transform: translateX(100px); /* Fly in from right */
    }
    to {
      opacity: 1;
      transform: translateX(0); /* End at normal position */
    }
  }

  /* Apply the flyIn animation to the text */
  .fly-in-text {
    opacity: 0;
    animation: flyIn 5s ease forwards;
    animation-delay: 0.5s;
  }

  /* Apply the flyInRight animation to the images */
  .fly-in-image {
    opacity: 0;
    animation: flyInRight 5s ease forwards;
    animation-delay: 0.5s;
  }

  /* Delay for each box to animate one after the other */
  .box:nth-child(2) .fly-in-text,
  .box:nth-child(2) .fly-in-image {
    animation-delay: 1.5s;
  }

  .box:nth-child(3) .fly-in-text,
  .box:nth-child(3) .fly-in-image {
    animation-delay: 2s;
  }


  .section-4 {
    background-image: url('../assets/images/picture_6.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    padding: 100px 0px;
    color: white;
  }

  .section-4::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(225, 225, 225, 0.75);
    z-index: 1;
  }

  .section-4 .container {
    position: relative;
    z-index: 2;
  }


  .section-5 {
    background-color: #D8BC93; 
    display: flex;
   justify-content: center;
   align-items: center;
  }


  .section-5 .content-wrapper {
  text-align: center;
}
  /* .section-5::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(225, 225, 225, 0.75);
    z-index: 1;
  } */

  .section-5 .container {
    position: relative;
    z-index: 2;
  }
  .section-5 h1 {
      
      animation: fadeIn 5s ease forwards; /* Increased duration to 1.5s */
      animation-delay: 0.9s; /* Delay the text fade-in */

    }

    .section-5 span {
      
      animation: fadeIn 5s ease forwards; /* Increased duration to 1.5s */
      animation-delay: 0.9s; /* Delay the text fade-in */

    }



    .section-6 {
      background-image: url('../assets/images/picture_2.jpg'); 
      background-size: cover; /*covers the entire section */
      background-position: center; /* Center background image */
      background-repeat: no-repeat; /* Preventimage from repeating */
      color: #fff; 
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    /* .section-6::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3); /* White overlay with 0.05% opacity 
      z-index: 1;
    }
   */
    .section-6 .container {
      height: 100%; 
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 2;
    }

    .card-2 {
      margin-top: 50px;
      color:#ffff;
      background-color: #125B7F;
      width: 110vw; 
      height: 80%; 
      border-radius: 5px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }


  </style>
</head>
<body>

  <!-- Section 1 -->
  <section class="section section-1 text-center">
    <div class="container">
    <img src="../assets/images/unearthed_no_background.png" alt="Logo" class="logo">
    <h1 class="display-4" style="font-size: 70px; color: #ffff; text-shadow: 1px 1px 2px #000;">Raising a generation <br>  of kingdom-minded <br> business leaders</h1>
    <button class="scroll-down">scroll down</button>
     
    </div>
  </section>

  <!-- Section 2: About Us -->

<section class="section section-2 text-center">
  <div class="container">
    <div class="card-1">
      <div class="card-content">
       <h1 class="display-4 about-title" style="font-size: 58px; color: #000; text-shadow: 1px 1px 2px #fff; margin-top: 35px;">About Us</h1>
 <p class="about-text" style="font-size: 25px; line-height: 1.5;margin-top: 35px; font-weight:bold;">Unearthed is a platform that empowers entrepreneurs and intrapreneurs to showcase<br> God's excellence in business<br><br></p>
 <p class="about-text" style="font-size: 25px; line-height: 1.5; font-weight:bold;">We aim to help Christian believers overcome challenges and manifest their talents <br> and divine help in the marketplace, inspired by Job 1:10. The goal is to turn these<br> gifts into tangible success, reflecting God's glory.</p>
      </div>
    </div>
  </div>
</section>


<!-- Section 3: Our Work -->
<section class="section section-3 text-center">
  <div class="container" style="max-width: 100vw; padding: 0 65px;">
    <h2  style="font-family: 'Migra-Extrabold'; margin-top:35px; font-size:80px; color:#000; ">Our Work</h2>
    <div class="row justify-content-between mt-5">

      <div class="col-md-4" style="padding-right: 1px;">
        <img src="../assets/images/picture_3.jpg" alt="Kingdom Connections"  class="img-fluid fly-in-image" style="max-width: 90%;">
        <h5 class="mt-2 fly-in-text" >Kingdom Connections</h5>
        <p class="fly-in-text"> Hear from seasoned resource personnel <br> from different areas of work.</p>
      </div>

      <div class="col-md-4" style="padding-right: 1px;">
        <img src="../assets/images/picture_4.jpg" alt="Learn"  class="img-fluid fly-in-image" style="max-width: 90%;">
        <h5 class="mt-2 fly-in-text" >Learn</h5>
        <p class="fly-in-text">Engage in active learning experience in our curated events.</p>
      </div>

      <div class="col-md-4">
        <img src="../assets/images/picture_5.jpg" alt="Business Resources"  class="img-fluid fly-in-image" style="max-width: 90%;">
        <h5 class="mt-2  fly-in-text">Business Resources</h5>
        <p class="fly-in-text">You can find relevant business resources that will help grow your line of work.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Contact Us or Call to Action -->
<section class="section section-4 text-center">
  <div class="container" style= "max-width: 85vw;" >
    <div class="card-content">

      <h1 class="display-4" style="font-size: 55px; color: #125B7F;  margin-top: 35px;">
      Serving Jesus at work is far more than giving a<br>
      Christian theme to your business or staging awkward conversations about Jesus.
      </h1>
      <h1 class="display-4" style="font-size: 55px; color: #125B7F;  margin-top: 35px; text-align: center;">
      It is about doing your work for the glory of God and the  <br>
      benefit of his creation and leveraging appropriate<br>
      opportunities to make disciples as you go through life.
    </h1>

    <p style= "text-align: center; font-family: Museo Sans; font-size: 35px; color:#000; font-weight:20%; margin-top:50px;"> JD Greear</p>
      <!-- <button class="btn btn-primary btn-lg" style="background-color: #000; border-color: #000;">Join Now</button> -->
    </div>
  </div>
</section>

<!-- Section 5 -->
<section class="section section-5">
  <div class="container">
    <div class="content-wrapper">
      <h1 class="display-4" style="font-size: 55px; color: #125B7F;">
        They who go down to the sea in ships, that do <br>
        business in great waters; these see the works of <br>
        the Lord, and his wonders in the deep.
      </h1>

      <br><br>

      <span style="text-align: center; font-family: Museo Sans; font-size: 32px; color: #125B7F; font-weight: bold; margin-top: 50px;">
        - King David of Israel
      </span>
    </div>
  </div>
</section>


<section class="section section-6 text-center">
  <div class="container">
    <div class="card-2" style="display: flex; flex-direction: column; align-items: center; padding-left:5%"> 
      <div class="card-content" > 
        <h1 class="display-4 about-title" style="font-size: 58px; color: #fff; text-shadow: 1px 1px 2px #fff; margin-top: 95px; padding-right: 10%;">
          Contact Us
        </h1>
        <div>

        <div class="card-content" style="text-align: left; "> 
        <p class="about-text" style="font-size: 30px; line-height: 1.5; margin-top: 35px; font-weight: bold; color: #fff;">
          Mailing Address<br>
          <span class="about-text" style="font-size: 25px; font-weight: bold; color: #fff;">P.O. Box GP 4631, Accra</span>
        </p>

        <p class="about-text" style="font-size: 30px; line-height: 1.5; font-weight: bold; color: #fff;">
          Email Address <br>
          <span class="about-text" style="font-size: 25px; font-weight: bold; color: #fff; margin-top:-5%">unearthedaccra@gmail.com</span>
        </p>

        <p class="about-text" style="font-size: 30px; line-height: 1.5; font-weight: bold; color: #fff;">
          Phone Number <br>
          <span class="about-text" style="font-size: 25px; font-weight: bold; color: #fff;">(233) 540 827 496</span>
        </p>
      </div>
    </div>
  </div>
</section>



  <!-- Bootstrap JS (Optional if you need JavaScript components like modals) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
