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
          <li class="breadcrumb-item active" aria-current="page">ความหลากหลายทางชีวภาพ</li>
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

    <section class="box-variety pb-4 pb-xl-5">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-xl-flex align-items-baseline flex-wrap">
            <h2 class="h-head mb-3 ml-1">ความหลากหลายทางชีวภาพ</h2>
          </div>
          <div class="col-md-5">
            <form class="form-inline group-search" action="#">
              <input class="form-control bg-light" type="text" placeholder="ค้นหา.." aria-label="Search" name="keyword">
              <button class="btn text-white" type="submit">
                <span class="material-symbols-outlined">search</span>
              </button>
            </form>
          </div>
        </div>
        <div class="row m-0 justify-content-sm-end">
          <div class="col-6 col-lg-3 col-xl-2 p-2">
            <select class="form-control">
              <option value="">จังหวัด</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-lg-3 col-xl-2 p-2">
            <select class="form-control">
              <option value="">อำเภอ</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-lg-3 col-xl-2 p-2">
            <select class="form-control">
              <option value="">ตำบล</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-lg-3 col-xl-2 p-2">
            <a href="#" class="btn btn-outline-secondary w-100">
              <span class="material-symbols-outlined h5 m-0" style="vertical-align: sub;">swap_vert</span>
              ตามความนิยม
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="box-biodiversity py-5">
      <div class="container text-center">
        <h3 class="h-head text-white" data-aos="fade">ความหลากหลายทางชัวภาพ</h3>
        <h3 class="mt-4 opacity-06" data-aos="fade">"โครงการต้นแบบการเสริมสร้างศักยภาพ"</h3>
        <p class="opacity-06" data-aos="fade">
          ขององค์กรปกครองส่วนท้องถิ่นในการป้องกันและใช้ประโยชน์ความหลากหลายทางชีวภาพอย่างยั่งยืนในภูมินิเวศของประเทศไทย
        </p>
        <div class="row list-biodiversity">
          <div class="col-sm-4  py-3" data-aos="fade-up">
            <a href="variety-list.php" class="text-white">
              <h3 class="h-head">พืช <img src="public/images/icon-plant.png"></h3>
              <h1><span class="counter">284</span></h1>
            </a>
          </div>
          <div class="col-sm-4 py-3" data-aos="fade-up" data-aos-delay="200">
            <a href="variety-list.php" class="text-white">
              <h3 class="h-head">สัตว์ <img src="public/images/icon-animal.png"></h3>
              <h1><span class="counter">570</span></h1>
            </a>
          </div>
          <div class="col-sm-4 py-3" data-aos="fade-up" data-aos-delay="400">
            <a href="variety-list.php" class="text-white">
              <h3 class="h-head">จุลินทรีย์ <img src="public/images/icon-microorganism.png"></h3>
              <h1><span class="counter">62</span></h1>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-4 pb-1 py-md-5">
      <div class="container container-lt-md-fluid">
        <div class="table-responsive">
          <table class="table table-striped mb-0" style="min-width: 800px;">
            <thead>
              <tr>
                <th>หน่วยงาน</th>
                <th>จังหวัด</th>
                <th>อำเภอ</th>
                <th>ตำบล</th>
                <th>พืช</th>
                <th>สัตว์</th>
                <th>จุลินทรีย์</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">BEDO</td>
                <td class="text-center align-middle" rowspan="4">สมุทรสงคราม</td>
                <td>เมืองสมุทรสงคราม</td>
                <td>บางจะเกร็ง</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
              <tr>
                <td class="text-center">BEDO</td>
                <td>เมืองสมุทรสงคราม</td>
                <td>บางจะเกร็ง</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
              <tr>
                <td class="text-center">BEDO</td>
                <td>เมืองสมุทรสงคราม</td>
                <td>บางจะเกร็ง</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
              <tr>
                <td class="text-center">BEDO</td>
                <td>เมืองสมุทรสงคราม</td>
                <td>บางจะเกร็ง</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
              <tr>
                <td class="text-center">BEDO</td>
                <td class="text-center align-middle" rowspan="4">สมุทรสงคราม</td>
                <td>พระประแดง</td>
                <td>ทรงคนอง</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
              <tr>
                <td class="text-center">BEDO</td>
                <td>พระประแดง</td>
                <td>บางยอ</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
              <tr>
                <td class="text-center">BEDO</td>
                <td>พระประแดง</td>
                <td>บางน้ำผึ้ง</td>
                <td class="text-center">43</td>
                <td class="text-center">120</td>
                <td class="text-center">0</td>
              </tr>
            </tbody>
          </table>
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