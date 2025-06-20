@extends('spa.layout')
@section('content')


  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>about us</h2> 
    </div> 

    <div class="link">
      <a href="../../index.html">Home</a>
      <i class="fa-solid fa-angles-right"></i>
      <span class="page">about us</span>
    </div>
  </div>

<div style="padding-top:30px">
</div>


    <!-- ========== Why Choose Us Area (Start) ========== -->

    @isset($aboutusw)
    <section class="whyUs linear-bg" style="background-image:url('{{ URL::asset('/storage/aboutus/'.$aboutusw->mission_photo) }}');background-position:center;background-size: cover;">

      <div class="box-container"> 
  
        <!-- Main Content Area -->
        <div class="content">
          <div class="text">
  
            <!-- Section Heading -->
            <div class="heading">  
           <!-- Sub Heading -->
              <h2>MISSION</h2>
            </div>
  
            <!-- Mission Points -->
            <ul class="whyUs-points">
              <li>
                <i class="fas fa-tools"></i> <!-- Tools icon -->
                <div class="text">
                  <h5>Mission</h5>
                  <p>{{$aboutusw->mission}}.</p>
                </div>
              </li>            
            </ul>
            
          </div>
        </div>  
      </div>  
    </section>  
@endisset
{{--
  <section class="about">
  
      <!-- About Image -->
      <div class="image">      
        <div class="sub-image last">
          <img src="../../assets/images/About/About-3.jpg" alt="About-Image3">
          <div class="experience"><span>25</span> years of experience</div>
        </div>
      </div>  
    
    </section>
    --}}

<div style="padding-top:15px;">
       </div>  


    <!-- ========== Why Choose Us Area (Start) ========== -->
      @isset($aboutusw)
    <section class="whyUs linear-bg" style="background-image:url('{{ URL::asset('/storage/aboutus/'.$aboutusw->vision_photo) }}');background-position: center;background-size: cover;">

      <div class="box-container">
  
        <!-- Main Content Area -->
        <div class="content">
          <div class="text">  
            <!-- Section Heading -->
            <div class="heading">  
           <!-- Sub Heading -->
              <h2>VISION</h2>
            </div>
  
            <!-- Mission Points -->
            <ul class="whyUs-points">
              <li>
                <i class="fas fa-tools"></i> <!-- Tools icon -->
                <div class="text">
                  <h5>Mission</h5>
                  <p>{{$aboutusw->vision}}.</p>
                </div>
              </li>            
            </ul>
            
          </div>
        </div>  
      </div>  
    </section> 
  @endisset

 
    <!-- ========== Count Area (Start) ========== -->
    <div class="counting">
      <!-- Statistic Box 1: Woodwork Projects -->
      <div class="box">
        <div class="info">
          <i class="fas fa-hammer"></i> <!-- Hammer icon -->
          <div class="content">
            <h1 class="count" data-count="20000">20,000+</h1> <!-- Count of woodwork projects -->
            <h3>Woodwork Projects</h3> <!-- Statistic description -->
          </div>
        </div>
      </div>
    
      <!-- Statistic Box 2: Happy Clients -->
      <div class="box">
        <div class="info">
          <i class="fas fa-heart"></i> <!-- Heart icon -->
          <div class="content">
            <h1 class="count" data-count="30000">30,000+</h1> <!-- Count of happy clients -->
            <h3>Happy Clients</h3> <!-- Statistic description -->
          </div>
        </div>
      </div>
    
      <!-- Statistic Box 3: Years of Experience -->
      <div class="box">
        <div class="info">
          <i class="fas fa-calendar-alt"></i> <!-- Calendar icon -->
          <div class="content">
            <h1 class="count" data-count="25">25+</h1> <!-- Count of years of experience -->
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
    <!-- ========== Process Slider Area (Start) ========== -->
    <section class="process">

      <!-- Section Heading -->
      <div class="heading">
        <div class="sub"><i class="fa-solid fa-hammer"></i><span>how we work</span><i class="fa-solid fa-hammer"></i></div>
        <h2>Our Process</h2>
      </div>   
  
      <!-- Process Slider -->
      <div class="swiper-container process-slider">
        <div class="swiper-wrapper">
        
          <!-- Step 1: Assessment -->
          <div class="swiper-slide process-item">
            <img src="../../assets/images/Process/Process-1.jpg" alt="Assessment"> <!-- Step Image -->
            <div class="content">
              <h6>01</h6>
              <h3>Assessment</h3> <!-- Step Title -->
              <p>Thorough evaluation of your woodworking needs and requirements to provide tailored solutions.</p> <!-- Step Description -->
            </div>
          </div>
      
          <!-- Step 2: Design -->
          <div class="swiper-slide process-item">
            <img src="../../assets/images/Process/Process-2.jpg" alt="Design"> <!-- Step Image -->
            <div class="content">
              <h6>02</h6>
              <h3>Design</h3> <!-- Step Title -->
              <p>Professional design and customization of woodworking projects to match your space's aesthetics and requirements.</p> <!-- Step Description -->
            </div>
          </div>
      
          <!-- Step 3: Craftsmanship -->
          <div class="swiper-slide process-item">
            <img src="../../assets/images/Process/Process-3.jpg" alt="Craftsmanship"> <!-- Step Image -->
            <div class="content">
              <h6>03</h6>
              <h3>Craftsmanship</h3> <!-- Step Title -->
              <p>Expert craftsmanship in woodworking with precision and attention to detail to ensure optimal results.</p> <!-- Step Description -->
            </div>
          </div>
      
          <!-- Step 4: Quality Check -->
          <div class="swiper-slide process-item">
            <img src="../../assets/images/Process/Process-4.jpg" alt="Quality Check"> <!-- Step Image -->
            <div class="content">
              <h6>04</h6>
              <h3>Quality Check</h3> <!-- Step Title -->
              <p>Rigorous quality checks and inspections to verify the functionality and durability of crafted woodwork.</p> <!-- Step Description -->
            </div>
          </div>
      
          <!-- Step 5: Finishing -->
          <div class="swiper-slide process-item">
            <img src="../../assets/images/Process/Process-5.jpg" alt="Finishing"> <!-- Step Image -->
            <div class="content">
              <h6>05</h6>
              <h3>Finishing</h3> <!-- Step Title -->
              <p>Professional finishing services to enhance the appearance and longevity of your woodworking projects.</p> <!-- Step Description -->
            </div>
          </div>
      
          <!-- Step 6: Client Approval -->
          <div class="swiper-slide process-item">
            <img src="../../assets/images/Process/Process-6.jpg" alt="Client Approval"> <!-- Step Image -->
            <div class="content">
              <h6>06</h6>
              <h3>Client Approval</h3> <!-- Step Title -->
              <p>Ensuring client satisfaction by delivering woodworking projects that meet or exceed expectations.</p> <!-- Step Description -->
            </div>
          </div>
  
        </div>
      </div>
  
    </section>

    <section class="banner">
      <div class="content">
    
        <div class="heading">
          <div class="sub"><span>Elevate Your Home Interior</span><i class="fa-solid fa-hammer"></i></div>
        </div>
        <h2>Discover the Ideal Woodwork Solutions for Your Space</h2>
        <a href="../../pages/Pages/Get-Quote.html" class="btn">Get a Quote</a>
    
      </div>
    </section> 
    <!-- ========== Banner Area (End) ========== -->

    <!-- ========== Clients Area (Start) ========== -->
    <section class="clients">

      <!-- Client Slider Container -->
      <div class="swiper-container client-slider">

        <!-- Clients Logo -->
        <div class="swiper-wrapper">
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-1.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-2.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-3.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-4.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-5.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-6.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-7.png" alt="Client-Logo"></a></div>
          <div class="swiper-slide client-item"><a href="#"><img src="../../assets/images/Clients/Client-8.png" alt="Client-Logo"></a></div>
        </div>

      </div> 

    </section>
    <!-- ========== Clients Area (End) ========== -->
  
  </section>

  @endsection