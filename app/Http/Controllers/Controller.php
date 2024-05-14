<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Setting;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $setting;
    public function __construct()
    {
        $this->setting = Setting::where('status', 'Active')->first();
        View::share('setting', $this->setting);
    }
}
