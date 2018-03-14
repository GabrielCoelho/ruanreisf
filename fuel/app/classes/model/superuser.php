<?php

class Model_Superuser extends Orm\Model
{
    protected static $_table_name   =   'superusuario';

    protected static $_properties   =   array(
        'id_superuser',
        'nome_superuser',
        'email_login',
        'senha_login',
        'permicao'
    );

    protected static $_primary_key   =   array('id_superuser');
}