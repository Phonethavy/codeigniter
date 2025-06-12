<?php echo view('nav/nav'); ?>
<link rel="stylesheet" href="../css/svc.css">
<title>CMIMFI | ຍອດເຫຼືອຜູ້ເບິ່ງແຍງສູນ</title>

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
                  <li class="breadcrumb-item"><a href="../dhb/index.php">Home</a></li>
                  <li class="breadcrumb-item "><a href="../service_page1/service.php">Service </a></li>
                  <li class="breadcrumb-item " aria-current="page">ຍອດເຫຼືອຜູ້ເບິ່ງແຍງສູນ</li>
                </ol>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="card mb-4 ">
                <div class="card-header" style="text-align: center;">
                  <h3
                    style="background-color: rgb(236, 26, 26); color: white; font-weight: 700; padding: 15px ; border-radius: 5px; ">
                    ຂໍ້ມູນຜູ້ເບິ່ງແຍງສູນ</h3>
                </div>
                <div class="sch1" style="text-align: center;">
                  <div class="flex flex-wrap items-center gap-2 bg-white p-4 rounded shadow-md">
                    <!-- From Date -->
                    <label class="flex items-center gap-2">
                      <span>From</span>
                      <input type="date"
                        class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400"
                        value="2025-01-01">
                    </label>
                    <!-- To Date -->
                    <label class="flex items-center gap-2">
                      <span>To</span>
                      <input type="date"
                        class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400"
                        value="2025-02-01">
                    </label>
                    <select class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                      <option>HQ</option>
                      <option>CPS</option>
                      <option>ATP</option>
                      <option>SLV</option>
                      <option>SK</option>
                    </select>
                    <select class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                      <option>Employee</option>
                      <option>Location Group</option>
                    </select>
                    <button class="btn-search flex items-center">
                      <span><i class="fa-solid fa-magnifying-glass"></i></span> Search
                    </button>
                  </div>
                </div>

                <!-- /.card-header -->

                <div class="table-container">
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr class="tabolable">
                        <th class="text-center">ລາຍການ</th>
                        <th> <i class="fa-solid fa-flag"></i> ເປົ້າຫມາຍ</th>
                        <th>ເງິນກູ້ພະນັກງານ </th>
                        <th>ເງິນປະຊາຊົນ </th>
                        <th>ເງິນກູ້ເພດຍິງ </th>
                        <th>ທຽບເປົ້າຫມາຍ</th>
                      </tr>

                    </thead>

                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="1">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          ຍອດເຫຼືອຜູ້ເບິ່ງແຍງສູນ
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>


                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນ A ທີ່ເຄື່ອນໄຫວ</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>


                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນ B ທີ່ເຄື່ອນໄຫວ</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>


                    </tr>
                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="2">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          ຈຳນວນ B ທີ່ຫາໄດ້ໃໝ່ (ເດືອນ)
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>PHAIBONE SYLAVONG</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>KHANTHONG KEOVICHIT</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>

                    </tbody>
                  </table>
                </div>
                <!-- </div> -->
              </div>
              <!--end::Row-->
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->
  <script>
    function toggleRows(button) {
      const kpi = button.getAttribute("data-kpi");
      const icon = button.querySelector(".toggle-icon");
      const rows = document.querySelectorAll(`.nested-rows[data-kpi="${kpi}"]`);
      rows.forEach(row => row.classList.toggle("visible"));
      icon.classList.toggle("rotated");
    }
  </script>
  </div>
  <!-- /.Start col -->
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->