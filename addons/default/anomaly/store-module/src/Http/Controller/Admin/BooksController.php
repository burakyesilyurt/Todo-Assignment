<?php namespace Anomaly\StoreModule\Http\Controller\Admin;

use Anomaly\StoreModule\Book\Form\BookFormBuilder;
use Anomaly\StoreModule\Book\Table\BookTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BooksController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BookTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BookTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BookFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BookFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BookFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BookFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
