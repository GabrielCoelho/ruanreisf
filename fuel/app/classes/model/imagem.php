<?php

class Model_Imagem extends Orm\Model
{
    protected static $_table_name   =   'imagem';

    protected static $_properties   =   array(
        'id_imagem',
        'caminho_imagem'
    );

    protected static $_primary_key   =   'id_imagem';
}