<?php
include_once APPROOT . '/controllers/Dashboard.php';
include_once APPROOT . '/controllers/ManageUser.php';
include_once APPROOT . '/controllers/UserInfo.php';
include_once APPROOT . '/controllers/logout.php';
class Admin extends Controller
{
    public function Index()
    {
        $dashboard = new dashboard();
        $dashboard->Index();
    }
    public function Dashboard()
    {
        $dashboard = new dashboard();
        $dashboard->Index();
    }
    public function ManageUser($user = Null, $rest = Null)
    {
        $ManageUser = new ManageUser();
        if ($user == Null) {
            $ManageUser->Index();
        } else {
            $ManageUser->$user($rest);
        }
    }
    public function UserInfo()
    {
        $UserInfo = new UserInfo();
        $UserInfo->Index();
    }
    public function Logout()
    {
        $Logout = new Logout();
        $Logout->Index();
    }
}
