<?php

    define('ROOT_PATH', getcwd());

    require ('system/Autoload.php');

    session_start();

    try
    {

        $config = AppConfig::getInstance();

        
        echo $config->get('APLICATION_NAME');

        $config->set('APLICATION_NAME', ' NOVO NOME');

        echo $config->get('APLICATION_NAME');

    	$controller = !isset($_REQUEST['controller']) ? 'User' : $_REQUEST['controller'];

    	$action = !isset($_REQUEST['action']) ? 'list' : $_REQUEST['action'];

    	eval('$controller = new ' . $controller . 'Controller();');

    	eval('$controller->'. $action . 'Action();');

    }
    catch(Exception $e)
    {
    	error_log($e->getMessage());
    }