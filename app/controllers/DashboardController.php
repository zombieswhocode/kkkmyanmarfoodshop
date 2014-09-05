<?php

class DashboardController extends \BaseController {

	/**
	 * Display a couple of widgets.
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('dashboard');
	}







}
