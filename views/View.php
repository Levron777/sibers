<?php

/*
* class View
*/

class View
{

//    send data to the selected template
    public function render($tpl, $pageData, $pageItem)
    {

//        include needed template
        include ROOT. $tpl;
    }
}