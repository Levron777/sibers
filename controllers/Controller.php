<?php

/*
* class Controller
*/

class Controller
{
    public $model;
    public $view;
    public $pagination;
    protected $pageData = [];
    protected $pageItem = [];
    protected $url;
    protected $template;
    protected $apiKey;
    protected $itemsPerPage;
    protected $allItems;
    protected $totalPages;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

//    define the count of articles per page (first, last, medium)
    public function makeProductPager($allItems, $totalPages) {

//        for the first page: 0-5 articles
        if(!isset($_GET['page']) || intval($_GET['page']) == 0 || intval($_GET['page']) == 1 || intval($_GET['page']) < 0) {
            $pageNumber = 1;
            $leftLimit = 0; // 0
            $rightLimit = $this->itemsPerPage; // 5

//            for the last page: 15-20 articles
        } elseif (intval($_GET['page']) > $totalPages || intval($_GET['page']) == $totalPages) {
            $pageNumber = $totalPages; // 4 pages for 20 articles
            $leftLimit = $this->itemsPerPage * ($pageNumber - 1); // 5 * (4-1) = 15
            $rightLimit = $allItems; // 20

//            for the medium page
        } else {
            $pageNumber = intval($_GET['page']); // 2
            $leftLimit = $this->itemsPerPage * ($pageNumber-1); // 5* (2-1) = 6
            $rightLimit = $this->itemsPerPage; // 5 -> (6,7,8,9,10)
        }

//        get in the array part of the API data for the needed page
        $this->pageItem['productsOnPage'] = array_splice($this->pageData, $leftLimit, $rightLimit);
    }
}