<?php
return array(
   'view_manager' => array(
        'template_path_stack' => array(
            'delcountriesflags' => __DIR__ . '/../view',
        ),
    ),
	'service_manager' => array(
        'aliases' => array(
            'delcountriesflags_zend_db_adapter' => 'Zend\Db\Adapter\Adapter',
    		'delcountriesflags_service' => 'DelCountriesFlags\Service'
        ),
    ),
    'routes' => array(),
    'controllers' => array(
        'invokables' => array(
            
        ),
    ),
    'router' => array(
        'routes' => array()
    ),
);
