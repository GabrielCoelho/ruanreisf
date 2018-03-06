<?php

class Model_Tem_Comentario extends Orm\Model
{
    protected static $_table_name   =   'tem_comentario';

    protected static $_properties   =   array(
        'id_tem_comentario',
        'id_comentario',
        'id_historia'
    );

    protected static $_primary_key  =   'id_tem_comentario';
}