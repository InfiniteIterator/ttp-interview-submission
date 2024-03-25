<?php 

class WidgetController extends BaseController
{
    public function index()
    {
        $widgets = Widget::all();
        return View::make('widgets.index', compact('widgets'));
    }

    public function add() {
        $input = Input::only(['name', 'color', 'description']);
        $validator = Validator::make($input, [
            'name' => 'required|unique:widgets,name',
            'color' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Widget::create($input);
        return Redirect::to('/widgets');
    }
}

?>