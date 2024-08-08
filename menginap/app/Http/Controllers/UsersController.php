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
            $validateData = $request -> validate([
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'noHp' => 'required|string|min:8',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            User::create($validateData);

            //pake debugger untuk cek data masuk atau nggk
            // $user_data = User::create($validateData);
            // dd($user_data);

            return redirect('/login')-> with('message', 'new user has been created');
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
        return view('user-page', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the user record
        $user = User::findOrFail($id);

        // Validate the request
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            // Generate a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public/images directory
            $image->move(public_path('images'), $imageName);
            // Save the image path to the user's record
            $user->image = $imageName;
            // Save the user record with the new image path
            $user->save();
        }

        // Redirect back with a success message
        return redirect()->route('user.edit', ['id' => $user->id])->with('success', 'Profile image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
