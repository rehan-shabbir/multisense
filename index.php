<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTML Template</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <script src="assests/js/jquery.js"></script>

    <!-- Include scripts using PHP -->
    <?php require('functions.php'); ?>
   

</head>

<body>

<?php include('header.php'); ?>
<div class="content">


<section class="Banner-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-9 col-md-3 col-sm-12 col-lg-12 col-xl-3 text-center">
      
        <img class="img-fluid" src="assests/images/mobile.png" sizes="100vw" srcset="assests/images/mobile.png 480w,
                 assests/images/mobile.png 768w,
                 assests/images/mobile.png 1200w,
                 assests/images/mobile.png 2048w, " />
      </div>
      <div class="col-12 col-md-3 col-sm-12 col-lg-12 col-xl-6 mt-5">
        <div class="heading">
          <h1>Find <span>everything</span> With using your <span class="voice-bg">voice</span>
          </h1>
        </div>
        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore</p>
        </div>
        <div class="icon-btn text-center">
          <a href="https://play.google.com/store/apps/details?id=com.zantise.multisense&pli=1" target="_blank" class="btn btn-white btn-store-download btn-app-store">
            <div class="d-flex">
              <div class="btn-store-download--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 36 32" fill="none">
                  <path d="M22.8936 3.30806C23.4988 2.25173 23.137 0.902529 22.0856 0.294548C21.0341 -0.313433 19.6912 0.0500316 19.086 1.10637L18.0305 2.94884L16.975 1.10637C16.3698 0.0500316 15.0269 -0.313433 13.9754 0.294548C12.924 0.902529 12.5622 2.25173 13.1674 3.30806L15.496 7.37285L8.13049 20.2298H2.19661C0.983455 20.2298 0 21.2178 0 22.4366C0 23.6554 0.983455 24.6435 2.19661 24.6435H22.8649C23.046 24.1651 23.2368 23.3443 23.0339 22.5899C22.7288 21.4558 21.6 20.2298 19.7085 20.2298H13.1994L22.8936 3.30806Z" fill="url(#paint0_linear_34_4)" />
                  <path d="M9.27281 27.0838C8.89803 26.6657 8.05833 25.9975 7.32203 25.7775C6.19934 25.4422 5.34825 25.6526 4.91885 25.8359L3.28264 28.6919C2.67748 29.7483 3.03926 31.0975 4.0907 31.7055C5.14213 32.3134 6.48507 31.95 7.09024 30.8936L9.27281 27.0838Z" fill="url(#paint1_linear_34_4)" />
                  <path d="M30.4591 24.6435H33.8034C35.0165 24.6435 36 23.6554 36 22.4366C36 21.2178 35.0165 20.2298 33.8034 20.2298H27.9305L21.315 8.68216C20.8236 9.15134 19.8814 10.35 19.739 11.7089C19.5559 13.456 19.8305 14.9272 20.6542 16.3678C23.4236 21.2112 26.1973 26.0525 28.9708 30.8936C29.5759 31.95 30.9189 32.3134 31.9703 31.7055C33.0218 31.0975 33.3835 29.7483 32.7784 28.6919L30.4591 24.6435Z" fill="url(#paint2_linear_34_4)" />
                  <defs>
                    <linearGradient id="paint0_linear_34_4" x1="18" y1="0" x2="18" y2="32" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#2AC9FA" />
                      <stop offset="1" stop-color="#1F65EB" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_34_4" x1="18" y1="0" x2="18" y2="32" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#2AC9FA" />
                      <stop offset="1" stop-color="#1F65EB" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_34_4" x1="18" y1="0" x2="18" y2="32" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#2AC9FA" />
                      <stop offset="1" stop-color="#1F65EB" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="btn-text">
                <div class="btn-store-download-subtitle">Get it on</div>
                <div class="btn-store-download-title">App Store</div>
              </div>
            </div>
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.zantise.multisense&pli=1" target="_blank" class="btn btn-white btn-store-download btn-play-store">
            <div class="d-flex">
              <div class="btn-store-download--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 30 32" fill="none">
                  <path d="M0.7812 31.4419L16.3598 15.7757L1.03777 0.367638C0.426503 0.759497 0 1.43603 0 2.25696V29.7431C0 30.4435 0.31044 31.0388 0.7812 31.4419Z" fill="url(#paint0_linear_32_18)" />
                  <path d="M28.3672 14.0312C29.9289 14.8906 29.9289 17.1094 28.3672 17.9687L22.0666 21.4358L16.3598 15.7756L21.7756 10.404L28.3672 14.0312Z" fill="url(#paint1_linear_32_18)" />
                  <path d="M22.0665 21.4359L16.3597 15.7756L0.781097 31.4418C1.46617 32.0284 2.49079 32.2079 3.39228 31.7118L22.0665 21.4359Z" fill="url(#paint2_linear_32_18)" />
                  <path d="M1.03779 0.367569L16.3597 15.7756L21.7755 10.404L3.39231 0.288185C2.59749 -0.14919 1.70694 -0.0613824 1.03779 0.367569Z" fill="url(#paint3_linear_32_18)" />
                  <defs>
                    <linearGradient id="paint0_linear_32_18" x1="10.6793" y1="9.69089" x2="0.0874533" y2="20.3698" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#00C3FF" />
                      <stop offset="1" stop-color="#1BE2FA" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_32_18" x1="16.3598" y1="15.7756" x2="30.4474" y2="15.7756" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#FFCE00" />
                      <stop offset="1" stop-color="#FFEA00" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_32_18" x1="0.454399" y1="33.3541" x2="19.1937" y2="18.3305" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#DE2453" />
                      <stop offset="1" stop-color="#FE3944" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_32_18" x1="1.3633" y1="-1.35216" x2="19.1969" y2="13.2141" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#11D574" />
                      <stop offset="1" stop-color="#01F176" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="btn-text">
                <div class="btn-store-download-subtitle">Get it on</div>
                <div class="btn-store-download-title">Play Store</div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-lg-12 col-xl-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="370" height="556" viewBox="0 0 478 556" fill="none">
          <g style="mix-blend-mode:overlay">
            <path d="M324.275 456.652C286.824 456.652 249.337 455.632 211.922 457.017C188.84 457.855 165.757 457.892 142.674 458.475C137.021 458.621 131.691 457.418 126.362 456.215C119.015 454.538 117.179 449.544 118.907 441.743C123.805 419.908 138.317 403.177 148.184 383.966C157.258 366.25 169.286 350.211 176.704 331.475C181.998 318.06 184.518 304.208 180.773 290.757C176.668 275.958 162.048 263.746 147.32 261.122C138.389 259.554 129.314 260.976 121.248 265.058C107.672 271.984 97.9852 282.993 90.4591 295.751C68.6727 332.823 47.1745 370.078 26.0364 407.514C16.2055 424.902 6.80683 442.764 2.37754 462.448C-7.45331 505.899 13.4688 545.669 60.2103 553.324C83.329 557.079 318.981 554.563 411.78 555.876C441.273 556.277 475.051 555.657 504.507 554.746C533.496 553.871 556.074 540.31 569.47 513.044C581.894 487.746 577.933 463.505 564.969 440.103C554.778 421.658 543.543 403.796 533.064 385.534C512.141 349.118 491.399 312.629 470.621 276.14C437.456 217.889 404.218 159.675 371.233 101.278C362.482 85.7855 354.308 69.8558 345.017 54.801C336.518 41.0584 330.577 25.2381 317.397 14.5211C300.148 0.523355 269.431 -6.80358 249.841 8.61579C239.758 16.5989 234.213 36.028 237.058 50.7548C241.523 73.8291 254.379 92.5657 265.83 112.177C282.719 141.12 299.284 170.246 315.993 199.298C345.809 251.206 375.554 303.151 405.37 355.059C418.01 377.077 431.226 398.766 443.361 421.038C447.251 428.183 450.996 435.911 451.284 444.659C451.608 454.429 449.699 456.616 440.049 456.616C404.83 456.616 369.612 456.616 334.394 456.616C331.045 456.616 327.696 456.616 324.347 456.579L324.275 456.652ZM201.263 142.469C229.099 141.011 248.869 161.716 250.021 187.488C251.282 215.155 228.883 234.475 208.609 236.188C176.272 238.922 156.034 211.692 157.655 189.456C155.998 162.627 178.253 143.672 201.263 142.469Z" fill="white" />
          </g>
        </svg>
      </div>
    </div>
  </div>
</section>


<section class="section-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-6 section-style">
        <h2 class=""> Stay happy with your <span class="voice-bg">voice</span>
        </h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t empor incididunt ut labore et dolore </p>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-6 text-center">
      <img style="width: 65%;" src="assests/images/wing.png" class="img-fluid" alt="..." />
      </div>
    </div>
  </div>
</section>






<section class="section-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-5">
        <h2>Amazing <span> chat </span>
          <br>listen and hear
        </h2>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-6 text-right">
        <svg class="svg-icon-style-1" xmlns="http://www.w3.org/2000/svg" width="131" height="125" viewBox="0 0 131 125" fill="none">
          <path opacity="0.5" d="M68.8441 120.309C37.3435 124.343 21.5933 126.36 12.342 119.534C7.94768 116.291 4.57025 111.861 2.60762 106.765C-1.52419 96.0355 4.59292 81.3822 16.8272 52.0755C29.0614 22.7689 35.1785 8.11558 45.7076 3.5201C50.709 1.33723 56.2311 0.630079 61.6235 1.48193C72.9758 3.2753 82.6089 15.9117 101.875 41.1844C121.141 66.4571 130.775 79.0934 129.497 90.5152C128.89 95.9406 126.745 101.078 123.315 105.323C116.095 114.258 100.345 116.275 68.8441 120.309Z" stroke="white" stroke-width="2" />
        </svg>
        <svg class="svg-icon-style-2" xmlns="http://www.w3.org/2000/svg" width="132" height="126" viewBox="0 0 132 126" fill="none">
          <path opacity="0.5" d="M69.4061 120.899C37.9055 124.933 22.1553 126.95 12.904 120.124C8.50969 116.882 5.13226 112.451 3.16964 107.355C-0.962182 96.6258 5.15494 81.9725 17.3892 52.6659C29.6234 23.3592 35.7405 8.70591 46.2697 4.11043C51.271 1.92756 56.7931 1.22041 62.1855 2.07227C73.5378 3.86563 83.1709 16.502 102.437 41.7747C121.703 67.0474 131.337 79.6838 130.059 91.1055C129.452 96.5309 127.307 101.668 123.877 105.913C116.657 114.849 100.907 116.866 69.4061 120.899Z" stroke="white" stroke-width="2" />
        </svg>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-3 mt-4 mt-sm-0">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t empor incididunt ut labore et dolore</p>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-5 mt-4 mb-4 mb-sm-0 mt-sm-0">
        <img src="assests/images/mobile-listen.png" class="img-fluid" alt="..." />
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-3 mt-4 mt-sm-0 text-right d-flex align-items-end">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t empor incididunt ut labore et dolore</p>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-6">
        <svg class="svg-icon-style-3" xmlns="http://www.w3.org/2000/svg" width="131" height="125" viewBox="0 0 131 125" fill="none">
          <path opacity="0.5" d="M68.8441 120.309C37.3435 124.343 21.5933 126.36 12.342 119.534C7.94768 116.291 4.57025 111.861 2.60762 106.765C-1.52419 96.0355 4.59292 81.3822 16.8272 52.0755C29.0614 22.7689 35.1785 8.11558 45.7076 3.5201C50.709 1.33723 56.2311 0.630079 61.6235 1.48193C72.9758 3.2753 82.6089 15.9117 101.875 41.1844C121.141 66.4571 130.775 79.0934 129.497 90.5152C128.89 95.9406 126.745 101.078 123.315 105.323C116.095 114.258 100.345 116.275 68.8441 120.309Z" stroke="white" stroke-width="2" />
        </svg>
        <svg class="svg-icon-style-4" xmlns="http://www.w3.org/2000/svg" width="132" height="126" viewBox="0 0 132 126" fill="none">
          <path opacity="0.5" d="M69.4061 120.899C37.9055 124.933 22.1553 126.95 12.904 120.124C8.50969 116.882 5.13226 112.451 3.16964 107.355C-0.962182 96.6258 5.15494 81.9725 17.3892 52.6659C29.6234 23.3592 35.7405 8.70591 46.2697 4.11043C51.271 1.92756 56.7931 1.22041 62.1855 2.07227C73.5378 3.86563 83.1709 16.502 102.437 41.7747C121.703 67.0474 131.337 79.6838 130.059 91.1055C129.452 96.5309 127.307 101.668 123.877 105.913C116.657 114.849 100.907 116.866 69.4061 120.899Z" stroke="white" stroke-width="2" />
        </svg>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-5 mt-4 mt-sm-0 text-right">
        <h2>Don’t worry, <br>you have <span>history</span>
        </h2>
      </div>
    </div>
  </div>
</section>





<section class="section-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-6 m-auto text-center">
        <h2 class=""> Stay happy with your <span class="voice-bg">voice</span>
        </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore, Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
      </div>
      <div class="col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-end flex-wrap mt-4 package">
        <div class="col-12 col-sm-12 col-md-4  col-lg-12 col-xl-3 mb-5 mb-md-0">
          <h3 class="pk-offer">SAVE 67%</h3>
          <div class="package-details">
            <h3 class="pk-name">Best Value</h3>
            <h3 class="pk-number">12</h3>
            <p class="pk-mounth">month</p>
            <p class="price-per-mounth">$2.67/mo</p>
            <h3 class="pk-price">$31.99</h3>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4  col-lg-12 col-xl-3 mb-5 mb-md-0">
          <h3 class="pk-offer">SAVE 50%</h3>
          <div class="package-details package-border">
            <h3 class="pk-name pk-style">Most Popular</h3>
            <h3 class="pk-number">6</h3>
            <p class="pk-mounth">month</p>
            <p class="price-per-mounth">$2.67/mo</p>
            <h3 class="pk-price">$23.99</h3>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4  col-lg-12 col-xl-3 mb-5 mb-md-0">
          <h3 class="pk-offer"></h3>
          <div class="package-details">
            <h3 class="pk-name">Starter</h3>
            <h3 class="pk-number">1</h3>
            <p class="pk-mounth">month</p>
            <p class="price-per-mounth">$2.67/mo</p>
            <h3 class="pk-price">$7.99</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section-5">
  <div class="rehan-st"></div>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-4 mb-3">
        <img class="img-fluid" src="assests/images/mm.png" alt="" />
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-4 mt-5">
        <div class="text-style mt-4">
           <h3>Carol Danvers</h3>
           <p class="des-style pl-4 pr-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore,</p>
        </div>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-4 text-right">
        <h2><span class="color-style">Thanks</span><br>to be<br> Multisense<br> family</h2>
      </div>
    </div>
  </div>
</section>




<section class="section-6">
<div class="rehan-sty"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-9 mb-3 text-center">
        <h2>You are <span class="color-style">invited!</span>
        </h2>
        <h2>Help Multisense to make excellent for you</h2>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-5 mb-4 text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t empor incididunt ut labore et dolore</p>
      </div>
      <div class="col-11 col-md-12 col-sm-12 col-lg-12 col-xl-8 contact-form text-center">
        <form>
          <label for="name"></label>
          <input type="text" id="name" name="name" placeholder="Full Name" required>
          <label for="email"></label>
          <input type="email" id="email" name="email" placeholder="Email Address" required>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>


































</div>
  <?php include('footer.php'); ?>

<!-- Include scripts using PHP -->
    <?php require('main.js'); ?>

</body>
</html>
