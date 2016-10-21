<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Record;
use App\Http\Requests\RecordRequest;
class RecordController extends Controller
{
    public function index(){
        $records=Record::all();
        return view('hab.table')->with(['records'=>$records]);
    }

    public function create(){
        return view('hab.create');
    }

    public function store(RecordRequest $request){
        $record=new Record($request->all());
        $record->save();
        return redirect('/');
    }

    public function edit($id){
        $record=Record::findOrFail($id);
        return view('hab.edit')->with(['record'=>$record]);
    }

    public function update(RecordRequest $request){
        $record=new Record($request->all());
        $record->update();
        return redirect('/');
    }

    public function destroy($id){
        Record::destroy($id);
        return redirect('/');
    }
}
