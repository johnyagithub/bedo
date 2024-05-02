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
          <li class="breadcrumb-item active" aria-current="page">โครงการ</li>
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

    <section class="section-head pb-4">
      <div class="container">
        <h1 class="h-head mb-3 text-center">โครงการ</h1>
      </div>
    </section>

    <section class="box-region">
      <div class="container">
        <div class="row m-0">
          <div class="col-6 col-lg-3 col-xl-2 p-2">
            <select class="form-control">
              <option value="">เลือกภูมิภาค</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-lg-3 col-xl-2 p-2">
            <select class="form-control">
              <option value="">เลือกจังหวัด</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
        </div>
      </div>
    </section>

    <section class="iframe-map">

      <!-- test popup -->
      <div style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
        <button class="btn btn-secondary" data-fancybox="" data-src="#list-map">test popup</button>
      </div>
      <!-- test popup -->

    </section>

  </div>
  <!-- end #content -->

  <!-- popup list-map -->
  <div id="list-map" style="display:none;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">จังหวัดเชียงใหม่</h5>
      </div>
      <div class="modal-body">
        <ul>
          <li>
            <a href="project-detail.php">
              <h6>โครงการที่ 1</h6>
            </a>
          </li>
          <li>
            <a href="project-detail.php">
              <h6>โครงการที่ 2</h6>
            </a>
          </li>
          <li>
            <a href="project-detail.php">
              <h6>โครงการที่ 3</h6>
            </a>
          </li>
          <li>
            <a href="project-detail.php">
              <h6>โครงการที่ 4</h6>
            </a>
          </li>
          <li>
            <a href="project-detail.php">
              <h6>โครงการที่ 5</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- // popup list-map -->

  <!-- popup list-map iframe -->
  <!-- <iframe style="background: #fff; width: 400px;max-width: calc(100% - 30px);height: 289px;border: 0;border-radius: 20px;position: fixed;left: 50%;top: 50%;transform: translate(-50%, -50%);z-index: 99;" src="budgeting-map-detail.php"></iframe> -->
  <!-- // popup list-map iframe -->

  <!-- begin footer -->
  <?php include ('./inc/inc-footer.php'); ?>
  <!-- end footer -->

  <?php include ('./inc/inc-script.php'); ?>

</body>

</html>