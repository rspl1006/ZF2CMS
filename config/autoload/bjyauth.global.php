<?php
return array(
    'bjyauthorize' => array(
        'default_role' => 'guest',
        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',
        'authenticated_role' => 'user',
        'role_providers' => array(
// using an object repository (entity repository) to load all roles into our ACL
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => array(
                'object_manager' => 'doctrine.entity_manager.orm_default',
                'role_entity_class' => 'User\Entity\Role',
            ),
        ),
        'guards' => array(
            /* If this guard is specified here (i.e. it is enabled), it will block
            * access to all controllers and actions unless they are specified here.
            * You may omit the 'action' index to allow access to the entire controller
            */
            'BjyAuthorize\Guard\Controller' => array(
                array(
                    'controller' => 'zfcuser',
                    'action' => array('index'),
                    'roles' => array('GUEST', 'USER'),
                ),
                array(
                    'controller' => 'zfcuser',
                    'action' => array('login', 'authenticate', 'register'),
                    'roles' => array('GUEST'),
                ),
                array(
                    'controller' => 'zfcuser',
                    'action' => array('logout'),
                    'roles' => array('USER'),
                ),
                array('controller' => 'Application\Controller\Index', 'roles' => array()),
                array(
                    'controller' => 'Admin\Controller\Index',
                    'roles' => array('ADMINISTRATOR'),
                ),

/*                array(
                    'controller' => 'MyBlog\Controller\BlogPost',
                    'action' => array('index', 'view'),
                    'roles' => array('guest', 'user'),
                ),
                array(
                    'controller' => 'MyBlog\Controller\BlogPost',
                    'action' => array('add', 'edit', 'delete'),
                    'roles' => array('administrator'),
                ),
*/
            ),
        ),
    ),
);