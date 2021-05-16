<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\clasTables;
use App\Models\MarksTables;
use App\Models\Studentadds;

class StudentController extends Controller
{
    public function NameDetails()
    {
    	
    	return view("StdNamefile");
    }
    public function AddstudentData(Request $req)
    {
    	$data= new Studentadds();
    	$data->name=$req->input('name');
    	$data->F_name=$req->input('F_name');
    	$data->DOB=$req->input('dob');

    	$image=$req->file('file');
    	$imageName=time().'-'.$image->extension();
    	$image->move(public_path('images'),$imageName);

    	$data->Image=$imageName;
    	$data->save();
    	return back()->with('Student_data','Student Record added Successfully!');
    }
    public function Studclss()
    {
    	return view("StudentClas");
    }
    public function AddCls(Request $req)
    {
    	$clsdata =new clasTables();

    	$clsdata->class= $req->input('clas');
    	$clsdata->User_ID= $req->input('U_ID');
    	$clsdata->Roll_no= $req->input('rollno');
    	$clsdata->Section= $req->input('section');
    	$fls=$clsdata->save();
    	$req->session()->flash('flsa',$fls);
    	return back()->with('Student_clas','Class data Submited!');
    }

    public function StudMark()
    {
    	return view('StudentAddMarks');
    }
    public function AddMarks(Request $req)
    {
    	$stdmarks=new MarksTables();
    	$stdmarks->Math_Marks = $req->input('math');
    	$stdmarks->Hindi_Marks = $req->input('hindi');
    	$stdmarks->Engli_marks = $req->input('english');
    	$flas=$stdmarks->save();
    	$req->session()->flash('fls',$flas);
    	return back()->with('student_marks','Student marks submited');
    }

    public function FetchListData()
    {
        $fetchData=Studentadds::all();
        return view('FeachAlldata',compact('fetchData'));
    }

    public function EditData($id)
    {
            $Adname=Studentadds::find($id);
            $Addcls=clasTables::find($id);
            $Admrk=MarksTables::find($id);
            return view('Editstudents',compact('Adname','Addcls','Admrk'));
    }

    public function UpdateData(Request $req)
    {
        $data= new Studentadds();

        $data->name=$req->input('name');
        $data->F_name=$req->input('F_name');
        $data->DOB=$req->input('dob');

        $image=$req->file('file');
        $imageName=time().'-'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $data->Image=$imageName;
        $fls1=$data->save();

        $clsdata =new clasTables();

        $clsdata->class= $req->input('clas');
        $clsdata->User_ID= $req->input('U_ID');
        $clsdata->Roll_no= $req->input('rollno');
        $clsdata->Section= $req->input('section');
        $fls2=$clsdata->save();

        $stdmarks=new MarksTables();
        $stdmarks->Math_Marks = $req->input('math');
        $stdmarks->Hindi_Marks = $req->input('hindi');
        $stdmarks->Engli_marks = $req->input('english');
        $flas3=$stdmarks->save();
        return back()->with('Student_updat','Student data updated');

    }
    public function Showalldetails()
    {
       // $reqs=DB::table('MarksTables')
       // ->join('clasTables','MarksTables.id',"=",'clasTables.User_ID')
       // ->get();
       // return $reqs;
            // $Adname=Studentadds::all();
            $Addcls=clasTables::all();
            $Admrk=MarksTables::all();
        return view('Showalldetail',compact('Admrk','Addcls'));
    }

}
