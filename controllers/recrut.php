<?php
class recrut extends Controller
{
    function index()
    {
       $this->render('recrut');
    }
    function demander()
    {
        $this->loadModel("model_recrut");
        $data['CV'] = 'cv-'.strtotime('now').'.pdf';
        $r = $this->model_recrut->save_cv($data['CV']);
        if($r)
        {
            $demande['CV'] = $r;
            $demande['nomp'] = $_POST['nom'];
            $demande['ville'] = $_POST['ville'];
            $demande['email'] = $_POST['email'];
            $demande['niveauetude'] = $_POST['Niveauformation'];
            $demande['niveauexper'] = $_POST['experience'];
            $demande['tele'] = $_POST['tele'];
            $demande['specialise'] = $_POST['specialite'];
         
            $demande['lettremotiv'] = $_POST['motive'];
            $this->model_recrut->ajouter($demande);

            $page = WEB_ROOT .'recrut/';
        $this->rederction($page); 
        }
    }
    
}
