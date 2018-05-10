<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpertiseSkill;

class ExpertiseSkillController extends Controller
{
    function store() {
        // dd(request());
        $this->validate( request(), [
            'name' => 'required',
            'category_id' => 'required'
        ] );

        ExpertiseSkill::create( request(['name', 'category_id']) );

        return redirect('/about');
    }
}
