<?php

class LocationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagename="location List";
		return View::make('location.locationlist')->with( array( 'pagename' => $pagename ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pagename="Location Insert";
		return View::make('location.locationcreate')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Redirect::to( 'location/show' );
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
		$pagename="Location Edit";
		$title="payami";
		$chargesrate="10000";
		$description="description parami 10000 bla bla bla";
		return View::make('location.locationedit')->with( array( 'pagename' => $pagename, 'title' => $title, 'chargesrate' => $chargesrate, 'description' => $description ) );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		return Redirect::to( 'location/show' );
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Redirect::to( 'location/show' );
	}


}
