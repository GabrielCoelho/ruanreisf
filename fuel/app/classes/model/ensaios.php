<?php

class Model_Ensaios extends Orm\Model
{

    protected static $_table_name   =    'ensaios';

    protected static $_properties   =    array(
        'id_historia',
        'nome_historia'
    );

    protected static $_primary_key  =    array('id_historia');
}