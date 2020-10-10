<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.notes', ['notes' => Notes::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Display random a listing of the resource.
     *
     * @return Response
     */
    public function random()
    {
        $notes = Notes::all();
        $array = iterator_to_array($notes);
        shuffle($array);

        return view('index', ['notes' => $array]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $note = Notes::firstOrCreate([
            'body' => $request['body'],
            'visible' => true,
            'likes' => 0
        ]);

        return redirect('admin/notes');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        Notes::where('id', $request['noteId'])->update(['body' => $request['body']]);
        return redirect()->back()->with('update', 'Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Notes::destroy($id);
        return redirect('admin/notes');
    }
}
