<?php

namespace App\Http\Controllers;

class MyController {

    /**
     * @return mixed
     */
    public function index() {

        return response()->withView('index')
            ->with('greeting', 'Greetings');

    }

}