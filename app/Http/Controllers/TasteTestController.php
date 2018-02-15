<?php

namespace App\Http\Controllers;

use App\TasteTest;
use Illuminate\Http\Request;

class TasteTestController extends Controller
{
    public static function getTasteTests()
    {
        $taste_tests = TasteTest::all();
        return $taste_tests;
    }

    public function createTasteTest(Request $request)
    {
        $tasteTest = new TasteTest();
        $tasteTest->name = $request->name;
        $tasteTest->food_concept = $request->food_concept;
        $tasteTest->products = $request->products;
        $tasteTest->business_account = $request->business_account;
        $tasteTest->email = $request->email;
        $tasteTest->mobile = $request->mobile;
        $tasteTest->found_via = $request->found_via;

        if ($tasteTest->save()) {
            session()->flash('response_success', true);
            session()->flash('response', 'Your request for scheduling of taste testing has been sent.');
        } else {
            session()->flash('response_success', false);
            session()->flash('response', 'Failed to send request for schedule of taste testing. Please try again.');
        }

        return back();
    }
}
