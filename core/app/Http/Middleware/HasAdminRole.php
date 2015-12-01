<?php

namespace App\Http\Middleware;

use Closure;

class HasAdminRole
{
  /**
   * Run the request filter.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if (! $request->user()->admin == "1") {
      return redirect('/');
    }

    return $next($request);
  }
}
