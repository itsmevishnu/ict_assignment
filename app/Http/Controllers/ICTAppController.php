<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ICTApp;
use Session;
use Redirect;

class ICTAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = ICTApp::paginate(20);
        return view('display')->with(['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ictapp = new ICTApp();
        $ictapp->name = $request->team_name;
        $ictapp->team_manager = $request->team_manager;
        $ictapp->bill_number = $request->bill_number;
        $ictapp->bill_amount = $request->total;
        $ictapp->bill_date = date( "Y-m-d", strtotime( $request->bill_date ) );
        $ictapp->save();
        return redirect('/')->with('message', 'New entry added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ICTApp $ictapp)
    {
        return view('view')->with(['entry'=> $ictapp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ICTApp $ictapp)
    {
        return view('update')->with(['entry'=> $ictapp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ICTApp $ictapp)
    {
        $error = false;
        switch(Session::get('key')){
            case 'ug_nominee': {
                $ictapp->ug_nominee = date("Y-m-d H:i:s");
                break;
            }
            case 'facad': {
                if( is_null($ictapp->ug_nominee) ){
                   $error =  true;
               }
               $ictapp->facad = date("Y-m-d H:i:s");
               break;
            }

            case 'sac_office': {
                if( is_null($ictapp->ug_nominee) || is_null($ictapp->facad) ){
                    $error = true;
                }
                $ictapp->sac_office = date("Y-m-d H:i:s");
                break;
            }

            case 'dean': {
                if( is_null($ictapp->ug_nominee) || is_null($ictapp->facad) || is_null($ictapp->sac_office ) ){
                    $error = true;
                }
                $ictapp->dean = date("Y-m-d H:i:s");
                break;
            }

            case 'account_section': {
                if( is_null($ictapp->ug_nominee) || is_null($ictapp->facad) || is_null($ictapp->sac_office) ||is_null($ictapp->dean) ){
                    $error = true;
                }
                $ictapp->account_section = date("Y-m-d H:i:s");
                break;
            }

        }
        if ($error) {
            return redirect()->route('options')->with('error','You can not approve now!');
        } else {
            $ictapp->save();
            return redirect('/')->with('message', 'Approved!');
        }
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

    /**
     * return list of the bills required to approve by ug nominee.
     * @return [type] [description]
     */
    public function ugNomineeList()
    {
        $lists = ICTApp::whereNull('ug_nominee')->get();
        Session::put('key','ug_nominee');
        return view('update_list')->with(['lists'=>$lists]);
    }

    /**
     * Return list of bills required to approve by facad.
     * @return [type] [description]
     */
    public function facadList()
    {
        $lists = ICTApp::whereNull('facad')->whereNotNull('ug_nominee')->get();
        Session::put( 'key', 'facad');
        return view('update_list')->with(['lists'=>$lists,]);
    }

    /**
     * Return list of bills required t approve by sac office.
     * @return [type] [description]
     */
    public function sacList()
    {
        Session::put('key', 'sac_office');
        $lists = ICTApp::whereNull('sac_office')->whereNotNull('facad')->get();
        return view('update_list')->with(['lists'=>$lists, ]);
    }

    /**
     * Return list of bills required to apporve by dean
     * @return [type] [description]
     */
    public function deanList()
    {
        Session::put( 'key', 'dean');
        $lists = ICTApp::whereNull('dean')->whereNotNull('sac_office')->get();
        return view('update_list')->with(['lists'=>$lists,]);
    }

    /**
     * Required to approve by account people
     * @return [type] [description]
     */
    public function accountList()
    {
        Session::put( 'key', 'account_section');
        $lists = ICTApp::whereNull('account_section')->whereNotNull('dean')->get();
        return view('update_list')->with(['lists'=>$lists,]);
    }

    
}
