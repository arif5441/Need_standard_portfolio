<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home.index');
    }
    public function about()
    {
        return view('frontend.about.index');
    }
    public function services()
    {
        return view('frontend.service.index');
    }
    public function blog()
    {
        return view('frontend.blog.index');
    }
    public function features()
    {
        return view('frontend.feature.index');
    }
    public function needx()
    {
        return view('frontend.needx.index');
    }
    public function shodai()
    {
        return view('frontend.shodai.index');
    }
    public function shohoz_soft()
    {
        return view('frontend.shohoz-soft.index');
    }
    public function trade()
    {
        return view('frontend.trade.index');
    }
    public function farm()
    {
        return view('frontend.farm.index');
    }
    public function realistic()
    {
        return view('frontend.realistic.index');
    }
    public function team()
    {
        return view('frontend.team.index');
    }
    public function ecom_nsl()
    {
        return view('frontend.ecom-nsl.index');
    }
    public function faqs()
    {
        return view('frontend.faq.index');
    }
    public function contact()
    {
        return view('frontend.contact.index');
    }
}
