<?php echo view('nav/nav'); ?>
<link rel="stylesheet" href="<?= base_url() ?>style/css/kpi.css">
<title>CMIMFI | KPI 1</title>

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
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0"></h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="../dhb/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="../dhb/index.php">KPI</a></li>
                <li class="breadcrumb-item active" aria-current="page">KPI 1: ລາຍຮັບທັງຫມົດ</li>
              </ol>
            </div>
          </div>
          <!--begin::Row-->
          <!--begin::Row-->
          <div class="row">
            <div class="card mb-4 ">
              <div class="card-header" style="text-align: center;">
                <h3 style="   background-color: rgb(236, 26, 26);color: white; font-weight: 700; padding: 15px ; border-radius: 5px; ">
                  ຕົວຊີວັດອົງກອນ KPI 1</h3>
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
              <!-- /.card-header -->
              <div class="cmp">
                <button class="btn-compare" data-bs-toggle="modal" data-bs-target="#compareModal">
                  <i class="fa fa-eye"></i> Compare
                </button>
                <div class="modal fade" id="compareModal" tabindex="-1" aria-labelledby="compareModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content border-danger">
                      <div class="modal-header text-white" style="background-color: rgb(236, 26, 26); ">
                        <h5 class="modal-title" id="compareModalLabel">Search KPI Data</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <form class="d-flex align-items-center mb-3 flex-wrap gap-2">
                          <label for="year" class="col-form-label me-2">Year:</label>
                          <select id="year" class="form-select me-3" style="width: auto;">
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                          </select>
                          <label for="month" class="col-form-label me-2">Month:</label>
                          <select id="month" class="form-select me-3" style="width: auto;">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                          </select>

                          <button type="button" class="btn-red me-2"> <i class="fa-solid fa-magnifying-glass"></i>
                            Search</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>

                        <!-- ตาราง -->
                        <div class="table-responsive">
                          <table class="table border-radius-3 table-striped">
                            <thead class="text-center">
                              <tr class="tabolable">
                                <th>Product</th>
                                <th> <i class="fa-solid fa-flag"></i> Goal</th>
                                <th>1/2025</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="acvice">Goal Total</td>
                                <td>150,000,000,000</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>KPI 1</td>
                                <td></td>
                                <td>4,378,283,770</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຈາກເງິນກູ້ເງິນເດືອນ</td>
                                <td></td>
                                <td>11,131,882,605</td>
                              </tr>
                              <tr>
                                <td>ລາຍຈ່າຍຄັງແຮ</td>
                                <td></td>
                                <td>16,585,411,110</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຈາກເງິນກູ້ປະຊາຊົນ</td>
                                <td></td>
                                <td>200,735,616</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຈາກເງິນກູ້ SME</td>
                                <td></td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຈາກດອກເບ້ຍເງິນຝາກ </td>
                                <td></td>
                                <td>22,346,052</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຄ່າທຳນຽມ ເງິນກູ້ເງິນເດືອນ</td>
                                <td></td>
                                <td>19,285,000</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຈາກໜີ້ນອກຜັງ</td>
                                <td></td>
                                <td>47,867,023</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບໃນການດຳນເນີນງານອື່ນໆ</td>
                                <td></td>
                                <td>20,238,470</td>
                              </tr>
                              <tr>
                                <td>ດອກເບ້ຍຮັບຈາກສະຖາບັນການເງິນ </td>
                                <td></td>
                                <td>19,785,420</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບຄ່າທຳນຽມເງິນກູ້ເງິນປະຊາຊົນ </td>
                                <td></td>
                                <td>18,963,000</td>
                              </tr>
                              <tr>
                                <td>ລາຍຮັບທຳນຽມເງິນຝາກ </td>
                                <td></td>
                                <td>27,316,796</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body" style="text-align: center;">
                <!-- <button class="compare-btn"> Compare</button> -->
                <div class="table-container">

                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr class="tabolable">
                        <th>ລາຍການ</th>
                        <th><i class="fa-solid fa-flag"></i> Goal </th>
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
                          <button class="toggle-btn" onclick="toggleRows(this)">
                            <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                            KPI 1: ລາຍຮັບທັງຫມົດ
                          </button>
                        </td>
                        <td rowspan="1" class="goal-cell ">150,000,000,000</td>
                        <td>14,314,018,462.78</td>
                        <td> 25,204,417,685.97</td>
                        <td> 34,553,880,902.86</td>
                        <td> 40,176,884,064.56 </td>
                        <td> 50,852,658,380.35</td>
                        <td>379,351,587.00</td>
                        <td>801,693,438.00</td>
                        <td>1,120,008,786.00</td>
                        <td>2,412,739,632.00</td>
                        <td>3,834,212,845.00</td>
                        <td>4,187,841,302.00</td>
                        <td>4,762,703,457.00</td>
                      </tr>

                      <tr class="nested-rows">
                        <td>ລາຍຮັບເງິນກູ້ເງິນເດືອນ</td>
                        <td></td>
                        <td>25,205,508,815</td>
                        <td>34,556,063,165 </td>
                        <td>40,179,066,326</td>
                        <td>50,853,572,641</td>
                        <td>60,909,901,862</td>
                        <td>71,601,960,457</td>
                        <td>82,171,198,049</td>
                        <td>92,319,900,310</td>
                        <td>103,157,344,225</td>
                        <td>113,533,873,843</td>
                        <td>124,871,398,269</td>
                        <td>135,000,000,000</td>


                      </tr>
                      <tr class="nested-rows">
                        <td> ລາຍຈ່າຍຄັງແຮ</td>
                        <td></td>
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
                      <tr class="nested-rows">
                        <td>ລາຍຮັບຈາກເງິນກູ້ປະຊາຊົນ</td>
                        <td></td>
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
                        <td>244,221,567,394.00</td>



                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບຈາກເງິນກູ້ SME </td>
                        <td></td>
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
                        <td>283,829,486,777.00</td>


                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບຈາກດອກເບ້ຍເງິນຝາກ</td>
                        <td></td>
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
                        <td>2,099,423,755.00</td>


                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບຄ່າທຳນຽມ ເງິນກູ້ເງິນເດືອນ </td>
                        <td></td>
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
                        <td>432,796,015,638.00</td>



                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບຈາກໜີ້ນອກຜັງ </td>
                        <td></td>
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
                        <td>432,796,015,638.00</td>


                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບໃນການດຳນເນີນງານອື່ນໆ </td>
                        <td></td>
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
                        <td>69,708,854,343.00</td>


                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບເງິນແຮ </td>
                        <td></td>
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
                        <td>69,708,854,343.00</td>


                      </tr>
                      <tr class="nested-rows">
                        <td>ດອກເບ້ຍຮັບຈາກສະຖາບັນການເງິນ </td>
                        <td></td>
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
                        <td>84,645,038,257.00</td>
                        <td>244,221,567,394.00</td>

                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບຄ່າທຳນຽມເງິນກູ້ເງິນປະຊາຊົນ </td>
                        <td></td>
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
                        <td>84,645,038,257.00</td>
                        <td>244,221,567,394.00</td>

                      </tr>
                      <tr class="nested-rows">
                        <td>ລາຍຮັບທຳນຽມເງິນຝາກ </td>
                        <td></td>
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
                        <td>84,645,038,257.00</td>
                        <td>244,221,567,394.00</td>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- </div> -->
                <script>
                  function toggleRows(button) {
                    const icon = button.querySelector('.toggle-icon');
                    const rows = document.querySelectorAll('.nested-rows');
                    rows.forEach(row => row.classList.toggle('visible'));
                    icon.classList.toggle('rotated');
                  }
                </script>
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
                          data: [130000000000, 1431401846278, 2520441768597, 3455388090286, 4017688406456, 40817688406456, 5085265838035, 3793515870000, 8016934380000, 11200087860000, 24127396320000, 38342128450000, 41878413020000],
                          fill: true,
                          backgroundColor: 'rgba(0, 200, 140, 0.2)',
                          borderColor: 'rgba(0, 200, 140, 1)',
                          tension: 0.4
                        }
                        // {
                        //   label: 'Product B',
                        //   data: [29, 81, 74, 43, 55, 99, 32, 65, 109, 21, 13, 94, 40, 18],
                        //   fill: true,
                        //   backgroundColor: 'rgba(0, 123, 255, 0.3)',
                        //   borderColor: 'rgba(0, 123, 255, 1)',
                        //   tension: 0.4
                        // }
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
                <!--end::Row-->

              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->

      </div>
      <!-- /.Start col -->
    </div>
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->