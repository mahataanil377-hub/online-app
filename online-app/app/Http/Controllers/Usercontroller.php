<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Job;
use App\Models\Category;
use App\Models\company;
use App\Models\Application;
use App\Models\Notification;


class Usercontroller extends Controller
{
    // Dashboard (user count)
    public function dashboard()
    {
       $jobs = Job::count();
    $users = User::count();
    $categories = Category::count();
    $application = Application::count();
    $companies = Company::count();
    $notificationCount = Application::count();

    return view('dashboard', compact(
        'jobs',
        'users',
        'categories',
        'application',
        'companies',
        'notificationCount'
    ));
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
    public function store(UserRequest $request)
    {
        $validated = $request->validated();

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('users', 'public');
        }
        $validated['image'] = $imageName;

        User::create($validated);

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
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
$validated = $request->validated();

        $imageName = $user->image;

        if ($request->hasFile('image')) {
            // old image delete=
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $imageName = $request->file('image')->store('users', 'public');
        }
$validated['image'] = $imageName;
        $user->update($validated);

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


public function search(Request $request)
{
    $search = $request->search;

   $jobs = Job::where('title', 'LIKE', "%{$search}%")
           ->orWhere('location', 'LIKE', "%{$search}%")
           ->get();

    return view('search', compact('jobs', 'search'));
}

}