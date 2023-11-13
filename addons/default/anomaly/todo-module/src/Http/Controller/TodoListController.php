<?php

namespace Anomaly\TodoModule\Http\Controller;


use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\TodoModule\Todo\TodoModel;
use Illuminate\Http\Request;

class TodoListController extends PublicController
{
    public function index(Request $request)
    {
        if ($request->query('name')) {
            $item = TodoModel::where('name', 'LIKE', '%' . $request->query('name') . '%')->get();
        } else {
            $item = TodoModel::paginate(3);
        }
        return $this->view->make("anomaly.module.todo::todo.index", compact("item"));
    }
    public function create(Request $request)
    {
        TodoModel::create($request->all());
        return redirect()->route("todo::index");
    }

    public function delete($id)
    {
        TodoModel::find($id)->delete();
        return redirect()->route("todo::index");
    }
}
