<?php

class Model_Informacao extends Orm\Model
{
    protected static $_table_name   =   'info_ensaio';

    protected static $_properties   =   array(
        'id_info_ensaio',
        'descricao_breve',
        'descricao_extensa',
        'data_ensaio',
        'local_ensaio',
        'equipe_filmagem',
        'equipe_cerimonia',
        'buffet',
        'decoracao',
        'maquiagem',
        'vestuário',
        'confeitaria',
        'músicos',
        'iluminação',
        'celebrante',
        'penteados',
        'outros'
    );

    protected static $_primary_key   =   'id_info_ensaio';
}