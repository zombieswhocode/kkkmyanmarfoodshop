<?php

class BranchController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagename="Branch List";
		return View::make('branch.branchlist')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pagename="Branch Insert";
		return View::make('branch.branchcreate')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Redirect::to( 'branch/show' );
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
		$pagename="Branch Edit";
		$title="KKK payami";
		$address="parami";
		$description="description bla bla bla";
		return View::make('branch.branchedit')->with( array( 'pagename' => $pagename, 'title' => $title, 'address' => $address, 'description' => $description ) );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		return Redirect::to( 'branch/show' );
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Redirect::to( 'branch/show' );
	}


}
