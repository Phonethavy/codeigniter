<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>style/img1/logo.png" />


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--begin::Primary Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="AdminLTE v4 | Dashboard" />
  <meta name="author" content="ColorlibHQ" />
  <meta name="description"
    content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
  <meta name="keywords"
    content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
  <!--end::Primary Meta Tags-->
  <!--begin::Fonts-->
  <base href="<?php echo base_url(); ?>" />
  <link rel="stylesheet" href="<?= base_url() ?>style/css/adminlte.css" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
  <!--end::Fonts-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
    integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
  <!--end::Third Party Plugin(OverlayScrollbars)-->
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <!-- <link rel="stylesheet" href="../css/adminlte.css" /> -->
  <!--end::Required Plugin(AdminLTE)-->
  <!-- apexcharts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />
  <!-- jsvectormap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/d90dda4fe3.js" crossorigin="anonymous"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
              <i class="bi bi-list"></i>
            </a>
          </li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
          <!--begin::User Menu Dropdown-->
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img src="<?= base_url('style/img1/user2-160x160.jpg') ?>" class="user-image rounded-circle shadow" alt="User Image" />
              <span class="d-none d-md-inline">Songkod kounlaboud</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <!--begin::User Image-->
              <li class="user-header text-bg-danger">
                <img src="<?= base_url() ?>style/img1/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="คำอธิบายรูปภาพ" width="300">
                <p>
                  Songkod kounlaboud - Web Developer
                  <small>Member since Nov. 2023</small>
                </p>
              </li>
              <!--end::User Image-->
              <!--begin::Menu Footer-->
              <li class="user-footer">
                <a href="dhb/login.php"
                  class="btn btn-default btn-flat pl-3  w-100 bg-danger text-light m-auto ">logout</a>
              </li>
              <!--end::Menu Footer-->
            </ul>
          </li>
          <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
      </div>
      <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar " data-bs-theme="dark" style="background-color: rgb(236, 26, 26);">
      <!--begin::Sidebar Brand-->
      <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.php" class="brand-link">
          <!--begin::Brand Image-->

          <img src="<?= base_url() ?>style/img1/logo.png" class="brand-image opacity-75 shadow" alt="คำอธิบายรูปภาพ" width="300">


          <!--end::Brand Image-->
          <!--begin::Brand Text-->
          <span class="brand-text fw-light">CMIMFI</span>
          <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
      </div>
      <!--end::Sidebar Brand-->
      <!--begin::Sidebar Wrapper-->
      <style>
        .sidebar-wrapper {
          width: 250px;
          background-color: rgb(255, 0, 0);
          padding: 10px;
          border-right: 1px solid #ccc;
          height: 100vh;
        }

        .nav {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        .nav-link {
          display: flex;
          align-items: center;
          padding: 7px;
          text-decoration: none;
          transition: background 0.2s;
          /* Smooth transition for hover */
          color: white;
          /* Assuming default text color for red background */
        }

        .nav-link:hover {
          background-color: rgba(131, 131, 131, 0.2);
          font-weight: bold;
          color: white;
          /* Ensure text color remains readable on hover */
        }

        .nav-link.active {
          background-color: rgb(255, 255, 255);
          /* White background */
          color: red;
          /* Red text */
          font-weight: bold;
        }

        .nav-item {
          position: relative;
        }

        .nav-treeview {
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.4s ease;
          padding-left: 20px;
        }

        .nav-item.menu-open>.nav-treeview {
          max-height: 500px;
        }

        .nav-arrow {
          margin-left: auto;
          transition: transform 0.3s ease;
        }

        .nav-item.menu-open .nav-arrow {
          transform: rotate(90deg);
        }

        i {
          margin-right: 8px;
        }
      </style>
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <ul class="nav sidebar-menu flex-column" role="menu">

            <!-- Dashboard -->
            <li class="nav-item">
              <a href="<?= base_url('/') ?>" class="nav-link">

                <i class="bi bi-card-list"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!-- KPI with toggle -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link nav-toggle">
                <i class="fa-solid fa-chart-column"></i>
                <p>
                  KPI
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?= base_url('kpi/1') ?>" class="nav-link">
                    <i class="fa-solid fa-circle fa-2xs"></i>
                    <p>KPI 1 ລາຍຮັບທັງໝົດ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('kpi/2') ?>" class="nav-link">
                    <i class="fa-solid fa-circle fa-2xs"></i>
                    <p>KPI 2 ລາຍຮັບອື່ນໆ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('kpi/3') ?>" class="nav-link">
                    <i class="fa-solid fa-circle fa-2xs"></i>
                    <p>KPI 3 ລູກຄ້າ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('kpi/4') ?>" class="nav-link">
                    <i class="fa-solid fa-circle fa-2xs"></i>
                    <p>KPI 4 ລາຍຈ່າຍດຳເນີນງານ</p>
                  </a>


                </li>
              </ul>
            </li>

            <!-- Financial -->
            <li class="nav-item">
              <a href="<?= base_url('financial/page1') ?>" class="nav-link">
                <i class="bi bi-journal-check"></i>
                <p>Financial</p>
              </a>
            </li>

            <!-- Service -->
            <li class="nav-item">
              <a href="<?= base_url('service/page1') ?>" class="nav-link">

                <i class="bi bi-cash-coin"></i>
                <p>Service</p>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </aside>
    <footer class="app-footer">
      <!--begin::To the end-->
      <div class="float-end d-none d-sm-inline"></div>
      <!--end::To the end-->
      <!--begin::Copyright-->
      <strong>

        <a href="#" class="text-decoration-none"> CMIMFI
          Performance Dashboard
        </a>.
      </strong>
      version 1.0.0 Updated 2025-05-09
      <!--end::Copyright-->
    </footer>
    <!--end::Footer-->

    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="<?= base_url() ?>style/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
    <!-- sortablejs -->
    <script>
      const connectedSortables = document.querySelectorAll('.connectedSortable');
      connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
          group: 'shared',
          handle: '.card-header',
        });
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>
    <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const sales_chart_options = {
        series: [{
            name: 'Digital Goods',
            data: [28, 48, 40, 19, 86, 27, 90],
          },
          {
            name: 'Electronics',
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
        chart: {
          height: 300,
          type: 'area',
          toolbar: {
            show: false,
          },
        },
        legend: {
          show: false,
        },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          type: 'datetime',
          categories: [
            '2023-01-01',
            '2023-02-01',
            '2023-03-01',
            '2023-04-01',
            '2023-05-01',
            '2023-06-01',
            '2023-07-01',
          ],
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy',
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
      );
      sales_chart.render();
    </script>
    <!-- jsvectormap -->
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
      integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
      integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>
    <!--end::Script-->

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const currentPage = window.location.pathname.split("/").pop() || "index.php";

        // Highlight current page (by filename only)
        document.querySelectorAll(".nav-link").forEach(link => {
          const href = link.getAttribute("href");
          const linkPage = href.split("/").pop(); // ใช้แค่ชื่อไฟล์ เช่น index.php

          if (linkPage === currentPage) {
            link.classList.add("active");

            // เปิดเมนูย่อยถ้าอยู่ใน submenu
            const treeview = link.closest(".nav-treeview");
            if (treeview) {
              treeview.style.display = "block";
              treeview.parentElement.classList.add("menu-open");
            }
          }
        });

        // Toggle submenu
        document.querySelectorAll(".nav-toggle").forEach(link => {
          link.addEventListener("click", function(e) {
            e.preventDefault();
            const parent = this.closest(".nav-item");
            const submenu = parent.querySelector(".nav-treeview");

            if (!submenu) return;

            const isOpen = parent.classList.contains("menu-open");

            // ปิด submenu อื่น ๆ ที่เปิดอยู่
            document.querySelectorAll(".nav-item.menu-open").forEach(item => {
              if (item !== parent) {
                item.classList.remove("menu-open");
                const sub = item.querySelector(".nav-treeview");
                if (sub) sub.style.display = "none";
              }
            });

            // toggle เมนูปัจจุบัน
            if (isOpen) {
              parent.classList.remove("menu-open");
              submenu.style.display = "none";
            } else {
              parent.classList.add("menu-open");
              submenu.style.display = "block";
            }
          });
        });
      });
    </script>




</body>
<!--end::Body-->

</html>