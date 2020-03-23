<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <script src="js/analytics.js"></script>
  <script src="https://www.google-analytics.com/analytics.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160692102-1"></script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
<meta HTTP-EQUIV="Expires" CONTENT="-1">
  <meta name="description" content="呈現來自中國武漢病毒所造成的疫情情報" />
  <meta name="author" content="Tzeng,Ying-Chi" />
  <!-- og -->
<meta property="og:title" content="武漢肺炎疫情 台灣情報站">
<meta property="og:type" content="website">
<meta property="og:site_name" content="武漢肺炎疫情-台灣情報站">
<meta property="og:url" content="https://covid19.tzeng17.com/">
<meta property="og:image:width" content="885">
<meta property="og:image:height" content="885">
<meta property="og:image" content="https://covid19.tzeng17.com/img/favicon.png">
<meta property="og:description" content="呈現來自中國武漢病毒所造成的疫情情報">
<!-- og -->
<link rel="apple-touch-icon" sizes="180x180" href="https://covid19.tzeng17.com/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://covid19.tzeng17.com/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://covid19.tzeng17.com/img/favicon-16x16.png">
<link rel="manifest" href="https://covid19.tzeng17.com/img/site.webmanifest">
  <title>武漢肺炎疫情-台灣情報站</title>
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />  
  <link rel="stylesheet" href="css/shared-style.css" />
  <link rel="stylesheet" href="css/demo-style.css" />
  <link rel="stylesheet" type="text/css" href="css/taiwan-map.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <style>
  .tooltip-box {
    position: absolute;
    display: none;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000000d9;
    border-radius: 0.25rem;
    font-size: .75rem;
    transition: .5s;
  }
  </style>
</head>

<body class="header-fixed">
  <nav class="t-header">
    <div class="t-header-brand-wrapper">
      <a href="index.php" class="text-danger">
      <img class="logo logo px-3" src="img/logo.svg"/>
        <div class="text-gray">
          <p>武漢肺炎疫情</p>
          <p>台灣情報站</p>
        </div>
      </a>
    </div>
    <div class="t-header-content-wrapper">
      <div class="t-header-content">
        <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </nav>

  <div class="page-body">
    <div id="sideBar" class="sidebar"></div>
    <!-- partial -->
    <div class="page-content-wrapper">
    <div class="loading">
        <span class="spinner-grow" role="status" aria-hidden="true"></span>
      </div>
      <div class="page-content-wrapper-inner">
        <div class="content-viewport">
          <div class="row">
            <div class="col-12 pt-5 pb-3">
              <h4>國內疫情總計</h4>
            </div>
          </div>
          <div class="row">
            <div class="container row col-12">
              <div class="col-md-3 col-sm-6 col-6">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="diagnoseTitle" class="card-title">總確診 <i class="far fa-hospital"></i></p>
                    </div>
                    <p id="diagnoseNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="deadTitle" class="card-title">死亡 <i class="fas fa-skull-crossbones"></i></p>
                    </div>
                    <p id="deadNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="ysdDiagnoseTitle" class="card-title">昨日確診 <i class="fas fa-syringe"></i></p>
                    </div>
                    <p id="ysdDiagnoseNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="releaseTitle" class="card-title">解除隔離 <i class="fas fa-smile"></i></p>
                    </div>
                    <p id="releaseNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row">
            <div class="row col-md-6 pr-md-0">
              <div class="col-12 py-3">
                <h4>昨日檢驗總計</h4>
              </div>
              <div class="col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="ysdInspectionTitle" class="card-title">送驗 <i class="fas fa-ambulance fa-sm"></i></p>
                    </div>
                    <p id="ysdInspectionNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="ysdExcludeTitle" class="card-title">排除 <i class="fas fa-child"></i></p>
                    </div>
                    <p id="ysdExcludeNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row col-md-6 ml-md-1 pr-md-0">
              <div class="col-12 py-3">
                <h4>國內檢驗總計</h4>
              </div>
              <div class="col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="inspectTitle" class="card-title">送驗 <i class="fas fa-ambulance fa-sm"></i></p>
                    </div>
                    <p id="inspectNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p id="excludeTitle" class="card-title">排除 <i class="fas fa-child"></i></p>
                    </div>
                    <p id="excludeNum" class="display-4 text-danger"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-12 py-3">
            <h4>地區年齡性別統計表</h4>
          </div>
          <table id="nCoVCaseTable" class="table table-hover table-light  table-responsive-sm">
            <thead>
              <tr>
                <th scope="col">診斷月份</th>
                <th scope="col">縣市</th>
                <th scope="col">性別</th>
                <th scope="col">年齡層</th>
                <th scope="col">確定病例數</th>
                <th scope="col">是否為境外移入</th>
              </tr>
            </thead>
            <tbody id="nConVList">
            </tbody>
          </table>
          <!--  -->
          <div class="w-100">
            <div class="card box-shadow">
              <div class="card-header">
                傳染地理分佈
              </div>
              <div class="align-items-sm-center card-body d-flex row">
                <!-- <img class="tw-map" src="img/tw.svg" alt=""> -->
                <div id="TW-case-map" class="col-sm-12 col-md-9">
                  <xml version="1.0" encoding="utf-8">
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="tw-map" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="352 -439.3 1038 1221.1"
                      style="enable-background:new 352 -439.3 1038 1221.1;" xml:space="preserve" class="tw-map">
                      <path id="Outlying-island" class="st0" d="M647.4-158.2H402.3v-245.1h245.1V-158.2z M647.4-160.8H402.3V84.3h245.1V-160.8z
                             M647.4,83.1H402.3v245.1h245.1V83.1z"></path>
                      <path id="tw-map-15" class="st1" d="M1070.4,282.7l1.9,5.8l-3,5l-5.6,2.4l-1.4,3.2l1,4l5.6,3.6l6.3,5.2l2.8,7.6l0.3,2.5l-15.6,3.8
                            l-6.4,4.1l-4,3.9l-7.8,5.1l-0.9,5.7l2.3,6l-2.7,4.9l-7.4,4l-0.8,6.9l2.1,9.9l-3,13.2l-0.1,11.2l-4.3,5.9l-8.5,7.2l-2.3,9.8l1.3,8.1
                            l3,4.6l6.2,6.4l1.2,4.9l-3.9,0.5l-5.2-0.9l-4.3,0.2l-8.5,6.7l-5.9-5.5l-7.6-8.9l-7.2,1.8l-6.6,5.9l-13.1-6.6l-9.4,4.5l-6.4,7.1
                            l-8,2.8l-17.8-1.1L925,459l-1.3,7.2l-2.6,7.9l0.5,7l-0.1,9.5l-5.7,21.2l-0.1,7.1l2.7,7.5l0.4,8.2l-8.1,20.5l-2.6-1.1l-1.6,0.1
                            l-1.8,0.7h-2.2l-13-10.2l-12.1-17.1l12.7,15.4l-1.5-7.4l-3.8-7.2l-5.3-6l-9-8.4l-3.5-4.2l-1.6-4.8l2.2-4.6l1.1-4.1l-1.5-5.8
                            l-2.7-5.6l-4.9-7.7l-4.6-10.2l-1-4.5l0.1-3l1.5-3.6l0.3-2.4l-0.5-1.2l-2.7-2.3l-0.5-2.3l-2.9-4.9l-0.7-2l-2.1-13.6l6.1-3.7l0.2,0.5
                            l3.9,8.6l4.8,2.5l15.7,2.2l8.2-0.9l8.4,1l4.2-1.5l3.5-2.6l6.5-2.6l6.3-4.4l2.4-5.5l3-5.2l5.3-7.1l6.1-6.4l6.5-5.4l7.4-7.2l6.5-8.4
                            l10-17l10.4-15.1l2.3-6.6l-1-6.7l-1.4-4.5l0.1-5l3.6-3.5l6.9,0.7l5.8-0.6l12.3-7.3l4.5-5.4l7.9-6.1l7.7-4.3l4.2-5l3.6-6.8l8.5-6.8
                            l18.5-9.4l4.3,1l5.8,2.2l4.2,5.9L1070.4,282.7L1070.4,282.7z"></path>
                      <path id="tw-map-16" class="st1" d="M900,591.4l2,2.9l-0.3,1l-2.7,1.8l-5,4.3l-0.9-3.3l1.4-2.7l2.8-3.6h2L900,591.4L900,591.4z
                             M1026.7,448.1l3.5,6.6l0.7,4.9l5.4,1.3l5.5,3.6l-2.8,13.8l-0.1,5.2l-2,5l-9.8,4.1l-4.8,2.7l-7.6,1.6l-5.4,4.5l-2.4,6.6l-3.7,6.6
                            l-3,7.5l-0.8,14.7l1.2,6.5l2,6.1l1.1,7.1v5.4l2.6,5l4.6,5.6l-2.5,3.8l-5.3,3.2l-2.1,3.9l-0.5,4.5l2.7,3.9l3.4,1.7l3.1,4.4l-0.1,5.7
                            l0.6,6.1l3.2,5.9l4.6,4.9l10.2,4.7l4.5-0.3l0.9,51.6l-1.6,7.3l-2.5,6l-3.4,2.5l-4,3.7l0.1,8.3l1.5,9.2l-0.4,5.9l-4.5-6.8l-6.8-5.2
                            l-7.8-3.5l-8-1.9l-0.3,6.6l-2.3,2.3l-3.4-0.8l-3.7-3.1l-0.2-2.4l1.3-7l-5.5-9.2l-0.5-2.4l0.1-2.1l0.4-3.2v-10.8l0.5-3.1l2.5-3.6
                            l0.5-3l-19.9-51.6l-1.6-2.9l-5.5-6.8l-4.4-9.9l-2-2.8l-8.2-6.5l-5.4-3l-0.9-3.7l-0.7-1.3l-4.4-2.9l-10-4.8l-4.5-3.1l-4.8-4.2
                            l-2.6-1.6l8.1-20.5l-0.4-8.2l-2.7-7.5l0.1-7.1l5.7-21.2l0.1-9.5l-0.5-7l2.6-7.9l1.3-7.2l1.7-4.9l17.8,1.1l8-2.8l6.4-7.1l9.4-4.5
                            l13.1,6.6l6.6-5.9l7.2-1.8l7.6,8.9l5.9,5.5l8.5-6.7l4.3-0.2L1026.7,448.1L1026.7,448.1z">
                      </path>
                      <path id="tw-map-14" class="st1" d="M814.4,393.7l-0.6,1.2l-2.3-2l-1.7-4.2l0.3-1.3h0.7l0.9,1.2l0.7,1.9l2.1,2.2L814.4,393.7
                            L814.4,393.7z M814.9,366.1l-2.9,6.8l3.9-13.3l0.6,0.1L814.9,366.1z M818.4,353.3l3.5-9.9l0.5-0.1l0.2,1.9L818.4,353.3z
                             M824.7,330.8l-0.4,2.4l0.6-10.6l0.5,0.2L824.7,330.8L824.7,330.8z M974.2,342.3l-2.3,6.6L961.5,364l-10,17l-6.5,8.4l-7.4,7.2
                            l-6.5,5.4l-6.1,6.4l-5.3,7.1l-3,5.2l-2.4,5.5l-6.3,4.4l-6.5,2.6l-3.5,2.6l-4.2,1.5l-8.4-1l-8.2,0.9l-15.7-2.2l-4.8-2.5l-3.9-8.6
                            l-0.2-0.5l-6.1,3.7l-1-6.3l-1.8-3.6l-3.9-3.9l4.7-3.4l2.7-6.1l-1.1-5.2l-6.3-0.9l-1.2,1.8l-1.1,3.4l-1.8,2.7l-3.3-0.1l-1.3-2.3
                            l0.5-7l-0.8-2.4l-4.1-1.8l-2.3,2.1l-1.8,2.9l-2.8,0.7l-2.9-2.5l-0.7-3.5l0.7-3.4l1.1-2.3l3-1.6l3.7-0.5l3.1-1l1-3l-1.4-1.5L818,376
                            v-1.9l7.9-0.1l-0.8-2.6l-4.3-3.7l-2.8-3.2l0.7-4l2.5-1.5l2.7-0.9l1.4-2.5l-0.8-3.9l-1.4-3.2l0.9-3l1.4-3.7l2.3-2.6l-0.5-2.3l0.5-2.3
                            l3.3-9l1.6-1.7l2.6-0.6l-3.7-2.5l1.6-4.1l5.2,2l8.9,1.3l7.2,1.8l6.2-2.8l2.5-4.9l5.8-3.6l6.6-5.1l4.7-4.8l6.1-4.6l7.8-3.5l15.2-2.8
                            l8.5-0.5l7.2,2.4l4,2.4l2.1,4.2l1.7,5.1l9.9,10.1l1,7.5l-1.8,14.2l1.6,4.6l4.5,3.5h3.8l5.3-2.4l5-0.6l3.7,1.1L974.2,342.3
                            L974.2,342.3z"></path>
                      <path id="tw-map-5" class="st1" d="M1054.9-85.6l-0.2,0.2l-4.6,1.1l-4.4-1.7l-2.7-3.8l-4.3-2.6l-6.9-2.7l1.2-4.1l5.5-11.4l2.2-3
                            l0.7-1.5v-1.7l-0.7-1.9l-1.1-2.2l1.5-3l1.8-1.8l8.3,3.6l15.1,4.8l5.4,2.8l3.8,3.9l1.9,3.7l-1,3.6l-2.4,1.4l-5.1,0.9l-5.9,2.4
                            l-3.4,4.3l-2.3,5.6L1054.9-85.6L1054.9-85.6z"></path>
                      <path id="tw-map-6" class="st1"
                        d="M1173.7-51l-2.3,6.5l-1.4,4.7l0.6,4.4l-3.8,5.8l-14,14.2l-4.3,10.5l-2.8-0.8l-10.6,1l-0.8,0.6
                            l-0.6-4.9l-4.6-7.8l-3.3-3.3l-1.3-4.4l-5-4l-12.5,3.2l-4.8-0.5l-6.8,0.5l-7.7,2.1l-4.1-1l0.9-5.1l1.3-4.6l-1-4l-1-2.9l1-3.1l0.8-3.5
                            l0.3-3.9l-0.7-5.2l-3.9-3.4l-12.1-5.7l-6-4.5l-3.9-4.4l-4.4-11.1l2.4-3.1l2.3-5.6l3.4-4.3l5.9-2.4l5.1-0.9l2.4-1.4l1-3.6l-1.9-3.7
                            l-3.8-3.9l-5.4-2.8l-15.1-4.8l-8.3-3.6l1.5-2.3l0.6-3.9l0.9-2.9l2-2.9l2.7-2.1l2.5-0.9l-0.2-1.2l0.7-2.9l2.2-6.1l2.1-3.3l3.1,1.1
                            l13.7-1l4.6,3.1l4,8.7l5,2l4.3,1.2l4.1,2l6.8,2.2l3.6,4.2l-1.1,5.8l3.5,3.7l6.5,2.1l4.2,3.1l3.1,3.1l3.8,0.7l3.9-0.3l3.4,3.5
                            l2.6,4.5l4.3,2.2l3.4,2.6l0.4,5l1.6,7.3l-1.9,7.8l-4.6,6.5l0.5,4.3l5.2,3.9l6.2,3.8l5.5,0.9l4,2.9l7.3,4.1L1173.7-51L1173.7-51z"
                        style="fill: rgb(255, 255, 255);"></path>
                      <path id="tw-map-19" class="st1" d="M1313-125.7l2.1,0.5l1.6,2.2l-0.7,2.3l-3.8-0.1l-1.4-0.8l-1.7-2.7l0.9,0.3L1313-125.7
                            L1313-125.7z M1266,26.9h-1.1l-11.1-1.7l-18.5-11.1l-3.8,0.9l-2.4,6l-4.9,4.5h-6.5l-8.3-3.2l-15-3.8l-6.5-3.1l-2.5-2.1l-5.9-4.7
                            h-4.9l-4.7,2.3l-4,0.6l-3.7-2.5l-4.4-2.6l-4.9-1l-1.4-3.8l0.6-5.5l-3.6-1l4.3-10.5l14-14.2l3.8-5.8l-0.6-4.4l1.4-4.7l2.3-6.5
                            l0.5-1.5l3.9-1.6l3.3,0.6l3.4-1.3l2.2-3.8l-3.1-12.4l5.4-3.9l3.1-0.9l5.7-1.6l4.9-1.8l3.8-3.3l5-3.5l6.6-3.2l3.9-2.8l-0.4-2l-1-3.2
                            l-0.2-4.2l2-4.9l4.7-4l3.8-2.3l13-5.3l13.5-8.1l6.2-1.9l5-3.6l3.1-5l3.3-4.1l3.7-2l3.5-1.2l4.6-2.9l1.6-3.8l-2.5-3.6l1.4-2.9
                            l11.2-2.3l3.7-2.5l8.4-4.4l5.9-1.3l3.3,1.9l0.8,1.1l-12,6l-5.5,4.7l-18.7,22.8l-2.9,4.8l-2.3,6.8l-1.6,7.7l-0.5,7.6l0.3,7.4
                            l3.3,15.5l-0.2,4l-1.5,3.9l0.2,8.1l3.5,6.3l6.5,4l7.6,1.4v1.8l-3.2-0.3l-3.1,0.3l-2.6,0.8l-1.9,1.4l2.7,5l1.3,6.5l-0.8,5.6l-6,3.4
                            l-0.4,2.5l0.7,3l1.7,2.7l0.6,2.8l-2.5,2.4l-6.2,3.6l-7,8l-0.3,3.2l0.5,7l-1.2,2.6l-1.3,2.3l-0.8,3.2l-0.5,6.4l-0.6,1.6l-1,1.3
                            l-0.5,1.4L1266,26.9L1266,26.9z"></path>
                      <path id="tw-map-1" class="st1"
                        d="M1265.4-209.6l-0.3,11.9l0.2,3l3.7,3.9l-0.4,2.5l-2.5,1.8l-4,1.5l-5.1-0.6l-10.6-4.4l-3-2.2
                            l-3.7-3.4l-2.8-3.5l-1.7-3.5l-2.9-3.7l-0.6-2.9l3.2-2.2l7.2-3.1l4.4-2.9l1.4,0.9l2.4,2.7l3.9,1.4L1265.4-209.6L1265.4-209.6z">
                      </path>
                      <path id="tw-map-7" class="st1" d="M1054.9-85.6l4.4,11.1l3.9,4.4l6,4.5l12.1,5.7l3.9,3.4l0.7,5.2l-0.3,3.9l-0.8,3.5l-1,3.1l1,2.9
                            l1,4l-1.3,4.6l-0.9,5.1l4.1,1l7.7-2.1l6.8-0.5l4.8,0.5l12.5-3.2l5,4l1.3,4.4l3.3,3.3l4.6,7.8l0.6,4.9l-3.7,2.6l-1.8,5.6l-4.9,2
                            l-5.3-0.1l-4.2,3l-4.6,4.4l-5.9,3.2l-11.6,9.2l-6.8,2.9l-8.9,4.7l-5.4-2.1l-5-5.6l-6-2.4l-9.9-0.8l-5.5,3.3l-0.9,7.4l-5.2,2.8
                            l-12.1,0.7L1015,30l-6.6-1.2l-7.3-3.6L986,14.1l-6.3-5.5l-4.7-5l-9.2-14.3l7.2-8.1l1.9-4l0.9-6.6L978-35l5.9-10.4l1.6-6.3l1.5-2.7
                            l6.8-2l1.9-2.1l1.1-2.6l1.4-2.5l4.2-4.3l4.6-3.4l5.6-1.5l7.1,1.3l-0.9-5.4l2.7-3.7l3.7-3.8l1.9-5.7l0.8-1.9l3.6-1.8l0.3-1.3l6.9,2.7
                            l4.3,2.6l2.7,3.8l4.4,1.7l4.6-1.1L1054.9-85.6L1054.9-85.6z"
                        style="fill: rgb(255, 255, 255);"></path>
                      <path id="tw-map-2" class="st1" d="M1228-161.4l-4.2,1.7l-5.8-0.1l-4.8-1l-3.7-3.3l-3.8-4.3l-5.8-4.6l-3.9-6.7l1.5-7.4l-1.2-6.3
                            l-5.7-5.5l-3.8-4.2l1.6-3l1.8-2.4l2.1-4.6l3.6-4l10.9-6.4l2.9-2.5l4-2l3.8,1.2l2.1,2.2l-0.5,3.6l0.4,3.5l3.2,6.8l2.5,10l3.9,3.5
                            l1.6,4.4l-1.6,6.6l0.1,5.1l4.6,2.6l3.8,3.2l-2,4.3L1228-161.4L1228-161.4z"></path>
                      <path id="tw-map-3" class="st1" d="M1246.5-217.4l-4.4,2.9l-7.2,3.1l-3.2,2.2l0.6,2.9l2.9,3.7l1.7,3.5l2.8,3.5l3.7,3.4l3,2.2
                            l10.6,4.4l5.1,0.6l4-1.5l2.5-1.8l0.4-2.5l-3.7-3.9l-0.2-3l0.3-11.9l34.6,8.4l3.2,2l-1.6,3.7l-0.4,2.9l0.7,5.2l2.4,8.7l2.6,4.1
                            l2.2,0.9l7-1l3.6,0.4l4.2,1.1l3.7,1.9l2,2.5l-8.7,4.3l-0.8-1.1l-3.3-1.9l-5.9,1.3l-8.4,4.4l-3.7,2.5l-11.2,2.3l-1.4,2.9l2.5,3.6
                            l-1.6,3.8l-4.6,2.9l-3.5,1.2l-3.7,2l-3.3,4.1l-3.1,5l-5,3.6l-6.2,1.9l-13.5,8.1l-13,5.3l-3.8,2.3l-4.7,4l-2,4.9l0.2,4.2l1,3.2l0.4,2
                            l-3.9,2.8l-6.6,3.2l-5,3.5l-3.8,3.3l-4.9,1.8l-5.7,1.6l-2.5-5.4l-8.9-8.5l-1.4-5.6l-0.8-5.2l3.1-3.7l1.5-5.3l-8.5-12.3l-5-2
                            l-7.4,0.4l-5.1-2.9l1.3-6.7l-1-5.1l-5.4-5.1l-1-5.1l1-5.8l-0.2-6.2l3.7-4l13.1-3.9l3.3-3.4l1-4.2l-0.5-4.1l-5.1-7.5l-4.2-2.2l-4.1-1
                            l-3.2-2.8l-4.7-3.1l-6.3-3l-4.2-4.6l11.2-2.1l4.8-1.8l6.1-5.2l1.9-0.9l2.2-0.4h3.1l3.5,1.1l1.9,2.7l1.2,2.7l1.5,1.6l3.5-1.4
                            l-3.6-5.7l-5.8-5.9l-3.1-1.9l0.9-2.7l1.8-1.5l1.9-0.9l0.8-1l2.1-5.1l3.2-5.9l6.6-5.9l9.6-4.9l11-2.5l10.8,1.2l4.5,3.4l10,14.2
                            l3.6,7.4l1.2-0.5l2.7-0.7l3-0.4l2.2,0.6l-0.1,0.9l-1.1,1.3l-1,1.8l0.1,2.2l1.1,1.2L1246.5-217.4L1246.5-217.4z M1228-161.4l7.6-9.6
                            l2-4.3l-3.8-3.2l-4.6-2.6l-0.1-5.1l1.6-6.6l-1.6-4.4l-3.9-3.5l-2.5-10l-3.2-6.8l-0.4-3.5l0.5-3.6l-2.1-2.2l-3.8-1.2l-4,2l-2.9,2.5
                            l-10.9,6.4l-3.6,4l-2.1,4.6l-1.8,2.4l-1.6,3l3.8,4.2l5.7,5.5l1.2,6.3l-1.5,7.4l3.9,6.7l5.8,4.6l3.8,4.3l3.7,3.3l4.8,1l5.8,0.1
                            L1228-161.4L1228-161.4z"></path>
                      <path id="tw-map-4" class="st1" d="M1192.4-75.8l-3.1,0.9l-5.4,3.9l3.1,12.4l-2.2,3.8l-3.4,1.3l-3.3-0.6l-3.9,1.6l-0.5,1.5l-4.8-2.2
                            l-7.3-4.1l-4-2.9l-5.5-0.9l-6.2-3.8l-5.2-3.9l-0.5-4.3l4.6-6.5l1.9-7.8l-1.6-7.3l-0.4-5l-3.4-2.6l-4.3-2.2l-2.6-4.5l-3.4-3.5
                            l-3.9,0.3l-3.8-0.7l-3.1-3.1l-4.2-3.1l-6.5-2.1l-3.5-3.7l1.1-5.8l-3.6-4.2l-6.8-2.2l-4.1-2l-4.3-1.2l-5-2l-4-8.7l-4.6-3.1l-13.7,1
                            l-3.1-1.1l8.9-14.2l6.9-8.3l7.2-6.1l18.4-6.1l4.3-2.7l3.7-3.2l4.5-2.5l9-3.2l20.1-3.6l4.2,4.6l6.3,3l4.7,3.1l3.2,2.8l4.1,1l4.2,2.2
                            l5.1,7.5l0.5,4.1l-1,4.2l-3.3,3.4l-13.1,3.9l-3.7,4l0.2,6.2l-1,5.8l1,5.1l5.4,5.1l1,5.1l-1.3,6.7l5.1,2.9l7.4-0.4l5,2l8.5,12.3
                            l-1.5,5.3l-3.1,3.7l0.8,5.2l1.4,5.6l8.9,8.5L1192.4-75.8L1192.4-75.8z"></path>
                      <path id="tw-map-9" class="st1" d="M977.8,115l0.1,3.6l-4.3,1.6l-1.2,2.9l0.5,4l-2,4.6l-1.6,5.4l-0.1,5.7l-1.2,6.6l-0.9,13.4
                            l2.1,6.3l3.6,3.3l3.9,1.4l5.6,2.9l-1,3.5l-3.8,1.5L975,184l-2.4,1.6l-1,0.7l-12-2.4l-5.8,0.1l-12.2-6l-19.7-2.3l-11.6-4.4l-6.6-1.8
                            l-7.6-0.4l-22,2.6l-7.6-4.4l0.8-1.4l1.6-7.1l1.2-3l7.1-6.8l2-2.8l2.7-7.8l4.2-7.7l5.7-16.1l2.7-4.7l3-3l2.5-1.7l2.2-1.1l1.6-1.4
                            l0.6-3l1.2-2.8l5.1-4l1.2-3l0.6-10.1l0.9-2.8l2.7-2.6l11.3-13.2l5.8,1.9l4,3.5l2.7,6.3l1,7.6l4.5,5.4l11.9,3.5l4.3,3.6l3.2,5l2,4
                            l0.1,4l1.2,3.3l4.3,0.8l5.4,3.5V115L977.8,115z" style="fill: rgb(255, 255, 255);"></path>
                      <path id="tw-map-13" class="st1"
                        d="M830.2,318.6l-1.8,1.4l-0.4-1.1l2.4-3.1l0.9-2.4l1.1-1.5l0.6,0.5l0.1,1.1l-1.4,2L830.2,318.6
                            L830.2,318.6z M832.4,306l-0.7-0.7l2-3.8l0.9-0.4l-0.5,1.9L832.4,306L832.4,306z M837.3,297l-0.1-4.4l0.5,0.4l0.1,2.9L837.3,297z
                             M838.7,287.3l-0.8,1.6l-0.5-2L838.7,287.3z M837.4,281.2l-0.5,1.3l-1.3-2.1L837.4,281.2z M807.6,282.2l-3.2,1.6l3.8-5.4l13.9-14.1
                            l10.6-13.5l2.5-0.8l-9,14.7l-4.5,4.5l-2.9,3.5l-3.8,3.8l-3,2.1L807.6,282.2L807.6,282.2z M997.1,231.1l6.1,0.7l6.8,2.6l4.1,1.2
                            l5.1,2.8l-0.3,5.3l-3,5.1l1.2,4.8l2.7,6.5l0.4,5.9l1.1,3.8l7.6,1.4l25.6,0.2l0.9,0.2l-18.5,9.4l-8.5,6.8l-3.6,6.8l-4.2,5l-7.7,4.3
                            l-7.9,6.1l-4.5,5.4l-12.3,7.3l-5.8,0.6l-6.9-0.7l-3.6,3.5l-0.1,5l1.4,4.5l1,6.7l-8.4-1l-3.7-1.1l-5,0.6l-5.3,2.4H948l-4.5-3.5
                            l-1.6-4.6l1.8-14.2l-1-7.5l-9.9-10.1l-1.7-5.1L929,294l-4-2.4l-7.2-2.4l-8.5,0.5l-15.2,2.8l-7.8,3.5l-6.1,4.6l-4.7,4.8l-6.6,5.1
                            l-5.8,3.6l-2.5,4.9l-6.2,2.8l-7.2-1.8l-8.9-1.3l-5.2-2l3.8-0.3l3.3-1.4l1.4,0.5l-0.9-3.2l-2.2,1.6l-1.8-0.5l-2.5-0.1V310l2.4-5.6
                            l3.7-0.3l5.4,0.1l-3.7-10.5l-4.1-8l1.9-3.7v-1.9l-3.1-1.5l0.4-1.8l1.8-2l0.9-2.6l4-5.2l-8.5,0.5l-0.2-8.7l11.6-1.4l8.3,4.7l6.1,0.1
                            l3.9-3.2l1.7-4.9l2.1-3l5.3-0.8l7-5.7l4.4-2.4l3.8-3.8l16.3-9.4l7.2-2l12.6-2.3l6.9-0.4l5.3,4.6l5,5.9l12.6,4.6l3.7-0.5l8.3-2.4
                            l4.7,3.4l2.4,3.9l6.3-0.6l11.7-2.4l4-1.3v-3.4l0.3-5L997.1,231.1L997.1,231.1z M904.4,261.9l-3.8,4.1l0.9,5.6l6.1,2.4l7,4.5l7.3,1.7
                            l6.8-2.7l4.5-0.6l3-2.2l-2.5-6.8l-2.5-4l-4.1-2.2l-5.6-2.1l-7.8,0.7L904.4,261.9L904.4,261.9z"></path>
                      <path id="tw-map-12" class="st1" d="M904.4,261.9l9.3-1.6l7.8-0.7l5.6,2.1l4.1,2.2l2.5,4l2.5,6.8l-3,2.2l-4.5,0.6l-6.8,2.7l-7.3-1.7
                            l-7-4.5l-6.1-2.4l-0.9-5.6L904.4,261.9L904.4,261.9z"></path>
                      <path id="tw-map-18" class="st1"
                        d="M1266,26.9l0.6,0.8l1.6,2.9l0.2,1.1l-1.4,2.4l-5.8,5.7l-6.2,8.6l-4.7,3.7l-1.4,2l0.7,2.1
                            l-0.9,1.5l-6.6,5.1l-2.5,2.4l-2.8,6l-2.9,12.2l-7.4,10.9l-1.5,4.4l0.2,4.7l1.8,5.2l1.5,2.3l1.3,1l0.8,1.4l0.1,3.2l-1.1,3.6l-3.7,5.8
                            l-0.7,3.5l-0.4,6.4l-3.2,16.3l-6.4,17l-8,40.1l-4.8,9.8l-11,64.1l-3.5-1l-10.8,5.2l-3.9,5.4l1.7,6.9l0.6,6.9l-3.6,6.9l-3.4,5.2
                            l-2.7,6.6l-2.4,8.4l-3.7,7.7l-4.8,13.2l-3.1,6.1l0.1,6.7l-0.9,6.2l-6.5,3.7l-8.2-1.1l-11.7-9.7l-9.2-16l-5.7-1.5l-6.3-0.9l-5-4.8
                            l-6.1-2.9l-7.8-2.8l-5-8.1l-1.2-7.4l-0.3-2.5l-2.8-7.6l-6.3-5.2l-5.6-3.6l-1-4l1.4-3.2l5.6-2.4l3-5l-1.9-5.8l6-3.5l3.1-2.8l-1.7-6.2
                            l1.5-2.7l1.5-4l5.2-3.9l7.4-1.6l7.4-0.3l5.3-4.7l1.3-8.5l4-5.2l7.6-2.8l4.5-3.1l1.6-5.1l3.2-12.6l1.2-8.4l-0.9-7.2l-1.2-5.4
                            l-3.2-4.1l-2.1-4l5.7-9.4l0.2-3.7l2.5-7l3.9-8.5l3-8.8l1.6-9.9l0.6-7.6l-1.8-4.5l-2-3.3l2.3-7.6l5.1-10.7l8-10.4l0.3-3.9l-1.5-4.5
                            l-5.2-3.4l-2.9-3.1l-0.2-9.9l3.7-2.9l6.6-2.2l5.2-2.4l-0.2-3.7l-1.4-6.2l2.8-2l1.2-2.1l3.4-1.7l3.1-3.8l1.3-5.1l3-5l7.5-4.7l2.4-6.2
                            l0.4-4.2l4.7-4.9l2.5,2.1l6.5,3.1l15,3.8l8.3,3.2h6.5l4.9-4.5l2.4-6l3.8-0.9l18.5,11.1l11.1,1.7L1266,26.9L1266,26.9z">
                      </path>
                      <path id="tw-map-10" class="st1" d="M1155.6,53l1.4,6.2l0.2,3.7l-5.2,2.4l-6.6,2.2l-3.7,2.9l0.2,9.9l2.9,3.1l5.2,3.4l1.5,4.5
                            l-0.3,3.9l-8,10.4l-5.1,10.7l-2.3,7.6l2,3.3l1.8,4.5l-0.6,7.6l-1.6,9.9l-3,8.8l-3.9,8.5l-2.5,7l-0.2,3.7l-5.7,9.4l2.1,4l3.2,4.1
                            l1.2,5.4l0.9,7.2l-1.2,8.4l-3.2,12.6l-1.6,5.1l-4.5,3.1l-7.6,2.8l-4,5.2l-1.3,8.5l-5.3,4.7l-7.4,0.3l-7.4,1.6l-5.2,3.9l-1.5,4
                            l-1.5,2.7l1.7,6.2l-3.1,2.8l-6,3.5l-0.7-2l-4.2-5.9l-5.8-2.2l-4.3-1l-0.9-0.2l-25.6-0.2l-7.6-1.4l-1.1-3.8l-0.4-5.9l-2.7-6.5
                            l-1.2-4.8l3-5.1l0.3-5.3l-5.1-2.8l-4.1-1.2l-6.8-2.6l-6.1-0.7l-2.6-3.5l-8.2,0.9l-6.8,2l-5.8-2.5l-4-4.7l0.9-5.7l1.9-5.2l-1-7.7
                            l1-7.2l2-4.7l-1.9-7.2l2.4-1.6l2.5-2.3l3.8-1.5l1-3.5l-5.6-2.9l-3.9-1.4l-3.6-3.3l-2.1-6.3l0.9-13.4l1.2-6.6l0.1-5.7l1.6-5.4l2-4.6
                            l-0.5-4l1.2-2.9l4.3-1.6l-0.1-3.6l4.3,0.2l17.9,2.5l4.2-0.6l5-4.8l7.6-14.4l3.7-8.5l6.4-3l10.1,1.4l6-0.2l5.8-7.7l3-1.9l8.9,6.7
                            l3.5-0.9l2.6-5.5l4.7-3.9l6.6,0.1l5-1.9l7.9-7.6l5.1-2.9l4.4-0.8l8.8-4.7l6.2-0.2l6.3-1l11.1-4.4l4.6-0.3l4.7,1L1155.6,53L1155.6,53
                            z" style="fill: rgb(255, 255, 255);"></path>
                      <path id="tw-map-8" class="st1"
                        d="M1134.3-4.1l0.8-0.6l10.6-1l2.8,0.8l3.6,1l-0.6,5.5l1.4,3.8l4.9,1l4.4,2.6l3.7,2.5l4-0.6l4.7-2.3
                            h4.9l5.9,4.7l-4.7,4.9l-0.4,4.2l-2.4,6.2l-7.5,4.7l-3,5l-1.3,5.1l-3.1,3.8l-3.4,1.7l-1.2,2.1l-2.8,2l-13.4-1.3l-4.7-1l-4.6,0.3
                            l-11.1,4.4l-6.3,1l-6.2,0.2l-8.8,4.7l-4.4,0.8L1091,65l-7.9,7.6l-5,1.9l-6.6-0.1l-4.7,3.9l-2.6,5.5l-3.5,0.9l-8.9-6.7l-3,1.9
                            l-5.8,7.7l-6,0.2l-10.1-1.4l-6.4,3l-3.7,8.5l-7.6,14.4l-5,4.8l-4.2,0.6l-17.9-2.5l-4.3-0.2v-1.4l-5.4-3.5l-4.3-0.8l-1.2-3.3l-0.1-4
                            l-2-4l-3.2-5l-4.3-3.6l-11.9-3.5l-4.5-5.4l-1-7.6l-2.7-6.3l-4-3.5l-5.8-1.9l0.6-0.8l0.8-3.3l3.3-2.7l2.2-6.5l2.7-12.3l9.3-16.1
                            l2.8-9.9l3.4-5.5l13.3-14.8L975,3.6l4.7,5l6.3,5.5l15.1,11.1l7.3,3.6l6.6,1.2l11.6,6.7l12.1-0.7l5.2-2.8l0.9-7.4l5.5-3.3l9.9,0.8
                            l6,2.4l5,5.6l5.4,2.1l8.9-4.7l6.8-2.9l11.6-9.2l5.9-3.2l4.6-4.4l4.2-3l5.3,0.1l4.9-2l1.8-5.6L1134.3-4.1L1134.3-4.1z"
                        style="fill: rgb(255, 255, 255);"></path>
                      <path id="tw-map-11" class="st1" d="M972.6,185.6l1.9,7.2l-2,4.7l-1,7.2l1,7.7l-1.9,5.2l-0.9,5.7l4,4.7l5.8,2.5l6.8-2l8.2-0.9
                            l2.6,3.5h-0.5l-0.3,5v3.4l-4,1.3l-11.7,2.4l-6.3,0.6l-2.4-3.9l-4.7-3.4l-8.3,2.4l-3.7,0.5l-12.6-4.6l-5-5.9l-5.3-4.6l-6.9,0.4
                            l-12.6,2.3l-7.2,2l-16.3,9.4l-3.8,3.8l-4.4,2.4l-7,5.7l-5.3,0.8l-2.1,3L865,259l-3.9,3.2l-6.1-0.1l-8.3-4.7l-11.6,1.4l4.6-5.2
                            l-0.2-16.4l0.7-12.3l2.8-9.8l4.3-7.7l1.3-10l2.3-8.8l1.3-3l6.1-8.1l1.1-2.8l0.7-1.5l5.6-4.3l0.8-1.6l7.6,4.4l22-2.6l7.6,0.4l6.6,1.8
                            l11.6,4.4l19.7,2.3l12.2,6l5.8-0.1l12,2.4L972.6,185.6L972.6,185.6z"></path>
                      <path id="tw-map-17" class="st1" d="M1219.8,688.4l-5.5,1.7l-7.3-2.9l-6.8-4.8l-3.9-3.7l1.2-2.7l-0.1-2.5l-1-2.4l-1.7-2.1h19.5v1.8
                            l-1.3,3.5l-0.4,2.9l0.9,2.5l4.7,3.5l2,2.5L1219.8,688.4L1219.8,688.4z M1195.8,510.8l-0.1,1.1l-3.4-0.4l-0.4-0.6l-2.7-1l-2.8-4.9
                            l-1.4-4.3l0.6-0.6l10-0.7l1.1,0.6l0.8,2l-0.8,3.9l-0.9,1.6l-0.4,1.7L1195.8,510.8L1195.8,510.8z M1032.7,624.9l-4.5,0.3l-10.2-4.7
                            l-4.6-4.9l-3.2-5.9l-0.6-6.1l0.1-5.7l-3.1-4.4l-3.4-1.7l-2.7-3.9l0.5-4.5l2.1-3.9l5.3-3.2l2.5-3.8l-4.6-5.6l-2.6-5v-5.4l-1.1-7.1
                            l-2-6.1l-1.2-6.5l0.8-14.7l3-7.5l3.7-6.6l2.4-6.6l5.4-4.5l7.6-1.6l4.8-2.7l9.8-4.1l2-5l0.1-5.2l2.8-13.8l-5.5-3.6l-5.4-1.3l-0.7-4.9
                            l-3.5-6.6l3.9-0.5l-1.2-4.9l-6.2-6.4l-3-4.6l-1.3-8.1l2.3-9.8l8.5-7.2l4.3-5.9l0.1-11.2l3-13.2l-2.1-9.9l0.8-6.9l7.4-4l2.7-4.9
                            l-2.3-6l0.9-5.7l7.8-5.1l4-3.9l6.4-4.1l15.6-3.8l1.2,7.4l5,8.1l7.8,2.8l6.1,2.9l5,4.8l6.3,0.9l5.7,1.5l9.2,16l11.7,9.7l8.2,1.1
                            l6.5-3.7l0.9-6.2l-0.1-6.7l3.1-6.1l4.8-13.2l3.7-7.7l2.4-8.4l2.7-6.6l3.4-5.2l3.6-6.9l-0.6-6.9l-1.7-6.9l3.9-5.4l10.8-5.2l3.5,1
                            l-4.6,26.4l-2.2,4.9l-7.1,9.4l-2.6,4.9l-2.1,6.1l-1.5,11.4l0.2,10.2l-1,9.7l-4.9,9.9l-2.1,2.1l-4.7,3.5l-2.2,2.2l-1,2.3l-1.7,5.8
                            l-4.8,8.4l-2.9,13.1l-2.1,5.9l-10.3,14.8l-1.3,2.7l-13.9,11.8l-3.3,3.8l-0.4,2.7l0.6,6.2l-0.2,2.8l-1.2,3.2l-2.2,3.5l-4.7,6.1
                            l-4.7,4.5l-16.1,10.7l-10.8,11.9l-2.7,1.4l-2.1,2.7l-5.2,13.5l-2.6,5l-8,10l-3.3,6l-1.9,12.3l-4.8,16.8l-9.5,16.7l-1.4,5.7
                            l-1.7,16.1L1032.7,624.9L1032.7,624.9z"></path>
                      <path id="tw-map-20" class="st1" d="M494.3,295.6l-1.8,0.9l-1.3-1.5l-1.5-4.7l1-1.2l3.8-1.3l2.7,0.7l0.1,2.1l-0.2,1.6l-1.2,1.2
                            L494.3,295.6z M493.1,283.6l-1.7,3.1l-2.2-0.6l-2-2.5l-0.3-2.5l1.2-1.1l3.2,0.5L493.1,283.6z M541.9,280.4l-0.4,0.1l-1.2-1.5
                            l0.3-0.6l2.5-0.2l0.8,2L541.9,280.4L541.9,280.4z M555.9,275.8l0.3,0.2h2.3v1.3l-1.1,1.5l-0.7,1.8l-1.1-2.8L555.9,275.8L555.9,275.8
                            z M522.4,246.2l-1.7,0.1l-3,1.8l-0.4-0.4l0.4-1.3l1.1-1.5l0.7-0.6l1.6-0.3l1.5,0.9L522.4,246.2z M514,239.5l0.1,2.3l0.5,1.6l1.4,1.2
                            l-0.6,1.6l-1.2,1.2l0.6,1.9l-1.5,0.6l-3.1-0.3l-1.6-0.7l1.4-3.1l-0.2-4.2l-0.9,0.6l-2,0.6l-0.6-2.3l2.1-5.1l1.6-0.3l2.7,3.6
                            L514,239.5L514,239.5z M464.5,233.8l2.4,0.6v1.6l-0.6,0.9l-2.1,0.6l-1.1-1.1L464.5,233.8L464.5,233.8z M523,209l-3.2,2.1l-2.1,0.6
                            l-2.2,1.1l-1.3-0.5l-0.3-1.8l0.7-0.6l1.8,0.5l4-2L523,209L523,209z M542.5,181l-0.6,1.3l4-1.3l3.1,0.4l2.3-0.2l1.6-2.7l4.7,8.7
                            l1.2,4l-0.5,3l-2-2l-2.5-1.7L551,190l-4,2.2l-2.8,0.3l-1.4,0.8l-0.7,1.5l-1.1,4.1l-0.7,1.2l-4.7,2.7l-4.8,0.7l-4.8-1.9l-4.9-4.9
                            l1.3-2.5l2.7,3.2l4,0.9l4.3-1.2l3.5-2.9l-2.4-0.9l-2-1.2l-1.5-1.6l-1.4-2.2l-0.8,1.4l-1,0.6l-0.3-4l0.3-4h1.8l2.1,0.5l7.4-4.6
                            l4.6-1.6L542.5,181L542.5,181z M502.6,190.3h-3.8l0.7-2.1l1.2-1.3l1.9-0.5l2.5-0.2l2.2-0.9l0.6-2l0.1-4.8l3.2-10.4l3.1-3l4.2,3.6
                            l-2.5,1.5l-1.7,3.6l-2.8,8.5l-0.1,2.2l0.7,2l-0.3,1.3l-3,0.5l-2.2,0.1l-1.5,0.3l-1.3,0.6L502.6,190.3L502.6,190.3z M536.4,172.4
                            l-2.2,0.7l-1.1-1.5l-0.9-3.5l-2-2.9l-4.3-4.3l5.5-4.1l3.3,1.7l3.2,2.8l1.4,2.9l-2.5,2.4l1,3.5L536.4,172.4L536.4,172.4z M539,142
                            l-0.3,0.9l-1.3-3l-0.2-1.4l1.8-1.5l1.6-3l0.5,1.1l2.5,1.4l-0.4,1.8l-2.2,1.3L539,142z"></path>
                      <path id="tw-map-21" class="st1" d="M444.4,27.5l-5.2,1.5l-3-1.2l5-9.9l1.3-1.4l2.1-0.5l2.1-0.1l2,1.4l1.6,1.8v3.1l-1.4,2.1
                            l-1.6,0.1l-1.1,1.2l-0.6,1.2L444.4,27.5L444.4,27.5z M499.4,0.7l4.7,12.6l-1,8.8l-3.9,4.6l-6.8-4.3l-5-1.6l-8.1,0.8l-7.1,4.5
                            l-3.9,6.1l-3.4,1.7L461,32l-2.7-0.1l-2.4-1.1l-1.2-2.1l0.5-0.7l2.1-2.8L458,24l0.2-2.1l-0.1-2.5l-0.7-4.3l-1.8-4.2l-0.2-2.1l1.5-0.9
                            l7.6-3.7l10,6.6l7-0.9l1.1-8.7l2.3-5.5l7.5-1.5L499.4,0.7L499.4,0.7z M575.3-106.1l-2.9,1.5l-1.3-1.2l0.7-3.2l2.4-1.4l1.7,0.3
                            l0.2,1.9L575.3-106.1L575.3-106.1z"></path>
                      <path id="tw-map-22" class="st1" d="M466.9-215.5l-0.2,2.3l-1.9,2.1l-4.1,2l2.5-5.6l2.5,0.5l0.1-0.9L466.9-215.5z M455.1-216.3
                            l-2,2.1l-2.4-3.4l3.6-1.3l2.7,1.5L455.1-216.3L455.1-216.3z M451.9-271.2l1,0.5l4.4-2.6h2.8v1.8l-2.8,3.2l-5.5,2.9l-1.7,0.3
                            l-2.5-1.7l-0.8-2.4l0.5-2.8l1.1-2l1-0.2l0.3,2.2C449.7-272,451.9-271.2,451.9-271.2z M473.2-289l-0.6,2.2l0.6,1.2l-1.4-0.2l-1.5-2.2
                            l-1.1-0.7l-2.3,1.3l-1-0.4l-1.3,0.3l-1.5,1.7l-1.2,5l-1.1-0.7l-0.5-1.5l0.5-4.3l0.5-1.6l1.1-0.7l2.7-0.9l0.7-0.9l2.2-1.3l2.5,0.4
                            l1.3,1.9L473.2-289L473.2-289z M603-334.6l-1.2,0.4l-1.1-0.4l-1.4,1.3l-1.1,2.1l-0.3-0.5l-1.2-0.2l-1.8-1l1.1-1.7l-0.5-1.4l0.9-0.6
                              l2.2-1.8l2.6,1.5l0.6,1.3L603-334.6z"></path>
                    </svg>
                  </xml>
                  <!-- tooltip-box -->
                  <div class="tooltip-box">
                    <span id="city-name"></span>：<span id="city-case-num"></span>例
                  </div>
                  <!-- tooltip-box -->
                </div>
                <div class="col-sm-12 col-md-3">
                  <table class="table table-bordered table-sm table-hover">
                    <thead>
                      <tr>
                        <th scope="col">縣市地區</th>
                        <th scope="col">病例數</th>
                      </tr>
                    </thead>
                    <tbody id="tw-city-list" class="font-weight-bold">
                      <tr id="TW_1">
                        <th scope="row">基隆市</th>
                        <td>
                          <span class="text-primary">1</span>
                        </td>
                      </tr>
                      <tr id="TW_2">
                        <th scope="row">台北市</th>
                        <td>
                          <span class="text-primary">10</span>
                        </td>
                      </tr>
                      <tr id="TW_3">
                        <th scope="row">新北市</th>
                        <td>
                          <span class="text-primary">11</span>
                        </td>
                      </tr>
                      <tr id="TW_4">
                        <th scope="row">桃園市</th>
                        <td>
                          <span class="text-primary">11</span>
                        </td>
                      </tr>
                      <tr id="TW_5">
                        <th scope="row">新竹市</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_6">
                        <th scope="row">新竹縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_7">
                        <th scope="row">苗栗縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_8">
                        <th scope="row">台中市</th>
                        <td>
                          <span class="text-primary">5</span>
                        </td>
                      </tr>
                      <tr id="TW_9">
                        <th scope="row">彰化縣</th>
                        <td>
                          <span class="text-primary">5</span>
                        </td>
                      </tr>
                      <tr id="TW_10">
                        <th scope="row">南投縣</th>
                        <td>
                          <span class="text-primary">2</span>
                        </td>
                      </tr>
                      <tr id="TW_11">
                        <th scope="row">雲林縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_12">
                        <th scope="row">嘉義市</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_13">
                        <th scope="row">嘉義縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_14">
                        <th scope="row">台南市</th>
                        <td>
                          <span class="text-primary">2</span>
                        </td>
                      </tr>
                      <tr id="TW_15">
                        <th scope="row">高雄市</th>
                        <td>
                          <span class="text-primary">2</span>
                        </td>
                      </tr>
                      <tr id="TW_16">
                        <th scope="row">屏東縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_17">
                        <th scope="row">台東縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_18">
                        <th scope="row">花蓮縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_19">
                        <th scope="row">宜蘭縣</th>
                        <td>
                          <span class="text-primary">1</span>
                        </td>
                      </tr>
                      <tr id="TW_20">
                        <th scope="row">澎湖縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_21">
                        <th scope="row">金門縣</th>
                        <td>0</td>
                      </tr>
                      <tr id="TW_22">
                        <th scope="row">連江縣</th>
                        <td>0</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--  -->

        </div>
      </div>
      <!-- partial -->
    </div>
    <!-- page content ends -->
  </div>
  <!--page body ends -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/layout/core.js"></script>
  <script src="js/layout/template.js"></script>
  <!-- <script src="js/layout/dashboard.js"></script> -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
  </script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="js/index.js"></script>
  <script type="text/javascript">
  $(function() {
    $('#sideBar').load('sidebar.html');
    // $("#TW-case-map").load('img/tw-2.svg');
    $(".st1").on('mousemove', function(e) {
      // console.log(offsetX, offsetY);
      e.preventDefault();
      offsetX = e.offsetX;
      offsetY = e.offsetY;
      $(".tooltip-box").css({
        "left": offsetX - 10 + "px",
        "top": offsetY + 20 + "px"
      });
    });
    $(".st1").hover(function() {
      cityID = $(this).attr("id").replace("tw-map-", "");
      cName = $("#TW_" + cityID + " > th").text();
      cNum = $("#TW_" + cityID + " > td").text();
      // $("#tw-map-" + cityID).css({
      //   "stroke": "#000",
      // });
      $(".tooltip-box").css({
        "display": "initial",
      }).html('<span id="city-name">' + cName + '</span>：<span id="city-case-num">' + cNum + '</span>例');
    }, function() {
      // $("#tw-map-" + cityID).css({
      //   "stroke": "#5F9EA0",
      // });
      $(".tooltip-box").css({
        display: "none",
      });
    });
  });
  </script>

</body>

</html>
