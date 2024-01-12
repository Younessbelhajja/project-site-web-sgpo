<?php
class model_afichrecrut extends Models
{
    function Rech($arr)
    {
        $this->table ="demandes_recrurement";
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
    $this->table ="demandes_recrurement";
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
        $this->table="demandes_recrurement";
        $condition = array('ID_DEMANDE'=>(int)$id);
        $this->delete($condition);
    }

}