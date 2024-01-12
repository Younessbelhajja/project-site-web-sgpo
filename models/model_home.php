<?php
class model_home extends Models
{
    function afficher()
    {
    $this->table ="service";
    $arrydata = array(
        'condition' => '1=:id  ',
        'fields' => '*',
        'params' => array(
            ':id'=>1
        )
    );
    $r = $this->find($arrydata);
    
    return $r;
    }

    function del($id)
    {
        $this->table="service";
        $condition = array('id'=>(int)$id);
        $this->delete($condition);
    }

    function Recherche($arr)
    {
        $this->table ="service";
        $arrydata = array(
            'condition' => '1=:id',
            'fields' => '*', 
            'params' => array(
                ':nom'=>$arr
            )
        );
        $r = $this->find($arrydata);
        
        return $r;
    }

    function Rech($arr)
    {
        $this->table ="service";
        $arrydata = array(
            'condition' => 'id =:id',
            'fields' => '*', 
            'params' => array(
                ':id'=>$arr 
            )
        );
        $r = $this->find($arrydata);
        
        return $r;
    }


    function ajouter($data)
    {
            
    	$this->table ="service";
      	return $this->save($data);
    }

    function save_image_header($name)
    {
        $content_dir = 'images/';  // dossier o� sera d�plac� le fichier
  
        $tmp_file = $_FILES['images']['tmp_name'];
        
        if (! is_uploaded_file ( $tmp_file )) {
          return ( "Le fichier est introuvable" );
        }
        $type_file = $_FILES['images']['type'];
          
          if ($_FILES['images']['size']>1024 && $_FILES['images']['size']<5*1024*1024) {
              
          }else{
              return ( "Le fichier n'est pas une image" );
          }
  
        if (!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif')) {
          return ( "Le fichier n'est pas une image" );
        }
  
        if (! move_uploaded_file ( $tmp_file, $content_dir . $name )) {
          return ( "Impossible de copier le fichier dans $content_dir" );
        }
  
        return $name;
    }

    function update_service($id,$tab)
    {
      $this->table ="service";
      $tab['id'] = array('n' => 'id', 
                          'd' => (int)$id);

      return $this->update($tab);
    }

    function updat_image_header($name) {
        $content_dir = 'images/'; // dossier o� sera d�plac� le fichier
  
        $tmp_file = $_FILES['images']['tmp_name'];
        
        if (! is_uploaded_file ( $tmp_file )) {
          return ( "Le fichier est introuvable" );
        }
        $type_file = $_FILES['images']['type'];
          
          if ($_FILES['images']['size']>1024 && $_FILES['images']['size']<5*1024*1024) {
              
          }else{
              return ( "Le fichier n'est pas une image" );
          }
  
        if (!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif')) {
          return ( "Le fichier n'est pas une image" );
        }
  
        if (! move_uploaded_file ( $tmp_file, $content_dir . $name )) {
          return ( "Impossible de copier le fichier dans $content_dir" );
        }
  
        return $name;
        }
}