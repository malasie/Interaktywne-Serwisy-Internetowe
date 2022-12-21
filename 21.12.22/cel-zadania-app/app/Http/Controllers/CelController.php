<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cel;

class CelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cele = Cel::all();

        return view('cel.index')->with('cele', $cele);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cel.create');
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
              'nazwa' => 'required'
            ]);
        
            // Stworzenie celu
            $cel = new Cel;
            $cel->nazwa = $request->input('nazwa');
            $cel->tresc = $request->input('tresc');
            $cel->termin = $request->input('termin');
        
            $cel->save();
        
            return redirect('/')->with('success', 'Cel dodany!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        $cel = Cel::find($id);
        return view('cel.show')->with('cel',$cel);
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
