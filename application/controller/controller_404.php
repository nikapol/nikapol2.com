<?php

class Controller_404 extends Controller
{
	
	function action_index()
	{
		echo $this->view->render('404.html.twig');
	}

}
