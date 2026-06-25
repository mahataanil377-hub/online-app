<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Job;
use App\Models\Category;
use App\Models\company;
use App\Models\Application;
class Usercontroller extends Controller
{
    // Dashboard (user count)
    public function dashboard()
    {
        $users = User::count();
        $jobs = Job::count();
        $companies = Company::count();
        $application = Application::count();
        $categories = Category::count();
        return view('dashboard', compact('users', 'jobs','companies','application','categories'));
    }

    // Show all users
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    // Show create form
    public function create()
    {
        return view('user.create');
    }

    // Store user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_no' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('users', 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'password' => Hash::make('123456'), // default password
            'image' => $imageName,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }

    // Edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone_no' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $imageName = $user->image;

        if ($request->hasFile('image')) {
            // old image delete=
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $imageName = $request->file('image')->store('users', 'public');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'image' => $imageName,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated ');
    }

    // Delete user
    public function destroy($id)
    { 
        $user = User::findOrFail($id);

        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
    
    public function show($id)
{
$user = User::findOrFail($id);
return view('user.show', compact('user'));

}

}