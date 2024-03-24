<?php 

class WidgetController extends BaseController
{
    public function index()
    {
        return View::make('widgets.index');
    }

    public function add() {
        $input = Input::only(['name', 'color', 'description']);
        Widget::create($input);
        return Redirect::to('/widgets');
    }
}

?>