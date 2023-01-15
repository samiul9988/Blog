<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('members.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return redirect()->back()->withCookie(cookie('samiul', 'kabir'));
        // $value = session()->flash('_flash', 'Task was successful!');
        // dd($request->cookie('samiul'));
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'user_id' => 'required',
        //     'mobile' => 'required',
        //     'address' => 'required'
        // ]);

        $request->validate([
            'user_id' => 'required',
            'mobile' => 'required',
            'address' => 'required'
        ]);

        Member::create([
            'user_id' => $request->input('user_id'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'company' => $request->input('company'),
            'profession' => $request->input('profession'),
            'designation' => $request->input('designation')

        ]);
        return redirect('members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['member'] = Member::find($id);
        return view('members.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['member'] = Member::find($id);
        return view('members.edit',$data);
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
        $member = Member::find($id);
        $request->validate([
            'user_id' => 'required',
            'mobile' => 'required',
            'address' => 'required'
        ]);

        $member->update([
            'user_id' => $request->input('user_id'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'company' => $request->input('company'),
            'profession' => $request->input('profession'),
            'designation' => $request->input('designation')

        ]);

        return redirect('members');

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
