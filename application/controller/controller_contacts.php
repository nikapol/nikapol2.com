<?php

class Controller_Contacts extends Controller
{
	
	function action_index()
	{
		echo $this->view->render('contacts.html.twig');
	}
}
