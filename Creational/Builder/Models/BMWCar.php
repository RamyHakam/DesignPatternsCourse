<?php


namespace Creational\Builder\Models;


class BMWCar extends  Car
{

    private  $data = [];

    public  function setPart($name,$value){
        $this->data[$name] = $value;
    }
}