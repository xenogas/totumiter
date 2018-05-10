<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expertise;
use Illuminate\Database\QueryException;

class ExpertiseController extends Controller
{
	function index() {
		$skills = Expertise::get();
		// dd($skills);
		return view('expertise.index', compact('skills'));
	}

	function create() {
		return view('expertise.create');
	}

	function store() {
		$this->validate(request(), [
			'category' => 'required',
			'skill' => 'required'
		]);
		
		try{
			Expertise::create( request(['category', 'skill']) );
		}catch(QueryException $e) {
			$errorCode = $e->errorInfo[1];
			if( $errorCode == 1062 ) { // Duplicate Entry
				$errors->push('An entry already exists for<br>' 
					. 'Category: ' . request('category') . '<br>'
					. 'Skill: ' . request('skill'));
				return 'Duplicate Entry';
			}
		}

		return redirect('/about/expertise');
	}
}
