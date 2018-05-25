<?php

class Model_Tem_Ensaio extends Orm\Model
{
    protected static $_table_name   =   'tem_ensaio';

    protected static $_properties   =   array(
        'id_tem_ensaio',
        'id_historia',
        'id_usuario'
    );

    protected static $_primary_key  =   array('id_tem_ensaio');
}