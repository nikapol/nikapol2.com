<?php

class Controller_Main extends Controller
{
//    function __construct()
//    {
//        $this->model = new Model_Avtoriz;
//    }
    function action_index()
    {	
       echo $this->view->render('main.html.twig');
    }
    
    
    function action_avtoriz()
    {
//        $this->model->avtoriz();
        echo $this->view->render('admin.html.twig');
    }
}