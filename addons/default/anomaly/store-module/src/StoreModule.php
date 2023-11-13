<?php namespace Anomaly\StoreModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class StoreModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'books' => [
            'buttons' => [
                'new_book',
            ],
        ],
    ];

}
