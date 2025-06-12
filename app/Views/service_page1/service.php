<?php echo view('nav/nav'); ?>
  <link rel="stylesheet" href="<?= base_url() ?>style//css/svc.css" />

<title>CMIMFI | Service</title>

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
                  <li class="breadcrumb-item " aria-current="page">Service</li>
                </ol>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="card mb-4 ">
                <div class="card-header" style="text-align: center;">
                  <h3 style="background-color: rgb(236, 26, 26); color: white; font-weight: 700; padding: 15px ; border-radius: 5px; ">
                    Service</h3>
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
                    <button class="btn-search flex items-center ">
                      <span><i class="fa-solid fa-magnifying-glass"></i></span> Search
                    </button>
                  </div>
                </div>

                <!-- /.card-header -->

                <div class="table-container">
                  <table class="table table-bordered table-striped table-hover">
                    <thead class="table table-striped table-bordered">
                      <tr class="tabolable">
                        <th rowspan="3" style="text-align: center;">ລາຍການ</th>
                        <th colspan="3">Champasak</th>
                        <th colspan="3">Attapue </th>
                        <th colspan="3">Salavan</th>
                        <th colspan="3">Xekong</th>
                      </tr>
                      <tr class="tabolable" style="text-align: center;">
                        <th style="text-align: center;">ເປົ້າຫມາຍ</th>
                        <th>ຜົນງານ</th>
                        <th>ທຽບເປົ້າຫມາຍ</th>
                        <th>ເປົ້າຫມາຍ</th>
                        <th>ຜົນງານ</th>
                        <th>ທຽບເປົ້າຫມາຍ</th>
                        <th>ເປົ້າຫມາຍ</th>
                        <th>ຜົນງານ</th>
                        <th>ທຽບເປົ້າຫມາຍ</th>
                        <th>ເປົ້າຫມາຍ</th>
                        <th>ຜົນງານ</th>
                        <th>ທຽບເປົ້າຫມາຍ</th>

                      </tr>

                    </thead>

                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="1">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc1.php"> ຍອດເຫຼືອໜ່ວຍທັງໝົດ</a><i
                            class="fa-solid fa-arrow-up-right-from-square "></i>
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນໜ່ວຍເກຣດ A</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນໜ່ວຍເກຣດ B</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນໜ່ວຍເກຣດ C</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນໜ່ວຍເກຣດ D</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນໜ່ວຍຕັ້ງໃໝ່ (ເດືອນ)</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="1">
                      <td>ຈຳນວນໜ່ວຍຢ້ຽມຍາມ (ເດືອນ)</td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>

                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="2">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc2.php">ຍອດເຫຼືອສູນທັງໝົດ</a><i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>ຈຳນວນສູນເກຣດ A</td>
                      <td>5</td>
                      <td>21</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>78</td>
                      <td>7</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>38</td>
                      <td>30</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>43</td>
                      <td>11</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>ຈຳນວນສູນເກຣດ B</td>
                      <td>94</td>
                      <td>44</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>41</td>
                      <td>5</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>27</td>
                      <td>14</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>82</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>ຈຳນວນສູນເກຣດ C</td>
                      <td>94</td>
                      <td>44</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>41</td>
                      <td>5</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>27</td>
                      <td>14</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>82</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>ຈຳນວນສູນເກຣດ D</td>
                      <td>94</td>
                      <td>44</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>41</td>
                      <td>5</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>27</td>
                      <td>14</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>82</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>ຈຳນວນສູນຕັ້ງໃໝ່ (ເດືອນ)</td>
                      <td>94</td>
                      <td>44</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>41</td>
                      <td>5</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>27</td>
                      <td>14</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>82</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="2">
                      <td>ຈຳນວນສູນຢ້ຽມຍາມ (ເດືອນ)</td>
                      <td>94</td>
                      <td>44</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>41</td>
                      <td>5</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>27</td>
                      <td>14</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>82</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>

                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="3">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc3.php">ຍອດເຫຼືອຜູ້ເບິ່ງແຍງສູນ</a><i
                            class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="3">
                      <td>ຈຳນວນ A ທີ່ເຄື່ອນໄຫວ</td>
                      <td>34</td>
                      <td>98</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>63</td>
                      <td>21</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>59</td>
                      <td>26</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>96</td>
                      <td>86</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="3">
                      <td>ຈຳນວນ B ທີ່ເຄື່ອນໄຫວ</td>
                      <td>95</td>
                      <td>77</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>56</td>
                      <td>92</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>13</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>85</td>
                      <td>59</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="3">
                      <td>ຈຳນວນ B ທີ່ຫາໄດ້ໃໝ່ (ເດືອນ)</td>
                      <td>95</td>
                      <td>77</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>56</td>
                      <td>92</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>13</td>
                      <td>91</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>85</td>
                      <td>59</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="tabolable">
                      <th colspan="13" style="text-align: center;">ຂໍ້ມູນລູກຄ້າເງິນກູ້</th>
                    </tr>
                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="4">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc4.php">ຍອດເຫຼືອລູກຄ້າທັງໝົດ</a><i
                            class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                      </td>
                      <td>90</td>
                      <td>2</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>87</td>
                      <td>11</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>97</td>
                      <td>79</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>60</td>
                      <td>13</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="4">
                      <td>ຈຳນວນລູກຄ້າທີ່ເປີດບັນຊີ (ເດືອນ)</td>
                      <td>34</td>
                      <td>98</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>63</td>
                      <td>21</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>59</td>
                      <td>26</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>96</td>
                      <td>86</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="4">
                      <td>ຈຳນວນລູກຄ້າໃໝ່ (ເດືອນ)</td>
                      <td>42</td>
                      <td>6</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>28</td>
                      <td>84</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>33</td>
                      <td>1</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>8</td>
                      <td>62</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="4">
                      <td>ຈຳນວນລູກຄ້າກັບຄືນ (ເດືອນ) </td>
                      <td>42</td>
                      <td>6</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>28</td>
                      <td>84</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>33</td>
                      <td>1</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>8</td>
                      <td>62</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="4">
                      <td>ຈຳນວນລູກຄ້າປັບໂຄງສ້າງ (ເດືອນ) </td>
                      <td>42</td>
                      <td>6</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>28</td>
                      <td>84</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>33</td>
                      <td>1</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>8</td>
                      <td>62</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="4">
                      <td>ຈຳນວນລູກຄ້າປິດບັນຊີ (ເດືອນ) </td>
                      <td>42</td>
                      <td>6</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>28</td>
                      <td>84</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>33</td>
                      <td>1</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>8</td>
                      <td>62</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="4">
                      <td>ຈຳນວນລູກຄ້າໝົດສັນຍາ (ເດືອນ) </td>
                      <td>42</td>
                      <td>6</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>28</td>
                      <td>84</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>33</td>
                      <td>1</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>8</td>
                      <td>62</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="5">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc5.php">ຂໍ້ມູນເງິນກູ້</a><i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຍອດເຫຼືອລູກຄ້າທັງໝົດ </td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນທີ່ສະເໜີກູ້ (ເດືອນ)</td>
                      <td>97</td>
                      <td>12</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>6</td>
                      <td>55</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>99</td>
                      <td>35</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>4</td>
                      <td>69</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນທີ່ເບີກຈ່າຍ (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນທີ່ເບີກຈ່າຍໃຫ້ ລູກຄ້າໃໝ່/ກັບຄືນ (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນທີ່ເບີກ ຈ່າຍເພື່ອປັບໂຄງສ້າງ (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະທັງໝົດ (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຊຳລະຊັ້ນA & B (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະ PAR60+ (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>36</td>
                      <td>46</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>81</td>
                      <td>84</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>58</td>
                      <td>64</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະ C (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະ D (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະ E (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະW/O (ເດືອນ)</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="5">
                      <td>ຈຳນວນເງິນຊຳລະປິດບັນຊີ</td>
                      <td>66</td>
                      <td>52</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>91</td>
                      <td>36</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>3</td>
                      <td>81</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>22</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="tabolable">

                      <th colspan="13" style="text-align: center;">ຂໍ້ມູນລູກຄ້າເງິນຝາກ</th>

                    </tr>

                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="6">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc6.php">ຍອດເຫຼືອລູກຄ້າທັງໝົດ </a><i
                            class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="6">
                      <td>ຈຳນວນລູກຄ້າທີ່ເປີດບັນຊີ (ເດືອນ)</td>
                      <td>73</td>
                      <td>31</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>19</td>
                      <td>51</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>77</td>
                      <td>92</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>99</td>
                      <td>28</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="6">
                      <td>ຈຳນວນລູກຄ້າທີ່ປີດບັນຊີ (ເດືອນ)</td>
                      <td>85</td>
                      <td>60</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>20</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>16</td>
                      <td>66</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>18</td>
                      <td>57</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="6">
                      <td>ຈຳນວນລູກຄ້າກັບຄືນ (ເດືອນ)</td>
                      <td>85</td>
                      <td>60</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>20</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>16</td>
                      <td>66</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>18</td>
                      <td>57</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="6">
                      <td>ຈຳນວນລູກຄ້າໝົດສັນຍາ (ເດືອນ)</td>
                      <td>85</td>
                      <td>60</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>20</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>16</td>
                      <td>66</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>18</td>
                      <td>57</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="6">
                      <td>ຈຳນວນບັນຊີ Dormant</td>
                      <td>85</td>
                      <td>60</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>20</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>16</td>
                      <td>66</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>18</td>
                      <td>57</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr class="nested-rows" data-kpi="6">
                      <td>Dormant ທີ່ຖືກປົດ (ເດືອນ)</td>
                      <td>85</td>
                      <td>60</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>20</td>
                      <td>58</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>16</td>
                      <td>66</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>18</td>
                      <td>57</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                    </tr>
                    <tr>
                      <td>
                        <button class="toggle-btn" onclick="toggleRows(this)" data-kpi="7">
                          <span class="toggle-icon"><i class="fa-solid fa-circle-chevron-right"></i></span>
                          <a href="../service_page2/svc7.php">ຂໍ້ມູນເງິນຝາກ</a><i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                      </td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                      <td><?php echo rand(10, 100); ?></td>
                    </tr>
                    <tr class="nested-rows" data-kpi="7">
                      <td>ຍອດເຫຼືອລູກຄ້າທັງໝົດ</td>
                      <td>63</td>
                      <td>4</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>35</td>
                      <td>95</td>
                      <td><?php echo number_format(mt_rand(100, 10000) / 100, 2) . '%'; ?></td>

                      <td>2</td>
                      <td>48</td>
                      <td>76</td>
                      <td>93</td>
                      <td>10</td>
                      <td>44</td>
                    </tr>
                    <tr class="nested-rows" data-kpi="7">
                      <td>ຈຳນວນເງິນທີ່ຮັບຝາກ (ເດືອນ)</td>
                      <td>28</td>
                      <td>89</td>
                      <td>46</td>
                      <td>31</td>
                      <td>22</td>
                      <td>17</td>
                      <td>6</td>
                      <td>39</td>
                      <td>67</td>
                      <td>20</td>
                      <td>90</td>
                      <td>3</td>
                    </tr>
                    <tr class="nested-rows" data-kpi="7">
                      <td>ຈຳນວນເງິນທີ່ຮັບຝາກຈາກລູກຄ້າໃຫມ່ ແລະ ເກົ່າ (ເດືອນ)</td>
                      <td>28</td>
                      <td>89</td>
                      <td>46</td>
                      <td>31</td>
                      <td>22</td>
                      <td>17</td>
                      <td>6</td>
                      <td>39</td>
                      <td>67</td>
                      <td>20</td>
                      <td>90</td>
                      <td>3</td>
                    </tr>
                    <tr class="nested-rows" data-kpi="7">
                      <td>ຈຳນວນເງິນຖອນປິດບັນຊີ (ເດືອນ)</td>
                      <td>28</td>
                      <td>89</td>
                      <td>46</td>
                      <td>31</td>
                      <td>22</td>
                      <td>17</td>
                      <td>6</td>
                      <td>39</td>
                      <td>67</td>
                      <td>20</td>
                      <td>90</td>
                      <td>3</td>
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