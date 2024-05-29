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
        return view('category');
    }

    public function classId($classRoom)
    {
        return view('class');
    }

    public function course()
    {
        return view('course');
    }

    public function myCourse()
    {
        return view('my-course');
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
