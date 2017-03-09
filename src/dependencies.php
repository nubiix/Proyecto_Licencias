<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Register Twig View helper
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => 'cache',
        'debug' => true,
        'auto_reload' => true,
    ]);
    $view->addExtension(new Slim\Views\TwigExtension(
        $container['router'], 
        $container['request']->getUri()
    ));

    return $view;
};
