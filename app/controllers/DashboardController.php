<?php

class DashboardController extends \BaseController {

	/**
	 * Display a couple of widgets.
	 *
	 * @return Response
	 */
	public function home()
	{
		$pagename="Admin Dashboard";
		return View::make('dashboard')->with( array( 'pagename' => $pagename ) );
	}







}
