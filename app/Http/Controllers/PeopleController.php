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

    public function store(StoreUpdatePeople $request)
    {
        $people = People::create($request->all());

        // return view('admin.people.register');

        return redirect()->route('dashboard');
    }
}
