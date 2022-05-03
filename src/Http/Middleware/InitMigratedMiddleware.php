<?php

namespace Eutranet\Init\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Flash;
use Schema;

class InitMigratedMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next): mixed
	{
		return $next($request);
	}
}