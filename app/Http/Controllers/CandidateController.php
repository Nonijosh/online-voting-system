<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Http\Requests;
use App\candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|string|max:255',
                'age'  => 'required|digits:2',
                'state'  => 'required|string',
                'party'  => 'required|string',
                'sex'  => 'required|string',
                'biography'  => 'required'
            ]);
                //stor in the db
                $candidate = new Candidate;

                $candidate->name = $request->name;
                $candidate->age = $request->age;
                $candidate->state = $request->state;
                $candidate->party = $request->party;
                $candidate->sex = $request->sex;
                $candidate->biography = $request->biography;

                $candidate->save();
                return redirect()->route('candidates.show', $candidate->id);         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
