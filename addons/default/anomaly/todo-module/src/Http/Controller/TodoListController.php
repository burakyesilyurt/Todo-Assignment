<?php

namespace Anomaly\TodoModule\Http\Controller;


use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\TodoModule\Todo\TodoModel;
use Illuminate\Http\Request;

class TodoListController extends PublicController
{
    public function index()
    {

        $item = TodoModel::all();
        return $this->view->make("anomaly.module.todo::todo.index", compact("item"));
    }
    public function create(Request $request)
    {
        TodoModel::create($request->all());
        $item = TodoModel::all();
        return $this->view->make("anomaly.module.todo::todo.index", compact("item"));
    }

    public function delete($id)
    {
        $item_to = TodoModel::find($id)->delete();
        $item = TodoModel::all();
        return $this->view->make("anomaly.module.todo::todo.index", compact("item"));
    }
}
