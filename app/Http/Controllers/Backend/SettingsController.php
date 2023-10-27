<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $adminSettings = DB::table("settings")->get()->sortBy('settings_must');

        return view('backend.settings.index', ['adminSettings' => $adminSettings]);
    }
}
