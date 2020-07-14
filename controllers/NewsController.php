<?php

/*
* class Controller
*/

class NewsController extends Controller
{
    public function __construct()
    {
        $this->model = new NewsModel();
        $this->view = new View();
        $this->pagination = new Pagination();
    }

    public function index()
    {
        $this->pageItem['title'] = "Sibers News";
        $this->template = '/views/newsView.php';
        $this->url = "http://newsapi.org/v2/top-headlines?country=ru&apiKey=";
        $this->apiKey = '764d132d05e34cfb8fe76100c496f246';

//        get the data from the News API
        $apiURL = $this->url . $this->apiKey;
        $result = file_get_contents($apiURL);

//        encode the data from API (JSON) in Assocсiative Array
        $this->pageData = json_decode($result, true);
        $this->pageData = $this->pageData['articles'];

//        pagination block
        $this->allItems = count($this->pageData);   // count of all articles
        $this->itemsPerPage = 5;    // per page articles
        $this->totalPages = ceil($this->allItems / $this->itemsPerPage);    // total pages
        $this->makeProductPager($this->allItems, $this->totalPages);    // (Controller->makeProductPager)
        $this->pageItem['pagination'] = $this->pagination->drawPager($this->allItems, $this->itemsPerPage); // (conf/pagination.php->drawPager)

//        load news view with data
        $this->view->render($this->template, $this->pageData, $this->pageItem);
    }
}