<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home', [
            'title'       => 'Kelly – Home',
            'bodyClass'   => 'index-page',
            'currentPage' => 'home',
        ]);
    }

    public function about()
    {
        return view('pages/about', [
            'title'       => 'Kelly – About',
            'bodyClass'   => 'about-page',
            'currentPage' => 'about',
        ]);
    }
    public function contact()
    {
        return view('pages/contact', [
            'title'       => 'Kelly – Contact',
            'bodyClass'   => 'contact-page',
            'currentPage' => 'contact',
        ]);
    }
    public function resume()
    {
        return view('pages/resume', [
            'title'       => 'Kelly – Resume',
            'bodyClass'   => 'resume-page',
            'currentPage' => 'resume',
        ]);
    }
    public function portfolio()
    {
        return view('pages/portfolio', [
            'title'       => 'Kelly – Portfolio',
            'bodyClass'   => 'portfolio-page',
            'currentPage' => 'portfolio',
        ]);
    }

}
