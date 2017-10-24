<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use View;
use App\Http\Requests;

class UserController extends Controller{
public function index()
{
    $users = User::all();

    return View::make('users.index', compact('users'));
}

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
{
    return View::make('users.create')
}

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
      $input = Input::all();   //All Get and Post put into array
      $validation = Validator::make($input, User::$rules);

      if ($validation->passes()) {
          User::create($input);

          return Redirect::route('users.index');
      }
      return Redirect::route('users.create')
          ->withInput()
          ->withErrors($validation)
          ->with('message', 'There were validation errors.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
{
    //
}

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
{
    $user = User::find($id);
    if (is_null($user))
    {
        return Redirect::route('users.index');
    }
    return View::make('users.edit', compact('user'));
}
}

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)

    {
        $input = Input::all();
        $validation = Validator::make($input, User::$rules);
        if ($validation->passes())
        {
            $user = User::find($id);
            $user->update($input);
            return Redirect::route('users.show', $id);
        }
        return Redirect::route('users.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
public function destroy($id)
{
    User::find($id)->delete();
    return Redirect::route('users.index');
}