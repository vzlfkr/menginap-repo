<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [
            'users' => User::all(),
        ];
        return view('user.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validateData = $request -> validate([
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8'
            ]);
            User::create($validateData);

            //pake debugger untuk cek data masuk atau nggk
            // $user_data = User::create($validateData);
            // dd($user_data);

            return redirect('/register')-> with('message', 'new user has been created');
        } catch(ValidationException $e){
            return back()->withErrors($e->getMessage())->withInput();
        } catch(Exception $e){
            return back()-> with('error', 'failed to create new user')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $viewData = [
            'user' => User::findOrFail($id),
        ];
        return view('user.edit', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
