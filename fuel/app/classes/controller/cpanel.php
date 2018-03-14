<?php

class Controller_CPanel extends Controller_Template
{

    public $template = 'template-cpanel';

    public function action_cpanel_index()
    {
        $data = array();
        $this->template->content = View::forge('superuser/cpanel-index', $data);
    }

    /**
     * Category 
     */
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
            //Delete Section
            $which_delete   =   $_POST['buttonClicked'];
            $get_idby_explode =   explode('|', $which_delete);
            $id_delete  =   $get_idby_explode[1];  
            $entry  =   Model_Categoria::find($id_delete);
            $entry->delete();

            //Trigger to keep the AutoIncrement
            $last_entry = Model_Categoria::find('last');
            $number_autoinc = $last_entry['id_categoria'];
            $number_autoinc += 1;
            $query = DB::query('ALTER TABLE categoria AUTO_INCREMENT='.$number_autoinc.';');
            $query->execute();
            Response::redirect('controle/categoria');
        }
    
    /**
     * História
     */
        public function action_historia()
        {
            $entry  =   Model_Ensaios::find('all');
            $data   =   array('historia' => $entry);
            $this->template->content    =   View::forge('superuser/cpanel-history', $data);
        }
}