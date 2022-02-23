<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Person;

class TestController
{
    public function show($name)
    {
//        $test = \DB::table('persons')->where('name', $name)->first();
        $test = Person::where('name', $name)->first();

        if (! $test) {
            abort(404);
        }


        return view('post', [
            'test' => $test
        ]);
    }
}
