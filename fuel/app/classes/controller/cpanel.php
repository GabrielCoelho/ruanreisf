<?php

class Controller_CPanel extends Controller_Template
{

    public $template = 'template-cpanel';

    public function action_cpanel_index()
    {
        $data = array();
        $this->template->content = View::forge('superuser/cpanel-index', $data);
    }

    public function action_cpanel_category()
    {
        $all_category = Model_Categoria::find('all');
        $data = array($all_category);
        $this->template->content = View::forge('superuser/cpanel-category', $data);
    }
}