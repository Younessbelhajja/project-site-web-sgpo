<?php
class model_servicec extends Models
{
  function Rech($arr)
  {
      $this->table ="details1";
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
  $this->table ="details1";
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
      $this->table="details1";
      $condition = array('id'=>(int)$id);
      $this->delete($condition);
  }
}