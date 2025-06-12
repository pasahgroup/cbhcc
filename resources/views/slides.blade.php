@extends('spa.admin_panel')
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
    
      <form class="account-form"  method="POST" action="{{ route('slides.store') }}" enctype="multipart/form-data">
                             @csrf

      <h3>Slides Form</h3> <!-- Form Heading -->
<input type="text" name="photo_title" placeholder="enter photo title" id="photo_title" class="box" required> 
<div class="input-field text-area">
            <label for="photo_description" class="fa-solid fa-comment"></label>
            <textarea cols="30" rows="4" name="photo_description" class="box" id="photo_description" placeholder="photo_description" maxlength="148" required></textarea>
          </div>

  <input type="integer" name="project_id" placeholder="enter your project id" id="project_id" class="box" required>
   
            <input type="text" name="status" placeholder="Enter your status" id="status" class="box" maxlength="12" required> <!-- Repeat Password Input --> 

         <div class="row">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="password_confirmation" :value="('Image')" />
                                    <div class="form-group">
                                    <input type="file" name="photo[]" onChange="displayImage(this)" id="photo" accept="image/*" class="" style="display:block;" required>

                                </div>
                                </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              </div>
              <img src="images/no.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>
           </div>

      </div>


      <!-- Terms and Conditions Checkbox -->
      <div class="checkbox-label">
        <input type="checkbox" checked="checked" id="terms">
        <label for="terms">i agree with the <span>&nbsp;terms & conditions</span></label>
        <div class="checkbox-indicator"></div>
      </div>

      <!-- Register Button -->
      <button type="submit" class="btn" name="register" id="register">Save</button>
    </form>
    <!-- Registration Form (End) -->

  </section>
  @endsection