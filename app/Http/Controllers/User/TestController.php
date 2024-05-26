<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function preTest(Test $test)
    {
        return $test;
    }

    public function savePreTest(Request $request, Test $test)
    {
        return $test;
    }

    public function postTest(Test $test)
    {
        return $test;
    }

    public function savePostTest(Request $request, Test $test)
    {
        return $test;
    }

    public function review(Test $test)
    {
        return $test;
    }

    public function postReview(Request $request, Test $test)
    {
        return $test;
    }
}
