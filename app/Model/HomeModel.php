<?php
namespace App\Model;

use DB;
use Hash;
use Log;

class HomeModel
{
    public function addVisitor($referer, $ip) {
        DB::table('tbl_visitor')->insert(["refer_url"=>$referer, "ip"=>$ip]);
    }

    public function addClicks($ip, $refer_url, $click, $type, $building_info) {
        DB::table('tbl_clicks')->insert(["ip"=>$ip, "refer_url"=>$refer_url, "click"=>$click, "type"=>$type, "building_info"=>$building_info]);
    }
}