<div id="download" style="display: none;">
  <h3 class="mb-4 text-center h-head">เอกสารเผยแพร่</h3>
  <form>
    <div class="form-group">
      <label for="exampleFormControlSelect1">วัตถุประสงค์<i>*</i></label>
      <select class="form-control" id="exampleFormControlSelect1" onchange="changeThis($(this),'select');" required>
        <option value="">เลือกวัตถุประสงค์ในการใช้ข้อมูล</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">หน่วยงาน/บริษัท<i>*</i></label>
      <select class="form-control" id="exampleFormControlSelect2" onchange="changeThis($(this),'select');" required>
        <option value="">เลือกหน่วยงาน</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">อีเมล<i>*</i></label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="กรอกอีเมล"
        onchange="changeThis($(this));" required>
    </div>
    <div class="form-group">
      <div class="row mx-0 pt-4 justify-content-center">
        <div class="col-6 col-sm-5 col-lg-4 pl-0">
          <button class="btn btn-outline-primary w-100 px-2" type="reset">ล้างข้อมูล</button>
        </div>
        <div class="col-6 col-sm-5 col-lg-5 p-0">
          <button class="btn btn-primary w-100 px-2" type="button"
            onclick="clickDownload($(this));">ดาวน์โหลดเอกสาร</button>
        </div>
      </div>
    </div>
  </form>
  <!-- <a href="" id="url-download" download></a> -->
  <input type="hidden" id="url-download">
</div>