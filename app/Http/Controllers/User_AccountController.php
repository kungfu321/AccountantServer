<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User_Account;
use Excel;

class User_AccountController extends Controller
{
  public function __construct()
  {
  	$this->middleware('auth');
  }

  //View List User
  public function index()
  {
  	$modul = 'listUser';
  	//get all user
  	$data = User_Account::all();
  	return view('user_account.list',compact('data','modul'));
  }

  //Export User To Excel
  public function exportExcel()
  {
    //check count record
    $num=User_Account::count();
    if($num > 0)
    {
      $export=User_Account::select('username','email','phone','password','created_at','updated_at')->get();
      //file name
      $userDate='User_Account_'.gmdate("Y/m/d H:i:s",time()+7*3600);
      //
      Excel::create($userDate,function($excel) use($export){
        $excel->sheet('sheet 1', function($sheet) use($export)
        {
            $sheet->fromArray($export);
        });
      })->export('xlsx');
    }
    else
    {
      return redirect()->route('admin.listUser')->with(['flash_message_export'=>'No Data! Please Insert Data']);
    }
  }

  //export User To Excel By Checkbox
  public function exportUserByCheckbox(Request $request)
  {
    if(count($request->get('checkbox')>0))
      {
        //key => id
        $arr=$request->get('checkbox');
        // use aray_map get array ids
        $arrIds = array_map(function($value, $key) { return $key; }, $arr, array_keys($arr));
        $list = User_Account::select('username','email','phone','password','created_at','updated_at')->whereIn('id',$arrIds)->get()->toArray();
        $userDate='User_Account_'.gmdate("Y/m/d H:i:s",time()+7*3600);
        //
        Excel::create($userDate,function($excel) use($list)
        {
          $excel->sheet('sheet 1', function($sheet) use($list){
          $sheet->fromArray($list);
        });
        })->export('xlsx');
      }
  }
}
