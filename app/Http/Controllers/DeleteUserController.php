<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeleteUserController extends Controller
{
	public function contactlist(Request $request)
	{
		$list = User::orderby('id', 'desc')->get();
		return view('delete_multiple_user')->with('list', $list);
	}

	public function multipleusersdelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $user) 
		{
			User::where('name', $user)->delete();
		}
    $list = User::all();
    return view('delete_multiple_user')->with('list', $list);
	}
}






