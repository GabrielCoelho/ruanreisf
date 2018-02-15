<?php

class Model_Usuario extends Orm\Model
{
    protected static $_table_name   =   'usuario';

    protected static $_properties   =   array(
        'id_usuario',
        'nome_usuario',
        'email_usuario',
        'senha_usuario'
    );

    protected static $_primary_key   =   'id_usuario';
}