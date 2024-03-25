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

    public function edit($id)
    {
        $widget = Widget::findOrFail($id);
        return View::make('widgets.edit')->with('widget', $widget);
    }
    
    public function update($id)
    {
        $input = Input::only(['name', 'color', 'description']);
        $validator = Validator::make($input, [
            'name' => 'required|unique:widgets,name,'.$id,
            'color' => 'required',
        ]);
    
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    
        $widget = Widget::findOrFail($id);
        $widget->update($input);

        return Redirect::to('/widgets');
    }

    public function destroy($id)
    {
        $widget = Widget::find($id);
        if (!$widget) {
            return Response::make('', 500);
        }
        $widget->delete();
        return '';
    }
}

?>