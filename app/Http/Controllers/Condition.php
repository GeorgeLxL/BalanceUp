<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Condition extends Controller
{
    //

    public function regularInput(Request $req){
        $regularData = $req->all();
       
        DB::insert('INSERT INTO everyday(userid, height, weight, fat, muscle, regulardata, frequency, time, date) VALUES(?,?,?,?,?,1,?,?,?)', [$req->session()->get('userid'), $regularData['height'], $regularData['weight'], $regularData['fat'], $regularData['muscle'], $regularData['frequency'], $regularData['time'], date("y-m-d")]);
        return view('regularMeal'); 
    }

    public function everydayInput(Request $req){
        $everydayData = $req->all();
        DB::insert('INSERT INTO everyday(userid, height, weight, fat, muscle,regulardata, date) VALUES(?,?,?,?,?,0,?)', [$req->session()->get('userid'), $everydayData['height'], $everydayData['weight'], $everydayData['fat'], $everydayData['muscle'], date("y-m-d")]);
        return view('finishInputing1');
    }

    public function insertDiet(Request $req)
    {
        $dietData = $req->all();
        DB::delete('delete from diet where regDate = ? and userid = ?',[date("y-m-d"),$req->session()->get('userid')]);
        $result = DB::insert('INSERT INTO diet(userid, stapleFood, mainDish, sideDish,
        meat, seafood, eggs, beans, LCvegetables, GYvegetables, mushrooms, seaweeds, 
        potatoes, milk, fruit, sweets, saltSweets, juice, friedFood, fastFood, misoSoup,
         MenSoup, supply,energy,calcium,vitamin,others,unknown, otherslist, description, regDate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        [$req->session()->get('userid'), $dietData['stapleFood'], $dietData['mainDish'], 
        $dietData['sideDish'],$dietData['meat'], $dietData['seafood'], $dietData['eggs'],
         $dietData['beans'], $dietData['LCvegetables'], $dietData['GYvegetables'], $dietData['mushrooms'], 
         $dietData['seaweeds'], $dietData['potatoes'], $dietData['milk'],$dietData['fruit'], $dietData['sweets'], 
         $dietData['saltSweets'], $dietData['juice'], $dietData['friedFood'], $dietData['fastFood'], 
         $dietData['misoSoup'], $dietData['MenSoup'], $dietData['supply'], $dietData['energy'],
         $dietData['calcium'],$dietData['vitamin'],$dietData['others'],$dietData['unknown'], $dietData['otherslist'], 
         $dietData['description'], date("y-m-d")]);
        echo $result;      
    }

    public function getDiet(Request $req)
    {
        $userid = $req->userid;
        $returndata=array();
        $returndata['data'] = DB::select('SELECT stapleFood, mainDish, sideDish,
        meat, seafood, eggs, beans, LCvegetables, GYvegetables, mushrooms, seaweeds, 
        potatoes, milk, fruit, sweets, saltSweets, juice, friedFood, fastFood, misoSoup,
         MenSoup, supply FROM diet WHERE userid = ? AND 
        regDate = (SELECT MAX(regDate) FROM diet WHERE userid = ?)',
        [$userid,$userid]);
        
         $user_point = 0;
         $count = DB::select("select count(*) as count from player");

         $grade = 1;
         
         if(count($returndata['data'])==1)
         {
            foreach($returndata['data'][0] as $value)
            {
                $user_point += (int)$value;
            }
            $result = DB::select('SELECT userid from player where userid!=?',[$userid]);
            foreach($result as $users)
            {
                $othersdata = DB::select('SELECT stapleFood, mainDish, sideDish,
                meat, seafood, eggs, beans, LCvegetables, GYvegetables, mushrooms, seaweeds, 
                potatoes, milk, fruit, sweets, saltSweets, juice, friedFood, fastFood, misoSoup,
                MenSoup, supply FROM diet WHERE  regDate = (SELECT MAX(regDate) FROM diet WHERE userid = ?)', [$users->userid]);
                $otherspoint = 0;
                if(count($othersdata)>0){
                    foreach($othersdata[0] as $value)
                    {
                        $otherspoint += $value;
                    }
                    if($user_point<$otherspoint)
                    {
                        $grade++;
                    }
                }
                
            }
           $returndata['grade'] = $grade."位/".$count[0]->count."人";
        }       

        echo json_encode($returndata);
    }

    function getGraphData(Request $req)
    {

        $startdate = date_format(date_sub(date_create(date("y-m-d")), date_interval_create_from_date_string("7 days")),"Y-m-d");
        $userid = $req->userid;
        $everydayData['hdata']=array();
        $everydayData['wdata']=array();
        $everydayData['fdata']=array();
        $everydayData['mdata']=array();
        $everydayData['hdata'] = DB::select("SELECT  DISTINCT DATE as x, height as y FROM everyday WHERE userid=? AND date>?", [$userid,$startdate]);
        $everydayData['wdata'] = DB::select("SELECT  DISTINCT DATE as x, weight as y FROM everyday WHERE userid=? AND date>?", [$userid,$startdate]);
        $everydayData['fdata'] = DB::select("SELECT  DISTINCT DATE as x, fat as y FROM everyday WHERE userid=? AND date>?", [$userid,$startdate]);
        $everydayData['mdata'] = DB::select("SELECT  DISTINCT DATE as x, muscle as y FROM everyday WHERE userid=? AND date>?", [$userid,$startdate]);
     
        $week = array();
        $week['hdata'] = array();
        $week['wdata'] = array();
        $week['fdata'] = array();
        $week['mdata'] = array();

        for($i=0;$i<4;$i++)
        {
            $endtime = date_format(date_sub(date_create(date("y-m-d")), date_interval_create_from_date_string(($i * 7)." days")),"Y-m-d");
            $startdate = date_format(date_sub(date_create(date("y-m-d")), date_interval_create_from_date_string((($i + 1) * 7)." days")),"Y-m-d");
            $result = DB::select("SELECT DATE AS x, height AS y FROM everyday WHERE height = (SELECT MAX(height) FROM everyday WHERE userid=? AND DATE>? AND DATE<=?) AND DATE>? AND DATE<=?", [$userid, $startdate,$endtime,$startdate,$endtime]);
            if($result) array_push($week['hdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, weight AS y FROM everyday WHERE weight = (SELECT MAX(weight) FROM everyday WHERE userid=? AND DATE>? AND DATE<=?) AND DATE>? AND DATE<=?", [$userid, $startdate,$endtime,$startdate,$endtime]);
            if($result) array_push($week['wdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, fat AS y FROM everyday WHERE fat = (SELECT MAX(fat) FROM everyday WHERE userid=? AND DATE>? AND DATE<=?) AND DATE>? AND DATE<=?", [$userid, $startdate,$endtime,$startdate,$endtime]);
            if($result) array_push($week['fdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, muscle AS y FROM everyday WHERE muscle = (SELECT MAX(muscle) FROM everyday WHERE userid=? AND DATE>? AND DATE<=?) AND DATE>? AND DATE<=?", [$userid, $startdate,$endtime,$startdate,$endtime]);
            if($result) array_push($week['mdata'], $result[0]);
        }

        $yy = (int)date("Y");
        $mm = (int)date("m");
        
        $month = array();
        $month['hdata'] = array();
        $month['wdata'] = array();
        $month['fdata'] = array();
        $month['mdata'] = array();
        for($i=0;$i<4;$i++)
        {
            $monthstring = $yy."-".$mm."-%";
            $result = DB::select("SELECT DATE AS x, height AS y FROM everyday WHERE height = (SELECT MAX(height) FROM everyday WHERE userid=? and date like ?) and  date like ? limit 1", [$userid, $monthstring,$monthstring]);
            if($result) array_push($month['hdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, weight AS y FROM everyday WHERE weight = (SELECT MAX(weight) FROM everyday WHERE userid=? and date like ?) and date like ? limit 1", [$userid, $monthstring,$monthstring]);
            if($result) array_push($month['wdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, fat AS y FROM everyday WHERE fat = (SELECT MAX(fat) FROM everyday WHERE userid=? and date like ?) and date like ?  limit 1", [$userid, $monthstring,$monthstring]);
            if($result) array_push($month['fdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, muscle AS y FROM everyday WHERE muscle = (SELECT MAX(muscle) FROM everyday WHERE userid=? and date like ?)and date like ?  limit 1", [$userid, $monthstring,$monthstring]);
            if($result) array_push($month['mdata'], $result[0]);
            $mm -=1;
            if($mm<=0)
            {
                $mm+=12;
                $yy--;
            }
        }
        $year = array();
        $year['hdata'] = array();
        $year['wdata'] = array();
        $year['fdata'] = array();
        $year['mdata'] = array();
        for($i=0;$i<4;$i++)
        {
            $yy = (int)date("Y") - 3 + $i;
            $result = DB::select("SELECT DATE AS x, height AS y FROM everyday WHERE height = (SELECT MAX(height) FROM everyday WHERE userid=? AND date like ?) AND date like ? limit 1", [$userid, $yy."-%",$yy."-%"]);
            if($result) array_push($year['hdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, weight AS y FROM everyday WHERE weight = (SELECT MAX(weight) FROM everyday WHERE userid=? AND date like ?) AND date like ? limit 1", [$userid, $yy."-%",$yy."-%"]);
            if($result) array_push($year['wdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, fat AS y FROM everyday WHERE fat = (SELECT MAX(fat) FROM everyday WHERE userid=? AND date like ?) AND date like ? limit 1", [$userid, $yy."-%",$yy."-%"]);
            if($result) array_push($year['fdata'], $result[0]);
            $result = DB::select("SELECT DATE AS x, muscle AS y FROM everyday WHERE muscle = (SELECT MAX(muscle) FROM everyday WHERE userid=? AND date like ?) AND date like ? limit 1", [$userid, $yy."-%",$yy."-%"]);
            if($result) array_push($year['mdata'], $result[0]);
        }
    
        echo json_encode(array("everydaydata" =>$everydayData, "week"=>$week, "month"=>$month, "year"=>$year));
    }

    function nextMeal(Request $req){
        $data = $req->all();
        DB::insert('INSERT INTO nextmeal(userid, goodfood1, goodfood2, goodfood3, nextfood1, nextfood2, nextfood3, whe, wher, how, regDate) VALUES(?,?,?,?,?,?,?,?,?,?,?)', [$req->session()->get('userid'), $data['goodfood1'], $data['goodfood2'], $data['goodfood3'], $data['nextfood1'], $data['nextfood2'], $data['nextfood3'], $data['when'], $data['where'], $data['how'],date("y-m-d")]);
        return view("subItemPage");
    }

    function setGraph(Request $req){
        $userid="";
        $player="";
        if($req->session()->get('role')=='staff'){
            $userid = $req->playid;
            return view('graphPage',compact('userid')); 
        }
        else
        {
            $userid = $req->session()->get('userid');
            $player = $userid;
            return view('graphPage',compact('userid','player')); 
        }  
    }

    function setResult(Request $req){
        $userid="";
        $player="";
        if($req->session()->get('role')=='staff'){
            $userid = $req->playid;
            return view('result',compact('userid')); 
        }
        else{
            $userid = $req->session()->get('userid');
            $player = $userid;
            return view('result',compact('userid','player')); 
        }     
 
    }

    function csvSave(Request $req){
        $data = $req->all();
        $dietData = array();
        $changeData = array();
        $startyear=2019;
        $endyear =(int)date("Y");
        $delimiter = ",";
        $files = array();
        if($data['startyear']!=null) $startyear=(int)$data['startyear'];
        if($data['endyear']!=null) $endyear=(int)$data['endyear'];
        for($i=0; $i<count($data['userlist']); $i++){
            
            for($year=$startyear; $year<=$endyear;$year++)
            {
                $result = DB::select("select userid, stapleFood, mainDish, sideDish,
                meat, seafood, eggs, beans, LCvegetables, GYvegetables, mushrooms, seaweeds, 
                potatoes, milk, fruit, sweets, saltSweets, juice, friedFood, fastFood, misoSoup,
                MenSoup, supply, regDate from diet where userid=? and regDate like ?",[$data['userlist'][$i],$year."-%"]);
                $dietData = array_merge($dietData,$result);
            }
        
        
            for($year=$startyear; $year<=$endyear;$year++)
            {
                $result = DB::select("select userid, height, weight, fat,muscle, date from everyday where userid=? and date like ?",[$data['userlist'][$i],$year."-%"]);
                $changeData= array_merge($changeData,$result);
            }
            
        }
        if($data['dietData']==1){
            $filename = 'diet'.date('Ymd').'_'.date('his').'';		 
            $fp = fopen('./CSV/'.$filename.'.csv','w');
            $columnNames = array('userid', 'stapleFood', 'mainDish', 'sideDish',
            'meat', 'seafood', 'eggs', 'beans', 'LCvegetables', 'GYvegetables', 'mushrooms', 'seaweeds', 
            'potatoes', 'milk', 'fruit', 'sweets', 'saltSweets', 'juice', 'friedFood', 'fastFood', 'misoSoup',
            'MenSoup', 'supply', 'regDate');
            $headers = array(
                'Content-Type'        => 'text/csv',
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-Disposition' => 'attachment; filename="' . $filename . '";',
                'Expires'             => '0',
                'Pragma'              => 'public',
            );
            fputcsv($fp, $columnNames);
            $i=0;
            foreach ($dietData as $row) {
                $lineData = array($row->userid, $row->stapleFood, $row->mainDish, $row->sideDish,
                $row->meat, $row->seafood, $row->eggs, $row->beans, $row->LCvegetables, $row->GYvegetables, $row->mushrooms, $row->seaweeds, 
                $row->potatoes, $row->milk, $row->fruit, $row->sweets, $row->saltSweets, $row->juice, $row->friedFood, $row->fastFood, $row->misoSoup,
                $row->MenSoup, $row->supply, $row->regDate); 
                fputcsv($fp, $lineData);
                $i++;
            }
            fclose($fp);
            $file = $filename.'.csv';
            array_push($files,$file); 
        }
        if($data['changeData']==1){
            $filename = 'change'.date('Ymd').'_'.date('his').'';		 
            $fp1 = fopen('./CSV/'.$filename.'.csv','w');
            $columnNames = array('userid', 'height', 'weight', 'fat',        'muscle', 'date');
            $headers = array(
                'Content-Type'        => 'text/csv',
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-Disposition' => 'attachment; filename="' . $filename . '";',
                'Expires'             => '0',
                'Pragma'              => 'public',
            );
            fputcsv($fp1, $columnNames);
            foreach ($changeData as $row) {
                $lineData = array($row->userid, $row->height, $row->weight, $row->fat,
                $row->muscle, $row->date); 
                fputcsv($fp1, $lineData);
                $i++;
            }
            fclose($fp1);
            $file = $filename.'.csv';
            array_push($files,$file);      
        }
        echo json_encode($files);
    }
}
