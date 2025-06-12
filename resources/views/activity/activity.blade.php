@extends('spa.app')
@section('content')

  <div class="page-title">

    <div class="title">
      <h2>register</h2>
    </div> 
    
    <div class="link">
      <a href="../../index.html">Home</a>
      <i class="fa-solid fa-angles-right"></i>
      <span class="page">register</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->
    

     
  <!-- ==================== Register Area (Start) ==================== -->
  <section class="register">

    <!-- Registration Form (Start) -->
    
      <form class="account-form"  method="POST" action="{{ route('activity.store') }}" enctype="multipart/form-data">
                             @csrf

      <h3>Activity Registration Form</h3> <!-- Form Heading -->
  <input type="text" name="activity_name" placeholder="enter your activity name" id="activity_name" class="box" required>
     <input type="text" name="activity_level" placeholder="Enter your activity level" id="activity_level" class="box" maxlength="8" required> <!-- Repeat Password Input -->
       <select class="form-select" aria-label="Default select example" name="status" id="status">
  <option value="0"></option>
  <option value="On-going">On-going</option>
  <option value="Complete">Complete</option>
  <option value="Up-coming">Up-coming</option>
  <option value="Suspended">Suspended</option>
</select>

           <!-- Register Button -->
      <button type="submit" class="btn" name="register" id="register">Save</button>
    </form>
    <!-- Registration Form (End) -->

  </section>
  @endsection