<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator ;

class LeaveConrtoller extends Controller
{
    //
    public function add (Request $req)
    {
        $users = User::all();
        //$solde=$req->sodel_conge;
        //$date=$req->start_date;
        $solde = Carbon::parse($req->solde);
        $date = Carbon::parse($req->date);
       // $date=Carbon::createFromFormat(config('app. date_format'), $date)->format('Y-m-d');
        //$max_end_date=Carbon::createFromFormat('d.m.y',$date);
        //$max_end_date=$max_end_date->addDays($solde);
        $max_end_date = Carbon::parse($date)->addDays($solde);

        $rules=[

            'start_date' => 'required|',
            'end_date' => 'before_or_equal:'.$max_end_date
        ];
        $validator=Validator::make($req->all(),$rules);

        if($validator ->fails()){
           return $validator->errors();
        }

           // $solde=auth()->solde_conge;
             $leave=new Leave();
             $leave->user_id=$req->user_id;
             $leave->start_date=$req->start_date;
             $leave->end_date=$req->end_date;
             $leave->motive=$req->motive;
             $leave->save();
            return redirect('/home') ;
     }

     public function addleave ()
     {
       $users = User::all();
       return view ('leave.add_leave',compact('users'));
     }

     public function addleave1(Request $req){
      $users = User::all();
      $solde=$req->sodel_conge;
      $sdate=$req->start_date;
      $edate=$req->end_date;
      $datetime1 = strtotime($sdate); // convert to timestamps
      $datetime2 = strtotime($edate); // convert to timestamps
      $days = (int)(($datetime2 - $datetime1)/86400);


     }
}
