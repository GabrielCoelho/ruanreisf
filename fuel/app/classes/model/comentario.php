<?php

class Model_Comentario extends Orm\Model
{
    protected static $_table_name   =   'comentario';

    protected static $_properties   =   array(
        'id_comentario',
        'texto_comentario',
        'id_usuario'
    );

    protected static $_primary_key   =   'id_imagem';
}