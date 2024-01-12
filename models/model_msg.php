<?php
class model_msg extends Models
{
    function Rech($arr)
    {
        $this->table ="contact";
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
    $this->table ="contact";
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
        $this->table="contact";
        $condition = array('id'=>(int)$id);
        $this->delete($condition);
    }

}