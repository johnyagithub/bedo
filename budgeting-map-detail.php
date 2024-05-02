<html xmlns="http://www.w3.org/1999/xhtml" class="" style="overflow: hidden;">

<head>
  <title>bedo</title>
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 ,minimal-ui">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;400&family=Unbounded:wght@200;400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>
    #list-map {
      padding: 0px;
      width: 100%;
      font-family: "Prompt", sans-serif;
      font-weight: 100;
      margin: 0px;
      background-color: #fff;
    }

    #list-map .modal-content {
      border: none;
      background-color: #fff;
    }

    #list-map .modal-content .modal-header {
      background-color: #12432d;
      color: #fff;
      border-radius: 0px;
      padding: 10px 20px;
    }

    #list-map .modal-content .modal-header .modal-title {
      margin: 0px;
    }

    #list-map .modal-content .modal-body {
      background-color: #fff;
      max-height: 100%;
      overflow: auto;
    }

    #list-map .modal-content .modal-body ul {
      list-style-type: none;
      padding-left: 0px;
      padding: 0px 10px;
    }

    #list-map .modal-content .modal-body ul li {
      position: relative;
      transition: 0.5s;
      padding-left: 30px;
    }

    #list-map .modal-content .modal-body ul li:hover {
      background-color: #fafafa;
    }

    #list-map .modal-content .modal-body ul li::after {
      content: "";
      background-color: #035427;
      position: absolute;
      left: 15px;
      top: 16px;
      width: 5px;
      aspect-ratio: 1;
      border-radius: 50%;
    }

    #list-map .modal-content .modal-body ul li a {
      padding: 7px;
      color: #035427;
      text-decoration: none;
      transition: 0.5s;
      display: block;
    }

    #list-map .modal-content .modal-body ul li a h4 {
      position: relative;
      margin: 0px;
      display: inline-block;
    }

    #list-map .modal-content .modal-body ul li a h6::after {
      content: "";
      border-bottom: 1px solid #035427;
      width: 100%;
      position: absolute;
      left: 0px;
      bottom: 0px;
    }

    #list-map .modal-content .modal-body ul li a:hover {
      color: #000;
    }

    #list-map button[data-fancybox-close].fancybox-button {
      background-color: #fff !important;
      color: #000 !important;
      opacity: 1;
      transition: color .2s;
      vertical-align: top;
      visibility: inherit;
      margin: 10px;
      padding: 4px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: transparent;
      border: 0;
      position: absolute;
      z-index: 401;
      right: 0;
      top: 0;
      cursor: pointer;
    }
  </style>
</head>

<body id="list-map">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title">จังหวัดเชียงใหม่</h3>
    </div>
    <div class="modal-body">
      <ul>
        <li>
          <a href="project-detail.php" target="_blank">
            <h4>โครงการที่ 1</h4>
          </a>
        </li>
        <li>
          <a href="project-detail.php" target="_blank">
            <h4>โครงการที่ 2</h4>
          </a>
        </li>
        <li>
          <a href="project-detail.php" target="_blank">
            <h4>โครงการที่ 3</h4>
          </a>
        </li>
        <li>
          <a href="project-detail.php" target="_blank">
            <h4>โครงการที่ 4</h4>
          </a>
        </li>
        <li>
          <a href="project-detail.php" target="_blank">
            <h4>โครงการที่ 5</h4>
          </a>
        </li>
      </ul>
    </div>
    <button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close">
      <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
        <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
      </svg>
    </button>
  </div>
</body>

</html>