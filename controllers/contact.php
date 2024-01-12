<?php
class contact extends Controller
{
    function index()
    {
       $this->render('contact');
    }
    

    function ajouter()
	{ 
        //var_dump($_POST);exit();
        $this->loadModel("model_contact");
		
    	  $data['nom'] = $_POST['nom'];
        $data['email'] = $_POST['email'];
        $data['subject'] = $_POST['subject'];
        $data['tele'] = $_POST['tele'];
        $data['message'] = $_POST['message'];
        $this->model_contact->ajouter($data);
        $page = WEB_ROOT .'contact/';
        $this->rederction($page);
	}
}
