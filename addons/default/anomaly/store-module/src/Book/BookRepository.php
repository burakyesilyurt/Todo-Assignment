<?php namespace Anomaly\StoreModule\Book;

use Anomaly\StoreModule\Book\Contract\BookRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BookRepository extends EntryRepository implements BookRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BookModel
     */
    protected $model;

    /**
     * Create a new BookRepository instance.
     *
     * @param BookModel $model
     */
    public function __construct(BookModel $model)
    {
        $this->model = $model;
    }
}
