<?php
return array(
    'router' => array(
        'routes' => array(
            'admin' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/admin',
                    'defaults' => array(
                        'controller' => 'Admin/Controller/Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'crud' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/crud',
                    'defaults' => array(
                        'controller' => 'Admin/Controller/CRUD',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Index' => 'Admin\Controller\IndexController',
            'Admin\Controller\CRUD'  => 'Admin\Controller\CRUDController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'admin/index/index'    => __DIR__ . '/../view/admin/index/index.html.twig',
            'admin/crud/index'     => __DIR__ . '/../view/admin/crud/index.html.twig',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ZfcTwigViewStrategy',
        ),
    ),
);