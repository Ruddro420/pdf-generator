<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Upload;
use PDF;
class UploadData extends Controller
{
         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $data = Upload::where('user_id',Auth::user()->id)->get();;
        return view('pages.view',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Upload;
        $data->user_id = Auth::user()->id;
        $data->course_tittle = $request->course_tittle;
        $data->course_code = $request->course_code;
        $data->report_item = $request->report_item;
        $data->topic_name = $request->topic_name;
        $data->std_name = $request->std_name;
        $data->id_no = $request->id_no;
        $data->session = $request->session;
        $data->std_dept = $request->std_dept;
        $data->teacher_name = $request->teacher_name;
        $data->designation = $request->designation;
        $data->teacher_dept = $request->teacher_dept;
        $data->sub_time = $request->sub_time;
        $data->status = '1';
        $data->save();
        return redirect()->route('pages.store.view');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {

        $data = Upload::find($id);

        $pdf = PDF::loadView('pages.pdf-details', compact('data'));

        return $pdf->stream('document.pdf');
       /*  return $pdf->download('invoice.pdf');  */


    }


        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Upload::find($id);
        return view('pages.edit',compact('data'));
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
        $data = Upload::find($id);
                 //For Image
                 if($request->file('image')){
                    $file = $request->file('image');
                    $filename = date('Ymdhi').$file->getClientOriginalName();
                    $file->move(public_path('img/'),$filename);
                    $data['image'] = $filename;
                }
                $data->save();
                return redirect()->route('pages.store.view')->with('success',"Images Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Upload::find($id);
        $data->delete();
        return redirect()->route('pages.store.view')->with('success',"Deleted Successfully");
    }


}
