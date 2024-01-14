<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //get data users
        $users = DB::table('customer')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.customer.index', compact('customer'));
    }

    public function create()
    {
        return view('pages.customer.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        \App\Models\User::create($data);
        return redirect()->route('customer.index')->with('success', 'Customer successfully created');
    }

    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('pages.customer.edit', compact('customer'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('customer.index')->with('success', 'Customer successfully updated');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('customer.index')->with('success', 'Customer successfully deleted');
    }
}
