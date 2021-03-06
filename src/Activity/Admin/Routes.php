<?php
namespace Activity\Admin;

class Routes extends \Dsc\Routes\Group
{
    public function initialize()
    {
        $this->setDefaults( array(
            'namespace' => '\Activity\Admin\Controllers',
            'url_prefix' => '/admin/activities' 
        ) );
        
        $this->add( '/track [ajax]', 'GET|POST', array(
            'controller' => 'Activity',
            'action' => 'track'
        ) );        
        
        $this->addSettingsRoutes();
        
        $this->addCrudGroup( 'Actions', 'Action' );
        $this->addCrudGroup( 'Actors', 'Actor' );
        
        $this->add( '/export', 'GET', array(
            'controller' => 'Export',
            'action' => 'index'
        ) );
        
        $this->add( '/export/@task', 'GET', array(
            'controller' => 'Export',
            'action' => '@task'
        ) );
    }
}