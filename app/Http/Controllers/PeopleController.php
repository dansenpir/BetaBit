<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePeople;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function list()
    {
        $people = People::get();

        return view('admin.dashboard', compact('people'));
    }

    public function register()
    {
        $people = People::get();

        return view('admin.people.register');
    }

    public function store(StoreUpdatePeople $request)
    {
        $people = People::create($request->all());

        return redirect()->route('dashboard');
    }

    public function destroy($id) 
    {
        if(!$people = People::find($id))
            return redirect()->route('dashboard');
        
        $people->delete();

        return redirect()
        ->route('dashboard')
        ->with('success', 'Registro excluído com sucesso!');
    }
}
