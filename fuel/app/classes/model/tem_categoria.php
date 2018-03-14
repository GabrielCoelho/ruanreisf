<?php

class Model_Tem_Categoria extends Orm\Model
{
    protected static $_table_name   =   'tem_categoria';

    protected static $_properties   =   array(
        'id_tem_categoria',
        'id_categoria',
        'id_historia'
    );

    protected static $_primary_key  =   array('id_tem_categoria');
}