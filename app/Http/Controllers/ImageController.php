<?php namespace App\Http\Controllers;

use \App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class ImageController extends Controller {

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
        $images = Image::all();
		return view("admin.images.index", ["page"=>"images", "uid"=>Session::get("uid"), "images"=>$images]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$textboxes = \App\Textbox::all();
		return view("admin.images.create", ["page"=>"images", "uid"=>Session::get("uid"), "textboxes"=>$textboxes]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$imageUpload = $request->file('imageUpload');
		$imageName = $imageUpload->getClientOriginalName();
		$textboxID = $request->get('textboxID');
		
		$destinationPath = 'uploads/' . $textboxID;
    	$imageUpload->move($destinationPath, $imageUpload->getClientOriginalName());

    	$image = new Image;
		$image->imageName = $imageName;
		$image->imagePath = '/uploads/' . $textboxID . "/" . $imageName;
		$image->imageDescription = $request->get('imageDescription');
		$image->textboxID = $request->get('textboxID');

		$image->save();
        return redirect()->route('admin.images.index')->with('message','Image has been added successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$image = Image::find($id);
		// dd($image);
		return view('admin.images.show',["page"=>"images", "uid"=>Session::get("uid"), "image"=>$image]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tb;
		$textboxes = \App\Textbox::all();
        foreach ($textboxes as $key => $value) {
            $tb[$value->id] = $value->textboxTitle;
        }

		$image = Image::find($id);
		return view("admin.images.edit", ["page"=>"images", "uid"=>Session::get("uid"), "image"=>$image, "tb"=>$tb]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$image = Image::find($id);
		$image->update($request->all());

        return redirect()->route('admin.images.index')->with('message','Image has been updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$image = Image::find($id);
		$image->delete();

        return redirect()->route('admin.images.index')->with('message','Image has been deleted successfully!');
	}

}
