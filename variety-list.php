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
            <h2 class="h-head mb-3 ml-1">ความหลากหลายทางชีวภาพ </h2>
            <h4 class="d-none d-xl-block mx-3">|</h4>
            <h4 class="mb-3">พืช (284)</h4>
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
          <div class="col-6 col-md-3 col-lg-2 p-2">
            <select class="form-control">
              <option value="">จังหวัด</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-md-3 col-lg-2 p-2">
            <select class="form-control">
              <option value="">อำเภอ</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-md-3 col-lg-2 p-2">
            <select class="form-control">
              <option value="">ตำบล</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="col-6 col-md-3 col-lg-2 p-2">
            <a href="#" class="btn btn-outline-secondary w-100">
              <span class="material-symbols-outlined h5 m-0" style="vertical-align: sub;">swap_vert</span>
              ตามความนิยม
            </a>
          </div>
        </div>

        <!-- <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="download.php?page=1" aria-label="Previous">
                <span class="material-symbols-outlined">trending_flat</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="download.php?page=1" data-toggle="tooltip" title="1">1</a>
            </li>
            <li class="page-item active"><a class="page-link" href="download.php?page=2" data-toggle="tooltip"
                title="2">2</a></li>
            <li class="page-item"><a class="page-link" href="download.php?page=3" data-toggle="tooltip" title="3">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="download.php?page=3" aria-label="Next">
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