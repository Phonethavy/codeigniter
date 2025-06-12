<?php

// In app/Controllers/Home.php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function nav(): string
    {
        return view('nav/nav');
    }

    public function showKpi(int $id): string
    {
        return view('kpi/kpi' . $id);
    }

    public function financialPage1(): string
    {
        return view('financial_page1/financial');
    }

    public function servicePage(): string
    {

        return view('service_page1/service');
    }
}
