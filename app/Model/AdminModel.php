<?php
namespace App\Model;

use DB;
use Hash;
use Log;
use Session;

class AdminModel
{
    public function checkAdmin($uid, $pass) {
        $data = DB::table('tbl_admin')
            ->where('uid', $uid)
            ->where('pass', $pass)->get();
        return count($data) > 0;
    }

    public function getClicksCount() {
        $data = DB::select("SELECT type, COUNT(id) cnt FROM tbl_clicks WHERE click='call' GROUP BY type");
        $phone = 0;
        $whatsapp = 0;
        foreach($data as $ind=>$one) {
            Log::error(json_encode($one));
            if ($one->type == "phone")
                $phone = $one->cnt;
            else if ($one->type == "whatsapp")
                $whatsapp = $one->cnt;
        }
        return array($whatsapp, $phone);
    }

    public function getClicksDataCount($searchPhrase, $type) {
        $data = DB::select(
            "SELECT COUNT(id) total_count
            FROM tbl_clicks
            WHERE type = '$type' AND (refer_url LIKE '%" . $searchPhrase . "%' OR
            ip LIKE '%" . $searchPhrase . "%' OR
            datetime LIKE '%" . $searchPhrase . "%')");
        return $data[0]->total_count;
    }

    public function getClicksData($current, $rowCount, $field, $order, $searchPhrase, $type) {
        $start = ($current - 1) * $rowCount;
        $data = DB::select(
            "SELECT * FROM tbl_clicks
            WHERE type = '$type' AND (refer_url LIKE '%" . $searchPhrase . "%' OR
            ip LIKE '%" . $searchPhrase . "%' OR
            datetime LIKE '%" . $searchPhrase . "%')
            ORDER BY " . $field . " " . $order . "
            LIMIT ?, ?",
            [$start, $rowCount]);

        for($index = 0; $index < count($data); $index++) {
            $data[$index]->no = ($current - 1) * $rowCount + 1 + $index;
        }
        return $data;
    }

    public function getBuildingDataCount($searchPhrase) {
        $data = DB::select(
            "SELECT COUNT(id) total_count
            FROM tbl_clicks
            WHERE click='building' AND ( refer_url LIKE '%" . $searchPhrase . "%' OR
            ip LIKE '%" . $searchPhrase . "%' OR
            datetime LIKE '%" . $searchPhrase . "%' )");
        return $data[0]->total_count;
    }

    public function getBuildingData($current, $rowCount, $field, $order, $searchPhrase) {
        $start = ($current - 1) * $rowCount;
        $data = DB::select(
            "SELECT *, CONCAT(building_info, ' ', type) building FROM tbl_clicks
            WHERE click='building' AND ( refer_url LIKE '%" . $searchPhrase . "%' OR
            ip LIKE '%" . $searchPhrase . "%' OR
            datetime LIKE '%" . $searchPhrase . "%' )
            ORDER BY " . $field . " " . $order . "
            LIMIT ?, ?",
            [$start, $rowCount]);

        for($index = 0; $index < count($data); $index++) {
            $data[$index]->no = ($current - 1) * $rowCount + 1 + $index;
        }
        return $data;
    }

    public function getVisitorsDataCount($searchPhrase) {
        $data = DB::select(
            "SELECT COUNT(id) total_count
            FROM tbl_visitor
            WHERE refer_url LIKE '%" . $searchPhrase . "%' OR
            ip LIKE '%" . $searchPhrase . "%' OR
            datetime LIKE '%" . $searchPhrase . "%'");
        return $data[0]->total_count;
    }

    public function getVisitorsData($current, $rowCount, $field, $order, $searchPhrase) {
        $start = ($current - 1) * $rowCount;
        $data = DB::select(
            "SELECT * FROM tbl_visitor
            WHERE refer_url LIKE '%" . $searchPhrase . "%' OR
            ip LIKE '%" . $searchPhrase . "%' OR
            datetime LIKE '%" . $searchPhrase . "%'
            ORDER BY " . $field . " " . $order . "
            LIMIT ?, ?",
            [$start, $rowCount]);

        for($index = 0; $index < count($data); $index++) {
            $data[$index]->no = ($current - 1) * $rowCount + 1 + $index;
        }
        return $data;
    }

    public function updateProfile($uid, $pass) {
        DB::table('tbl_admin')
            ->update(['uid' => $uid, 'pass' => $pass]);
        session(["uid" => $uid]);
    }

    public function clearHistory($type) {
        if ($type == "whatsapp" || $type == "phone")
            DB::table("tbl_clicks")->where("click", "=", "call")->where("type", "=", $type)->delete();
        else if ($type == "building")
            DB::table("tbl_clicks")->where("click", "=", "building")->delete();
        else if ($type == "visitors")
            DB::table("tbl_visitor")->delete();
    }
}