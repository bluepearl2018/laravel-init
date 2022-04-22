<?php

namespace Eutranet\Init\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Flash;

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
		if (\Schema::hasTable('install_statuses')) {
			if (DB::table('install_statuses')) {
				return $next($request);
			}
			Flash::error('Database not migrated');
			return $next($request);
		}
		Flash::error('Installation not initialized');
		return $next($request);
	}
}