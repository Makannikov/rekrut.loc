<?php

namespace Rekrut\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
	public function show($id){
		echo __METHOD__ . ' - ' . $id;
	}
}
