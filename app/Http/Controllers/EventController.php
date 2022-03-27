<?php

namespace App\Http\Controllers;

use App\Event;
use DateTime;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('sub_2');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function event(Request $request){
        $find = Event::find($request['phone']);
        $input = $request->only(['phone','name']);
        $input['date'] = date('Y-m-d');
        $input['cnt'] = 1;
        if($find){
            $first = new DateTime(date('Y-m-d'));
            $second = new DateTime($find['date']);
            $diff = $first->diff($second);
            $input['score'] = $find['score'] + $request['score'];
            if($diff->d === 0 ) {
                return ['하루에 한번만 이벤트에 참여하실 수 있습니다',$input['cnt']];
            }elseif($diff->d >= 2){
                $find->update($input);
                return ['이벤트에 참여해주셔서 감사합니다.',$input['cnt']];
            }else{
                $input['cnt'] += $find['cnt'];
                $find->update($input);
                if($input['cnt'] === 3){
                    return['축하합니다. 3일연속 출석하여 경품선정 대상자가 되었습니다.',$input['cnt']];
                }else{
                    return['이벤트에 참여해주셔서 감사합니다.',$input['cnt']];
                }
            }
        }else{
            $input['score'] = $request['score'];
            Event::create($input);
            return ['이벤트에 참여해주셔서 감사합니다.',$input['cnt']];
        }
    }
    public function join($phone){
        $find = Event::find($phone);
        if($find){
            $text = ' ';
            for($i = $find['cnt']; $i > -1;$i--){
                $text .= date("Y-m-d", strtotime($find['date']."-".$i."day")) .', ';
            }
            print_r('"stamps" : ['.$text.']');
        }else{
            print_r('"message" : "출석정보가 없습니다"');
        }
    }
}
