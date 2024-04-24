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

  <!-- popup search -->
  <div id="form-search" class="collapse">
    <div class="d-flex align-items-center">
      <form class="form-inline" action="#">
        <button class="btn" type="submit">
          <span class="material-symbols-outlined">search</span>
        </button>
        <input class="form-control" type="text" placeholder="ค้นหา.." aria-label="Search" name="keyword">
      </form>
    </div>
  </div>
  <!-- // popup search -->

  <!-- popup questionnaire -->
  <div id="questionnaire" style="display: none;">
    <h2 class="mb-4 text-center h-head">แบบสอบถามความพึงพอใจ</h2>
    <form action="#">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ระดับวามพึงพอใจ</th>
            <th>5 = มากที่สุด</th>
            <th>4 = มาก</th>
            <th>3 = ปานกลาง</th>
            <th>2 = น้อย</th>
            <th>1 = น้อยที่สุด</th>
          </tr>
          <tr>
            <td></td>
            <td>5</td>
            <td>4</td>
            <td>3</td>
            <td>2</td>
            <td>1</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1. ความรอบรู้</td>
            <td>
              <label for="r11">
                <input type="radio" id="r11" name="exampleRadios1" value="5">
              </label>
            </td>
            <td>
              <label for="r12">
                <input type="radio" id="r12" name="exampleRadios1" value="4">
              </label>
            </td>
            <td>
              <label for="r13">
                <input type="radio" id="r13" name="exampleRadios1" value="3">
              </label>
            </td>
            <td>
              <label for="r14">
                <input type="radio" id="r14" name="exampleRadios1" value="2">
              </label>
            </td>
            <td>
              <label for="r15">
                <input type="radio" id="r15" name="exampleRadios1" value="1">
              </label>
            </td>
          </tr>
          <tr>
            <td>2. ความรอบรู้</td>
            <td>
              <label for="r21">
                <input type="radio" id="r21" name="exampleRadios2" value="5">
              </label>
            </td>
            <td>
              <label for="r22">
                <input type="radio" id="r22" name="exampleRadios2" value="4">
              </label>
            </td>
            <td>
              <label for="r23">
                <input type="radio" id="r23" name="exampleRadios2" value="3">
              </label>
            </td>
            <td>
              <label for="r24">
                <input type="radio" id="r24" name="exampleRadios2" value="2">
              </label>
            </td>
            <td>
              <label for="r25">
                <input type="radio" id="r25" name="exampleRadios2" value="1">
              </label>
            </td>
          </tr>
          <tr>
            <td>3. ความรอบรู้</td>
            <td>
              <label for="r31">
                <input type="radio" id="r31" name="exampleRadios3" value="5">
              </label>
            </td>
            <td>
              <label for="r32">
                <input type="radio" id="r32" name="exampleRadios3" value="4">
              </label>
            </td>
            <td>
              <label for="r33">
                <input type="radio" id="r33" name="exampleRadios3" value="3">
              </label>
            </td>
            <td>
              <label for="r34">
                <input type="radio" id="r34" name="exampleRadios3" value="2">
              </label>
            </td>
            <td>
              <label for="r35">
                <input type="radio" id="r35" name="exampleRadios3" value="1">
              </label>
            </td>
          </tr>
          <tr>
            <td>4. ความรอบรู้</td>
            <td>
              <label for="r41">
                <input type="radio" id="r41" name="exampleRadios4" value="5">
              </label>
            </td>
            <td>
              <label for="r42">
                <input type="radio" id="r42" name="exampleRadios4" value="4">
              </label>
            </td>
            <td>
              <label for="r43">
                <input type="radio" id="r43" name="exampleRadios4" value="3">
              </label>
            </td>
            <td>
              <label for="r44">
                <input type="radio" id="r44" name="exampleRadios4" value="2">
              </label>
            </td>
            <td>
              <label for="r45">
                <input type="radio" id="r45" name="exampleRadios4" value="1">
              </label>
            </td>
          </tr>
          <tr>
            <td>5. ความรอบรู้</td>
            <td>
              <label for="r51">
                <input type="radio" id="r51" name="exampleRadios5" value="5">
              </label>
            </td>
            <td>
              <label for="r52">
                <input type="radio" id="r52" name="exampleRadios5" value="4">
              </label>
            </td>
            <td>
              <label for="r53">
                <input type="radio" id="r53" name="exampleRadios5" value="3">
              </label>
            </td>
            <td>
              <label for="r54">
                <input type="radio" id="r54" name="exampleRadios5" value="2">
              </label>
            </td>
            <td>
              <label for="r55">
                <input type="radio" id="r55" name="exampleRadios5" value="1">
              </label>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary mx-2" type="submit">ส่งความคิดเห็น</button>
        <button class="btn btn-outline-primary mx-2" type="button" data-fancybox-close>ไม่ส่งความคิดเห็น</button>
      </div>
    </form>
  </div>
  <!-- // popup questionnaire -->

</header>