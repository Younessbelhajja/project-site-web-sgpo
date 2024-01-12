<?php
class login extends Controller
{
    function index()
    {
        $this->layout=false;
       $this->render('login');
    }

    function Rech()
    {
        $arr=$_POST["user"];
        $arr2=$_POST["password"];
    
         $this->loadModel("model_login");
         $data['client'] = $this->model_login->Rech($arr,$arr2);
        // var_dump( $data['client']);exit;
        // zero f akhar kandiroh la bghina njibo tableau kaml  la nghina njibo haja wahd akandiroha mor zero zeama kanzido chon
         if(isset($data['client'][0]))
         {
             $_SESSION['login'] = $data['client'][0];
             $pag = WEB_ROOT . 'home';
            header ( 'Location: ' . $pag );
         }  
         else
         {
          
             $pag = WEB_ROOT . 'login/';
            header ( 'Location: ' . $pag );
         }
    }

    function logout()
    {
         unset($_SESSION['login']);
         $pag = WEB_ROOT . 'login/';
         header ( 'Location: ' . $pag );
    }
}
    