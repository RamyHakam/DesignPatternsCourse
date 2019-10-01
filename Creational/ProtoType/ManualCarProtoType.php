<?php

namespace  Creational\ProtoType;


class ManualCarProtoType extends  AbstractCarProtoType
{


    protected $model = 'Manual';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }


}