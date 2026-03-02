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
            <h1 class="count" data-count="1000">1000+</h1> <!-- Count of Happy Communities -->
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