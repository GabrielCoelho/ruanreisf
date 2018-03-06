<?php

class Model_Faz_Comentarios extends Orm\Model
{
    protected static $_table_name   =   'faz_comentario';

    protected static $_properties   =   array(
        'id_faz_comentario',
        'id_comentario',
        'id_usuario',
        'data_comentario'
    );

    protected static $_primary_key  =   'id_tem_categoria';
}