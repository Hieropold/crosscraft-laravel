<?php
namespace Crosscraft\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Crosscraft\Http\Controllers\Controller;

class BattleController extends Controller {
    public function battle() {

        $word = DB::select('select * from words limit 10');

        // Select random word

        // Select 5 random clues, including the correct one

        return view('battle');
    }
}