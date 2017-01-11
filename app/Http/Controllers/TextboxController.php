<?php namespace App\Http\Controllers;

use Redirect;
use \App\Textbox;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class TextboxController extends Controller {

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
        $textboxes = Textbox::all();
		return view("admin.textboxes.index", ["page"=>"textboxes", "uid"=>Session::get("uid"), "textboxes"=>$textboxes]);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = \App\Category::all();
		return view("admin.textboxes.create", ["page"=>"textboxes", "uid"=>Session::get("uid"), "categories"=>$categories]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
	        'textboxTitle' => 'required',
	        'textboxText' => 'required|min:10',
	    ]);

		Textbox::create($request->all());
        return redirect()->route('admin.textboxes.index')->with('message','Textbox has been added successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$textbox = Textbox::find($id);
		return view('admin.textboxes.show',["page"=>"textboxes", "uid"=>Session::get("uid"), "textbox"=>$textbox]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$c;
		$categories = \App\Category::all();
        foreach ($categories as $key => $value) {
            $c[$value->id] = $value->categoryName;
        }
		$textbox = Textbox::find($id);
		return view("admin.textboxes.edit", ["page"=>"textboxes", "uid"=>Session::get("uid"), "textbox"=>$textbox, "c"=>$c]);
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
	        'textboxTitle' => 'required',
	        'textboxText' => 'required|min:10',
	    ]);
	    
		$textbox = Textbox::find($id);
		$textbox->update($request->all());

        return redirect()->route('admin.textboxes.index')->with('message','Textbox has been updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$textbox = Textbox::find($id);
		$textbox->delete();

        return redirect()->route('admin.textboxes.index')->with('message','Textbox has been deleted successfully!');
	}

}
