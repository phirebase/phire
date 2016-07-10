<?php

namespace App\Http\Controllers;

class MyController {

    public function index() {

        return response("Hello world!")->asJson();

    }

}