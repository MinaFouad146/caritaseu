<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class CheckUserGroup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $department = null)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('eu.loginshow');
        }

        $admin = Admin::find($user->id);

        $groupAllowed = match ($department) {
            'super' => $admin->group == 999,

            // ##################################################### Social Department
            'social' => ($admin->group >= 1 && $admin->group <= 10) || $admin->group == 999,

            // ##################################################### Medical Department
            'medical' => ($admin->group >= 20 && $admin->group <= 30) || $admin->group == 999,

            default => false,
        };

        if (!$groupAllowed) {
            return redirect('eu.loginshow'); // or any other appropriate action
        }

        return $next($request);
    }
}
