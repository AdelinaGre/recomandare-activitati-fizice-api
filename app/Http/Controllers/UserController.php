<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
       $users = User::all();
       return response()->json($users);

    }
    public function show( $id)
    {
      $user=User::find($id);
      if (!empty($user)) {
        return response()->json($user);
      }else {
        return response()->json(['error' => 'User not found'], 404);
      }
    }
    public function create(Request $request)
    {
        
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
            ]);
        
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // utilizăm Hash::make pentru a cripta parola
            ]);
        
            $user->save();
        
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user,
            ], 201);
    }
    
  public function update (Request $request, $id){
    if (User::where('id',$id)->exists()) {
        $user=User::find($id);
        $user->name=is_null($request->name)?$user->name:$request->name;
        $user->email=is_null($request->email)?$user->email:$request->email;
        $user->created_at=is_null($request->created_at)?$user->created_at:$request->created_at;
        $user->updated_at=is_null($request->updated_at)?$user->updated_at:$request->updated_at;
        $user->save();
        return response()->json([
            "message" => "User updated successfully",
        ],404);
    }else{
        return response()->json(['error' => 'User not found'], 404);
    }
  }

  public function destroy($id){
    if (User::where('id',$id)->exists()) {
        $user=User::find($id);
        $user->delete();
        return response()->json([
            "message" => "User deleted successfully",
        ],202);
    }else{
        return response()->json(['error' => 'User not found'], 404);
    }
  }
}
