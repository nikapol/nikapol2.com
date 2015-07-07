<?php

class Controller_Portfolio extends Controller
{
    	function action_index() {
            $model_portfolio = $this -> loadModel ('portfolio');
            $data = $model_portfolio -> get_yslugi();
            echo $this -> view -> render ('portfolio.html.twig',array('data'=>$data));
        }
//	function __construct()
//	{
//		$this->model = new Model_Portfolio();
//		$this->view = new View();
//	}
        //старое
//        function action_index()
//	{
//            echo $this->view->render('portfolio.html.twig');
//	}
//	function action_myportfolio()
//	{
//		$data = $this->model->get_data();		
//		$this->view->generate('myportfolio_view.php', 'template_view.php', $data);
//	}
}
