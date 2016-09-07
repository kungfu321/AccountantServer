<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Question;
use App\Http\requests\QuestionRequest;
use Redirect;
use App\Http\requests\ImportRequest;
use Excel;

class QuestionController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  //List question
  public function getList()
  {
  	$modul='getList';
  	$template='listTemplate';
    $data= Question::select('id','task','options','answer_No','answer_Yes','hint','order','type')->orderBy('id','DESC')->get()->toArray();
    return view('questions.list',compact('data','modul','template'));
  }
	//add question
  public function create()
  {
  	$modul='getAdd';
  	return view('questions.add',compact('modul'));
  }

  public function store(QuestionRequest $request)
  {
  	$questions= new Question;
  	$questions->task= $request->task;
    $questions->options=$request->options;
    $questions->answer_No=$request->answer_No;
    $questions->answer_Yes=$request->answer_Yes;
    $questions->hint=$request->hint;
    $questions->order=$request->order;
    $questions->type=$request->type;
    $questions->save();
    return redirect::route('admin.getList')->with(['flash_message'=>'Add Question Successfully!']);
  }

  //edit question
  public function edit($id)
  {
    $modul='getEdit';
  	$data = Question::find($id);
  	return view('questions.edit',compact('data','modul'));
  }

  public function update(QuestionRequest $request, $id)
  {
  	$questions= Question::find($id);
    $questions->task= $request->task;
    $questions->options=$request->options;
    $questions->answer_No=$request->answer_No;
    $questions->answer_Yes=$request->answer_Yes;
    $questions->hint=$request->hint;
    $questions->order=$request->order;
    $questions->type=$request->type;
    $questions->save();
    return redirect::route('admin.getList')->with(['flash_message'=>'Edit Question Successfully!']);
  }

  //Delete Item
  public function deleteItem($id)
  {
    Question::destroy($id);
    return redirect()->back()->with(['flash_message'=>'Delete Question Successfully!']);
  }

  //Import File Excel
  public function getImportExcel()
  {
    return view('excel.import');
  }
  public function postImportExcel(ImportRequest $request)
  {
    $nameFile=$request->file;
      Excel::load($nameFile,function($reader)
      {
        $reader->each(function($sheet)
        {
          foreach($sheet->toArray() as $row)
          {
            //create new array
            $row1= [];
            $row1['task']=$row['task'];
            $row1['options']=$row['options'];
            $row1['answer_No']=$row['answerno'];
            $row1['answer_Yes']=$row['answeryes'];
            $row1['hint']=$row['hint'];
            $row1['order']=$row['order'];
            $row1['type']=$row['type'];
            //
            Question::firstOrCreate($row1);
          }
        });
      });
      return redirect()->route('admin.getList')->with(['flash_message'=>'Import Question Successfully!']);
  }

  //Export File Excel
  public function exportExcel()
  {
    //check count record
    $num=Question::count();
    if($num > 0)
    {
      $export=Question::select('task','options','answer_No','answer_Yes','hint','order','type')->get();
      //file name
      $userDate='Questions_'.gmdate("Y/m/d H:i:s",time()+7*3600);
      //
      Excel::create($userDate,function($excel) use($export)
      {
        $excel->sheet('sheet 1', function($sheet) use($export)
        {
            $sheet->fromArray($export);
        });
      })->export('xlsx');
    }
    else
    {
      return redirect()->route('admin.getList')->with(['flash_message_export'=>'No Data! Please Insert Data']);
    }
  }

  //Export File Excel By Checkbox
  public function exportExcelByCheckbox(Request $request)
  {
    if(count($request->get('checkbox')>0))
    {
      //key => id
      $arr=$request->get('checkbox');
      // use aray_map get array ids
      $arrIds = array_map(function($value, $key) { return $key; }, $arr, array_keys($arr));
      //
      $list = Question::select('task','options','answer_No','answer_Yes','hint','order','type')->whereIn('id',$arrIds)->get()->toArray();
      $userDate='Questions_'.gmdate("Y/m/d H:i:s",time()+7*3600);
      //
      Excel::create($userDate,function($excel) use($list)
      {
        $excel->sheet('sheet 1', function($sheet) use($list)
        {
            $sheet->fromArray($list);
        });

      })->export('xlsx');
    }
  }
  //delete Questions By Checkbox
  public function postDellsCheckbox(Request $request)
  {
    if(count($request->get('checkbox')>0))
      {
        foreach($request->get('checkbox') as $key => $val)
        {
          //key => id
          Question::destroy($key);
        }
      }
      return redirect()->back()->with(['flash_message'=>'Delete Question Successfully!']);
  }

}
