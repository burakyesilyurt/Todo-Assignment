<?php namespace Anomaly\StoreModule\Book;

use Anomaly\StoreModule\Book\Contract\BookInterface;
use Anomaly\Streams\Platform\Model\Store\StoreBooksEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookModel extends StoreBooksEntryModel implements BookInterface
{
    use HasFactory;

    /**
     * @return BookFactory
     */
    protected static function newFactory()
    {
        return BookFactory::new();
    }
}
