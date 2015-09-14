<?php
namespace Crosscraft\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller {
    public function welcome() {
        return view('welcome');
    }
}