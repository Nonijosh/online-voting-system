<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view ('pages.welcome');
	} 
 
	public function getAbout()
		
	{
		$first = 'Noni';
		$last = 'Asiegbu';

		$full = $first." ".$last;
		$email = 'joshasiegbu@gmail.com';
		$data = [];
		$data['full'] =$full;
		$data['email'] = $email;

		/* Check how to pass multiple data in an array to a view using compact
		return view('pages.about', compact('$data'));
		*/
		return view('pages.about')->withData($data);
	}

	public function getContact()
	{ 
		return view('pages.Contact');
	}

}