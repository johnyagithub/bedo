<header>

  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="./public/images/logo.png" class="img-logo" alt="">
    </a>
  </div>
  <nav class="navbar">
    <div class="box-header">
      <div class="hamburger navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"
        aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger__container">
          <div class="hamburger__inner"></div>
          <div class="hamburger__hidden"></div>
        </div>
      </div>
      <div class="mt-auto">
        <div class="b-questionnaire my-4">
          <button data-fancybox="" data-src="#questionnaire">
            <img src="public/images/icon-questionnaire.png">
          </button>
        </div>
        <div class="b-fontsize my-4">
          <img src="public/images/icon-fontsize.png" data-font-size="13" class="size-small">
          <img src="public/images/icon-fontsize.png" class="size-medium active">
          <img src="public/images/icon-fontsize.png" data-font-size="19" class="size-large">
        </div>
        <div class="b-language my-4">
          <a href="#">th</a>
          <a href="#">en</a>
        </div>
        <div class="b-search">
          <a data-toggle="collapse" href="#form-search" role="button" aria-expanded="false" aria-controls="form-search"
            onclick="iconSearch($(this));" class="collapsed">
            <span class="material-symbols-outlined">search</span>
          </a>
        </div>
        <!-- popup search -->
        <?php include ('inc-search.php'); ?>
        <!-- // popup search -->
      </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            เกี่ยวกับโครงการ
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">สาระสำคัญ</a>
            <a class="dropdown-item" href="#">แผนการขับเคลื่อน</a>
            <a class="dropdown-item" href="#">ความก้าวหน้าของโครงการ</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">โครงการ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">โครงการ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            สาระน่ารู้
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Infographic</a>
            <a class="dropdown-item" href="#">สื่อมัลติมีเดีย</a>
            <a class="dropdown-item" href="#">บทความ</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            ความหลากหลายทางชีวภาพ
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">พืช</a>
            <a class="dropdown-item" href="#">สัตว์</a>
            <a class="dropdown-item" href="#">จุลินทรีย์</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">เอกสารเผยแพร่</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ห้องสมุด BEDO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ติดต่อโครงการ</a>
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
          <img src="public/images/icon-x.png" alt="">
        </a>
      </div>
    </div>
  </nav>

  <!-- popup questionnaire -->
  <?php include ('inc-questionnaire.php'); ?>
  <!-- // popup questionnaire -->

</header>