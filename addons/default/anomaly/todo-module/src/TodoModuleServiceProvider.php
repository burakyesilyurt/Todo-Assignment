<?php

namespace Anomaly\TodoModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\TodoModule\Todo\Contract\TodoRepositoryInterface;
use Anomaly\TodoModule\Todo\TodoRepository;
use Anomaly\Streams\Platform\Model\Todo\TodoTodoEntryModel;
use Anomaly\TodoModule\Todo\TodoModel;
use Illuminate\Routing\Router;

class TodoModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'todo' => [
            'as' => 'todo::index',
            'uses' => 'Anomaly\TodoModule\Http\Controller\TodoListController@index'
        ],
        'todo/create' => [
            'as' => 'todo::create',
            'uses' => 'Anomaly\TodoModule\Http\Controller\TodoListController@create'
        ],
        'todo/delete/{id}' => [
            'as' => 'todo::delete',
            'uses' => 'Anomaly\TodoModule\Http\Controller\TodoListController@delete'
        ],


        'admin/todo'           => 'Anomaly\TodoModule\Http\Controller\Admin\TodoController@index',
        'admin/todo/create'    => 'Anomaly\TodoModule\Http\Controller\Admin\TodoController@create',
        'admin/todo/edit/{id}' => 'Anomaly\TodoModule\Http\Controller\Admin\TodoController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Anomaly\TodoModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Anomaly\TodoModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Anomaly\TodoModule\Event\ExampleEvent::class => [
        //    Anomaly\TodoModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Anomaly\TodoModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        TodoTodoEntryModel::class => TodoModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        TodoRepositoryInterface::class => TodoRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }
}
