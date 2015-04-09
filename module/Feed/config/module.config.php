<?php

return array(
    'router' => array(
        'routes' => array(
            'feed-home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/feed',
                    'defaults' => array(
                        'controller' => 'Feed\Controller\Feed',
                        'action'     => 'index',
                    )
                )
            )
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'Feed\Service\FeedService' => 'Feed\Service\FeedService'
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Feed\Controller\Feed' => 'Feed\Controller\FeedController'
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array (
            __DIR__ . '/../view',
        )
    )
);
