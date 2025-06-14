<?php $__env->startSection('content'); ?>

     <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>register</h2>
    </div> 
    
    <div class="link">
      <a href="../../index.html">Home</a>
      <i class="fa-solid fa-angles-right"></i>
      <span class="page">Donor Registration Form</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->
    

     
  <!-- ==================== Register Area (Start) ==================== -->
  <section class="register">

    <!-- Registration Form (Start) -->
 
      <h3>Donor Registration Form</h3> <!-- Form Heading -->
                </div>
   <div class="row">            
            <div class="col-xl-12 grid-margin stretch-card flex-column">
              <h5 class="mb-2 text-titlecase mb-4">wawa wawa</h5>
              <div class="row h-100">
                <div class="col-md-12 stretch-card">
                  <div class="card">
                    <strong>Donor Registration Form</strong>
                    <div class="card-body">
                     
   <form class="account-form"  method="POST" action="<?php echo e(route('donor.store')); ?>" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>

                    <div class="form-group">
                      <label for="exampleInputUsername1">donor_name</label>
                      <input type="text" name="donor_name" class="form-control" id="exampleInputUsername1" placeholder="donor_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">contact_number</label>
                      <input type="text" name="contact_number" class="form-control" id="exampleInputEmail1" placeholder="contact_number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">email</label>
                      <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                    </div>
                    <div class="input-field text-area">
            <label for="comment" class="fa-solid fa-comment"></label>
            <textarea cols="30" rows="4" name="address" class="box" id="address" placeholder="address" maxlength="148" required></textarea>
          </div>
                    <div class="row">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="password_confirmation" :value="('Image')" />
                                    <div class="form-group">
                                    <input type="file" name="logo[]" onChange="displayImage(this)" id="logo" accept="image/*" class="" style="display:block;" required>

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
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">country</label>
                      <input type="text" name="country" class="form-control" id="exampleInputConfirmPassword1" placeholder="country">
                    </div>


<select class="form-select" aria-label="Default select example" name="status" id="status">
  <option value="0"></option>
  <option value="Active">Active</option>
  <option value="Inactive">Inactive</option>
  <option value="Dormant">Dormant</option>
</select>

            </div>


                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- Registration Form (End) -->



  </section>
  <!-- ==================== Register Area (End) ==================== -->


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('spa.admin_panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\cbhcc\resources\views/donor/donor.blade.php ENDPATH**/ ?>