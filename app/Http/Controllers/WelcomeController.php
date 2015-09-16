<?php
namespace Crosscraft\Http\Controllers;

class WelcomeController extends Controller {
    public function welcome() {

        $isHuman = session('isHuman', FALSE);

        return view('welcome', [
            'isHuman' => $isHuman,
        ]);
    }
}