<?php

namespace App\Http\Controllers;

use Log;
use Redirect;
use Input;
use Session;
use App\Model\AdminModel;

class AdminController extends Controller {

    private $model;

    public function __construct() {
        $this->model = new AdminModel();
    }

    public function index() {
        if (!Session::has("uid")) {
            return Redirect::to("/admin/login");
        }

        $click = $this->model->getClicksCount();
        return view("admin.home", ["page"=>"statistics", "uid"=>Session::get("uid"), "page"=>"statistics",
            "click_whatsapp"=>$click[0], "click_call"=>$click[1]]);
    }

    public function login() {
        if (Session::has("uid")) {
            return Redirect::to("/admin");
        } else if (Input::has("uid") && Input::has("pass")) {
            $uid = Input::get("uid");
            $pass = Input::get("pass");
            if ($this->model->checkAdmin($uid, $pass)) {
                session(["uid" => $uid]);
                return Redirect::to("/admin");
            } else
                return view("admin.login", ["error" => "Invalid Login."]);
        } else
            return view("admin.login");
    }

    public function logout() {
        if (Session::has("uid"))
            Session::forget("uid");
        return Redirect::to("/admin/login");
    }

    public function getWhatsAppData() {
        $current = Input::get("current");
        $rowCount = Input::get("rowCount");
        $searchPhrase = Input::get("searchPhrase");
        $sort = Input::get("sort");
        $field = 'datetime';
        $order = 'desc';
        if (count($sort) > 0) {
            $field = array_keys($sort)[0];
            $order = $sort[$field];
        }
        $total_count = $this->model->getClicksDataCount($searchPhrase, "whatsapp");
        if ($rowCount == -1)
            $rowCount = $total_count;
        $data = $this->model->getClicksData($current, $rowCount, $field, $order, $searchPhrase, "whatsapp");
        $ret_data = array(
            'current' => intval($current),
            'rowCount' => count($data),
            'rows' => $data,
            'total' => $total_count
        );
        return response()->json($ret_data);
    }

    public function getPhoneData() {
        $current = Input::get("current");
        $rowCount = Input::get("rowCount");
        $searchPhrase = Input::get("searchPhrase");
        $sort = Input::get("sort");
        $field = 'datetime';
        $order = 'desc';
        if (count($sort) > 0) {
            $field = array_keys($sort)[0];
            $order = $sort[$field];
        }
        $total_count = $this->model->getClicksDataCount($searchPhrase, "phone");
        if ($rowCount == -1)
            $rowCount = $total_count;
        $data = $this->model->getClicksData($current, $rowCount, $field, $order, $searchPhrase, "phone");
        $ret_data = array(
            'current' => intval($current),
            'rowCount' => count($data),
            'rows' => $data,
            'total' => $total_count
        );
        return response()->json($ret_data);
    }

    public function getBuildingData() {
        $current = Input::get("current");
        $rowCount = Input::get("rowCount");
        $searchPhrase = Input::get("searchPhrase");
        $sort = Input::get("sort");
        $field = 'datetime';
        $order = 'desc';
        if (count($sort) > 0) {
            $field = array_keys($sort)[0];
            $order = $sort[$field];
        }
        $total_count = $this->model->getBuildingDataCount($searchPhrase);
        if ($rowCount == -1)
            $rowCount = $total_count;
        $data = $this->model->getBuildingData($current, $rowCount, $field, $order, $searchPhrase);
        $ret_data = array(
            'current' => intval($current),
            'rowCount' => count($data),
            'rows' => $data,
            'total' => $total_count
        );
        return response()->json($ret_data);
    }

    public function getVisitorsData() {
        $current = Input::get("current");
        $rowCount = Input::get("rowCount");
        $searchPhrase = Input::get("searchPhrase");
        $sort = Input::get("sort");
        $field = 'datetime';
        $order = 'desc';
        if (count($sort) > 0) {
            $field = array_keys($sort)[0];
            $order = $sort[$field];
        }
        $total_count = $this->model->getVisitorsDataCount($searchPhrase);
        if ($rowCount == -1)
            $rowCount = $total_count;
        $data = $this->model->getVisitorsData($current, $rowCount, $field, $order, $searchPhrase);
        $ret_data = array(
            'current' => intval($current),
            'rowCount' => count($data),
            'rows' => $data,
            'total' => $total_count
        );
        return response()->json($ret_data);
    }

    public function profile() {
        if (!Session::has("uid"))
            return Redirect::to("/admin/login");
        else
            return view("admin.profile", ["uid"=>Session::get("uid")]);
    }

    public function updateProfile() {
        $uid = Input::get("uid");
        $pass = Input::get("pass");

        $this->model->updateProfile($uid, $pass);
        echo "S_OK";
    }

    public function visitors() {
        if (!Session::has("uid"))
            return Redirect::to("/admin/login");
        else
            return view("admin.visitors", ["page"=>"visitors", "uid"=>Session::get("uid")]);
    }

    public function clearHistory() {
        if (!Session::has("uid")) {
            echo "NEED_LOGIN";
        } else {
            $this->model->clearHistory(Input::get("type"));
            echo "S_OK";
        }
    }
}