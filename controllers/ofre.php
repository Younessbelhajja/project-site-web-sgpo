<?php
class ofre extends Controller
{
    function index()
    {
        $this->loadModel("model_ofre");
        $data['service'] = $this->model_ofre->afficher();
        $this->set($data);
       $this->render('ofre');
    }


    function afficher(){

        $this->loadModel("model_ofre");
            $data['service'] = $this->model_ofre->Rech((int)$id);
           var_dump($data);exit;
            $this->set($data);
          $this->render('ofre');


    }
    
}
