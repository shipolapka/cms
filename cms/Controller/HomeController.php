<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {
        $data = ['name' => 'Lena'];
        $this->view->render('index', $data);

    }

    public function news($id)
    {
        echo $id;
    }
}