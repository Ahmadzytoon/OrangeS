<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Models\Team;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class TeamsController extends Controller
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
            return view('website/teams');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chooseTeam(Request $request)
    {
        $team = Team::where('team_name' , $request['team'])->first();
        session()->put('team_id', $team['id']);
        $questions = Question::where('team_id' , $team['id'])->get();
        return view('website/question' , ['data' => $questions]);
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
        $team_id = session()->get('team_id');

        for($i=1 ; $i <= $request->loop ; $i++){
            Rate::create([
                'user_id'=>$user_id,
                'team_id'=>$team_id,
                'question_id'=>$request['question_id'.$i],
                'values'=>$request['rate'.$i],
            ]);
        }
        return redirect ('website/average');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (!session()->has('email')) {
            return redirect('/');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function average()
    {
        $data = Rate::get();
        $desc_avg =[];
        // $total =[];
        $i=0;
        foreach($data as $rate){
            if(array_key_exists($rate->team->team_name, $desc_avg)){
                $desc_avg[$rate->team->team_name]['total_values'] += $rate->values;
                
                $desc_avg[$rate->team->team_name]['number_of_question_for_team'] += 1;
            } else {
                $i++;
                $desc_avg[$rate->team->team_name] = [
                    'team_name' => $rate->team->team_name,
                    'total_values' => $rate->values,
                    'number_of_question_for_team' => 1,
                ];
            }
        }
        // dd($desc_avg);
        return view('website/average' , ['data' => $desc_avg]);
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
    }
}
