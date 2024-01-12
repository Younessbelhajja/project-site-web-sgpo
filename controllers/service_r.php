<?php
class service_r extends Controller
{
    function index()
    {
        if(isset($_SESSION['login']))
        {

            $this->loadModel("model_servicec");
            $data['details'] = $this->model_servicec->afficher();
            $this->set($data);
            $this->layout=false;
            $this->render('service_r');
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
     
        $this->loadModel("model_servicec");
        $this->model_servicec->del($idd);
        
        $data['details'] = $this->model_servicec->afficher();
        $this->layout=false; 
        $this->set($data);
        $this->render('service_r');
     //   $page = WEB_ROOT .'acceuil/';s
    }
}