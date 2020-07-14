<?php

/*
 * class for making pagination and display it on the needed page
 */

class Pagination
{

    public function drawPager($totalItems, $perPage)
    {

//    get the total count of pages needed to display all the articles
    $pages = ceil($totalItems / $perPage);

//    creating a pagination view to display it on the needed page
    $pager =  "<nav aria-label='Page navigation example'>";
    $pager .= "<ul class='pagination'>";
    $pager .= "<li class='page-item'><a class='page-link' href='?input=" . $_GET['input'] . "&page=1' aria-label='Previous'>Начало</a></li>";

    for ($i = 2; $i <= $pages-1; $i++) {
        $pager .= "<li class='page-item'><a class='page-link' href='?input=" . $_GET['input'] . "&page=". $i."'>" . $i ."</a></li>";
    }

    $pager .= "<li class='page-item'><a class='page-link' href='?input=" . $_GET['input'] . "&page=". $pages ."' aria-label='Next'>Конец</a></li>";
    $pager .= "</ul>";

    return $pager;
    }
}