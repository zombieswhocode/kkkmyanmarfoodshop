<?php

class CustomerController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagename="Customer List";
		return View::make('customer.customerlist')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pagename="Customer Insert";
		return View::make('customer.customercreate')->with( array( 'pagename' => $pagename ) );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Redirect::to( 'customer/show' );
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
		$pagename="Customer Edit";
		$title="KKK payami";
		$address="parami";
		$description="description bla bla bla";
		return View::make('customer.customeredit')->with( array( 'pagename' => $pagename, 'title' => $title, 'address' => $address, 'description' => $description ) );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		return Redirect::to( 'customer/show' );
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Redirect::to( 'customer/show' );
	}


}
