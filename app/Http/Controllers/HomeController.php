<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->paginate(4);
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('welcome', compact('classes', 'categories'));
    }

    public function categoryId($id)
    {
        return view('category');
    }

    public function classId(ClassRoom $class, $session = null)
    {
        if ($session) {
            $sessionExists = Session::find($session);
            if ($sessionExists) {
                $class->load(['sessions' => function ($query) use ($session) {
                    $query->where('id', $session)
                        ->first();
                }]);
                $class->session = $class->sessions->first();
                unset($class->sessions);
            } else {
                return redirect()->back()->withErrors('Session ID tidak valid.');
            }
        }

        return view('class', compact('class'));
    }

    public function course()
    {
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('course', compact('classes'));
    }

    public function myCourse()
    {
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('my-course', compact('classes'));
    }

    public function testId($test)
    {
        $questions = [
            ['id' => 1, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 2, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
            ['id' => 3, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 4, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
            ['id' => 5, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 6, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
            ['id' => 7, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 8, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
            ['id' => 9, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 10, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
            ['id' => 11, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 12, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
            ['id' => 13, 'question' => 'Apa ibu kota Indonesia?', 'options' => ['a. Jakarta', 'b. Bandung', 'c. Surabaya', 'd. Medan']],
            ['id' => 14, 'question' => 'Apa ibu kota Jepang?', 'options' => ['a. Tokyo', 'b. Kyoto', 'c. Osaka', 'd. Nagoya']],
        ];

        return view('test', compact('questions'));
    }

    public function storeTestId(Request $request, $test)
    {
        return $request->all();
    }
}
