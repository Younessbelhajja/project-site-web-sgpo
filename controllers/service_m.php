<?php
class service_m extends Controller
{
    function index()
    {
        if(isset($_SESSION['login']))
        {
            $this->loadModel("model_services");
            $data['details'] = $this->model_services->afficher();
            $this->set($data);
            $this->layout=false;
            $this->render('service_m');
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
     
        $this->loadModel("model_services");
        $this->model_services->del($idd);
        
        $data['details'] = $this->model_services->afficher();
        $this->layout=false; 
        $this->set($data);
        $this->render('service_m');
     //   $page = WEB_ROOT .'acceuil/';s
    }
}
