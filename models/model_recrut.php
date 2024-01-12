<?php
class model_recrut extends Models
{
    function ajouter($demande)
    {
            
    	$this->table ="demandes_recrurement";
      	return $this->save($demande);
    }

    function save_cv($name)
    {
        $content_dir = 'documents/';  // dossier o� sera d�plac� le fichier
  
        $tmp_file = $_FILES['cv']['tmp_name'];
        
        if (! is_uploaded_file ( $tmp_file )) {
          return ( "Le fichier est introuvable" );
        }
        $type_file = $_FILES['cv']['type'];
          
          if ($_FILES['cv']['size']>1024 && $_FILES['cv']['size']<5*1024*1024) {
              
          }else{
              return ( "Le fichier n'est pas une image" );
          }
  
        if (!strstr($type_file, 'pdf') && !strstr($type_file, 'pdf') && !strstr($type_file, 'pdf') && !strstr($type_file, 'pdf') && !strstr($type_file, 'pdf')) {
          return ( "Le fichier n'est pas une pdf" );
        }
  
        if (! move_uploaded_file ( $tmp_file, $content_dir . $name )) {
          return ( "Impossible de copier le fichier dans $content_dir" );
        }
  
        return $name;
        }


        function save_motivation($name)
        {
            $content_dir = 'motivation/';  // dossier o� sera d�plac� le fichier
      
            $tmp_file = $_FILES['motivation']['tmp_name'];
            
            if (! is_uploaded_file ( $tmp_file )) {
              return ( "Le fichier est introuvable" );
            }
            $type_file = $_FILES['motivation']['type'];
              
              if ($_FILES['motivation']['size']>1024 && $_FILES['motivation']['size']<5*1024*1024) {
                  
              }else{
                  return ( "Le fichier n'est pas une image" );
              }
      
            if (!strstr($type_file, 'pdf') && !strstr($type_file, 'pdf') && !strstr($type_file, 'pdf') && !strstr($type_file, 'pdf') && !strstr($type_file, 'pdf')) {
              return ( "Le fichier n'est pas une pdf" );
            }
      
            if (! move_uploaded_file ( $tmp_file, $content_dir . $name )) {
              return ( "Impossible de copier le fichier dans $content_dir" );
            }
      
            return $name;
            }


        

}