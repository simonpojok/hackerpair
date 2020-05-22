<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id) {
        return view('events.show') -> with('id', $id);
    }

    public function category($category, $subcategory = 'all') {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
