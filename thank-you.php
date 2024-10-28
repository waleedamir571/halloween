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
  <link href="./css/style.css" rel="stylesheet">

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
        <a class="navbar-brand d-flex align-items-center justify-content-between" href="index.html">
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

    <div class="banner-inside1">

      <div class="bat-container">
        <div class="bat"><span></span></div>
      </div>
      <div class="bat-container small-bats">
        <div class="bat"><span></span></div>
      </div>

      <div class="bats-div-img">
        <img src="images/bat_animation.gif" alt="lk" />
      </div>




      <div class="container banner-text1">



        <div class="row text-center">
            <div class="col-md-6 offset-md-3 pt-5 position-relative" >
                <h1 style="color: black;">Thank
                    <span class=" fw-lighter thank-h" style="color: black;">

                        You</span>
                </h1>
                <p class="mt-3 mb-4 thank" style="color: black;">
                    Thank you for reaching out! We appreciate your message. Our team will review your inquiry and
                    get back to you shortly. Expect to hear from us via email or phone, whichever contact method you
                    provided. In the meantime, feel free to explore our website for more information about our
                    services. We look forward to connecting with you soon!
                </p>
                <p><a href="index.html" class="btn get-btn">Back to Home</a>
                </p>
            </div>
        </div>



      </div>


    </div>
   
    






  </section>



  <div class="offcanvas offcanvas-start mobile-menu-div" tabindex="-1" id="mobile-menu"
    aria-labelledby="offcanvasExampleLabel" aria-modal="true" role="dialog" style="visibility: visible;">
    <div class="offcanvas-header">

      <button type="button" class="close-menu" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fas fa-times-circle"></i>
      </button>
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