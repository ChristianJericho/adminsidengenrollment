<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['Subjects'] = Subjects::all();

        return view('manage_subject',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_subject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->input());
        $ObjSubject = new Subjects();

        $ObjSubject->subject_code = $request->input('subject_code');
        $ObjSubject->subject_name = $request->input('subject_name');
        $ObjSubject->subject_desc = $request->input('subject_desc');            
        $ObjSubject->section_id = $request->input('section_id');
        $ObjSubject->grade_level = $request->input('grade_level');
        $ObjSubject->room = $request->input('room');
        $ObjSubject->day = $request->input('day');
        $ObjSubject->start_time = $request->input('start_time');
        $ObjSubject->end_time = $request->input('end_time');
        $ObjSubject->prereq = $request->input('prereq');
        $ObjSubject->coreq = $request->input('coreq');

        $ObjSubject->save();

        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminatk4e\Http\Response
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
        $data['Subjects'] = Subjects::find($id);
        return view('add_subject',$data);
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
        $ObjSubject = Subjects::find($id);

        $ObjSubject->subject_code = $request->input('subject_code');
        $ObjSubject->subject_name = $request->input('subject_name');
        $ObjSubject->subject_desc = $request->input('subject_desc');            
        $ObjSubject->section_id = $request->input('section_id');
        $ObjSubject->grade_level = $request->input('grade_level');
        $ObjSubject->room = $request->input('room');
        $ObjSubject->day = $request->input('day');
        $ObjSubject->start_time = $request->input('start_time');
        $ObjSubject->end_time = $request->input('end_time');
        $ObjSubject->prereq = $request->input('prereq');
        $ObjSubject->coreq = $request->input('coreq');  
        
        $ObjSubject->save();

        return redirect()->route('subjects.index');
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
        /*dd($id);*/
        $subject = Subjects::destroy($id);
        
        /*$subject->delete();*/
        return redirect()->route('subjects.index');
    }
}
