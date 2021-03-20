<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createTable(){
        DB::statement('CREATE TABLE IF NOT EXISTS player(id INT primary key NOT NULL AUTO_INCREMENT, userid varchar(255), password varchar(255), name varchar(255), birthday date, sex int, sport varchar(255), registedDate date)');
        DB::statement('CREATE TABLE IF NOT EXISTS staff(id INT primary key NOT NULL AUTO_INCREMENT, userid varchar(255), password varchar(255), name varchar(255), birthday date, sex int, registedDate date)');
        DB::statement('CREATE TABLE IF NOT EXISTS allergy(id int primary key not null auto_increment, userid varchar(255), shrimp int, crab int, wheat int, soba int, milk int, egg int, squid int, orange int, beef int, salmon int, mackerel int, soybeans int, chicken int, banana int, peache int)');
        DB::statement('CREATE TABLE IF NOT EXISTS everyday(id int primary key NOT NULL AUTO_INCREMENT, userid varchar(255), height int, weight float, fat float, muscle float, regulardata int, frequency int, time varchar(12), date date)');
        DB::statement('CREATE TABLE IF NOT EXISTS diet(id int primary key NOT NULL AUTO_INCREMENT, userid varchar(255), stapleFood float, mainDish float, sideDish float, meat float, seafood float, eggs float, beans float, LCvegetables float, GYvegetables float, mushrooms float, seaweeds float, potatoes float, milk float, fruit float,
         sweets float, saltSweets float, juice float, friedFood float, fastFood float, misoSoup float, MenSoup float, supply float, energy float, calcium float, vitamin float, others float, unknown float, otherslist varchar(255), description varchar(255), regDate date)');
        DB::statement('CREATE TABLE IF NOT EXISTS nextmeal(id int primary key NOT NULL AUTO_INCREMENT, userid varchar(255), goodfood1 varchar(255), goodfood2 varchar(255), goodfood3 varchar(255), nextfood1 varchar(255), nextfood2 varchar(255), nextfood3 varchar(255), whe varchar(255), wher varchar(255), how varchar(255), regDate date)');
        return view('index');
    }
}
