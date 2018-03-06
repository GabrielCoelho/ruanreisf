<?php

class Model_Tem_Informacao extends Orm\Model
{
    protected static $_table_name   =   'tem_informacao';

    protected static $_properties   =   array(
        'id_tem_informacao',
        'id_informacao',
        'id_historia'
    );

    protected static $_primary_key  =   'id_tem_informacao';
}