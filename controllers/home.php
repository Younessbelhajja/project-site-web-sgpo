<?php
class home extends Controller
{
    function index()
    {
        if(isset($_SESSION['login']))
        {
            
        $this->layout=false;
        $this->loadModel("model_home");
        $data['service'] = $this->model_home->afficher();
       //var_dump($data);exit;
        $this->set($data);
       $this->render('home');
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
        //var_dump($id);exit(); 
     
        $this->loadModel("model_home");
        $this->model_home->del($idd);
        
        $data['service'] = $this->model_home->afficher();
        $this->layout=false; 
        $this->set($data);
        $this->render('home');
     //   $page = WEB_ROOT .'acceuil/';s
    }

    

    function ajouter()
    {
      $this->loadModel("model_home");
      $data1['images'] = 'images-'.strtotime('now').'.png';
      $this->model_home->save_image_header($data1['images']);
      $data['images'] = $data1['images'];
      $data['titre'] = $_POST['titre'];
      $data['description'] = $_POST['description'];
      $this->model_home->ajouter($data);

      $page = WEB_ROOT .'home/';
        $this->rederction($page);   

    }


    function view_modifier($id)
    {
        //$this->render('update');
       //echo $id;
        $this->layout=false;
        $this->loadModel("model_home");
        $dat['serv'] = $this->model_home->Rech((int)$id);
        $dat['service'] = $this->model_home->afficher();
       //var_dump($dat);exit;
        $this->set($dat);
        $this->render('home');
    }  

    function update_d($id)
	{   
        //
        
        $this->loadModel("model_home");

	 // var_dump($_POST);exit();
			$data1['images'] = 'images-'.strtotime('now').'.png';
            // r kat chofna wach tswira kayna ula ma kaynach la kant kay ajotiha 
            // f model kan khalix updat 3adiya bach kan khdamo biha ltaht 3adiya u Updat image kan dirohz lfo9
			$r = $this->model_home->updat_image_header($data1['images']);
    	if ($r == true)
         
        //var_dump($_POST);exit;
        $data['images'] = $data1['images'];
        $data['titre'] = $_POST['titre'];
        $data['description'] = $_POST['description'];
        //kan ajoutew hadchi f id li diclarina fo9 dernalo int ltaht ki3arfo ina wahd fach kanklikiw elih mn buttona
        $this->model_home->update_service((int)$id,$data);
        // e($id,$data);
        $page = WEB_ROOT .'home/';
        $this->rederction($page);
        
 	}

     function recherche()
     { 
          $arr=$_POST["nom"];
          $this->loadModel("model_home");
          $data['service'] = $this->model_home->Recherche($arr);
          $this->set($data);
          $this->render('home');
      }

    
}
