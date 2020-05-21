<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	pubic function test()
	{
		$data['title'] = 'TEST';
	}

	//--------------------------------------------------------------------

}
