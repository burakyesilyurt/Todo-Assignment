<?php

namespace Anomaly\TodoModule\Todo;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class TodoSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        TodoModel::factory()->count(3)->make();
    }
}
