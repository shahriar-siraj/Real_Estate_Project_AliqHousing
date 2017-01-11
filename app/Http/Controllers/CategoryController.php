<?php 

namespace App\Http\Controllers;

use App\Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (!Session::has("uid")) {
            return Redirect::to("/admin/login");
        }
        $categories = \App\Category::all();
		return view("admin.categories.index", ["page"=>"categories", "uid"=>Session::get("uid"), "categories"=>$categories]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if (!Session::has("uid")) {
            return Redirect::to("/admin/login");
        }
        
		return view("admin.categories.create", ["page"=>"categories", "uid"=>Session::get("uid")]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
	        'categoryName' => 'required',
	    ]);
		
		Category::create($request->all());
        return redirect()->route('admin.categories.index')->with('message','Category has been added successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Category::find($id);
		return view("admin.categories.edit", ["page"=>"categories", "uid"=>Session::get("uid"), "category"=>$category]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, [
	        'categoryName' => 'required',
	    ]);
	    
		$category = Category::find($id);
		$category->update($request->all());

        return redirect()->route('admin.categories.index')->with('message','Category has been updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $category = Category::find($id);
		$category->delete();

        return redirect()->route('admin.categories.index')->with('message','Category has been deleted successfully!');
	}

}
