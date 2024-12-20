<!doctype html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halloween - Home </title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Creepster&amp;family=Griffy&amp;family=Jost:wght@200;300;400;500;600;700;800&amp;family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap"
    rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=053e2c67-be01-471b-bd16-852776fdb086"
    defer> </script>
  <!-- End of HubSpot Embed Code 27-May-2024-->

  <!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=053e2c67-be01-471b-bd16-852776fdb086"
        defer> </script> -->

  <!-- Start of hancockghostwriters6889 Zendesk Widget script 27-May-2024-->

  <script>
    zE(function () {
      $zopim(function () {
        $zopim.livechat.setOnUnreadMsgs(unread);

        function unread(number) {
          if (number >= 1) {
            $zopim.livechat.window.show();
          }
        }
      });
    });
  </script>


</head>

<body>
  <header class="w-100 float-start header">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center justify-content-between" href="#">
          <img src="images/logo.svg" class="horror-text w-40" alt="log" />
        </a>
        <!-- <button class="navbar-toggler" data-bs-toggle="offcanvas" href="#mobile-menu" role="button"
          aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
              <a href="#top-section" class="btn get-btn">Submit Your Story</a>
            </li>


          </ul>

        </div>
      </div>
    </nav>
  </header>

  <section class=" w-100 float-start banner-section">

    <div class="banner-inside">

      <div class="bat-container">
        <div class="bat"><span></span></div>
      </div>
      <div class="bat-container small-bats">
        <div class="bat"><span></span></div>
      </div>

      <div class="bats-div-img">
        <img src="images/bat_animation.gif" alt="lk" />
      </div>




      <div class="container">



        <div class="row align-items-end" id="top-section">


          <div class="col-lg-5" data-aos="fade-right">
            <div class="banner-text1">
              <!-- <h5> Halloween Event for the Whole Family </h5> -->

              <h1 class="horror-text"> Join the
                <span class="d-lg-block" style="color: #F24405;"> Spooktacular</span>
                Stories Challenge
              </h1>

              <p class="text"><img src="images/home/right.png" alt=""> Win 85% off publishing services for the best
                story!</p>
              <p class="text pb-20"><img src="images/home/right.png" alt=""> Plus, all participants receive 50% off just
                for entering!</p>
              <a href="#top-section" class="btn about-btn">
                Submit Your Story
              </a>
            </div>
          </div>

          <div class="sticky-clock">
            <div class="clock-face">
              <p id="date"></p> <!-- This will always show "October 31, 2024" -->
              <p id="time"></p> <!-- This will show the countdown (days, hours, minutes, seconds) -->
            </div>
          </div>




          <div class="col-md-7" data-aos="fade-left">
            <div class="skeleton-img ">
              <div class="form-container">
                <div class="">
                  <form method="POST" action="/backend/action/action" enctype="multipart/form-data">
                    <input type="hidden" name="halloween" value="halloweenForm">
                    <div class="input-group">
                      <div class="w-100">
                        <img class="p-absolute" src="images/home/1v.svg" alt="">
                        <div>
                          <input class="pl-40" type="text" name="name" placeholder="Your name" required>
                        </div>
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="w-100">
                        <img class="p-absolute" src="images/home/2v.svg" alt="">
                        <div>
                          <input class="pl-40" type="email" Name="email" placeholder="Email Address" required>
                        </div>
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="w-100">
                        <img class="p-absolute" src="images/home/phone.png" alt="">
                        <div>
                          <input class="pl-40" type="number" name="phone" placeholder="Phone Number" required>
                        </div>
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="w-100">
                        <img class="p-absolute" src="images/home/4v.svg" alt="">
                        <div>
                          <div class="file-upload-wrapper">
                            <div class="file-upload-wrapper">
                              <input class="pl-40" type="text" accept="application/pdf,.doc,.docx"
                                placeholder="Upload Link.Pdf,etc..." id="file-text" readonly required>
                              <input type="file" id="file-upload" name="file" style="display: none;"
                                accept=".pdf,.doc,.docx,.txt"> <!-- Hidden file input -->
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-group">
                      <button type="submit" class="submit-btn">Submit Now</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
          <div class="top-3">
            <img class="h-13" src="images/home/hand.png" alt="">
          </div>

        </div>



      </div>


    </div>
    <div class="parallelogram"></div>
    <div class="about-sec-div">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 align-items-center">
          <div class="col" data-aos="fade-right">
            <figure>
              <img src="images/about-pic.jpg" alt="ab" />
            </figure>
          </div>
          <div class="col" data-aos="fade-left">
            <h6> About Us </h6>
            <h2> Trick or Treat? Boo! </h2>
            <p>The Spooktacular Stories Challenge is an exciting Halloween-themed writing competition that invites
              aspiring authors to showcase their creativity and storytelling skills. Whether you're crafting a spooky
              ghost story, a magical witch’s tale, or a thrilling twist, this challenge is your chance to share your
              unique voice with the world.</p>
            <br>
            <p>Our mission is to empower writers, nurture creativity, and help you take your first steps toward seeing
              your work in print. So, let your imagination run wild this Halloween and be a part of our creative
              community!</p>

            <a href="#top-section" id="#top-section" class="btn comon-btn mt-4"> Submit Your Story </a>
          </div>
        </div>
      </div>
    </div>

    <div class="ecent-div1 py-5">
      <div class="container">

        <h2 class="comon-mn text-center mt-2" data-aos="fade-up"> Why Join the Spooktacular Stories Challenge? </h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-lg-5 mt-0" data-aos="fade-right">
          <div class="col-md-3">
            <div class="comon-event-div">
              <figure>
                <img src="images/home/1.png" alt="pin" />

              </figure>
              <div class="event-details">
                <!-- <ul class="list-unstyled d-flex">
                              <li> <i class="fas fa-calendar-week"></i> 31st October 2021 </li>
                              <li> <i class="far fa-clock"></i> 8:00 PM </li>
                            </ul> -->

                <h4> Showcase Your Talent </h4>
                <p> This is your chance to let your creativity shine! Write that ghostly tale you’ve been imagining and
                  share it with a community that’s ready to be thrilled. </p>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="comon-event-div">
              <figure>
                <img src="images/home/2.png" alt="pin" />

              </figure>
              <div class="event-details">


                <h4> Win an Amazing Prize </h4>
                <p> Imagine seeing your story published with 85% off our professional publishing services. This could be
                  your moment! </p>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="comon-event-div">
              <figure>
                <img src="images/home/3.png" alt="pin" />

              </figure>
              <div class="event-details">

                <h4> Everyone Wins </h4>
                <p> Even if you don’t take the top spot, you’ll still get 50% off our publishing services—because we
                  appreciate every writer who joins.</p>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="comon-event-div">
              <figure>
                <img src="images/home/4.png" alt="pin" />

              </figure>
              <div class="event-details">

                <h4> Join the Fun </h4>
                <p> Connect with other spooky storytellers, exchange ideas, and celebrate your creativity in a fun,
                  supportive environment. </p>

              </div>
            </div>
          </div>




        </div>

      </div>
    </div>

    <div class="counting-bg-div">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-lg-0" data-aos="fade-left">
          <div class="col">
            <div class="comon-counts-items">
              <h2> 500+</h2>
              <p> stories published </p>
            </div>
          </div>
          <div class="col">
            <div class="comon-counts-items">
              <h2> 1,000+</h2>
              <p> Join a community of 1,000+ aspiring authors. </p>
            </div>
          </div>
          <div class="col">
            <div class="comon-counts-items">
              <h2> 10 +</h2>
              <p> years of experience in the
                publishing industry. </p>
            </div>
          </div>
          <div class="col">
            <div class="comon-counts-items">
              <h2> $50,000+</h2>
              <p>  in publishing discounts awarded. </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="about-sec-div">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 align-items-center">

          <div class="col-md-6 ptb-20" data-aos="fade-right">

            <h2> How to Participate </h2>
            <p class="text pb-20"><img class="pr-10" src="images/home/right.png" alt=""><span class="span2">Write Your
                Story
                :</span> Craft your best Halloween-themed
              tale,
              keeping it between 500-1000 words. Let your imagination run
              wild!</p>
            <p class="text pb-20"><img class="pr-10" src="images/home/right.png" alt=""><span class="span2">Submit Your
                Entry
                :</span> Click the submission link below and fill out the form. Be sure to submit your story before
              the deadline on October 31st.</p>
            <p class="text pb-20"><img class="pr-10" src="images/home/right.png" alt=""><span class="span2">Join the
                Community
                :</span> Connect with other writers, share ideas, and get inspired! Engage with fellow participants
              throughout the challenge.</p>
            <p class="text "><img class="pr-10" src="images/home/right.png" alt=""><span class="span2">Celebrate
                Creativity
                :</span> After submitting, sit back and enjoy the thrill of the challenge as we prepare to announce
              the winners!</p>


            <a href="#top-section" class="btn comon-btn mt-4"> Submit Your Story Here </a>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <figure>
              <img src="images/home/halloween.png" alt="ab" />
            </figure>
          </div>
        </div>
      </div>
    </div>



    <div class="gallery-div">
      <div class="container">


        <h2 class="comon-mn text-center mt-2"> Key Details </h2>

        <div class="row" data-aos="fade-down">
          <div class="col-md-3 ptb-20">
            <div class="bg-1">
              <div class="wrapper">
                <p class="deadline">Deadline</p>
                <p class="deadline-text">Submit your
                  story by 
                  October 31st, 2024</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ptb-20">
            <div class="bg-1">
              <div class="wrapper">
                <p class="deadline"> Word Count</p>
                <p class="deadline-text">Between 500-1000
                  words.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ptb-20">
            <div class="bg-1">
              <div class="wrapper">
                <p class="deadline">Theme</p>
                <p class="deadline-text">Halloween (ghosts,
                  witches, haunted
                  houses, & more).</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ptb-20">
            <div class="bg-1">
              <div class="wrapper">
                <p class="deadline">Prizes</p>
                <p class="deadline-text"><span class="percent">85%</span> off publishing
                  services for the winner.
                  <span class="percent">50%</span> off for all
                  participants.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>






  </section>

  <footer class="w-100 float-start footer-section">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3">


        <div class="col-md-12 text-center" data-aos="fade-right">
          <div class="comon-footer">
            <h5>  join our community </h5>
            <ul class="list-unstyled">
              <li> Connect with other writers, share ideas, and get inspired!
                Engage with fellow <br> participants throughout the challenge.</li>

            </ul>

            <div class="row">
              <div class="col-md-8 offset-md-2 ">
                <form action="/backend/action/action" method="POST">
                  <input type="hidden" name="halloween" value="onlyEmail">
                  <div class="search-container">
                    <input type="text" name="email" class="form-control1" placeholder="Enter Email Address" required="">
                    <button type="submit" class="btn comon-btn1 "> join Now </button>

                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="fot-list">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col-md-12">
            <p class="text-white text-center"> 2024 © Hancock Publishers </p>
          </div>


        </div>
      </div>
    </div>
    </div>
  </footer>



  <div class="offcanvas offcanvas-start mobile-menu-div" tabindex="-1" id="mobile-menu"
    aria-labelledby="offcanvasExampleLabel" aria-modal="true" role="dialog" style="visibility: visible;">
    <div class="offcanvas-header">

      <button type="button" class="close-menu" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fas fa-times-circle"></i>
      </button>
    </div>


    <div class="offcanvas-body">

      <div class="head-contact">
        <a href="index-2.html" class="logo-side d-flex align-items-center">
          <span class="horror-text"> Twicky </span>
          <span class="logo-img horror-text"> <img src="images/685859.png" alt="pnm" /> </span>
        </a>
        <div class="mobile-menu-sec mt-3">
          <ul class="list-unstyled">
            <li class="active-m">
              <a href="index-2.html"> Home </a>
            </li>
            <li>
              <a href="about.html"> About </a>
            </li>

            <li>
              <a href="event.html"> Event </a>
            </li>
            <li>
              <a href="gallery.html"> Gallery </a>
            </li>
            <li>
              <a href="team.html"> Team </a>
            </li>
            <li>
              <a href="contact.html"> Contact </a>
            </li>
          </ul>
        </div>


      </div>
    </div>


  </div>

 


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="../../../unpkg.com/aos%402.3.0/dist/aos.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script>
    var mixer = mixitup('.gallery');
  </script>
  <script>
    AOS.init({
      offset: 100,
      easing: 'ease',
      delay: 0,
      once: true,
      duration: 800,

    });

  </script>

  <script>
    AOS.init({
      duration: 1000, /* Animation duration in milliseconds */
      offset: 200, /* Distance before animation is triggered */
      once: true   /* Whether animation should happen only once */
    });
  </script>

  <script>
    function updateTimeAndDate() {
      const timeElement = document.getElementById('time');
      const dateElement = document.getElementById('date');
      const now = new Date();

      // Set the date to always display October 31st, 2024
      const targetDate = new Date('October 31, 2024 00:00:00');
      dateElement.textContent = 'October 31, 2024';

      // Calculate the time left until October 31st, 2024
      const timeDifference = targetDate - now;

      // Check if the target date is in the future
      if (timeDifference > 0) {
        const daysLeft = String(Math.floor(timeDifference / (1000 * 60 * 60 * 24))).padStart(2, '0');
        const hoursLeft = String(Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
        const minutesLeft = String(Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
        const secondsLeft = String(Math.floor((timeDifference % (1000 * 60)) / 1000)).padStart(2, '0');

        // Display the countdown: Days, Hours, Minutes, Seconds
        timeElement.innerHTML = `
            <div class="countdown-box">
                <div><strong>${daysLeft}</strong><br>Days</div>
                <div><strong>${hoursLeft}</strong><br>Hours</div>
                <div><strong>${minutesLeft}</strong><br>Minutes</div>
              
            </div>
        `;
      } else {
        timeElement.innerHTML = `October 31st, 2024 has passed!`;
      }
    }

    // Call the updateTimeAndDate function every 1000ms (1 second)
    setInterval(updateTimeAndDate, 1000);

    // Call once on load to show the time and date immediately
    updateTimeAndDate();



  </script>

  <script>
    // When clicking on the text input, trigger the file input
    document.getElementById('file-text').addEventListener('click', function () {
      document.getElementById('file-upload').click(); // Trigger hidden file input
    });

    // When the file is selected, display its name in the text input
    document.getElementById('file-upload').addEventListener('change', function () {
      const fileInput = document.getElementById('file-upload');
      const fileText = document.getElementById('file-text');

      // Update the text input to show the name of the selected file
      if (fileInput.files.length > 0) {
        fileText.value = fileInput.files[0].name;
      } else {
        fileText.value = ''; // Reset if no file is selected
      }
    });



  </script>

</body>



</html>