<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{


	public function index(){

		$links = Link::all();
    	return view('links',compact('links'));
    }

    public function showLinksForm(  ) {
	 return view('showForm');
    }

    public function handeleLinksForm(Request $request){
	    $validData = $request->validate([
		    'title' => 'required|min:8',
		    'description' => 'required|min:10',
		    'url' => 'required|url'
	    ]);

//	    dd($validData);
	    DB::table('links')->insert(
		    ['title' =>  $validData['title'], 'url' =>  $validData['url'], 'description' => $validData['description']]
	    );
	    return redirect()->route('home');

    }

}
