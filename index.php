
<?php
$title = "Home";
include "head.php";
?>


<body>

<?php
include "nav.php";
?>


    <!-- slider img -->
    <section class="hero-section">
        <div class="overlay">
            <div class="content">
                <h1>Ongoing Developments at Soorya Properties</h1>
                <p>Explore the progress of our current projects, each designed to offer premium <br> residential plots and
                    secure investment opportunities</p>
                <a href="#" class="cta-btn">View Projects</a>
            </div>
        </div>
    </section>




    <!-- -----------------ABOUT US  ---------------------------------------------->

        

    <section class="about">
        <div class="container">
       
        <div class="company-overview">
          
                  <div class="overview-image">
                      <img src="image/about.png" alt="about img">
                  </div>
          
          
          <div class="about-con">
          <h2 >About us
            <span class="line"><hr class="highlight"></span>
          </h2>
                      <p>At Soorya Properties and Management, we have been a trusted name in real estate development since 1986. With over three decades of experience, we specialize in delivering BDA and RERA approved residential plots and commercial projects. Our journey began with a vision to transform the real estate landscape by providing top-tier properties that cater to the diverse needs of homeowners and investors alike.We are proud to have developed 700 acres of land across prime locations such as HSR Layout, Ambalipura, Harlur, Doddanagamangala, Chikkanagamangala, and Gattahalli. </p>
                      <p>Our projects are strategically located with seamless connectivity to major hubs, schools, healthcare facilities, and entertainment centers. This ensures that residents and investors alike benefit from unparalleled convenience and ease of access to essential amenitiesAt the heart of our operations is a commitment to quality, transparency, and customer satisfaction. </p>
                  <a href="about"><b>Read more </b></a>
          </div>

        </div>
        
        </div>
    </section>






    <!-- -------------why choose----------- -->
    <div class="why-choose-us">
        <h2>Why Choose Us</h2>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
        <span class="line"><hr class="highlight"></span>

        <div class="features">
            <div class="feature-item">
                <i class="fas fa-shield-alt"></i>
                <h3>Safe Investments</h3>
                <p>We help you find a new home by offering a smart real estate experience.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-headset"></i>
                <h3>Customer Support</h3>
                <p>Find an experienced agent who knows your market best.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cube"></i>
                <h3>Complete Infrastructure</h3>
                <p>Millions of houses and apartments in your favourite cities.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Strategic Locations</h3>
                <p>Our projects are situated in prime areas with easy access to essential amenities, making them ideal
                    for both living and investment purposes.</p>
            </div>
        </div>
    </div>



    <!--  ------------project---------------------->

    <section class="project-sec">
    <div class="container">
    <div class="header">
            <h2>Our projects</h2>
            <p>Track the Development of Our Premier Residential and Commercial Spaces in Real-Time.</p>
            <span class="line"><hr class="highlight"></span>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
        
        <a href="project">
        <div class="col project">
              <div class="card h-100">
                <img src="./image/project (1).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">On Going Project</h5>
                </div>
              </div>
            </div>
        </a>

        <a href="gallery">
            <div class="col  project">
              <div class="card h-100">
                <img src="./image/project (3).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Up Coming Project</h5>
                </div>
              </div>
            </div>
                    </a>

            
                    <a href="gallery">
            <div class="col project">
              <div class="card h-100">
                <img src="./image/project (2).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Up Coming Project </h5>
                </div>
              </div>
            </div>
                    </a>

            
          </div>
    
    </div></section>




    <section class="property-section">
        <div class="container">
            <div class="heading">
                <h2>Best Properties</h2>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                <div class="underline"></div>
            </div>


            <div class="row">

            <div class="col-sm-12 col-md-6  col-lg-6">
            <div class="property-item">
                    <img src="./image/p1.png" alt="Tennis Court">
                </div>

                <div class="row">
                <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="property-item">
                    <img src="./image/p2.png" alt="Swimming Pool">
                </div>
                  </div>
                  <div class="col-sm-12 col-md-6  col-lg-6">
                  <div class="property-item">
                    <img src="./image/p3.png" alt="Construction Site">
                </div> 
                  </div>
                </div>

              </div>

              <div class="col-sm-12 col-md-6  col-lg-6">
              <div class="property-item">
                    <img src="./image/p4.png" alt="Volleyball Court">
                </div>
              </div>
            </div>

        </div>
    </section>


    <div class="container map">
            <img src="./image/map.png" alt="">
    </div>


    <?php
    include('footer.php');
    ?>

</body>

</html>