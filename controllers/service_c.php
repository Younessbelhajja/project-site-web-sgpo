<?php
class service_c extends Controller
{
    function index()
    {
        if(isset($_SESSION['login']))
        {

            $this->loadModel("model_servicee");
            $data['details'] = $this->model_servicee->afficher();
            $this->set($data);
            $this->layout=false;
       $this->render('service_c');
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
     
        $this->loadModel("model_servicee");
        $this->model_servicee->del($idd);
        
        $data['details'] = $this->model_servicee->afficher();
        $this->layout=false; 
        $this->set($data);
        $this->render('service_c');
     //   $page = WEB_ROOT .'acceuil/';s
    }
}