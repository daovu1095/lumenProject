<?php

namespace App\Http\Middleware;

//use App\Users;
use Closure;

class FindIdMiddleware
{
    public function handle($request, Closure $next)
    {
//        dd(11111);
        dd($request->input());
//        var_dump($request->input('id'));die;
        $id = $request->route()[2]['id'];
        $user = Users::find($id);


//        dd($request->route()[2]['id']);die;
        var_dump($request->input());die;

        return $next($request);
    }
}