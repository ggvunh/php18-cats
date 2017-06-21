<?php

namespace Furbook\Http\Controllers;

use Furbook\Cat;
use Furbook\Breed;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
      $cats = Cat::all();
      return view('cats.index')->with('cats', $cats);
    }

    public function showByBeed($name)
    {
      $breed = Breed::where('name', $name)->first();
      $cats = $breed->cats;
      return view('cats.index')->with(['breed' => $breed, 'cats' => $cats]);
    }

    public function create()
    {
      return view('cats.create');
    }

    public function store()
    {
      $input = Input::all();
      $cat = Cat::create($input);
      return redirect('/cats/' . $cat->id)->withSuccess('Cat has been Create');
    }

    public function edit(Cat $cat)
    {
      return view('cats.edit')->with('cat', $cat);
    }

    public function update(Cat $cat)
    {
      $input = Input::all();
      $cat->update($input);
      return redirect('/cats/' . $cat->id)
        ->withSuccess('Cat has been updated.');
    }

    public function destroy(Cat $cat)
    {
      $cat->delete();
      return redirect('/cats')->withSuccess('Cat has been deleted.');
    }

    public function show(Cat $cat)
    {
      return view('cats.show')->with('cat', $cat);
    }
}
