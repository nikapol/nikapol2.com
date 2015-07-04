<?php

class Controller_Admin extends Controller
{
//  function __construct()
//	{
//		$this->model = new Model_Admin();
//        }

        function action_index()
	{	
		echo $this->view->render('admin.html.twig');
	}
}
?>

