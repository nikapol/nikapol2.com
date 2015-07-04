<?php

class Controller_Alex extends Controller
{
	
	function action_index()
	{
		echo $this->view->render('alex.html.twig');
	}
	
}

