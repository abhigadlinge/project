<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> File Website</title>

    <!-- fav- icon code  -->
   

    <!-- cdn css file link  -->
    <link rel="stylesheet" href="style.css" />

    <!-- font awesome icons link  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<body>

     <!-- navbar section starts  -->

    
    <div class="wrapper">
      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon" ><i class="fas fa-bars" style="font-size:2rem;"></i></label>
        <div class="content">
        <div class="logo"><a href="#">Dummy</a></div>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li>
              <a href="#" class="desktop-link">services</a>
              <input type="checkbox" id="show-features">
              <label for="show-features">services</label>
              <ul>
                <li><a href="#">transcription</a></li>
                <li><a href="#">translation</a></li>
                <li><a href="#">graphic designing</a></li>
                <li><a href="#">content writing</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">theme</a>
              <input type="checkbox" id="show-services">
              <label for="show-services">theme</label>
              <ul>
                <li><a href="#" id="green"> purple</a></li>
                <li><a href="#" id="red">orange </a></li>
                <li><a href="#" id="blue"> green</a></li>
                
              </ul>
            </li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#" id="login">login</a></li>
            <li><a href="#" id="signin-btn">sign in</a></li>
          </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fas fa-search" style="font-size: 2rem;"></i></label>
        <form action="#" class="search-box">
          <input type="text" placeholder="Type Something to Search..." required>
          <button type="submit" class="go-icon" style="font-size: 2rem;"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
      </nav>
    </div>
  

    <!-- navbar section ends  -->

    <!---- signup section starts  -->

      <section  class="user-account">

         <div id="close-account"><span>close</span></div>
         <div class="user">

            <p><span>you are not registered  now!</span></p>
         </div>
         <div class="flex">
            <form action="" method="post">
               <h3>register now</h3>
                <div class="left">
                  <input type="text" name="name" required class="box1" placeholder="enter your name" maxlength="20">
                  <input type="email" name="email" required class="box1" placeholder="enter your email" maxlength="50">
                </div>
               <div class="right">
                <input type="password" name="pass" required class="box1" placeholder="enter your password" maxlength="20">
                <input type="password" name="cpass" required class="box1" placeholder="confirm your password" maxlength="20">
               </div>
               <input type="submit" value="register now" name="register" class="btn1">
            </form>
         </div>
      </section>

   <!-- login section starts -->

   <section class="form-container">

    <div id="close-container"><span>close</span></div>
         <div class="user">
            <p><span>you are not logged in now!</span></p>
         </div>
         <div class="flex">
            <form action="" method="post">
               <h3>login now</h3>
                  <input type="email" name="email" required class="box1" placeholder="enter your email" maxlength="50">
                 <input type="password" name="pass" required class="box1" placeholder="enter your password" maxlength="20">
                <input type="submit" value="register now" name="register" class="btn1">
               <p>don't have an account? <a href="#" onclick="change()">register now</a></p>
            </form>
         </div>
 
 </section>

  
  <!-- navbar work completed -->
 
  <section id="home" class="home">
    <div class="homesection">
      <div class="right">
        <img src="transcription.jpg" alt="">
      </div>
        <div class="left">
           <h1> Audio/video</h1>
           <p id="h1">transcription</p>
           <p>transcribe your audio/video files .</p>
           <a href="contact-form.php" target="_blank" class="btn"> drop your files </a>
        </div>
    </div>

    <div class="boxes">
      <div class="box">
        <a href="#" ><span> <i class="fa fa-upload" style="font-size: 2rem;"></i></span> simple upload your files </a>
        <p>Upload your files with few methods and as fast </p><p> as  your connection will allow</p>
      </div>
      <div class="box">
        <a href="#" ><span> <i class='fas fa-headset' style='font-size: 2rem;'></i></span> 24/7 Support </a>
        <p>Our team will be ready to help you or assist </p><p> with any questions / issues you might have.</p>
      </div>
      <div class="box">
        <a href="#" ><span> <i class="fa fa-files-o" style="font-size:2rem;"></i></span> audio/video transcription </a>
        <p>
          Convert your audio or video into text with  </p><p>99% accuracy by a professional.
        </p>
      </div>
    </div>
  </section>

  <!-- graphics section starts  -->

  <section id="graphicsdes" class="graphicsdes">
    <div class="left">
       <h1> design your</h1>
       <p id="h1"> graphics </p>
       <p> design your posts and videos  .</p>
       <a href="contact-form.php" target="_blank" class="btn"> drop your files </a>
    </div>
    <div class="graphics">
      <div class="right">
        <img src="graphics.jpg" alt="">
      </div>
    </div>

    

    </section>


    <section>
    <div class="boxes">
      <div class="box">
        <a href="#" ><span> <i class="fa fa-upload" style="font-size: 2rem;"></i></span> simple upload your files </a>
        <p>Upload your files with few methods and as fast  </p><p>as your connection will allow .</p>
      </div>
      <div class="box">
        <a href="#" ><span> <i class="fa fa-files-o" style="font-size: 2rem;"></i></span> send your content files </a>
        <p>the content you provided will be converted </p><p> into posts as you want .</p>
      </div>
      <div class="box">
        <a href="#" ><span> <i class="fa fa-bar-chart" style="font-size:2rem;"></i></span> convert content into posts </a>
        <p>convert your content into posts by a professional .</p>
      </div>
    </div>
  
  </section>


    <section class="translation" id="translation">
       
        <div class="translate">
           <div class="left">
            <img src="translation.jpg" alt="">
           </div>
           <div class="right">
            <h1> translate your</h1>
            <p id="h1"> content </p>
            <p> translate your files into languges like </p><p> marathi , english and hindi   .</p>
            <a href="contact-form.php" target="_blank" class="btn">drop your files </a>
           </div>
        </div>


      <div class="boxes">
        <div class="box">
          <a href="#" ><span> <i class="fas fa-user-lock" style="font-size: 2rem;"></i></span> restricts confidential </a>
          <p>Access is restricted strictly on a need to </p><p> know basis. All our transcribers are under NDA.</p>
        </div>
        <div class="box">
          <a href="#" ><span> <i class="fa fa-line-chart" style="font-size: 2rem;"></i></span> 
            99% Accuracy
          </a>
          <p>Our 4-step transcription process is designed </p><p> to achieve a 99% accuracy, consistently. </p>
        </div>
        <div class="box">
          <a href="#" ><span> <i class="fa fa-heart" style="font-size: 2rem;"></i></span> 100% trust </a>
          <p>we deliver the best quality work in time  </p>
        </div>
      </div>
    </section>
 


    <!-- customer review <section></section> -->

   
    <section class="contact"  id="location">
      <h1 class="heading" id="contact"> get in touch</h1>
      <div class="row">
        
        <div class="map">
          <img src="contact.jpg" alt="">
        </div>
    
        <form
             action="https://formspree.io/f/xnqrlwwo"
             method="POST"
          >
    
            <div class="inputBox">
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
            </div>
    
            <div class="inputBox">
                <input type="number" placeholder="number" name="number">
                <input type="text" placeholder="your subject" name="text">
            </div>
    
            <textarea placeholder="address" name="" id="" cols="30" rows="10" name="message"></textarea>
    
            <input type="submit" value="send message" class="btn1">
    
        </form>
    
    </div>
    </section>

    <!-- footer sextion starts  -->
    <section class="footer">
      <div class="foot">
        <div class="head">
            <h1> Copyright © 20- All rights reserved</h1>
        </div>
        <div class="social">
            <span>follow us : </span>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
        </div>
      </div>
    </section>






    









































































   <script src="script.js"></script>
    
</body>
</html>