<?php
class model_details extends Models
{
    function ajouter($data)
    {
            
    	$this->table ="details";
      	return $this->save($data);
    }


    function ajouter1($data)
    {
            
    	$this->table ="details1";
      	return $this->save($data);
    }


    function ajouter2($data)
    {
            
    	$this->table ="details2";
      	return $this->save($data);
    }
}