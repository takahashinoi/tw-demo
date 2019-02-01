<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\post;
use App\User;

class UsersController extends Controller
{
public function create()
	{
     	return view('users.create');
 	}

public function store(Request $request)
{
//     $params = $request->validate([
//         'name' => 'required|max:50',
//         'email' => 'required|max:2000',
//     ]);

//     User::create($params);
	// データを登録する(create)
        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->save();

        return redirect("/");
}
 public function index()
 {
 	$userDate = User::all();

 	return view('users.index',['userDate' => $userDate]);
 }
 public function edit(Request $request,$id)
 {

 		$user = User::findOrFail($id);

 		return view('users.edit',['user' => $user]);
 }
 public function update(Request $request)
 	{
 		 $updateData =[
 		 		'name' => $request->name,
 		 		'email' => $request->email,
 				
 		 ];
 
 		User::where('id', $request->id)
 			->update($updateData);

 			return redirect("/");
	}
 // public function delete(Request $request,$id)
 // 	{  
 // 		User::destroy($id);

 // 		return redirect("/");

 // 	}
    public function delete(Request $request)
    {

    	User::destroy($request->id);
    	return redirect("/");
    	// $deleteDate =[


    	// ];

    }

}


 
        