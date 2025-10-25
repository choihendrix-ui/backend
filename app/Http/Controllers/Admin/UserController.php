<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Ensure only authenticated admins can access – route middleware will also protect but this is extra guard
    public function __construct()
    {
        $this->middleware(['auth','is_admin']);
    }

    // GET /admin/users
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(15);
        return view('admin.users.index', compact('users'));
    }

    // GET /admin/users/create
    public function create()
    {
        return view('admin.users.create');
    }

    // POST /admin/users
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'role' => ['required','string', Rule::in(['admin','user'])],
            'password' => 'required|string|min:6|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('admin.users.index')->with('success','User created.');
    }

    // GET /admin/users/{id}/edit
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // PUT /admin/users/{id}
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required','email','max:255', Rule::unique('users','email')->ignore($user->id)],
            'role' => ['required','string', Rule::in(['admin','user'])],
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success','User updated.');
    }

    // DELETE /admin/users/{id}
    public function destroy(User $user)
    {
        // prevent deleting yourself
        if (auth()->id() === $user->id) {
            return back()->with('error','You cannot delete yourself.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success','User deleted.');
    }
}

