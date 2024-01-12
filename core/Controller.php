<?php
class Controller {
    var $params = array ();
    var $layout = 'default';
    public function set($array) {
        $this->params = array_merge ( $this->params, $array );
    }
    public function render($filename) {
        extract ( $this->params );
        ob_start ();
        require ROOT . 'views/' . get_class ( $this ) . '/' . $filename . '.php';
        $content_for_layout = ob_get_clean ();

        if ($this->layout == false) {
            echo $content_for_layout;
        } else {
            $this->is_connect ();
            $this->layout = 'default';
            require ROOT . 'views/layout/' . $this->layout . '.php';
        }
    }

    function is_loged() {
        if ((isset ( $_SESSION ['compte'] )) && (! empty ( $_SESSION ['compte'] ))) {

        } else {
            $www = WEB_ROOT . 'login';
            rederction ( $www );

        }
    }
    public function loadModel($name) {
        require_once ROOT . 'models/' . strtolower ( $name ) . '.php';
        $this->$name = new $name ();
    }
    private function is_connect() {
        if ((isset ( $_SESSION ['compte'] )) && (! empty ( $_SESSION ['compte'] ))) {
            $this->layout = 'default';
        } else {
            $this->layout = false;
        }
    }
    function rederction($www){
        echo '<script language="Javascript">
              <!--
                 document.location.replace("'.$www.'");
              // -->
              </script>';
    }

    function back_rederection(){
        echo '<script>javascript:window.history.back();</script>';
    }

    function titre($arr){
        $titre ="";
        foreach ($arr as $key => $value) {
            if($titre == ''){
                $titre = $value;
            }else{
                $titre = $titre .'-'. $value;
            }
        }
        return $titre;
    }

    function charger_message_my_store(){
        $this->loadModel('home_model');
        $data['Mystore_'] = $this->home_model->charger_my_stores();
        return $this->home_model->charger_les_message_limte($data['Mystore_']);
    }

    function charger_my_store(){
        $this->loadModel('home_model');
        return $this->home_model->charger_my_stores();
    }


    function mail_send($arr) {
        if (! isset ( $arr ['to_email'], $arr ['from_email'], $arr ['subject'] )) {
            throw new HelperException ( 'mail(); not all parameters provided.' );
        }

        /*
         * if (strtoupper ( substr ( PHP_OS, 0, 3 ) == 'WIN' )) $eol = "\r\n"; elseif (strtoupper ( substr ( PHP_OS, 0, 3 ) == 'MAC' )) $eol = "\r"; else
             */
        $eol = "\n";
        $msg = "";

        $mime_boundary_1 = md5 ( time () );
        $mime_boundary_2 = "1_" . $mime_boundary_1;

        $to = empty ( $arr ['to_name'] ) ? $arr ['to_email'] : '"' . mb_encode_mimeheader ( $arr ['to_name'] ) . '" <' . $arr ['to_email'] . '>';
        $from = empty ( $arr ['from_name'] ) ? $arr ['from_email'] : '"' . mb_encode_mimeheader ( $arr ['from_name'] ) . '" <' . $arr ['from_email'] . '>';

        $msg .= "--{$mime_boundary_1}$eol";
        $msg .= "	boundary=\"{$mime_boundary_2}\"" . $eol . $eol;
        $msg .= quoted_printable_encode ( $arr ['campagne'] );
        $msg .= "--" . $mime_boundary_1 . "--" . $eol . $eol;

        $headers = array (
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset="UTF-8";',
            'Content-Transfer-Encoding: quoted-printable',
            'Date: ' . date ( 'r', $_SERVER ['REQUEST_TIME'] ),
            'Message-ID: <' . $_SERVER ['REQUEST_TIME'] . md5 ( $_SERVER ['REQUEST_TIME'] ) . '@em4u1.com>',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
            'X-Mailer: PHP v' . phpversion (),
            'X-Originating-IP: ' . $_SERVER ['SERVER_ADDR']
        );

        return mail ( $to, '=?UTF-8?B?' . base64_encode ( html_entity_decode ( $arr ['subject'] ) ) . '?=', $msg, implode ( "$eol", $headers ) );
    }

    function dateDiff($date1, $date2){
        $diff = abs($date1 - $date2);
        $retour = array();
        $tmp = $diff;
        $retour['second'] = $tmp % 60;
        $tmp = floor( ($tmp - $retour['second']) /60 );
        $retour['minute'] = $tmp % 60;
        $tmp = floor( ($tmp - $retour['minute'])/60 );
        $retour['hour'] = $tmp % 24;
        $tmp = floor( ($tmp - $retour['hour'])  /24 );
        $retour['day'] = $tmp;
        return $retour;
    }

    function chifre_en_lettre($montant, $devise1='', $devise2=''){

        if(empty($devise1)) $dev1='DHS';

        else $dev1=$devise1;
        if(empty($devise2)) $dev2='Centimes';
        else $dev2=$devise2;
        $valeur_entiere=intval($montant);
        $valeur_decimal=intval(round($montant-intval($montant), 2)*100);
        $dix_c=intval($valeur_decimal%100/10);
        $cent_c=intval($valeur_decimal%1000/100);
        $unite[1]=$valeur_entiere%10;
        $dix[1]=intval($valeur_entiere%100/10);
        $cent[1]=intval($valeur_entiere%1000/100);
        $unite[2]=intval($valeur_entiere%10000/1000);
        $dix[2]=intval($valeur_entiere%100000/10000);
        $cent[2]=intval($valeur_entiere%1000000/100000);
        $unite[3]=intval($valeur_entiere%10000000/1000000);
        $dix[3]=intval($valeur_entiere%100000000/10000000);
        $cent[3]=intval($valeur_entiere%1000000000/100000000);
        $chif=array('', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix sept', 'dix huit', 'dix neuf');
        $secon_c='';
        $trio_c='';
        for($i=1; $i<=3; $i++){
            $prim[$i]='';
            $secon[$i]='';
            $trio[$i]='';
            if($dix[$i]==0){
                $secon[$i]='';
                $prim[$i]=$chif[$unite[$i]];
            }
            else if($dix[$i]==1){
                $secon[$i]='';
                $prim[$i]=$chif[($unite[$i]+10)];
            }
            else if($dix[$i]==2){
                if($unite[$i]==1){
                    $secon[$i]='vingt et';
                    $prim[$i]=$chif[$unite[$i]];
                }
                else {
                    $secon[$i]='vingt';
                    $prim[$i]=$chif[$unite[$i]];
                }
            }
            else if($dix[$i]==3){
                if($unite[$i]==1){
                    $secon[$i]='trente et';
                    $prim[$i]=$chif[$unite[$i]];
                }
                else {
                    $secon[$i]='trente';
                    $prim[$i]=$chif[$unite[$i]];
                }
            }
            else if($dix[$i]==4){
                if($unite[$i]==1){
                    $secon[$i]='quarante et';
                    $prim[$i]=$chif[$unite[$i]];
                }
                else {
                    $secon[$i]='quarante';
                    $prim[$i]=$chif[$unite[$i]];
                }
            }
            else if($dix[$i]==5){
                if($unite[$i]==1){
                    $secon[$i]='cinquante et';
                    $prim[$i]=$chif[$unite[$i]];
                }
                else {
                    $secon[$i]='cinquante';
                    $prim[$i]=$chif[$unite[$i]];
                }
            }
            else if($dix[$i]==6){
                if($unite[$i]==1){
                    $secon[$i]='soixante et';
                    $prim[$i]=$chif[$unite[$i]];
                }
                else {
                    $secon[$i]='soixante';
                    $prim[$i]=$chif[$unite[$i]];
                }
            }
            else if($dix[$i]==7){
                if($unite[$i]==1){
                    $secon[$i]='soixante et';
                    $prim[$i]=$chif[$unite[$i]+10];
                }
                else {
                    $secon[$i]='soixante';
                    $prim[$i]=$chif[$unite[$i]+10];
                }
            }
            else if($dix[$i]==8){
                if($unite[$i]==1){
                    $secon[$i]='quatre-vingts et';
                    $prim[$i]=$chif[$unite[$i]];
                }
                else {
                    $secon[$i]='quatre-vingt';
                    $prim[$i]=$chif[$unite[$i]];
                }
            }
            else if($dix[$i]==9){
                if($unite[$i]==1){
                    $secon[$i]='quatre-vingts et';
                    $prim[$i]=$chif[$unite[$i]+10];
                }
                else {
                    $secon[$i]='quatre-vingts';
                    $prim[$i]=$chif[$unite[$i]+10];
                }
            }
            if($cent[$i]==1) $trio[$i]='cent';
            else if($cent[$i]!=0 || $cent[$i]!='') $trio[$i]=$chif[$cent[$i]] .' cents';
        }

        $chif2=array('', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante-dix', 'quatre-vingts', 'quatre-vingts dix');
        $secon_c=$chif2[$dix_c];
        $res = "";
        if($cent_c==1) $trio_c='cent';
        else if($cent_c!=0 || $cent_c!='') $trio_c=$chif[$cent_c] .' cents';

        if(($cent[3]==0 || $cent[3]=='') && ($dix[3]==0 || $dix[3]=='') && ($unite[3]==1))
            $res .=  $trio[3]. '  ' .$secon[3]. ' ' . $prim[3]. ' million ';
        else if(($cent[3]!=0 && $cent[3]!='') || ($dix[3]!=0 && $dix[3]!='') || ($unite[3]!=0 && $unite[3]!=''))
            $res .=  $trio[3]. ' ' .$secon[3]. ' ' . $prim[3]. ' millions ';
        else
            $res .=  $trio[3]. ' ' .$secon[3]. ' ' . $prim[3];

        if(($cent[2]==0 || $cent[2]=='') && ($dix[2]==0 || $dix[2]=='') && ($unite[2]==1))
            $res .=  ' mille ';
        else if(($cent[2]!=0 && $cent[2]!='') || ($dix[2]!=0 && $dix[2]!='') || ($unite[2]!=0 && $unite[2]!=''))
            $res .=  $trio[2]. ' ' .$secon[2]. ' ' . $prim[2]. ' milles ';
        else
            $res .= $trio[2]. ' ' .$secon[2]. ' ' . $prim[2];

        $res .=  $trio[1]. ' ' .$secon[1]. ' ' . $prim[1];

        $res .=  ' '. $dev1 .' ' ;

        if(($cent_c=='0' || $cent_c=='') && ($dix_c=='0' || $dix_c==''))
            $res .=  ' et zero '. $dev2;
        else
            $res .=  $trio_c. ' ' .$secon_c. ' ' . $dev2;

        return $res;


    }

    // mailer

    function myMail($subject, $message, $to=null){

        require ROOT.'plagin/PHPMailer/src/PHPMailer.php';
        require ROOT.'plagin/PHPMailer/src/SMTP.php';
        require ROOT.'plagin/PHPMailer/src/Exception.php';
        // Load Composer's autoloader
        require ROOT.'plagin/PHPMailer/autoload.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer;
        $mail->XMailer = ' ';

        //$mail->SMTPDebug = 3;                                       // Enable verbose debug output
        
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';          // Specify main and backup SMTP servers
        $mail->Port = 587;              // TCP port to connect to
        $mail->Username = 'mouhsine.ramsi@gmail.com';      // SMTP username
        $mail->Password = 'mouhsineramsi123';      // SMTP password
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted

        $mail->setFrom('mouhsine.ramsi@gmail.com', 'contact');

        if (is_array($to)) {
            foreach ($to as $k => $v) {
                if (is_array($v))
                    if (array_key_exists('email', $v))
                        if (array_key_exists('name', $v))
                            $mail->addAddress($v['email'], $v['name']);
                        else
                            $mail->addAddress($v['email']);
                else
                    $mail->addAddress($v);
            }
            if (array_key_exists('email', $to))
                if (array_key_exists('name', $to))
                    $mail->addAddress($to['email'], $to['name']);
                else
                    $mail->addAddress($to['email']);
        }
        else
            $mail->addAddress($to);

        $mail->WordWrap = 120;
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->Subject = $subject;
        $mail->Body = $message;

        $sent = $mail->send();

        if (!$sent) {
            echo 'Mail Error: '. $mail->ErrorInfo;
        }

    }

    function contact_mail($sub,$msg)
    {
        $to = 'mouhsine.ramsi.dev@gmail.com';
        return $this->myMail($sub, $msg,$to);
    }
}

?>
