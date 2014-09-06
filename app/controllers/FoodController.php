<?php

class FoodController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagename="Food List";
		return View::make('food.foodlist')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pagename="Food Insert";
		return View::make('food.foodcreate')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Redirect::to( 'food/show' );
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
		$pagename="Food Edit";
		$title="KKK payami";
		$address="parami";
		$description="description bla bla bla";
		return View::make('food.foodedit')->with( array( 'pagename' => $pagename, 'title' => $title, 'address' => $address, 'description' => $description ) );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		return Redirect::to( 'food/show' );
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Redirect::to( 'food/show' );
	}


}
