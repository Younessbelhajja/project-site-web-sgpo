<?php
class model_ofre extends Models
{
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

}