<?php

/*
* main Controller
*/

class IndexController extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new IndexModel();
    }

    public function index()
    {
        $this->pageItem['title'] = "Sibers App";
        $this->template = '/views/mainView.php';
        $this->view->render($this->template, $this->pageData, $this->pageItem);
    }
}



