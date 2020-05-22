<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id) {
        return view('events.show')
            -> with('id', $id)
            -> with('name', 'Laravel Hacking and Coffee')
            ;
    }

    public function category($category, $subcategory = 'all') {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
