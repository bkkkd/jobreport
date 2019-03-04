<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\JobReports;

class JobReportController extends Controller
{
    //
    public function showForm(Request $request){
        return view('jobreport.form');
    }
    public function showInfo(Request $request){
        $id = $request->route('id');
        if($id<=0){
            $id = $request->session()->get('jobreports.id');
        }
        if($id<=0){
            abort(404);
        }
        $jobreports = JobReports::find($id);
        if(!$jobreports){
            abort(404);
        }
        return view('jobreport.info',['bean'=>$jobreports]);
    }
    public function showList(Request $request){
        $jobReportList = JobReports::paginate(15);
        return view('jobreport.list', ['jobReportList'=>$jobReportList]);
    }
    public function post(Request $request){
        $request->validate([
            'company_name'=>'required|string|max:100',
            'position'=>'required|string',
            'price'=>'required|string',
            'content'=>'required|string',
        ]);
        $jobreports = JobReports::create([
            'company_name'=>$request->get('company_name'),
            'position'=>$request->get('position'),
            'price'=>$request->get('price'),
            'content'=>$request->get('content'),
            'modify_content'=>'',
            'ip'=>$request->ip(),
            'useragent'=>$request->userAgent(),
            'status'=>0,
        ]);
        $request->session()->put('jobreports.id', $jobreports->id);
        return redirect(route("jobreport.info"));


    }
}
