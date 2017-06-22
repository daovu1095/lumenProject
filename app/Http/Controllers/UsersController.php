<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
class UsersController extends Controller
{

    public function index(){
        $allUser = Users::all();
        return response() -> json($allUser);
    }

    public function show($id){
        $user = Users::find($id);
        return response() -> json($user);
    }

    public function create(Request $request){
        $user = Users::create($request->all());
        return response()->json($user);
    }

    public function update(Request $request){
        $user = Users::find($request->id);
        $user->name = $request->name;
        $date = date_create($request->birdthday);
        $dd = $date->format('d/m/y');
        $user->birdthday = $dd;
        $user->description = $request->description;
        $user->save();
        return response()->json('success');
    }

    public function delete($id){
        $user = Users::find($id);
        $user->delete();
        return response()->json('deleted');
    }

    
}
