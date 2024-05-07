<!DOCTYPE html>
<html lang="th">

<head>

  <?php include ('./inc/inc-meta.php'); ?>

</head>

<body>

  <!-- begin header -->
  <?php include ('./inc/inc-header.php'); ?>
  <!-- end header -->

  <!-- begin #content -->
  <div id="content" class="content">

    <nav aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
          <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
        </ol>
      </div>
    </nav>
    <div class="box-project-name">
      <div class="container">
        <div class="d-flex align-items-center w-100">
          <a href="javascript:history.back()" class="d-block d-md-none">
            <span class="material-symbols-outlined">arrow_back_ios</span>
            ย้อนกลับ
          </a>
          <h6 class="b-project-name">โครงการ</h6>
        </div>
      </div>
    </div>

    <section class="box-contactus pb-4 pb-xl-5">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-xl-flex align-items-baseline flex-wrap">
            <h2 class="h-head mb-3 ml-1">ติดต่อโครงการ</h2>
          </div>
        </div>
        <div class="row px-sm-5">
          <div class="col-lg-7 pr-lg-5 py-4">
            <h6>สำนักงานพัฒนาเศรษฐกิจจากฐานชีวภาพ (องค์การมหาชน)</h6>
            <p>ศูนย์ราชการเฉลิมพระเกียรติ ๘๐ พรรษา ๕ ธันวาคม ๒๕๕๐อาคารรัฐประศาสนภักดี เลขที่ 120 หมู่ที่ 3ถนนแจ้งวัฒนะ
              แขวงหุ่งสองห้อง เขตหลักสี่ กรุงเทพฯ 10210</p>
            <ul>
              <li>
                <span class="material-symbols-outlined rounded-circle bg-dark text-white align-middle">call</span>
                <a href="tel:+6621417800">(66) 2141 7800</a>
              </li>
              <li>
                <span class="material-symbols-outlined rounded-circle bg-dark text-white align-middle">fax</span>
                (66) 2143 9202
              </li>
              <li>
                <span class="material-symbols-outlined rounded-circle bg-dark text-white align-middle">mail</span>
                <a href="mailto:saraban@bedo.or.th">saraban@bedo.or.th</a>
              </li>
            </ul>
            <div class="box-social">
              <a href="#" target="_blank">
                <img src="public/images/icon-fb.png" alt="">
              </a>
              <a href="#" target="_blank">
                <img src="public/images/icon-li.png" alt="">
              </a>
              <a href="#" target="_blank">
                <img src="public/images/icon-yu.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-5 border-left px-2 px-lg-3 py-3 py-lg-0 pl-lg-5">
            <form active="#">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="หัวข้อการติดต่อ">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="ชื่อ">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="นามสกุล">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="email" class="form-control" placeholder="อีเมล">
                </div>
                <div class="col">
                  <input type="tel" class="form-control" placeholder="เบอร์โทร">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <textarea class="form-control" placeholder="รายละเอียด" rows="4"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col offset-lg-2 col-lg-5 ml-autu pr-2">
                  <button class="btn btn-outline-primary w-100" type="reset">ล้างข้อมูล</button>
                </div>
                <div class="col col-lg-5 pl-2">
                  <button class="btn btn-primary w-100" type="submit">ส่งข้อมูล</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="box-maps pb-md-5">
      <div class="container container-lt-md-fluid">
        <div class="b-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15493.424856361144!2d100.554374!3d13.8776364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2832fb9398629%3A0xfaa10ca270bb9d6!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4Lie4Lix4LiS4LiZ4Liy4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LiI4Liy4LiB4LiQ4Liy4LiZ4LiK4Li14Lin4Lig4Liy4LieICjguK3guIfguITguYzguIHguLLguKPguKHguKvguLLguIrguJkp!5e0!3m2!1sth!2sth!4v1714386682670!5m2!1sth!2sth"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin footer -->
  <?php include ('./inc/inc-footer.php'); ?>
  <!-- end footer -->

  <?php include ('./inc/inc-script.php'); ?>
</body>

</html>