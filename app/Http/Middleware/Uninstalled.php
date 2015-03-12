<?php namespace App\Http\Middleware;

use Closure, App;

use App\Models\User;

class Uninstalled {

	public function handle($request, Closure $next) {

        $user = User::first();

        if ($user === null) {
            return $next($request);
        }

        App::abort(404);
	}

}
