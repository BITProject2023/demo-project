<?php

namespace App\Controllers;

class AboutController extends BaseController
{

    public $parser;

    public function __construct()
    {
       $this->parser = \Config\Services::parser();
    }

    public function index()
    {
        $data = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
        ];

        $dataset2 = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'blog_entries' => [ 'My First Blog', 'How to write a blog', 'Trip to Bali', 'Home remedies for pain relief...'
               
            ],
        ];
        
        return view('aboutView',$dataset2);
    }

    public function viewParser(){

       // $parser = \Config\Services::parser();

        $data = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'dob' => '1950-01-01',
            'income' => '120000',
            'blog_entries' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5'],
            ],
        ];

       $this->parser->setData($data);

        return $this->parser->render('parserView');


        //return view('parserView');


    }
}
