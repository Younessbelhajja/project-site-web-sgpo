<?php
class details extends Controller
{
    function index()
    {
       $this->render('details');
    }


    function ajouter()
	{ 
        //var_dump($_POST);exit();
        $this->loadModel("model_details");
		
    	  $data['name1'] = $_POST['name1'];
        $data['email1'] = $_POST['email1'];
        $data['message1'] = $_POST['message1'];
        $this->model_details->ajouter($data);
        $page = WEB_ROOT .'details/';
        $this->rederction($page);
	}

    




    function details1()
    {
        
           $this->render('details1');
    }


    function ajouter1()
	{ 
        //var_dump($_POST);exit();
        $this->loadModel("model_details");
		
    	$data['name2'] = $_POST['name2'];
        $data['email2'] = $_POST['email2'];
        $data['message2'] = $_POST['message2'];
        $this->model_details->ajouter1($data);
        $this->back_rederection();
        
	}


    function details2()
    {
        
           $this->render('details2');
    }


    function ajouter2()
	{ 
       // var_dump($_POST);exit();
        $this->loadModel("model_details");
		
    	  $data['name3'] = $_POST['name3'];
        $data['email3'] = $_POST['email3'];
        $data['message3'] = $_POST['message3'];
        $this->model_details->ajouter2($data);
        $this->back_rederection();
	}


   
    
}