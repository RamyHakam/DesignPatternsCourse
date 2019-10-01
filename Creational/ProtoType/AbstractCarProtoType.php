<?php

namespace  Creational\ProtoType;

 abstract  class AbstractCarProtoType
{
    protected  $model;

    private $flag;


    abstract  function __clone();

     /**
      * @return mixed
      */
     public function getFlag()
     {
         return $this->flag;
     }

     /**
      * @param mixed $flag
      */
     public function setFlag($flag): void
     {
         $this->flag = $flag;
     }


}