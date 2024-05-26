<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('welcome');
    }

    public function categoryId($id)
    {
        return;
    }

    public function classId(ClassRoom $classRoom)
    {
        return $classRoom;
    }

    public function sessionId(Session $session)
    {
        return $session;
    }
}
