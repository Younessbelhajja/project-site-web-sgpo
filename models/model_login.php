<?php
class model_login extends Models
{
    function Rech($arr,$arr2)
    {
        $this->table ="admin";
        $arrydata = array(
			'condition' => 'Name=:user and password=:pass',
            'fields' => '*', 
            'params' => array(
                ':user'=>$arr ,':pass'=>$arr2
            )
        );
        $r = $this->find($arrydata);
        
        return $r;
    }
}