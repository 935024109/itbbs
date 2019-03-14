<?php

namespace App\Http\Middleware;

use Closure;
use DB;


class ConfigMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 查看网站配置表 并且判断是否维护状态
        $config = DB::table('configs')->select('on_off')->get();
        $on = $config[0]->on_off;
        if($on == 0){
            return redirect('home/config/on');
        }
        return $next($request);
    }
}
