<?php

namespace app\controller;

use app\BaseController;
use think\Session;
use think\View;

class Index extends BaseController
{
    public function beian(){
        return redirect("http://www.beian.miit.gov.cn");
    }
    public function login()
    {
        return \view();
    }

    public function index()
    {
        \session('name', 'index');
        return \view('index');
    }

    public function scenicOverview()
    {
        \session('name', 'scenicOverview');

        return \view('scenic_overview');
    }

    public function courtTravel()
    {
        \session('name', 'courtTravel');
        return \view('court_travel');
    }

    public function comfortable()
    {
        \session('name', 'comfortable');
        return \view();
    }

    public function news()
    {
        \session('name', 'news');
        return \view();
    }

    public function feedback()
    {
        \session('name', 'feedback');
        return \view();
    }

    public function contact()
    {
        \session('name', 'contact');
        return \view();
    }

    public function map()
    {
        \session('name', 'map');
        return \view();
    }

    public function newsShow()
    {
        return view('news_show');
    }

    public function courtTravelShow()
    {
        return view('court_travel_show');
    }
    public function video(){
        return \view();
    }
}
