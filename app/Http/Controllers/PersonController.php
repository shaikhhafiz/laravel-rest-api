<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getList()
    {
        return Person::all();
    }

    public function getById($id)
    {
        return Person::find($id);
    }

    public function save(Request $request)
    {
        return Person::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);
        $person->update($request->all());

        return $person;
    }

    public function delete(Request $request, $id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return 204;
    }
}
