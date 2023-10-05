<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (!session()->has('email')) {
        return redirect('/');
    } else {
      $user_id = session()->get('id');
      $data=User::where('id',$user_id)->first();
      $team=Rate::where('user_id',$user_id)->get();
      $ratedTeamByUser = [];
      $i =  0;
      foreach ($team as $oneTeam) {
        $ratedTeamByUser[$i++] = $oneTeam['team_id'];  
      };

      // dd($ratedTeamByUser);


        return view('website.index',['data'=>$data,'teams'=>$ratedTeamByUser]);
    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user_id = session()->get('id');
      // $team_id = session()->get('team_id');
       // dd($request);
      $request->validate([
        'adaptation_to_the_market' => ['required'],
        'robustness_of_the_economic_model' => ['required'],
        'solution_maturity' => ['required'],
        'scalability_and_innovation' => ['required'],
        'pitch_quality' => ['required'],
  
      ]);
      $average=($request->adaptation_to_the_market+$request->robustness_of_the_economic_model+$request->solution_maturity+$request->scalability_and_innovation+$request->pitch_quality)/5;

      $Rate = new Rate();
      $Rate->user_id = $user_id;
      $Rate->team_id = $request->team_id;

      $Rate->adaptation_to_the_market = $request->adaptation_to_the_market;
      $Rate->robustness_of_the_economic_model = $request->robustness_of_the_economic_model;
      $Rate->solution_maturity = $request->solution_maturity;
      $Rate->scalability_and_innovation = $request->scalability_and_innovation;
      $Rate->pitch_quality = $request->pitch_quality;
      $Rate->average =$average;
      $Rate->save();
  
      return redirect()->route('user.voting.index')->with('voted', 'The Team Was Voted In Successfully');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      // $team = Team::where('team_name' ,$id)->first();
      $team = Team::where('id' ,$id)->get();
      $user_id = session()->get('id');
      $user=User::where('id',$user_id)->first();
      return view('website.vote',['data'=>$team,'user'=>$user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
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
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
