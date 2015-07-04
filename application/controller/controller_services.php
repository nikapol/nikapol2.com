<?php

class Controller_Services extends Controller
{

	function action_index()
	{	
		echo $this->view->render('services.html.twig');
	}
}
