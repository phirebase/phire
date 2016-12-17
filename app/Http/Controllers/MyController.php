<?php

namespace App\Http\Controllers;

/**
 * Class MyController.
 *
 * @package App\Http\Controllers
 */
class MyController {

    /**
     * Index method for example controller.
     *
     * @return mixed
     */
    public function index() {

        return response()->withView('index');

    }

}