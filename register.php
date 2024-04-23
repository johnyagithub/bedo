<!DOCTYPE html>
<html lang="th">
 <head>
		
		<?php include ('./inc/inc-meta.php');?>

 </head>
	<body>

		<!-- begin header -->
  <?php include ('./inc/inc-header.php'); ?>
  <!-- end header -->

		<!-- begin #content -->
 	<div id="content" class="content">
  	
  	<section>
   	<div class="container">
   		<form action="#" method="post" accept-charset="utf-8" class="my-5">
    		<div class="border px-5 pt-5 pb-4">
      	<div class="row">
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input1" class="col-sm-4 col-form-label">ชื่อ</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="input1">
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input2" class="col-sm-4 col-form-label">นามสกุล</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="input2">
          </div>
         </div>
        </div>
      	</div>
      	<div class="row">
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input3" class="col-sm-4 col-form-label">เบอร์โทรศัพท์</label>
          <div class="col-sm-8">
           <input type="tel" class="form-control" id="input3" placeholder="หมายเลขโทรศัพท์">
          </div>
         </div>
        </div>
      	</div>
      	<div class="row">
        <div class="col-sm-12">
         <div class="form-group row">
          <label for="input4" class="col-sm-2 col-form-label">ที่อยู่</label>
          <div class="col-sm-10">
           <input type="text" class="form-control" id="input4">
          </div>
         </div>
        </div>
      	</div>
      	<div class="row">
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input5" class="col-sm-4 col-form-label">แขวง/ตำบล</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="input5">
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input6" class="col-sm-4 col-form-label">เขต/อำเภอ</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="input6">
          </div>
         </div>
        </div>
      	</div>
      	<div class="row">
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input7" class="col-sm-4 col-form-label">จังหวัด</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="input7">
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="form-group row">
          <label for="input8" class="col-sm-4 col-form-label">รหัสไปรษณีย์</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="input8">
          </div>
         </div>
        </div>
      	</div>
    		</div>
    		<div class="d-flex justify-content-center mt-3">
       <button type="button" class="btn btn-secondary m-3">ย้อนกลับ</button>
      	<button type="submit" class="btn btn-primary m-3">สมัครสมาชิก</button>
    		</div>
   		</form>
   	</div>
  	</section>
   
 	</div>
		<!-- end #content -->
		
  <!-- begin footer -->
  <?php include ('./inc/inc-footer.php'); ?>
  <!-- end footer -->
   
  <?php include ('./inc/inc-script.php');?>
 </body>
</html>
