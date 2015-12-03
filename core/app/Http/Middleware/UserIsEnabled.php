<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class UserIsEnabled
{
  /**
   * The Guard implementation.
   *
   * @var Guard
   */
  protected $guard;

  /**
   * Create a new filter instance.
   *
   * @param  Guard  $auth
   * @return void
   */
  public function __construct(Guard $auth)
  {
    $this->guard = $auth;
  }

  /**
   * Run the request filter.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    // if the users status is 0, redirect home
    if (! $this->guard->user()->status == "1") {
      $this->guard->logout();
      return redirect('/splash');
    }

    return $next($request);
  }
}
