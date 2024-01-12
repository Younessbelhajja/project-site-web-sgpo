<?php
class msg extends Controller
{
    function index()
    { 
        if(isset($_SESSION['login']))
        {

        $this->loadModel("model_msg");
        $this->layout=false;
        $data['contact'] = $this->model_msg->afficher();
        $this->set($data);
       $this->render('msg');

    }
    else
    {
        $pag = WEB_ROOT . 'login/';
        header ( 'Location: ' . $pag );
    }

    }


    function delete($idd)
    {
        
        $id=(int)$idd; 
         //     var_dump($id);exit(); 
     
        $this->loadModel("model_msg");
        $this->model_msg->del($idd);
        
        $data['contact'] = $this->model_msg->afficher();
        $this->layout=false; 
        $this->set($data);
        $this->render('msg');
     //   $page = WEB_ROOT .'acceuil/';s
    }


   
    
}