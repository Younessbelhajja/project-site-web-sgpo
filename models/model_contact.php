<?php
class model_contact extends Models
{
    function ajouter($data)
    {
            
    	$this->table ="contact";
      	return $this->save($data);
    }
}