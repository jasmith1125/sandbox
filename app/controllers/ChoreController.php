<?php

class ChoreController extends BaseController {

	public function Index()
    {
        // Show a listing of chores.
        $chores = Chore::all();
        return View::make('index', compact('chores'));
    }

    public function create()
    {
        
        // Show the create chore form.
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handle create form submission.
        $chore = new Chore;
        $chore->description = Input::get('description');
        $chore->completed = Input::has('completed');
        $chore->save();

        return Redirect::action('ChoreController@index');
    }

    public function edit(Chore $chore)
    {
        // Show the edit chore form.
        return View::make('edit', compact('chore'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $chore = Chore::findOrFail(Input::get('id'));
        $chore->description = Input::get('description');
        $chore->completed     = Input::has('completed');
        $chore->save();

    return Redirect::action('ChoreController@index');
    }

    public function delete(Chore $chore)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('chore'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('chore');
        $chore = Chore::findOrFail($id);
        $chore->delete();

        return Redirect::action('ChoreController@index');
    }

}
