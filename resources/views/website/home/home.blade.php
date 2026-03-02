@extends('spa.layout')
@section('content')
  <!-- ==================== Home-Slider Area (Start) ==================== -->  
  <section class="home">

    <!-- Home Slider -->
    <div class="swiper-container home-slider">
      <div class="swiper-wrapper">

    <!-- Home Slide-1 -->       
 @foreach($slides as $slide)
        <div class="swiper-slide home-item">
          <img src="{{ URL::asset('/storage/slides/'.$slide->photo) }}" alt="Home Image"> <!-- Slide Image -->
          <div class="content">
            <div class="text">
              <h3>{{$slide->photo_title}} </h3> <!-- Slide Subheading -->
              <p style="font-size:20px;color:#fff">{{$slide->photo_description}}</p>
              <a href="#" class="btn">Read more</a> <!-- Read more Page Button -->
            </div>
          </div>
        </div>
        @endforeach
  
      </div>
  
      <!-- Home Slider Pagination -->
      <div class="swiper-pagination swiper-pagination1"></div>
  
      <!-- Home Slider Navigation arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  
    </div>
  
  </section>  
  <!-- ==================== Home-Slider Area (End) ==================== -->     



  <!-- ==================== Features Area (Start) =================== -->
  <section class="features">

    <div class="box-container">
  
      <!-- Feature 1 - Clean & Safe Water -->
      <div class="feature-item">
        <i class="fas fa-droplet"></i>
        <h3>Clean & Safe Water</h3>
        <p>Drilling and development of boreholes, rehabilitation, construction of community water points to ensure reliable access to safe drinking water.</p>
      </div>
  
      <!-- Feature 2 - Training & Capacity Building -->
      <div class="feature-item">
        <i class="fas fa-users"></i>
        <h3>Training & Capacity Building</h3>
        <p>Equipping village leaders, CORPs, and CBWSOs with knowledge and tools to sustain WASH initiatives.</p>
      </div>
  
      <!-- Feature 3 - Sanitation and Hygiene Promotion -->
      <div class="feature-item">
        <i class="fas fa-soap"></i>
        <h3>Sanitation and Hygiene Promotion</h3>
        <p>Delivering workshops and school programs to encourage handwashing, menstrual hygiene, and disease prevention.</p>
      </div>
  
      <!-- Feature 4 - Monitoring & Advocacy -->
      <div class="feature-item">
        <i class="fas fa-chart-line"></i>
        <h3>Monitoring & Advocacy </h3>
        <p>Using data, case studies, and success stories to ensure sustainability in WASH projects.</p>
      </div>
  
    </div>
  
  </section>  
  <!-- ==================== Features Area (End) ==================== -->



  <!-- ==================== About Area (Start) ==================== -->
  <section class="about">
  
    <!-- About Image -->
    <div class="image">
      <div class="sub-image double">
        <img src="./assets/images/About/About-1.jpg" alt="About-Image1">
        <img src="./assets/images/About/About-2.jpg" alt="About-Image2">
      </div>
      <div class="sub-image last">
        <img src="./assets/images/About/About-3.jpg" alt="About-Image3">
        <div class="experience"><span>34</span> years of experience</div>
      </div>
    </div>
  
    <!-- Introduction Content -->
    <div class="content">
  
      <div class="heading">
        <div class="sub"><span>About Us</span></div> <!-- Sub Heading -->
        <h2>Ensured Access to Safe, Clean Water for Every Community</h2> <!-- Main Heading -->
      </div>
  
      <!-- Description -->
      <p>Community-Based Health Care Council(CBHCC) is a Tanzanian Non-Government Organization based in Arusha. We are a nationwide organization committed to improving wellbeing of people. We partner with individuals and groups from diverse background and values united by the belief that everyone deserves access to water, health, opportunity and hope.</p><p>Since 1992, CBHCC has been helping communities gain or improve access to safe, clean water and strengthened community-led sanitation practices. From construction of water supply structures to promoting water, sanitation and hygiene, our work is driven by collaboration, sustainability and dignity for all.</p>
  
      <!-- Key Features -->
      <ul class="about-features">
        <li><i class="fas fa-droplet"></i><span>Install WASH infrastructure to underserved communities, schools and health centres</span></li> <!-- Feature 1 -->
        <li><i class="fas fa-droplet"></i><span>Community mobilization for clean water and sanitation solutions</span></li> <!-- Feature 2 -->
        <li><i class="fas fa-droplet"></i><span>Training to local leaders and CORPs on WASH projects for sustainability</span></li> <!-- Feature 3 -->
        <li><i class="fas fa-droplet"></i><span>Monitoring and evaluation to ensure sustainability of implemented projects</span></li> <!-- Feature 4 -->
        <li><i class="fas fa-droplet"></i><span>Assess WASH needs, implement recommended technologies, and build local technical capacity</span></li> <!-- Feature 5 -->
      </ul>
  
    </div>
  
  </section>   
  <!-- ==================== About Area (End) ==================== -->



  <!-- ==================== Count Area (Start) ==================== -->
  <div class="counting">

    <!-- Statistic Box 1: CBHCC Projects -->
    <div class="box">
      <div class="info">
        <i class="fas fa-hard-hat"></i> <!-- Hard hat icon -->
        <div class="content">
          <h1 class="count" data-count="300">300+</h1> <!-- Count of CBHCC projects -->
          <h3>CBHCC Projects</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
    <!-- Statistic Box 2: Happy Communities -->
    <div class="box">
      <div class="info">
        <i class="fas fa-heart"></i> <!-- Heart icon -->
        <div class="content">
          <h1 class="count" data-count="1000">1,000+</h1> <!-- Count of happy communities -->
          <h3>Happy Communities</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
    <!-- Statistic Box 3: Years of Experience -->
    <div class="box">
      <div class="info">
        <i class="fas fa-calendar-alt"></i> <!-- Calendar icon -->
        <div class="content">
          <h1 class="count" data-count="30">30+</h1> <!-- Count of years of experience -->
          <h3>Years of Experience</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
    <!-- Statistic Box 4: Service Locations -->
    <div class="box">
      <div class="info">
        <i class="fas fa-map-marked-alt"></i> <!-- Map-marked-alt icon -->
        <div class="content">
          <h1 class="count" data-count="100">100+</h1> <!-- Count of service locations -->
          <h3>Service Locations</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
  </div>     
  <!-- ==================== Count Area (End) ==================== -->



  <!-- ==================== Why Choose Us Area (Start) ==================== -->
  <section class="whyUs linear-bg">

    <div class="box-container"> 

      <!-- Main Content Area -->
      <div class="content">
        <div class="text">

          <!-- Section Heading -->
          <div class="heading">  
            <div class="sub"><span>Why Choose Us</span></div> <!-- Sub Heading -->
            <h2>CBHCC programs are taken place around the country</h2>
          </div>

          <!-- Main Heading -->
          <p>At CBHCC, we're dedicated to enhancing the aesthetics and security of your home with our artisanal windows and doors.</p>
          
          <!-- Mission Points -->
          <ul class="whyUs-points">
            <li>
              <i class="fas fa-tools"></i> <!-- Tools icon -->
              <div class="text">
                <h5>Bespoke Solutions</h5>
                <p>We offer tailored window and door solutions to meet your unique needs, ensuring seamless integration with your home's style.</p>
              </div>
            </li>
            <li>
              <i class="fas fa-shield-alt"></i> <!-- Shield icon -->
              <div class="text">
                <h5>Enhanced Security</h5>
                <p>With our top-of-the-line security features, we provide unparalleled protection for your home, ensuring your peace of mind.</p>
              </div>
            </li>
            <li>
              <i class="fas fa-droplet"></i> <!-- Hammer icon -->
              <div class="text">
                <h5>Professional Craftsmanship</h5>
                <p>Our skilled artisans ensure meticulous installation of your windows and doors, ensuring superior performance and longevity.</p>
              </div>
            </li>
          </ul>
          
        </div>
      </div>

    </div>

  </section>     
  <!-- ==================== Why Choose Us Area (End) ==================== -->



  <!-- ==================== Process Slider Area (Start) ==================== -->
  <section class="process">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><span>how we work</span></div>
      <h2>Our Process</h2>
    </div>   

    <!-- Process Slider -->
    <div class="swiper-container process-slider">
      <div class="swiper-wrapper">
      
        <!-- Step 1: Assessment -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-1.jpg" alt="Assessment"> <!-- Step Image -->
          <div class="content">
            <h6>01</h6>
            <h3>Assessment</h3> <!-- Step Title -->
            <p>Includes baseline and technical surveys, community mobilization, resulting in effective project design.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 2: Project Design -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-2.jpg" alt="Project Design"> <!-- Step Image -->
          <div class="content">
            <h6>02</h6>
            <h3>Project Planning</h3> <!-- Step Title -->
            <p>It includes resource planning, stakeholder engagement and technical aspects ensuring WASH projects are practical and sustainable.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 3: Implementation -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-3.jpg" alt="Implementation"> <!-- Step Image -->
          <div class="content">
            <h6>03</h6>
            <h3>Implementation</h3> <!-- Step Title -->
            <p>Entails procuring materials, constructing water points, conducting triggering activities, household registration and training water committees,CORPs and LGAs to ensure sustainable and community-owned WASH solutions</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 4: Monitoring and Evaluation -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-4.jpg" alt="Monitoring and Evaluation"> <!-- Step Image -->
          <div class="content">
            <h6>04</h6>
            <h3>Monitoring and Evaluation</h3> <!-- Step Title -->
            <p>We conduct supervision visits, check functionality, plan maintenance, collect data, report progress and follow up with SWASH clubs to ensure our WASH projects stay effective and community-led.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 5: Project Handover -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-5.jpg" alt="Project Handover"> <!-- Step Image -->
          <div class="content">
            <h6>05</h6>
            <h3>Project Handover</h3> <!-- Step Title -->
            <p>This involves handing over to the government and community, conducting final evaluations and documenting lessons learned to ensure longterm sustainability and ownership.</p> <!-- Step Description -->
          </div>
        </div>
    

      </div>
    </div>

  </section>
  <!-- ==================== Process Slider Area (End) ==================== -->


  <!-- ==================== Banner Area (Start) ==================== -->
  <section class="banner">
    <div class="content">
  
      <div class="heading">
        <div class="sub"><span>Clean Water, Healthy Communities</span></div>
      </div>
      <h2>Discover sustainable WASH solutions that transform lives and protect futures</h2>
      <a href="./pages/Pages/Get-Quote.html" class="btn">Get a Quote</a>
  
    </div>
  </section>  
  <!-- ==================== Banner Area (End) ==================== -->




  <!-- ==================== Projects Area (Start) ==================== -->
  <section class="projects">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><span>Explore Our Work</span></div>
      <h2>Our Activities</h2>
    </div> 

    <!-- Projects Filter Buttons -->
    <ul class="tab-buttons">
      <li class="button active" data-filter="*">all</li> <!-- Display all activities -->
      <li class="button" data-filter=".social">Social Works</li> <!-- Filter by lock installation -->
      <li class="button" data-filter=".technical">Technical Works</li> <!-- Filter by emergency activities -->
      <li class="button" data-filter=".monitoring">Monitoring and Evaluation</li> <!-- Filter by security solutions -->
    </ul>
    
    <!-- Projects Container -->
    <div class="box-container">
  
      <!-- Project 1 - Community Mobilization -->
      <div class="project-item social">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-1.jpg" alt="Community Mobilization"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-1.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Social Works</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Community Mobilization</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 2 - Drilling -->
      <div class="project-item technical">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-2.jpg" alt="Drilling"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-2.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Technical Works</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Drilling</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 3 - Triggering -->
      <div class="project-item social">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-3.jpg" alt="Triggering"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-3.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Social Works</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Triggering</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 4 - Water Quality -->
      <div class="project-item monitoring">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-4.jpg" alt="Water Quality"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-4.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Monitoring and Evaluation</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Water Quality</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 5 - Solar Installations -->
      <div class="project-item technical">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-5.jpg" alt="Solar Installations"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-5.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Technical Works</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Solar Installations</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 6 - Water Point Functionality -->
      <div class="project-item monitoring">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-6.jpg" alt="Water Point Functionality"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-6.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Monitoring and Evaluation</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Water Point Functionality</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
    </div>

  </section> 
  <!-- ==================== Projects Area (End) ==================== -->



  <!-- ==================== Testimonials Area (Start) ==================== -->    
  <section class="testimonial-bg linear-bg">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><i class="fa-solid fa-comment"></i><span>What Our Beneficiaries Say</span><i class="fa-solid fa-comment"></i></div> <!-- Sub Heading -->
      <h2>Beneficiaries Testimonials</h2> 
    </div>    
  
    <!-- Testimonial Slider -->
    <div class="swiper-container testimonial-slider">
  
      <div class="swiper-wrapper">
    
        <!-- Testimonial Slide 1 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"WoodCraft's team provided excellent service! Their attention to detail and quality craftsmanship exceeded my expectations."</p>
          <img src="./assets/images/Testimonials/Pic-1.jpg" alt="Author-Pic">
          <div class="text">
            <h4>John Doe</h4>
            <h6>Homeowner</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
        <!-- Testimonial Slide 2 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"I am extremely satisfied with the woodwork installed by WoodCraft. The whole process was seamless and hassle-free."</p>
          <img src="./assets/images/Testimonials/Pic-2.jpg" alt="Author-Pic">
          <div class="text">
            <h4>Jane Smith</h4>
            <h6>Homeowner</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
        <!-- Testimonial Slide 3 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"The team at WoodCraft is professional and knowledgeable. I highly recommend their services to anyone looking for quality woodwork."</p>
          <img src="./assets/images/Testimonials/Pic-3.jpg" alt="Author-Pic">
          <div class="text">
            <h4>Michael Thompson</h4>
            <h6>Builder</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
        <!-- Testimonial Slide 4 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"WoodCraft's commitment to quality and customer satisfaction is commendable. I am delighted with the results!"</p>
          <img src="./assets/images/Testimonials/Pic-4.jpg" alt="Author-Pic">
          <div class="text">
            <h4>Emily Johnson</h4>
            <h6>Architect</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
      </div>
  
      <!-- Testimonial Slider Pagination -->
      <div class="swiper-pagination swiper-pagination3"></div>
  
    </div>
  
  </section>  
  <!-- ==================== Testimonials Area (End) ==================== -->





  <!-- ==================== Get A Quote Area (Start) ==================== -->
  <section class="get-quote linear-bg">

    <div class="box-container">

      <div class="content">

        <form class="dark-form" id="quote-form" method="post">

          <!-- Form Heading -->
          <div class="heading">
            <div class="sub"><span>Clean Water, Healthy Communities</span></div>
            <h2>Request A Quote</h2>
          </div>

          <div class="input-box">

            <!-- Name Input Field -->
            <div class="input-field"> 
              <label for="name" class="fa-solid fa-user"></label>
              <input type="text" name="name" class="box" id="name" placeholder="Name" required>
            </div>

            <!-- Email Input Field -->
            <div class="input-field">
              <label for="email" class="fa-solid fa-envelope"></label>
              <input type="email" name="email" class="box" id="email" placeholder="Email" required>
            </div>

          </div>

          <div class="input-box">

            <!-- Phone Number Input Field -->
            <div class="input-field">
              <label for="number" class="fa-solid fa-phone"></label>
              <input type="number" name="number" class="box" id="number" placeholder="Phone Number" required>
            </div>

          

          <div class="input-box">

                        
            <!-- Date Input Field -->
            <div class="input-field">
              <label for="date" class="fa-solid fa-calendar"></label>
              <input type="text" name="date" placeholder="Date" id="date" class="box" onfocus="(this.type='date')" onblur="(this.type='text')" required>
            </div>

          </div>


          <!-- Submit Button for Booking Confirmation -->
          <button type="submit" class="btn" name="submit" id="submit">submit</button>
          <span class="alert" id="msg"></span>

        </form>

      </div>

    </div>

  </section>  
  <!-- ==================== Get A Quote Area (End) ==================== -->
    

 


  <!-- ==================== Newsletter Area (Start) ==================== -->
<div class="heading"> 
      <div class="sub"><i class="fa-solid fa-envelope-open-text"></i><span>Newsletter</span></div> <!-- Sub Heading -->
      <h2>Hear from us</h2> 
    </div>

  <section class="newsletter-subscribe">
    <div class="content">
      <h2>Subscribe To Our Newsletter</h2> <!-- Newsletter Heading -->
      <p>Stay informed about the latest project in WASH, new projects, and special promotions.</p> <!-- Newsletter Description -->
      <!-- Newsletter Description -->
      <form class="newsletter-form" method="post" id="newsletter-form-1">
        <div class="box-container">
          <input type="email" id="sub-email-1" name="email" placeholder="Your email address" required>
          <!-- Email Input Field -->
          <button type="submit" class="btn" name="submit" id="submit-1">Subscribe</button> <!-- Subscribe Button -->
        </div>
        <!-- Alert Message -->
        <span class="alert" id="msg-1"></span>
      </form>
    </div>
  </section>
  <!-- ==================== Newsletter Area (End) ==================== -->



  <!-- ==================== Blogs Area (Start) ==================== -->
  <section class="blog main">

    <!-- Section Heading -->
    <div class="heading"> 
      <div class="sub"><span>our recent articles</span></div> <!-- Sub Heading -->
      <h2>our blogs</h2> 
    </div>
  
    <!-- Latest Blogs -->
    <div class="box-container">

      <!-- Blog-1 -->
      <div class="blog-item">
        <div class="image">
          <img src="./assets/images/Blog/Blogs/Blog-1.jpg" alt="Blog-Image"> <!-- Blog Image -->
          <div class="date"><span>22</span> Feb</div> <!-- Blog Date -->
        </div>
        <div class="content">
          <a class="main-heading" href="./pages/Blog/Blog-Single.html">Renovating Your Kitchen Cabinets: Before and After</a> <!-- Blog Title -->
          <div class="details">
            <h3><i class="fa-solid fa-circle-user"></i><span>By Admin</span></h3> <!-- Blog Author -->
            <h3><i class="fa-solid fa-tags"></i><span>Project Ideas</span></h3> <!-- Blog Category -->
          </div>
        </div>
      </div>

      <!-- Blog-2 -->
      <div class="blog-item">
        <div class="image">
          <img src="./assets/images/Blog/Blogs/Blog-2.jpg" alt="Blog-Image"> <!-- Blog Image -->
          <div class="date"><span>15</span> Feb</div> <!-- Blog Date -->
        </div>
        <div class="content">

          <a class="main-heading" href="./pages/Blog/Blog-Single.html">Mastering Basic Woodworking Joints</a> <!-- Blog Title -->
          <div class="details">
            <h3><i class="fa-solid fa-circle-user"></i><span>By Admin</span></h3> <!-- Blog Author -->
            <h3><i class="fa-solid fa-tags"></i><span>Woodworking Techniques</span></h3> <!-- Blog Category -->
          </div>
        </div>
      </div>

      <!-- Blog-3 -->
      <div class="blog-item">
        <div class="image">
          <img src="./assets/images/Blog/Blogs/Blog-3.jpg" alt="Blog-Image"> <!-- Blog Image -->
          <div class="date"><span>05</span> Feb</div> <!-- Blog Date -->
        </div>
        <div class="content">

          <a class="main-heading" href="./pages/Blog/Blog-Single.html">The Rise of Minimalist Wood Furniture</a> <!-- Blog Title -->
          <div class="details">
            <h3><i class="fa-solid fa-circle-user"></i><span>By Admin</span></h3> <!-- Blog Author -->
            <h3><i class="fa-solid fa-tags"></i><span>Design Trends</span></h3> <!-- Blog Category -->
          </div>
        </div>
      </div>

    </div>  
  </section>
  <!-- ==================== Blogs Area (End) ==================== -->


   <!-- ==================== Clients Area (Start) ==================== -->
  <section class="home-clients clients">
    <!-- Client Slider Container -->
    <div class="swiper-container client-slider">



      <!-- Clients Logo -->
      <div class="swiper-wrapper">
  @foreach($donors as $donor)

<div class="swiper-slide client-item"><a href="#"><img src="{{ URL::asset('/storage/donor_photos/'.$donor->logo) }}" alt="Client-Logo"  style="width:60px;height:40px"></a>

<p>{{$donor->donor_name}}</p>
</div>
@endforeach



        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-1.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-2.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-3.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-4.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-5.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-6.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-7.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-8.png" alt="Client-Logo"></a></div>
      </div>
    </div> 
      </section>
@endsection