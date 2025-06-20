@extends('spa.app')
@section('contents')

<style>
  body {
    font-family: "Calibri Light", Calibri, sans-serif;
    background-color: #f8f9fa;
  }

 .form-container {
    max-width: 950px;
    margin: 1rem auto;
    background-color: #fff;
    padding: 2rem 3rem;
    border-radius: 1rem;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
  }

  h3 {
    font-weight: 600;
    margin-bottom: 25px;
    color: #4f46e5;
    text-shadow: 0 0 5px rgba(79, 70, 229, 0.3);
  }

  label {
    font-weight: 500;
    color: #333;
    font-size: 13px;
  }

  .form-control {
    border: 1px solid #ced4da;
    border-radius: 0.75rem;
    /*font-size: 15px;
    padding: 0.75rem;*/
    font-family: "Calibri Light", Calibri, sans-serif;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .form-control:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
  }

  .form-group {
    margin-bottom: 5px;
  }

  .btn-gradient {
    background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
    border: none;
    padding: 0.1rem 1.2rem;
    border-radius: 2rem;
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s, background-color 0.3s;
    font-family: "Calibri Light", Calibri, sans-serif;
    box-shadow: 0 2px 8px rgba(6, 182, 212, 0.15);
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(6, 182, 212, 0.25);
    background-color: #5b69ff;
  }

  .btn-previous {
    background-color: #6c757d;
    border: none;
    padding: 0.4rem 1.5rem;
    border-radius: 2rem;
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-family: "Calibri Light", Calibri, sans-serif;
  }

  .btn-previous:hover {
    background-color: #5a6268;
  }

  .input-error {
    border-color: #dc3545 !important;
    background-color: #fff4f4;
  }

  /* Hide all fieldsets except the first */
  fieldset {
    display: none;
  }

  fieldset.active {
    display: block;
  }
</style>

<div class="d-flex justify-content-center mt-2">
  <div style="width: 50%;">

    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </div>
    @endif

    @if (session('duplicate'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('duplicate') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </div>
    @endif

  </div>
</div>

<div class="form-container">
    <div class="col-md-12">
      <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('slides.update',$slides->id) }}" enctype="multipart/form-data">
        @csrf
        <h3><i class="fa fa-calendar-check-o"></i>SLIDE REGISTRATION FORM</h3>
<input type="hidden" name="_method" value="PUT">
        <fieldset class="active">
            <div class="form-group row">        
           <div class="col-md-12 col-sm-12">
        <label>Photo title</label>
        <input type="text" name="photo_title" id="photo_title" class="form-control" value="{{$slides->photo_title}}"  maxlength="150" required>
         
  </div>
   </div>


      <div class="form-group row">
            <div class="col-md-12 col-sm-12">
              <label>Slide Photo</label>
            </div>
                 <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="password_confirmation" :value="('Image')" />
                                    <div class="form-group">
                                    <input type="file" name="slide_photo[]" onChange="displayImage(this)" id="slide_photo" accept="image/*" class="" style="display:block;">

                                </div>
                                </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              </div>
                <img src="{{ URL::asset('/storage/slides/'.$slides->photo) }}" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>               
  </div>


          
 <div class="form-group row">
      <div class="col-md-12 col-sm-12">
        <label>Sub project Description</label>
            <textarea cols="30" rows="4" name="photo_description" class="form-control" id="photo_description" placeholder="photo description" maxlength="1200" required>{{$slides->photo_description}}</textarea>
  </div>
  </div>

 <div class="form-group row">                                          
              <div class="col-md-6 col-sm-6">   
              <label>Project name</label>
              <select class="form-control" name="project_id" id="project_id">
                   <option selected value="{{$project_first->id?? 0}}">{{$project_first->project_name?? ""}}</option>
               <option value="0"></option>
  @foreach($projects['data'] as $project)
                <option value="{{$project->id}}">{{$project->project_name}}</option>
            @endforeach    
              </select>
          </div>
                                                
    
              <div class="col-md-6 col-sm-6">   
              <label>Sub project name</label>
              <select id='subproject_id' name='subproject_id' class="form-control">
                 <option  selected value="{{$subproject_first->id?? 0}}">{{$subproject_first->sub_project_name ?? ""}}</option>

                 <option value="0"></option>
        <option value='0'>-- Select subproject name --</option>
        @foreach($subprojects as $subproject)
         <option value="{{$subproject->id}}">{{$subproject->sub_project_name}}</option>
        @endforeach
    </select>
          </div>
            </div>

    <div class="form-group row">
              <div class="col-md-6 col-sm-12">   
              <label>Display</label>
              <select class="form-control" name="display" id="display">
                 <option>{{$slides->display}}</option>

                <option></option>
                <option>Blog</option>
                  <option>Footer</option>
                <option>Slide</option>
              </select>
          </div>

           <div class="col-md-6 col-sm-12">   
              <label>Status</label>
              <select class="form-control" name="status" id="status">
                <option>{{$slides->status}}</option>
                <option></option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
          </div>
            </div>
<hr>
          <div class="d-flex justify-content-between mt-3">
             <a href="/slides" role="button" class="btn-previous">Back</a>
            <button type="submit" class="btn-gradient">Update</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

 <script src="../../admins/js/jquery360.js"></script>
   
    <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#project_id').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#subproject_id').find('option').not(':first').remove();
//alert(id);
             // AJAX request
             $.ajax({
                 url: 'getSlides/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

//alert(len);
                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].sub_project_name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#subproject_id").append(option);
                          }
                     }

                 }
             });
        });
    });
    </script>

<script>
  function triggerClick() {
    document.querySelector('#attachment').click();
  }

  function triggerClickvision() {
    document.querySelector('#attachment').click();
  }

  function displayImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var img = document.querySelector('#profileDisplay');
        img.setAttribute('src', e.target.result);
        img.style.display = 'block';
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  function displayImageVision(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var img = document.querySelector('#profileDisplayVision');
        img.setAttribute('src', e.target.result);
        img.style.display = 'block';
      };
      reader.readAsDataURL(input.files[0]);
    }
  }


  $(document).ready(function() {
    // Show first fieldset only
    $('fieldset').hide();
    $('fieldset').first().show().addClass('active');

    $('.btn-next').click(function() {
      var current_fs = $(this).closest('fieldset');
      var next_fs = current_fs.next('fieldset');

      // Simple validation: check required fields in current fieldset
      var valid = true;
      current_fs.find('input[required], select[required]').each(function() {
        if (!$(this).val()) {
          $(this).addClass('input-error');
          valid = false;
        } else {
          $(this).removeClass('input-error');
        }
      });

      if (valid && next_fs.length) {
        current_fs.hide().removeClass('active');
        next_fs.show().addClass('active');
        $('html, body').animate({ scrollTop: 0 }, 'fast');
      }
    });

    $('.btn-previous').click(function() {
      var current_fs = $(this).closest('fieldset');
      var prev_fs = current_fs.prev('fieldset');

      if (prev_fs.length) {
        current_fs.hide().removeClass('active');
        prev_fs.show().addClass('active');
        $('html, body').animate({ scrollTop: 0 }, 'fast');
      }
    });

    // Remove error on focus
    $('input, select').on('focus', function() {
      $(this).removeClass('input-error');
    });
  });
</script>



  <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#project_name_po').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#sel_emp').find('option').not(':first').remove();
//alert(id);
             // AJAX request
             $.ajax({
                 url: 'getEmployees/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                     alert(len);

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#sel_emp").append(option);
                          }
                     }

                 }
             });
        });
    });


     $(document).ready(function(){
        // Department Change
        $('#sel_emp').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#sel_emp2').find('option').not(':first').remove();

             // AJAX request
             $.ajax({
                 url: 'getEmp/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#sel_emp2").append(option);
                          }
                     }

                 }
             });
        });
    });
    </script>

@endsection