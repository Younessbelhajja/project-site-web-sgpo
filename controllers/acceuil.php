<?php
class acceuil extends Controller
{
    function index()
    {
        $this->loadModel("model_acceuil");
        $data['service'] = $this->model_acceuil->afficher();
        $this->set($data);
       $this->render('acceuil');
    }
    
}
