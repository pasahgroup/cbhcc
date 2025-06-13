<?php $__env->startSection('content'); ?>

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
    
      <form class="account-form"  method="POST" action="<?php echo e(route('bank.store')); ?>" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>

      <h3>Bank Register Form</h3> <!-- Form Heading -->
<input type="text" name="bank_name" placeholder="enter bank name" id="bank_name" class="box" required> 
<input type="text" name="swift_code" placeholder="enter your swift code" id="swift_code" class="box" maxlength="14" required>
  <input type="text" name="bank_number" placeholder="enter your bank account number" id="bank_number" class="box" required>
      <input type="text" name="bank_holder" placeholder="enter your bank holder name" id="bank_holder" class="box" required> <!-- Password Input -->
     <input type="text" name="currency" placeholder="Enter your currency" id="currency" class="box" maxlength="8" required> <!-- Repeat Password Input -->
       <input type="text" name="country" placeholder="Enter your country" id="country" class="box" required> <!-- Repeat Password Input --> 

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
  <?php $__env->stopSection(); ?>
  


<?php echo $__env->make('spa.admin_panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\cbhcc\resources\views/bank/bank.blade.php ENDPATH**/ ?>