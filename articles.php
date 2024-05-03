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
          <li class="breadcrumb-item active" aria-current="page">สาระน่ารู้ (บทความ)</li>
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

    <section class="box-search-head pb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-xl-flex align-items-baseline flex-wrap">
            <h2 class="h-head mb-3 ml-1">สาระน่ารู้</h2>
            <h4 class="d-none d-xl-block mx-3">|</h4>
            <h4 class="mb-3">บทความ (240)</h4>
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
              <option value="">หมวดหมู่ย่อย</option>
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

    <section class="pb-4 pb-xl-5">
      <div class="container">
        <div class="box-list-article row">

          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="public/images/img-article.jpg" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภูมิของซีกโลกเหนือลดต่ำลง
                    น้ำกลายเป็นน้ำแข็ง
                    พืชหยุดการเจริญเติบโตอาหารลดน้อยลงและสภาพที่อยู่อาศัยไม่เหมาะสมจึงทำให้นกอพยพลงมายังซีกโลกทางใต้ที่มีแหล่งอาหารที่อุดมสมบูรณ์กว่า
                    และอาศัยอยู่ทางซีกโลกใต้ชั่วคราวจนถึงฤดูร้อนก็จะอพยพกลับถิ่นฐานเดิม </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/600x400" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภู </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/600x550" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภูมิของซีกโลกเหนือลดต่ำลง
                    น้ำกลายเป็นน้ำแข็ง
                    พืชหยุดการเจริญเติบโตอาหารลดน้อยลงและสภาพที่อยู่อาศัยไม่เหมาะสมจึงทำให้นกอพยพลงมายังซีกโลกทางใต้ที่มีแหล่งอาหารที่อุดมสมบูรณ์กว่า
                    และอาศัยอยู่ทางซีกโลกใต้ชั่วคราวจนถึงฤดูร้อนก็จะอพยพกลับถิ่นฐานเดิม </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/800x400" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภูมิของซีกโลกเหนือลดต่ำลง
                    น้ำกลายเป็นน้ำแข็ง
                    พืชหยุดการเจริญเติบโตอาหารลดน้อยลงและสภาพที่อยู่อาศัยไม่เหมาะสมจึงทำให้นกอพยพลงมายังซีกโลกทางใต้ที่มีแหล่งอาหารที่อุดมสมบูรณ์กว่า
                    และอาศัยอยู่ทางซีกโลกใต้ชั่วคราวจนถึงฤดูร้อนก็จะอพยพกลับถิ่นฐานเดิม </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/600x600" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภู </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/600x500" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภูมิของซีกโลกเหนือลดต่ำลง
                    น้ำกลายเป็นน้ำแข็ง
                    พืชหยุดการเจริญเติบโตอาหารลดน้อยลงและสภาพที่อยู่อาศัยไม่เหมาะสมจึงทำให้นกอพยพลงมายังซีกโลกทางใต้ที่มีแหล่งอาหารที่อุดมสมบูรณ์กว่า
                    และอาศัยอยู่ทางซีกโลกใต้ชั่วคราวจนถึงฤดูร้อนก็จะอพยพกลับถิ่นฐานเดิม </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/1000x400" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภูมิของซีกโลกเหนือลดต่ำลง
                    น้ำกลายเป็นน้ำแข็ง
                    พืชหยุดการเจริญเติบโตอาหารลดน้อยลงและสภาพที่อยู่อาศัยไม่เหมาะสมจึงทำให้นกอพยพลงมายังซีกโลกทางใต้ที่มีแหล่งอาหารที่อุดมสมบูรณ์กว่า
                    และอาศัยอยู่ทางซีกโลกใต้ชั่วคราวจนถึงฤดูร้อนก็จะอพยพกลับถิ่นฐานเดิม </p>
                </div>
              </a>
            </div>
          </div>
          <div class="card col-md-6">
            <div class="card-body">
              <a href="articles-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/1000x500" alt="">
                </div>
                <div class="box-text">
                  <div class="box-information">
                    <div class="b-calendar mr-auto">
                      <span class="material-symbols-outlined">calendar_month</span>
                      18 มกราคม 2564
                    </div>
                    <div class="b-visibility ml-3">
                      <span class="material-symbols-outlined">visibility</span>
                      596
                    </div>
                    <div class="b-share ml-3">
                      <span class="material-symbols-outlined">share</span>
                      99
                    </div>
                  </div>
                  <h5 class="h-head text-line1 mb-3">"นก" อพยพ</h5>
                  <p class="text-line2">สาเหตุที่นกต้องอพยพ เนื่องจากในช่วงฤดูหนาวอุณหภูมิของซีกโลกเหนือลดต่ำลง
                    น้ำกลายเป็นน้ำแข็ง
                    พืชหยุดการเจริญเติบโตอาหารลดน้อยลงและสภาพที่อยู่อาศัยไม่เหมาะสมจึงทำให้นกอพยพลงมายังซีกโลกทางใต้ที่มีแหล่งอาหารที่อุดมสมบูรณ์กว่า
                    และอาศัยอยู่ทางซีกโลกใต้ชั่วคราวจนถึงฤดูร้อนก็จะอพยพกลับถิ่นฐานเดิม </p>
                </div>
              </a>
            </div>
          </div>

        </div>

        <!-- <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span class="material-symbols-outlined">trending_flat</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#" data-toggle="tooltip" title="1">1</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#" data-toggle="tooltip"
                title="2">2</a></li>
            <li class="page-item"><a class="page-link" href="#" data-toggle="tooltip" title="3">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span class="material-symbols-outlined">trending_flat</span>
              </a>
            </li>
          </ul>
        </nav> -->

        <div class="d-flex justify-content-center mt-5">
          <a href="#" class="btn btn-outline-secondary px-4 px-xl-5">โหลดเพิ่มเติม</a>
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