<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
   function form(){
		return view("create");
	}
	function index(){
		$tours=DB::table("tours")->get();
		return view("dashboard",["tours"=>$tours]);
	}
	
	function store(Request $request){
		$name=  $request->input("name");
		$filePath =$request->file('img')->store("public");
		$typetour= $request->input("typetour");
		$schelude= $request->input("schelude");
		$depart= $request->input("depart");
		$numberPeople= $request->input("numberPeople");
		$price= $request->input("price");
		DB::table('tours')->insert(
			["name" => $name,
			"img" => $filePath, 
			"name" => $name,
			"typetour" =>$typetour, 
			"schelude" => $schelude,
			"depart" => $depart,
		    "numberPeople" => $numberPeople,
		    "price" => $price]
		);
		return redirect('dashboard');
	}
}
