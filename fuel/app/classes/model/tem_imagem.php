<?php

class Model_Tem_Imagem extends Orm\Model
{
    protected static $_table_name   =   'tem_imagem';

    protected static $_properties   =   array(
        'id_tem_imagem',
        'id_historia',
        'id_imagem'
    );

    protected static $_primary_key  =   'id_tem_imagem';
}