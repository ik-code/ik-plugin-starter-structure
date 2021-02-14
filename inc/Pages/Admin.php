<?php


namespace Inc\Pages;


use Inc\Base\BaseController;

class Admin extends BaseController
{


    /**
     * register method
     */
    public function register()
    {
        //Creates a custom administration area
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }


    /**
     * Creates a custom administration area - set pages
     */
    public function add_admin_pages()
    {
        add_menu_page('IK Plugin', 'IK', 'manage_options', 'ik_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    }



    /**
     * Creates a custom administration area - template
     */
    public function admin_index()
    {
        // require template
        require_once  $this->plugin_path . 'templates/admin/admin.php';
    }
}