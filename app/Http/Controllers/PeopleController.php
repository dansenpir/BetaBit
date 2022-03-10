<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePeople;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function list()
    {
        $people = People::latest()->paginate();

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

        return redirect()
        ->route('dashboard')
        ->with('success', 'Registro criado com sucesso!');
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

    public function edit($id) {
        

        if(!$people = People::find($id))
            return redirect()->route('dashboard');

        return view('admin.people.edit', compact('people'));
    }

    public function update(StoreUpdatePeople $request, $id) {
        

        if(!$people = People::find($id))
            return redirect()->route('dashboard');

        $people->update($request->all());

        return redirect()
        ->route('dashboard')
        ->with('success', 'Registro atualizado com sucesso!');
    }
}
