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
        $data = array('categoria' => $all_category);
        $this->template->content = View::forge('superuser/cpanel-category', $data);
    }

    public function action_add_category()
    {
        $new_category = $_POST['category'];
        $props = array('nome_categoria' => $new_category);

        $new = Model_Categoria::forge($props);
        $new->save();

        Response::redirect('controle/categoria');
    }

    public function action_delete_category()
    {
        $which_delete   =   $_POST['buttonClicked'];
        $get_idby_explode =   explode('|', $which_delete);
        $id_delete  =   $get_idby_explode[1];  
        $entry  =   Model_Categoria::find($id_delete);
        $entry->delete();

        Response::redirect('controle/categoria');
    }
}