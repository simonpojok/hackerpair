<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id) {
        dd($id);
    }

    public function category($category, $subcategory = 'all') {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
