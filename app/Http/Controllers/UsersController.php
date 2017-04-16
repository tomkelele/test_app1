<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserFormRequest;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('id', 'DESC')->paginate(4);
    	return view('admin.user.index',compact('users'));
    }

    public function getEdit($id)
    {
    	$user = User::findOrFail($id);
    	return view('admin.user.edit', compact('user'));
    }

    public function postEdit(UserFormRequest $request, $id)
    {
    	$user = User::findOrFail($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->role = $request->role;
    	$user->save();
    	return redirect(url('admin/user'))->with('message-edited', 'Edit user success');
    }

    public function delete($id)
    {
    	$user = User::findOrFail($id);
    	$user->delete();
    	return redirect(url('/admin/user'))->with('message-deleted', 'Delete success');
    }
}
