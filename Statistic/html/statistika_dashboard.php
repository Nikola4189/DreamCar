<?php

session_start();

?>


<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Tabla - Statistika </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
<!--                                                               -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-3">DreamCar</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
          
            <li class="menu-item">
              <a
                href="statistika_dashboard.php"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Statistika">Statistika</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="#"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Chat">Chat</div>
              </a>
            </li>
            
            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Izveštaji &amp; Tabele</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">PDF Izveštaji</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Vertical Form">
                      <form action="condition_report.php" method="post">
                        <p><input type="submit" value="Klasičan izveštaj stanja"></p>
                      </form>
                    </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Input groups">Finansijski izveštaj</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">CSV izvoz</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Vertical Form"><form action="csv_profils.php" method="post">
                    <p><input type="submit" value="Lista aktivnih korisnika"></p>
                      </form></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Horizontal Form">
                      <form action="csv_article.php" method="post">
                        <p><input type="submit" value="Lista proizvoda na stanju"></p>
                      </form>
                    </div>
                  </a>                  
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Horizontal Form">
                      <form action="csv_sold_article.php" method="post">
                        <p><input type="submit" value="Lista prodatih proizvoda"></p>
                      </form>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="table_page.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tabele</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search...">
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block"><?php isset($_SESSION["admin_name"]) ? $admin = $_SESSION["admin_name"]  : $admin='Nikola Novakovic'; echo $admin?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../admin_page.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Admin stranica</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Dobro mi došao Admine 🎉</h5>
                          <p class="mb-4">
                            Ovde možeš videti <span class="fw-medium">90%</span> korisnih informacija vezanih za promet robe i statistiku poslovanja. Neka ti je sa srećom !
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded" />
                            </div>                            
                          </div>
                          <span class="fw-medium d-block mb-1">Profit</span>
                          <h3 class="card-title mb-2">
                          <?php
                              require_once '../../BASE/db.php';
                              if ($c=$connect->connect_error) die("Connection failed: $c");
                              $r=$connect->query("SELECT price FROM used_car.article WHERE is_sell = '1'");
                              if ($r->num_rows > 0) {
                                $pt = 0;
                                while($row = $r->fetch_assoc()) $pt += $row["price"];
                                $p = ($pt*0.4)-(($pt*0.4)*0.25);
                                echo "$".$p;
                              } else echo "$0";
                              ?>
                          </h3>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +52.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded" />
                            </div>
                          </div>
                          <span>Prodaja</span>
                          <h3 class="card-title text-nowrap mb-1">
                          <?php
                              if ($pt > 0) {
                                $prodaja = $pt;
                                echo "$".$prodaja;
                              } else echo "$0";                              
                              ?>
                          </h3>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +52.42%</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Ukupan Prihod-->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Ukupan Prihod</h5>
                        <div id="totalRevenueCh" class="px-2"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="dropdown">
                              <button
                                class="btn btn-sm btn-outline-primary"
                                type="button"
                                id="growthReportId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <script>
                                  document.write(new Date().getFullYear());
                                </script>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-medium pt-3 mb-2">52% Rast Kompanije</div>

                        <div class="d-flex px-xxl-4 px-lg-6 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>
                                <script>
                                  document.write(new Date().getFullYear());
                                </script>
                              </small>
                              <h6 class="mb-0">
                              <?php
                                  if ($connect->connect_error) die("Connection failed: " . $connect->connect_error);
                                  $result = $connect->query("SELECT SUM(price) AS total FROM `used_car`.`article` WHERE YEAR(created_at) = YEAR(CURDATE()) AND `is_sell` = '1'");
                                  if ($result->num_rows > 0) {                                  
                                    $row = $result->fetch_assoc();
                                    echo "$".$row["total"];
                                  } else {
                                    echo "$0";
                                  }
                                  $connect->close();
                              ?>
                              </h6>
                            </div>
                          </div>                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>                            
                          </div>
                          <span class="d-block mb-1">Porezi</span>
                          <h3 class="card-title text-nowrap mb-2">
                          <?php
                              if ($pt > 0) {
                                $porez = ($pt*0.4)*0.25;
                                echo "$".$porez;
                              } else echo "$0";                              
                              ?>
                          </h3>
                          <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>                           
                          </div>
                          <span class="fw-medium d-block mb-1">Isplate

                          </span>
                          <h3 class="card-title mb-2">
                          <?php
                              if ($pt > 0) {
                                $isplata = $pt*0.6;
                                echo "$".$isplata;
                              } else echo "$0";                              
                              ?>
                          </h3>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +5.14%</small>
                        </div>
                      </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Profitni Izveštaj</h5>
                                <span class="badge bg-label-warning rounded-pill">Year
                                  <script>
                                    document.write(new Date().getFullYear());
                                  </script>
                                </span>
                              </div>
                              <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-medium"
                                  ><i class="bx bx-chevron-up"></i> 63.2%</small
                                >
                                <h3 class="mb-0">
                                <?php
                                  if ($row["total"] > 0) {                                  
                                    echo "$".(($row["total"]*0.4)-(($row["total"]*0.4)*0.25));
                                  } else {
                                    echo "$0";
                                  }
                                ?>
                                </h3>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Statistika Porudžbina</h5>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <h2 class="mb-2">8,258</h2>
                          <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                      </div>

                      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                      <canvas id="userTypeChart" width="400" height="200"></canvas>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // AJAX za dohvaćanje podataka iz PHP skripte
        fetch('get_user_data.php')
            .then(response => response.json())
            .then(data => {
                const labels = data.map(item => item.user_type);
                const counts = data.map(item => item.user_count);

                // Kreiranje grafikona
                const ctx = document.getElementById('userTypeChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: counts,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                            ],
                            borderWidth: 1
                        }]
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    });
</script>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-expenses"
                            aria-controls="navs-tabs-line-card-expenses"
                            aria-selected="true">
                            Prihod
                          </button>
                        </li>
                        <li class="nav-item">
                          <button 
                            type="button" 
                            class="nav-link"  
                            role="tab" 
                            data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-income"
                            aria-controls="navs-tabs-line-card-income"
                            aria-selected="true">
                            Rashod
                          </button>
                        </li>
                        <li class="nav-item">
                          <button type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-expenses"
                            aria-controls="navs-tabs-line-card-expenses"
                            aria-selected="true">
                            Profit
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                          <div class="d-flex p-4 pt-3">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                            </div>
                            <div>
                              <small class="text-muted d-block">Total Balance</small>
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">
                                  <?php
                                  if ($row["total"] > 0) {                                  
                                    echo "$".(($row["total"]*0.4)-(($row["total"]*0.4)*0.25));
                                  } else {
                                    echo "$0";
                                  }
                                ?>
                                </h6>
                              </div>
                            </div>
                          </div>
                          <div id="incomeChar">

                          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                          <canvas id="salesChart" width="400" height="200"></canvas>

                          <script>
                              document.addEventListener('DOMContentLoaded', function () {
                                  // AJAX za dohvaćanje podataka iz PHP skripte
                                  fetch('get_data.php')
                                      .then(response => response.json())
                                      .then(data => {
                                          const months = data.map(item => item.month);
                                          const prices = data.map(item => item.average_price);
                                      
                                          // Kreiranje grafikona
                                                                   const ctx = document.getElementById('salesChart').getContext('2d');
                                          const myChart = new Chart(ctx, {
                                                                       type: 'line',
                                              data: {
                                                  labels: months,
                                                  datasets: [{
                                                      label: 'Average Price',
                                                      data: prices,
                                                      borderColor: 'rgba(75, 192, 192, 1)',
                                                      borderWidth: 1,
                                                      fill: false
                                                 }]
                                             },
                                              options: {
                                                  scales: {
                                                      x: {
                                                          type: 'category'
                                                      },
                                                      y: {
                                                          beginAtZero: true
                                                      }
                                                  }
                                              }
                                          });
                                      })
                                      .catch(error => console.error('Error:', error));
                              });
                          </script>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , napravljeno sa ❤️ od Nikola Novaković | 2021203493
                  
                </div>
                <div class="d-none d-lg-inline-block">
                  <a href="../../admin_page.php" class="footer-link me-4">HOME</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
