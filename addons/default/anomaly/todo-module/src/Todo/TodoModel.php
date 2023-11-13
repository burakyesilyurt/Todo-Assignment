<?php namespace Anomaly\TodoModule\Todo;

use Anomaly\TodoModule\Todo\Contract\TodoInterface;
use Anomaly\Streams\Platform\Model\Todo\TodoTodoEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodoModel extends TodoTodoEntryModel implements TodoInterface
{
    use HasFactory;

    /**
     * @return TodoFactory
     */
    protected static function newFactory()
    {
        return TodoFactory::new();
    }
}
