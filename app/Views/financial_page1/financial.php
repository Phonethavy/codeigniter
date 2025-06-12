<?php echo view('nav/nav'); ?>
<link rel="stylesheet" href="<?= base_url() ?>style/css/fnc.css">

<title>CMIMFI | Financial</title>
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
                  <li class="breadcrumb-item " aria-current="page"><a href="../financial_page1/financial.php">Financial</a></li>
                </ol>
              </div>
            </div>
            <!--begin::Row-->

            <div class="row">
              <div class="card mb-4 ">
                <div class="card-header" style="text-align: center;">
                  <h3 style="background-color: rgb(236, 26, 26); color: white; font-weight: 700; padding: 15px ; border-radius: 5px; ">
                    ຕົວຊີ້ວັດຄວາມຫມັ້ນຄົງທາງການເງິນ</h3>
                </div>
                <div class="sch1" style="text-align: center;">
                  <div class="flex flex-wrap items-center gap-2 bg-white p-4 rounded shadow-md">
                    <label> Select Year : </label>
                    <select class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                    </select>
                    <button class="btn-search1 flex items-center">
                      <span><i class="fa-solid fa-magnifying-glass"></i></span> Search
                    </button>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="table-container1">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr class="tabolable">
                        <th colspan="2" style="background-color: rgb(236, 26, 26);">ລາຍການ</th>
                        <th style="background-color: rgb(236, 26, 26);">ມາດຕະຖານທີ່ກຳນົດໄວ້</th>
                        <th style="background-color: rgb(236, 26, 26);">ເດືອນ</th>
                        <th style="background-color: rgb(236, 26, 26);">ຄວາມສອດຄ່ອງ</th>

                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th colspan="5" style="text-align: center;background-color: rgb(236, 26, 26);color: white;">
                          ໝວດຄວາມພຽງພໍຂອງທຶນ</th>
                      </tr>
                    </thead>
                    <tr class="nested-rows1">

                    <tr class="align-middle">
                      <td>1.</td>
                      <td class="contb1">
                        <a href="../financial_page2/fnc1.php">ອັດຕາສ່ວນທຶນທັງໝົດ / ຊັບສິນທີ່ວາງນ້ຳໜັກຄວາມສ່ຽງ
                          ຕ້ອງຫຼາຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></>
                      </td>
                      <td>12%</td>
                      <td><span>55%</span></td>
                      <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                    </tr>
                    <tr class="align-middle">
                      <td>2.</td>
                      <td class="contb1"><a href="../financial_page2/fnc2.php">ອັດຕາສ່ວນທຶນຊັ້ນໜຶ່ງ / ຊັບສີນທີ່ວາງນ້ຳໜັກຄວາມສ່ຽງ
                          ຕ້ອງຫຼາຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                      <td>8%</td>
                      <td><span>10%</span></td>
                      <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                    </tr>
                    <tr class="align-middle">
                      <td>3.</td>
                      <td class="contb1"><a href="../financial_page2/fnc3.php">ອັດຕາສ່ວນຜົນຕອບແທນຈາກທຶນ ROE ຕ້ອງຫຼາຍກວ່າ <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                      <td>5%</td>
                      <td><span>2%</span></td>
                      <td><span class="badge text-bg-danger">ປະຕິບັດບໍ່ໄດ້</span></td>
                    </tr>
                    <tr class="align-middle">
                      <td>4.</td>
                      <td class="contb1"><a href="../financial_page2/fnc4.php">ອັດຕາສ່ວນຜົນຕອບແທນຈາກຊັບສີນ ROA ຕ້ອງຫຼາຍກວ່າ <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                      <td>2%</td>
                      <td><span>5%</span></td>
                      <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                    </tr>
                    <tr>
                      <th colspan="5" style="background-color: rgb(236, 26, 26);color: white;">ໝວດຄວາມສາມາດໃນການຊຳລະໜີ້
                      </th>

                    </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>5.</td>
                        <td class="contb1"><a href="../financial_page2/fnc5.php">ການກູ້ຢືມ: ການກູ້ຍືມຈາກພາຍນອກທັງໝົດ / ຍອດສີນເຊື່ອທັງໝົດ
                            ຕ້ອງນ້ອຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>30%</td>
                        <td><span>55%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>6.</td>
                        <td class="contb1"><a href="../financial_page2/fnc6.php">ການລົງທຶນ: ເງິນລົງທືນທັງໝົດ / ທຶນຈົດທະບຽນ ຕ້ອງນ້ອຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </td>
                        <td>10%</td>
                        <td><span>10%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>7.</td>
                        <td class="contb1"><a href="../financial_page2/fnc7.php">ອັດຕາສ່ວນການລະດົມເງິນຝາກ (ເງິນຝາກທັງໝົດ / ທືນຊັ້ນໜຶ່ງ )
                            ຕ້ອງນ້ອຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>10%</td>
                        <td><span>2%</span></td>
                        <td><span class="badge text-bg-danger">ປະຕິບັດບໍ່ໄດ້</span></td>
                      </tr>
                      <tr>
                        <th colspan="5" style="background-color: rgb(236, 26, 26);color: white;">
                          ໝວດຄວາມສາມາດໃນການສ້າງກຳໄລ
                        </th>

                      </tr>
                      </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>8.</td>
                        <td class="contb1"><a href="../financial_page2/fnc8.php">ອັດຕາສ່ວນດອກເບ້ຍສຸດທິ ຕ້ອງຫຼາຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>12%</td>
                        <td><span>55%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>9.</td>
                        <td class="contb1"><a href="../financial_page2/fnc9.php">ການກຸ້ມຕົນເອງໃນການດຳເນີນງານ OSS ຕ້ອງຫຼາຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i> </a></td>
                        <td>100%</td>
                        <td><span>10%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດບໍ່ໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>10.</td>
                        <td class="contb1"><a href="../financial_page2/fnc10.php">ອັດຕາສ່ວນການລົງທຶນເງິນຝາກທັງໝົດ / ທັງໝົດ ຕ້ອງຫຼາຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </td>
                        <td>10%</td>
                        <td><span>2%</span></td>
                        <td><span class="badge text-bg-danger">ປະຕິບັດບໍ່ໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>11.</td>
                        <td class="contb1"><a href="../financial_page2/fnc11.php">ອັດຕາສ່ວນເງິນກູ້ທັງໝົດຕໍ່ຊັບສີນທັງໝົດ ຕ້ອງຫຼາຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </td>
                        <td>80%</td>
                        <td><span>80%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr>
                        <th colspan="5" style="background-color: rgb(236, 26, 26);color: white;">ໝວດສະພາບຄ່ອງ</th>

                      </tr>
                      </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>12.</td>
                        <td class="contb1"><a href="../financial_page2/fnc12.php">ສະພາບຄ່ອງ 1: ເງີນສົດໃນມື / ເງີນຝາກທັງໝົດ ຕ້ອງຫຼາຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </td>
                        <td>12%</td>
                        <td>
                          <spa>55%</span>
                        </td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>13.</td>
                        <td class="contb1"><a href="../financial_page2/fnc13.php">ສະພາບຄ່ອງ 2: (ເງິນສົດໃນມື+ເງິນຝາກຢູ່ສະຖາບັນອື່ນ) /
                            ໜີ້ສີນທັງໝົດ ຕ້ອງຫຼາຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>8%</td>
                        <td><span>10%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>14.</td>
                        <td class="contb1"><a href="../financial_page2/fnc14.php">ອັດຕາສ່ວນຊັບສີນຄ່ອງຕົວ ( ເງິນສົດແລະເງິນທ/ຄ ທີ່ສາມາດຖອນໄດ້
                            ) /
                            ຊັບສິນທັງໝົດ ຕ້ອງຫຼາຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>5%</td>
                        <td><span>2%</span></td>
                        <td><span class="badge text-bg-danger">ປະຕິບັດບໍ່ໄດ້</span></td>
                      </tr>
                      <tr>
                        <th colspan="5" style="background-color: rgb(236, 26, 26);color: white;">ໝວດຄຸນະພາຍຄັງເງິນກູ້
                        </th>

                      </tr>
                      </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>15.</td>
                        <td class="contb1"><a href="../financial_page2/fnc15.php">ອັດຕາສ່ວນໜີ້ທວງຍາກ: ເງິນກູ້ຊ້າເກີນ 60ວັນ
                            /ຍອດເງິນກູ້ທັງໝົດ
                            ຕ້ອງນ້ອຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>12%</td>
                        <td><span>55%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>16.</td>
                        <td class="contb1"><a href="../financial_page2/fnc16.php">ອັດຕາສ່ວນການລ້າງໜີ້ສູນ: ຍອດເງີນກູ້ທີ່ຕິດຕາມນອກຜັງ /
                            ຍອດເງິນກູ້ທັງໝົດສະເລ່ຍ ຕ້ອງນ້ອຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>8%</td>
                        <td><span>10%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>17.</td>
                        <td class="contb1"><a href="../financial_page2/fnc17.php">ອັດຕາສ່ວນສິນເຊື່ອໃຫ້ແກ່ລູກຄ້າລາຍໃຫຍ່ / ທຶນທັງໝົດ
                            ຕ້ອງນ້ອຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>5%</td>
                        <td><span>2%</span></td>
                        <td><span class="badge text-bg-danger">ປະຕິບັດບໍ່ໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>18.</td>
                        <td class="contb1"><a href="../financial_page2/fnc18.php">ອັດຕາສ່ວນສິນເຊື່ອໃຫ້ແກ່ລູກຄ້າໜຶ່ງລາຍ / ທຶນທັງໝົດ
                            ຕ້ອງນ້ອຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>1%</td>
                        <td><span>5%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>19.</td>
                        <td class="contb1"><a href="../financial_page2/fnc19.php">ອັດຕາສ່ວນສິນເຊື່ອໃຫ້ແກ່ພາກສ່ວນທີ່ມີສາຍພົວພັນໜຶ່ງລາຍ /
                            ທຶນທັງໝົດ ຕ້ອງນ້ອຍກວ່າ <i class="fa-solid fa-arrow-up-right-from-square"></i> </a></td>
                        <td>1%</td>
                        <td><span>5%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr class="align-middle">
                        <td>20.</td>
                        <td class="contb1"><a href="../financial_page2/fnc20.php">ອັດຕາສ່ວນຄວາມພຽງພໍຂອງການຫັກເງິນແຮສິນເຊື່ອທີ່ຖືກຈັດຊັ້ນ /
                            ເງິນແຮທັງໝົດທີ່ຕ້ອງສ້າງຕາມລະບຽບ ຕ້ອງຫຼາຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>100%</td>
                        <td><span>5%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
                      <tr>
                        <th colspan="5" style="background-color: rgb(236, 26, 26);color: white;">
                          ໝວດປະສິດທີພາຍການດຳເນີນງານ
                        </th>

                      </tr>
                      </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>21.</td>
                        <td class="contb1"><a href="../financial_page2/fnc21.php"> ອັດຕາສ່ວນປະສິດທິພາບດ້ານການດຳເນີນງານ ຕ້ອງນ້ອຍກວ່າ <i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                        <td>30%</td>
                        <td><span>55%</span></td>
                        <td><span class="badge bg-success">ປະຕິບັດໄດ້</span></td>
                      </tr>
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

  </div>
  <!-- /.Start col -->
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->