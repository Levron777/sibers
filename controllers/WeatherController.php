<?php

/*
* class Controller
*/

class WeatherController extends Controller
{
    public function __construct()
    {
        $this->model = new WeatherModel();
        $this->view = new View();
    }

    public function index()
    {
        $this->pageItem['title'] = "Sibers Weather";
        $this->template = '/views/weatherView.php';
        $this->url = "http://api.openweathermap.org/data/2.5/weather?q=Novosibirsk&units=metric&appid=";
        $this->apiKey = '04ae610e44a208e13a3dce419f71f140';

//        get the data from the Weather API
        $apiURL = $this->url . $this->apiKey;
        $result = file_get_contents($apiURL);

//        encode the data from API (JSON) in Assocсiative Array
        $this->pageData = json_decode($result);

//        load weather view with data
        $this->view->render($this->template, $this->pageData, $this->pageItem);
    }
}