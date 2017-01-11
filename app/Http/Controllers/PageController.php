<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use \App\Page;
use Illuminate\Http\Request;

class PageController extends Controller {

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
        $pages = Page::all();
		return view("admin.pages.index", ["page"=>"pages", "uid"=>Session::get("uid"), "pages"=>$pages]);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("admin.pages.create", ["page"=>"pages", "uid"=>Session::get("uid")]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
    	$page = new Page;
		$imageUpload = $request->file('image');
		$title = $request->get('title');

		if($imageUpload != null)
		{
			$imageName = $imageUpload->getClientOriginalName();
			$destinationPath = 'uploads/pages/' . $title;
    		$imageUpload->move($destinationPath, $imageUpload->getClientOriginalName());

    		$page->imagePath = '/uploads/pages/' . $title . "/" . $imageName;
		}
		else
		{
			$page->imagePath = "";
		}

    	$page->title = $title;
    	$page->description = $request->get('description');
    	$page->type = "Blog";

		$page->save();
        return redirect()->route('admin.pages.index')->with('message','Page has been added successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$page = Page::find($id);
		return view('admin.pages.show',["page"=>"pages", "uid"=>Session::get("uid"), "page"=>$page]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$page = Page::find($id);
		return view("admin.pages.edit", ["page"=>"pages", "uid"=>Session::get("uid"), "page"=>$page]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$page = Page::find($id);
		$imageUpload = $request->file('image');
		$title = $request->get('title');

		if($imageUpload != null)
		{
			$imageName = $imageUpload->getClientOriginalName();
			$destinationPath = 'uploads/pages/' . $title;
    		$imageUpload->move($destinationPath, $imageUpload->getClientOriginalName());

    		$page->imagePath = '/uploads/pages/' . $title . "/" . $imageName;
		}
		else
		{
			$page->imagePath = "";
		}

    	$page->title = $title;
    	$page->description = $request->get('description');
    	$page->type = "Blog";

		$page->update();
        return redirect()->route('admin.pages.index')->with('message','Page has been updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$page = Page::find($id);
		$page->delete();

        return redirect()->route('admin.pages.index')->with('message','Page has been deleted successfully!');
	}

}
