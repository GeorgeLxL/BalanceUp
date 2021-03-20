<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserCtrl extends Controller
{
    public function loginPlayer(Request $req){
        $userdata = $req->all();
        $data = DB::select('select * from player where userid = ? and password = md5(?)', [$userdata['userid'], $userdata['password']]);
        if(count($data)>0){
            $req->session()->put('userid', $userdata['userid']);
            $req->session()->put('userpwd', $userdata['password']);	
            $req->session()->put('role', "player");
            return view('subItemPage');
        }
        else{
            $data_erro = "パスワードが正しくありません";
            return view('login',compact('data_erro'));
        }
    }

    public function loginStaff(Request $req){
        $userdata = $req->all();
        $data = DB::select('select * from staff where userid = ? and password = md5(?)', [$userdata['userid'], $userdata['password']]);
        if(count($data)>0){
            $req->session()->put('userid', $userdata['userid']);
            $req->session()->put('userpwd', $userdata['password']);	
            $req->session()->put('role', "staff");
            return view('staffPage');
        }

        else{
            $data_erro = "パスワードが正しくありません";
            return view('loginStaff',compact('data_erro'));
        }
    }


    public function registerPlayer(Request $req){
        $userdata = $req->all();
        $data = DB::select('select * from player where userid = ?', [$userdata['userid']]);

        if (count($data) > 0) {
            $data_erro = "すでにそのような識別子のユーザーが存在します";
    		return view('registerStaff', compact('data_erro'));
        }
        else{
            $now = date("y-m-d");
            DB::insert('INSERT INTO allergy(userid,shrimp, crab, wheat, soba, milk, egg,squid, orange, beef, salmon, mackerel, soybeans, chicken,banana,peache) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$userdata['userid'], isset($userdata['shrimp']), isset($userdata['crab']), isset($userdata['wheat']), isset($userdata['soba']), isset($userdata['milk']), isset($userdata['egg']), isset($userdata['squid']), isset($userdata['orange']), isset($userdata['beef']), isset($userdata['salmon']), isset($userdata['mackerel']), isset($userdata['soybeans']), isset($userdata['chicken']), isset($userdata['banana']), isset($userdata['peache'])]);
            DB::insert('INSERT INTO player(userid, password, name, birthday, sex, sport, registedDate) VALUES(?,md5(?),?,?,?,?,?)', [$userdata['userid'],$userdata['password'], $userdata['name'],$userdata['birthday'], $userdata['sex']=="male" ? 1:0, $userdata['sport'],$now]);
            
            $req->session()->put('userid', $userdata['userid']);
            $req->session()->put('userpwd', $userdata['password']);
            $req->session()->put('role', "player");
            return view('subItemPage');
            
    	}
    }

    public function registerStaff(Request $req){
        $userdata = $req->all();
        $data = DB::select('select * from staff where userid = ?', [$userdata['userid']]);

        if (count($data) > 0) {
            $data_erro = "すでにそのような識別子のユーザーが存在します";
    		return view('registerStaff', compact('data_erro'));
        }
        else{
            $now = date("y-m-d");
            DB::insert('INSERT INTO staff(userid, password, name, birthday, sex, registedDate) VALUES(?,md5(?),?,?,?,?)', [$userdata['userid'],$userdata['password'], $userdata['name'],$userdata['birthday'], $userdata['sex']=="male" ? 1:0, $now]);
            
            $req->session()->put('userid', $userdata['userid']);
            $req->session()->put('userpwd', $userdata['password']);
            $req->session()->put('role', "staff");
            return view('staffPage');
            
    	}
    }

    public function getplayerList(Request $req, Type $var = null)
    {
        if( $req->session()->get('role')!='staff'){
            return redirect('/');
        }
        $playerlist = DB::select('select userid, name from player');
        return view('playerList', compact('playerlist'));
    }

    public function csvOut(Request $req){
        if( $req->session()->get('role')!='staff'){
            return redirect('/');
        }
        $stafflist = DB::select('select userid, name from player');
        return view('CSVpage', compact('stafflist'));
    }

}
