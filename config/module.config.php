<?php
namespace ResultFeedback\Module\Configuration;

$config = [
    'controllers' => [
        'factories' => [
            'ResultFeedback\Controller\ResultFeedbackController' => 'VuFind\Controller\AbstractBaseFactory',
        ],
        'aliases' => [
            'ResultFeedback' => 'ResultFeedback\Controller\ResultFeedbackController',
            'resultfeedback' => 'ResultFeedback\Controller\ResultFeedbackController',
        ],
    ],
];

$staticRoutes = [
    'ResultFeedback/Email', 'ResultFeedback/Home'
];

$routeGenerator = new \VuFind\Route\RouteGenerator();
$routeGenerator->addStaticRoutes($config, $staticRoutes);

// Add the home route last
$config['router']['routes']['home'] = [
    'type' => 'Laminas\Router\Http\Literal',
    'options' => [
        'route'    => '/',
        'defaults' => [
            'controller' => 'index',
            'action'     => 'Home',
        ]
    ]
];

return $config;

