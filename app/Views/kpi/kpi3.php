<?php echo view('nav/nav'); ?>
<link rel="stylesheet" href="<?= base_url() ?>style/css/kpi.css">

<title>CMIMFI | KPI 3</title>

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
                                <li class="breadcrumb-item active" aria-current="page">KPI 3: ລູກຄ້າ</li>
                            </ol>
                        </div>
                    </div>
                    <!--begin::Row-->
                    <!--begin::Row-->
                    <div class="row">
                        <div class="card mb-4 ">
                            <div class="card-header" style="text-align: center;">
                                <h3
                                    style="background-color: rgb(236, 26, 26); color: white; font-weight: 700; padding: 15px ; border-radius: 5px ; ">
                                    ຕົວຊີວັດອົງກອນ KPI 3</h3>
                            </div>
                            <div class="sch1" style="text-align: center;">
                                <div class="flex flex-wrap items-center gap-2 bg-white p-4 rounded shadow-md">
                                    <label> Select Year : </label>
                                    <select
                                        class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select>
                                    <button class="btn-search flex items-center gap-2 rounded shadow">
                                        <span><i class="fa-solid fa-magnifying-glass"></i></span> Search
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="cmp">
                                <button class="btn-compare" data-bs-toggle="modal" data-bs-target="#compareModal">
                                    <i class="fa fa-eye"></i> Compare
                                </button>
                                <div class="modal fade" id="compareModal" tabindex="-1"
                                    aria-labelledby="compareModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content border-danger">
                                            <div class="modal-header text-white"
                                                style="background-color: rgb(236, 26, 26); ">
                                                <h5 class="modal-title" id="compareModalLabel">Search KPI Data</h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <!-- ฟอร์มค้นหา -->
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

                                                    <button type="button" class="btn-red me-2"> <i
                                                            class="fa-solid fa-magnifying-glass"></i> Search</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </form>

                                                <!-- ตาราง -->
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <thead class="text-center">
                                                            <tr class="tabolable">
                                                                <th>Product</th>
                                                                <th> <i class="fa-solid fa-flag"></i> Goal</th>
                                                                <th>1/2025</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Goal Total</td>
                                                                <td>8,400,000,000</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>KPI 3</td>
                                                                <td></td>
                                                                <td>315,120,905.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ຍອດເຫຼື່ອລູກຄ້າເງິນຝາກ</td>
                                                                <td></td>
                                                                <td>13,183</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ຍອດເຫຼື່ອລູກຄ້າເງິນຝາກ</td>
                                                                <td></td>
                                                                <td>4,467
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>ລູກຄ້າເງິນກູ້ໃຫມ່ກັບຄືນ</td>
                                                                <td></td>
                                                                <td>268</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ລູກຄ້າອ່ວຍ</td>
                                                                <td></td>
                                                                <td>380</td>
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
                                <div class="table-container">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr class="tabolable">
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
                                                    <button class="toggle-btn" onclick="toggleRows(this)">
                                                        <span class="toggle-icon"><i
                                                                class="fa-solid fa-circle-chevron-right"></i></span>
                                                        KPI 3: ຈຳນວນລູກຄ້າທັງໝົດ
                                                    </button>
                                                </td>
                                                <td rowspan="1" class="goal-cell ">28.000</td>
                                                <td>20,387 </td>
                                                <td>20,497</td>
                                                <td>20,540</td>
                                                <td>20,588</td>
                                                <td>20,688</td>
                                                <td>20,762</td>
                                                <td>20,836</td>
                                                <td>20,090</td>
                                                <td>18,380</td>
                                                <td>18,009</td>
                                                <td>17,853</td>
                                                <td>17,783</td>
                                            </tr>

                                            <tr class="nested-rows">
                                                <td> ຍອດເຫຼື່ອລູກຄ້າເງິນກູ້</td>
                                                <td></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>


                                            </tr>
                                            <tr class="nested-rows">
                                                <td>ຍອດເຫຼື່ອລູກຄ້າເງິນຝາກ</td>
                                                <td></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>


                                            </tr>
                                            <tr class="nested-rows">
                                                <td>ລູກຄ້າເງິນກູ້ໃຫມ່ກັບຄືນ</td>
                                                <td></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>

                                            </tr>
                                            <tr class="nested-rows">
                                                <td>ລູກຄ້າອ່ວຍ</td>
                                                <td></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>
                                                <td><?php echo number_format(rand(1000, 30000)); ?></td>

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
                                                    data: [20000, 25000, 30000, 35000, 40000, 45000, 50000, 55000, 60000, 65000, 70000, 75000],
                                                    fill: true,
                                                    backgroundColor: 'rgba(0, 200, 140, 0.2)',
                                                    borderColor: 'rgba(0, 200, 140, 1)',
                                                    tension: 0.4
                                                }
                                                // {
                                                //     label: 'Product B',
                                                //     data: [99, 54, 21, 33, 76, 19, 64, 41, 95, 90, 109, 38, 55, 73],
                                                //     fill: true,
                                                //     backgroundColor: 'rgba(0, 123, 255, 0.3)',
                                                //     borderColor: 'rgba(0, 123, 255, 1)',
                                                //     tension: 0.4
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