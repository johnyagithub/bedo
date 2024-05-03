<!DOCTYPE html>
<html lang="th">

<head>

  <?php include ('./inc/inc-meta.php'); ?>
  <style>
    header a.navbar-brand {
      margin-top: 20px;
      position: absolute;
    }
  </style>

</head>

<body>

  <!-- begin header -->
  <?php include ('./inc/inc-header.php'); ?>
  <!-- end header -->

  <!-- begin #content -->
  <div id="content" class="content">

    <section class="box-banner">
      <div class="owl-carousel">

        <div class="item">
          <img class="img-banner" src="public/images/banner.jpg">
          <div class="box-text container">
            <div class="b-text text-white mr-0">
              <h2 class="my-3">“การท่องเที่ยวบนพื้นฐานความ</h3>
              <h2 class="text-warning my-3"><u>หลากหลายทางชีวภาพ</u></h2>
              <h2 class="my-3">เพื่อการพัฒนาการท่องเที่ยวอย่างยั่งยืน”</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-banner" src="public/images/banner.jpg">
          <div class="box-text container">
            <div class="b-text text-white mr-0">
              <h2 class="my-3">“การท่องเที่ยวบนพื้นฐานความ</h2>
              <h2 class="text-warning my-3"><u>หลากหลายทางชีวภาพ</u></h2>
              <h2 class="my-3">เพื่อการพัฒนาการท่องเที่ยวอย่างยั่งยืน”</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-banner" src="public/images/banner.jpg">
          <div class="box-text container">
            <div class="b-text text-white mr-0">
              <h2 class="my-3">“การท่องเที่ยวบนพื้นฐานความ</h2>
              <h2 class="text-warning my-3"><u>หลากหลายทางชีวภาพ</u></h2>
              <h2 class="my-3">เพื่อการพัฒนาการท่องเที่ยวอย่างยั่งยืน”</h2>
            </div>
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
        <a href="project.php" class="btn btn-warning px-4 mt-4" data-aos="fade">แผนที่ความหลากหลายทางชีวภาพ</a>
      </div>
    </section>

    <section class="pt-5 pb-2 box-slide">
      <div class="container">
        <h2 class="h-head text-center mb-4" data-aos="fade">สาระน่ารู้</h2>
        <div class="row">
          <div class="col-6" data-aos="fade">
            <h4 class="h-head">Infographic</h3>
          </div>
          <div class="col-6 d-flex align-items-center flex-wrap" data-aos="fade">
            <div class="arrow-default">
              <div class="o-prev">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
              <div class="owl-dots"></div>
              <div class="o-next">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
            </div>
            <a href="info.php"
              class="ml-auto ml-md-0 btn btn-outline-secondary px-4 px-xl-5 d-none d-md-block">รายละเอียด</a>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-md-5 d-none d-md-block">
            <div class="box-list-interesting row">
              <div class="card col-12" data-aos="fade-right" data-aos-delay="200">
                <div class="card-body">
                  <a href="info-detail.php">
                    <div class="img">
                      <img src="public/images/img-interesting.jpg" alt="">
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
                      </div>
                      <h5 class="text-line2">พันธุ์ไม้ป่าชายเลน</h5>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="owl-carousel box-list-interesting" data-itemSlide-pc="1" data-itemSlide-Tablet="1"
              data-itemSlide-mobile="1" data-dots="false" data-aos="fade-left" data-aos-delay="200">

              <div class="item">
                <div class="b-list">
                  <a href="info-detail.php">
                    <div class="row">
                      <div class="col-4">
                        <div class="img">
                          <img src="public/images/img-interesting.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-8 box-text">
                        <div class="box-information">
                          <div class="b-calendar mr-auto">
                            <span class="material-symbols-outlined">calendar_month</span>
                            18 มกราคม 2564
                          </div>
                          <div class="b-visibility ml-3">
                            <span class="material-symbols-outlined">visibility</span>
                            596
                          </div>
                        </div>
                        <h5 class="text-line2">ทุเรียนไทย แชมป์ส่งออก เบอร์ 1 ของโลก</h5>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="b-list">
                  <a href="info-detail.php">
                    <div class="row">
                      <div class="col-4">
                        <div class="img">
                          <img src="public/images/img-interesting.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-8 box-text">
                        <div class="box-information">
                          <div class="b-calendar mr-auto">
                            <span class="material-symbols-outlined">calendar_month</span>
                            18 มกราคม 2564
                          </div>
                          <div class="b-visibility ml-3">
                            <span class="material-symbols-outlined">visibility</span>
                            596
                          </div>
                        </div>
                        <h5 class="text-line2">ทุเรียนไทย แชมป์ส่งออก เบอร์ 1 ของโลก</h5>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="b-list">
                  <a href="info-detail.php">
                    <div class="row">
                      <div class="col-4">
                        <div class="img">
                          <img src="public/images/img-interesting.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-8 box-text">
                        <div class="box-information">
                          <div class="b-calendar mr-auto">
                            <span class="material-symbols-outlined">calendar_month</span>
                            18 มกราคม 2564
                          </div>
                          <div class="b-visibility ml-3">
                            <span class="material-symbols-outlined">visibility</span>
                            596
                          </div>
                        </div>
                        <h5 class="text-line2">ทุเรียนไทย แชมป์ส่งออก เบอร์ 1 ของโลก</h5>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="b-list">
                  <a href="info-detail.php">
                    <div class="row">
                      <div class="col-4 img">
                        <img src="public/images/img-interesting.jpg" alt="">
                      </div>
                      <div class="col-8 box-text">
                        <div class="box-information">
                          <div class="b-calendar mr-auto">
                            <span class="material-symbols-outlined">calendar_month</span>
                            18 มกราคม 2564
                          </div>
                          <div class="b-visibility ml-3">
                            <span class="material-symbols-outlined">visibility</span>
                            596
                          </div>
                        </div>
                        <h5 class="text-line2">ทุเรียนไทย แชมป์ส่งออก เบอร์ 1 ของโลก</h5>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="b-list">
                  <a href="info-detail.php">
                    <div class="row">
                      <div class="col-4 img">
                        <img src="public/images/img-interesting.jpg" alt="">
                      </div>
                      <div class="col-8 box-text">
                        <div class="box-information">
                          <div class="b-calendar mr-auto">
                            <span class="material-symbols-outlined">calendar_month</span>
                            18 มกราคม 2564
                          </div>
                          <div class="b-visibility ml-3">
                            <span class="material-symbols-outlined">visibility</span>
                            596
                          </div>
                        </div>
                        <h5 class="text-line2">ทุเรียนไทย แชมป์ส่งออก เบอร์ 1 ของโลก</h5>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="b-list">
                  <a href="info-detail.php">
                    <div class="row">
                      <div class="col-4 img">
                        <img src="public/images/img-interesting.jpg" alt="">
                      </div>
                      <div class="col-8 box-text">
                        <div class="box-information">
                          <div class="b-calendar mr-auto">
                            <span class="material-symbols-outlined">calendar_month</span>
                            18 มกราคม 2564
                          </div>
                          <div class="b-visibility ml-3">
                            <span class="material-symbols-outlined">visibility</span>
                            596
                          </div>
                        </div>
                        <h5 class="text-line2">ทุเรียนไทย แชมป์ส่งออก เบอร์ 1 ของโลก</h5>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

            </div>
          </div>
          <a href="info.php" class="mx-auto btn btn-outline-secondary px-4 px-xl-5 d-table d-md-none">รายละเอียด</a>
        </div>
      </div>
    </section>

    <section class="box-multimedia py-5">
      <div class="container">
        <div class="row">
          <div class=" col-6 offset-xl-1 col-xl-5" data-aos="fade">
            <h4 class="h-head">สื่อมัลติมีเดีย</h3>
          </div>
          <div class="col-6 d-flex align-items-center flex-wrap" data-aos="fade">
            <div class="arrow-default">
              <div class="o-prev">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
              <div class="owl-dots"></div>
              <div class="o-next">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
            </div>
            <a href="multi.php"
              class="ml-auto ml-md-0 btn btn-outline-secondary px-4 px-xl-5 d-none d-md-block">รายละเอียด</a>
          </div>
        </div>
        <div class="mx-auto" style="max-width: 900px;">

          <div class="owl-carousel box-list-multimedia pt-3" data-dots="false" data-aos="fade" data-aos-delay="200">

            <div class="card item col-12">
              <div class="card-body">
                <iframe data-type="youtube" src="https://www.youtube.com/embed/oy18DJwy5lI?enablejsapi=1"
                  allowfullscreen></iframe>
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
                  <h5 class="text-line2">"หัวใจ ชุมชน สำเร็จ" ณ ดอนหอยหลอด จ.สมุทรสงคราม</h5>
                </div>
              </div>
            </div>
            <div class="card item col-12">
              <div class="card-body">
                <video data-type="video" controls source src="https://www.w3schools.com/html/mov_bbb.mp4"
                  type="video/mp4">
                </video>
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
                  <h5 class="text-line2">"หัวใจ ชุมชน สำเร็จ" ณ ดอนหอยหลอด จ.สมุทรสงคราม</h5>
                </div>
              </div>
            </div>
            <div class="card item col-12">
              <div class="card-body">
                <a href="multi-detail.php">
                  <div class="img">
                    <img src="https://via.placeholder.com/800x350" alt="">
                  </div>
                </a>
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
                  <h5 class="text-line2">"หัวใจ ชุมชน สำเร็จ" ณ ดอนหอยหลอด จ.สมุทรสงคราม</h5>
                </div>
              </div>
            </div>

          </div>
        </div>

        <a href="multi.php" class="mx-auto btn btn-outline-secondary px-4 px-xl-5 d-table d-md-none">รายละเอียด</a>
      </div>
    </section>

    <section class="box-slide py-5" style="background-color:#f7f7f7;">
      <div class="container">
        <div class="row">
          <div class="col-6" data-aos="fade">
            <h4 class="h-head">บทความ</h3>
          </div>
          <div class="col-6 d-flex align-items-center flex-wrap" data-aos="fade">
            <div class="arrow-default">
              <div class="o-prev">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
              <div class="owl-dots"></div>
              <div class="o-next">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
            </div>
            <a href="articles.php"
              class="ml-auto ml-md-0 btn btn-outline-secondary px-4 px-xl-5 d-none d-md-block">รายละเอียด</a>
          </div>
        </div>

        <div class="owl-carousel box-list-article" data-itemSlide-pc="2" data-itemSlide-Tablet="1"
          data-itemSlide-mobile="1" data-dots="false" data-aos="fade" data-aos-delay="200">

          <div class="card item col-12">
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
          <div class="card item col-12">
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
          <div class="card item col-12">
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

        </div>
        <a href="articles.php" class="mx-auto btn btn-outline-secondary px-4 px-xl-5 d-table d-md-none">รายละเอียด</a>
      </div>
    </section>

    <section class="box-slide py-5">
      <div class="container">
        <div class="row">
          <div class="col-6" data-aos="fade">
            <h4 class="h-head">กิจกรรม</h3>
          </div>
          <div class="col-6 d-flex align-items-center flex-wrap" data-aos="fade">
            <div class="arrow-default">
              <div class="o-prev">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
              <div class="owl-dots"></div>
              <div class="o-next">
                <span class="material-symbols-outlined">trending_flat</span>
              </div>
            </div>
            <a href="activitie.php"
              class="ml-auto ml-md-0 btn btn-outline-secondary px-4 px-xl-5 d-none d-md-block">รายละเอียด</a>
          </div>
        </div>

        <div class="owl-carousel box-list-activity" data-itemSlide-pc="1" data-itemSlide-Tablet="1"
          data-itemSlide-mobile="1" data-dots="false" data-aos="fade" data-aos-delay="200">

          <div class="card item col-12">
            <div class="card-body">
              <a href="activitie-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/800x350" alt="">
                </div>
              </a>
              <div class="box-text">
                <div class="b-text">
                  <h6 class="mb-2">ข่าวและกิจกรรม</h6>
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
                  <h4 class="text-line2">ลงพื้นที่ติดตามการดำเนินงานถ่ายทำสารคดี</h4>
                  <p class="text-line3">ณ วันที่ 9 มิถุนายน 2561 BEDO ได้ดำเนินการตามเป้าหมายเพื่อให้บรรสุวัตถุประสงค์
                    ในการพัฒนาฐานข้อมูลความหลากหลายทางชีวภาพ ผ่านกระบวนการมีส่วนร่วมอย่างเต็มรูปแบบ ในการสร้างความรู้และ
                    ความเข้าใจเกี่ยวกับในการสร้างความรู้และ ความเข้าใจเกี่ยวกับ</p>
                  <a href="activitie-detail.php" class="btn btn-primary btn-sm px-5 d-inline-block">อ่านต่อ</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card item col-12">
            <div class="card-body">
              <a href="activitie-detail.php">
                <div class="img">
                  <img src="https://via.placeholder.com/800x400" alt="">
                </div>
              </a>
              <div class="box-text">
                <div class="b-text">
                  <h6 class="mb-2">ข่าวและกิจกรรม</h6>
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
                  <h4 class="text-line2">"ลงพื้นที่ติดตามการดำเนินงานถ่ายทำสารคดี</h4>
                  <p class="text-line3">ณ วันที่ 9 มิถุนายน 2561 BEDO ได้ดำเนินการตามเป้าหมายเพื่อให้บรรสุวัตถุประสงค์
                    ในการพัฒนาฐานข้อมูลความหลากหลายทางชีวภาพ ผ่านกระบวนการมีส่วนร่วมอย่างเต็มรูปแบบ ในการสร้างความรู้และ
                    ความเข้าใจเกี่ยวกับในการสร้างความรู้และ ความเข้าใจเกี่ยวกับ</p>
                  <a href="activitie-detail.php" class="btn btn-primary btn-sm px-5 d-inline-block">อ่านต่อ</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a href="activitie.php" class="mx-auto btn btn-outline-secondary px-4 px-xl-5 d-table d-md-none">รายละเอียด</a>
      </div>
    </section>

    <section class="py-5 box-Service-channels">
      <div class="container">
        <h2 class="h-head text-center text-white" data-aos="fade">ช่องทางบริการความรู้เพิ่มเติม</h2>
        <div class="box-social">
          <a href="#" class="text-white" target="_blank" data-aos="fade">
            <img src="public/images/icon-fb.png" alt="">
            BEDO Thailand
          </a>
          <a href="#" class="text-white" target="_blank" data-aos="fade" data-aos-delay="200">
            <img src="public/images/icon-li.png" alt="">
            BEDO Thailand
          </a>
          <a href="#" class="text-white" target="_blank" data-aos="fade" data-aos-delay="400">
            <img src="public/images/icon-yu.png" alt="">
            @thaibiodiversity
          </a>
        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin footer -->
  <?php include ('./inc/inc-footer.php'); ?>
  <!-- end footer -->

  <?php include ('./inc/inc-script.php'); ?>
  <script>
    $(function () {
      $("#questionnaire [data-fancybox-close],#questionnaire button[type='submit']").on("click", function () {
        localStorage.setItem('questionnaire', 'allow');
      });
      if (localStorage.getItem('questionnaire') == null) {
        setTimeout(function () { $.fancybox.open($('#questionnaire')); }, 1000);
      }
    });
  </script>
</body>

</html>