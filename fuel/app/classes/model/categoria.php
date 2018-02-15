<?php

class Model_Categoria extends Orm\Model
{
    protected static $_table_name   =   'categoria';

    protected static $_properties   =   array(
        'id_categoria',
        'nome_categoria'
    );

    protected static $_primary_key  =   'id_categoria';
}