<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PoolOptions;

class PoolOptionsController extends Controller
{
	public function index()
	{
		return PoolOptions::all();
	}
 
	public function store()
	{
		$pooloptions = new PoolOptions(Request::all());
		$pooloptions->save();
		return $pooloptions;
	}
 
 
	public function show($id)
	{
		$pooloption= PoolOptions::find($id);
 		return $pooloption;
	}
 
	public function addVote($id)
	{
		$pooloption= PoolOptions::find($id);
		$pooloption->vote++;
		$pooloption->save();
 
		return $pooloption;
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pooloption= PoolOptions::find($id);
		$pooloption->delete();
	}
}
