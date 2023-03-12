<?php

namespace App\Controllers;

class MenuController extends BaseController
{


    public function index()
    {
        // return view('welcome_message');
        return view('homeView');
    }

    public function about_us()
    {
        return view('aboutUsView');
    }

    public function contact_us()
    {   

        return view('contactUsView',);
    }

    public function register($id = null)
    {   
        $dataset ['id'] = $id;

        return view('registerView', $dataset);
    }


    



}
