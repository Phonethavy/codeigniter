<?php include "../nav/nav.php"; ?>

<link rel="stylesheet" href="..//css/kpi.css">

<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    </div>
    <!--end::Container-->
    <div class="app-content">
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->

          <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0"></h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item "><a href="../financial_page1/financial.php">Financial</a></li>
                  <li class="breadcrumb-item " aria-current="page">ອັດຕາສ່ວນຄວາມພຽງພໍຂອງການຫັກເງິນແຮສິນເຊື່ອທີ່ຖືກຈັດຊັ້ນ / ເງິນແຮທັງໝົດທີ່ຕ້ອງສ້າງຕາມລະບຽບຕ້ອງຫຼາຍກວ່າ</li>
                </ol>
              </div>
            </div>


            <!--begin::Row-->
            <div class="row">
              <div class="card mb-4 ">
              <div class="card-header" style="text-align: center;">
                  <h3 style="background-color: rgb(236, 26, 26); color: #eee; padding: 15px ; border-radius: 5px; ">
                    Financial Data for Year</h3>
                </div>
                <div class="sch1" style="text-align: center;">
                  <div class="flex flex-wrap items-center gap-2 bg-white p-4 rounded shadow-md">
                    <label> Select Year : </label>
                    <select class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                    </select>
                    <button class="btn-search flex items-center">
                      <span><i class="fa-solid fa-magnifying-glass"></i></span> Search
                    </button>
                  </div>
                </div>
                <p></p>
                <!-- /.card-header -->
                <div class="table-container">
                  <table>
                    <thead>
                      <tr>
                        <th>ລາຍການ</th>
                        <th> <i class="fa-solid fa-flag"></i> Goal</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul </th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr row span="">
                        <td>
                          ອັດຕາສ່ວນຄວາມພຽງພໍຂອງການຫັກເງິນແຮສິນເຊື່ອທີ່ຖືກຈັດຊັ້ນ / ເງິນແຮທັງໝົດທີ່ຕ້ອງສ້າງຕາມລະບຽບ
                          ຕ້ອງຫຼາຍກວ່າ
                        </td>
                        <td>12%</td>
                        <td>18.18%</td>
                        <td>18.23%</td>
                        <td>16.24%</td>
                        <td>16.88% </td>
                        <td>14.69%</td>
                        <td>15.13% </td>
                        <td>14.17% </td>
                        <td>15.97%</td>
                        <td>16.10%</td>
                        <td>16.43% </td>
                        <td>17.66%</td>
                        <td>47.54%</td>
                      </tr>


                  </table>
                </div>
                <div class="table-container">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr class="tabolable">
                        <th>ລາຍການ</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul </th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>

                      </tr>

                    </thead>
                    <tr class="nested-rows1">
                      <td>ຫັກແຮຊັ້ນ A</td>
                      <td>81,900,537,520.00</td>
                      <td>82,583,520,443.00</td>
                      <td>74,904,521,998.00</td>
                      <td>78,462,197,665.00</td>
                      <td>69,708,854,343.00</td>
                      <td>72,164,929,631.00</td>
                      <td>66,519,919,809.00</td>
                      <td>75,710,703,974.00</td>
                      <td>76,468,589,785.00</td>
                      <td>77,872,421,655.00</td>
                      <td>84,645,038,257.00</td>
                      <td>244,221,567,394.00</td>

                    </tr>
                    <tr class="nested-rows1">
                      <td>ຫັກແຮຊັ້ນ B</td>
                      <td>64,102,314,490.00 </td>
                      <td>68,354,807,863.00 </td>
                      <td>92,117,648,885.00</td>
                      <td>100,082,657,504.00</td>
                      <td>100,191,354,493.00</td>
                      <td>110,273,895,924.00</td>
                      <td>104,039,613,528.00</td>
                      <td>113,218,160,618.00</td>
                      <td>108,579,284,558.00</td>
                      <td>79,765,597,516.00</td>
                      <td>79,030,525,736.00</td>
                      <td>13,190,586,374.00</td>

                    </tr>
                    <tr class="nested-rows1">
                      <td>ຫັກແຮຊັ້ນ C</td>
                      <td>408,899,960,790.00</td>
                      <td>409,941,194,200.00</td>
                      <td>416,413,677,479.00</td>
                      <td>419,331,161,613.00</td>
                      <td>427,557,077,153.00</td>
                      <td>428,699,415,645.00</td>
                      <td>420,185,327,854.00</td>
                      <td>423,329,649,991.00</td>
                      <td>424,898,112,051.00</td>
                      <td>426,618,797,556.00</td>
                      <td>432,796,015,638.00</td>
                      <td>228,332,068,313.00</td>

                    </tr>
                    <tr class="nested-rows1">
                      <td>ຫັກແຮຊັ້ນ D</td>
                      <td>2,303,352,903.00</td>
                      <td>2,188,657,903.00</td>
                      <td>2,060,393,903.00</td>
                      <td>2,089,670,903.00</td>
                      <td>1,957,807,403.00</td>
                      <td>2,171,271,903.00</td>
                      <td>2,244,162,755.00</td>
                      <td>2,099,423,755.00</td>
                      <td>1,954,980,002.00</td>
                      <td>2,180,794,002.00 </td>
                      <td>2,197,277,002.00</td>
                      <td>1,097,991,559.00</td>
                    </tr>
                    <tr class="nested-rows1">
                      <td>ຫັກແຮຊັ້ນ E</td>
                      <td>26,423,652,995.00</td>
                      <td>27,117,947,514.00</td>
                      <td>24,402,871,964.00</td>
                      <td>23,294,302,631.00</td>
                      <td>24,976,003,890.00</td>
                      <td>23,886,665,995.00</td>
                      <td>26,097,910,612.00</td>
                      <td>25,874,635,781.00</td>
                      <td>26,287,988,093.00</td>
                      <td>29,133,561,368.00</td>
                      <td>28,456,860,824.00</td>
                      <td>283,829,486,777.00</td>
                    </tr>

                    </tbody>
                  </table>
                </div>
                <!-- </div> -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




                <div class="chart-container">
                  <h3> Value</h3>
                  <canvas id="salesChart"></canvas>
                </div>

                <script>
                  const ctx = document.getElementById('salesChart').getContext('2d');

                  const salesChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: ['Jan ', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                      datasets: [
                        {
                          label: 'Product A',
                          data: [65, 58, 80, 79, 56, 40, 50, 60, 70, 80, 90, 100, 110],
                          fill: true,
                          backgroundColor: 'rgba(0, 200, 140, 0.2)',
                          borderColor: 'rgba(0, 200, 140, 1)',
                          tension: 0.4
                        },
                        {
                          label: 'Product B',
                          data: [28, 48, 40, 19, 86, 90, 27, 30, 40, 50, 60, 70, 80, 90],
                          fill: true,
                          backgroundColor: 'rgba(0, 123, 255, 0.3)',
                          borderColor: 'rgba(0, 123, 255, 1)',
                          tension: 0.4
                        }
                      ]
                    },
                    options: {
                      responsive: true,
                      plugins: {
                        legend: {
                          display: false
                        }
                      },
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                </script>

              </div>
              <!--end::Row-->
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->

  </div>
  <!-- /.Start col -->
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->