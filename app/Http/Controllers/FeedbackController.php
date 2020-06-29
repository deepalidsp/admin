<?php

namespace App\Http\Controllers;

use App\model\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Feedback $feedbacks)
    {
        $feedbacks = $feedbacks::all();
        return view('feedback.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'pin' => 'required',
            'dob' => 'required',
            'mobile' => 'required',
            'todays_date' => 'required',
            'description' => 'required',
            'amount' => 'required'
        ]);

        $feedback = new Feedback([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'pin' => $request->get('pin'),
            'dob' => $request->get('dob'),
            'mobile' => $request->get('mobile'),
            'todays_date' => $request->get('todays_date'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
        ]);
        $resp = $feedback->save();

        if($resp){
            return redirect('/feedback')->withSuccess('Feedback Created');
        }else{
            return redirect('/feedback')->withFail('Error');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        $today = date("Y-m-d");
        $birthday = $feedbacks::where('dob',$today)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('feedback.edit', compact('feedback'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'pin' => 'required',
            'dob' => 'required',
            'mobile' => 'required',
            'todays_date' => 'required',
            'description' => 'required',
            'amount' => 'required'
        ]);

        $feedback = Feedback::find($id);
        $feedback->name = $request->get('name');
        $feedback->address = $request->get('address');
        $feedback->pin = $request->get('pin');
        $feedback->dob = $request->get('dob');
        $feedback->mobile = $request->get('mobile');
        $feedback->todays_date = $request->get('todays_date');
        $feedback->description = $request->get('description');
        $feedback->amount = $request->get('amount');
        $resp = $feedback->save();
        
        if($resp){
            return redirect('/feedback')->withSuccess('Feedback Updated');
        }else{
            return redirect('/feedback')->withFail('Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $resp = $feedback->delete();
        if($resp){
            return redirect('/feedback')->withSuccess('Feedback Deleted');
        }else{
            return redirect('/feedback')->withFail('Error');
        }
    }
}
