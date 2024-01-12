<?php
class afichrecrut extends Controller
{
    function index()
    {
        if(isset($_SESSION['login']))
        {

        $this->loadModel("model_afichrecrut");
        $this->layout=false;
        $data['demandes_recrurement'] = $this->model_afichrecrut->afficher();
        $this->set($data);
       $this->render('afichrecrut');
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
     
        $this->loadModel("model_afichrecrut");
        $this->model_afichrecrut->del($idd);
        
        $data['demandes_recrurement'] = $this->model_afichrecrut->afficher();
        $this->layout=false; 
        $this->set($data);
        $this->render('afichrecrut');
     //   $page = WEB_ROOT .'acceuil/';s
    }


   
    
}