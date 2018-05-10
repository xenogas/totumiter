<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpertiseCategory;

class ExpertiseCategoryController extends Controller
{
    function store() {
        $this->validate(request(), [
            'name' => 'required'
        ]);
        
        ExpertiseCategory::create( [
            'name' => request('name'),
            'weight' => ExpertiseCategory::count()
        ] );

        return redirect('/about');
    }
}
