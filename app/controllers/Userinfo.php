<?php
class userinfo extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION["userType"])) {
            $this->model('userinfo_model');
            $this->view($_SESSION["userType"] . "/Userinformation_view",);
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
}
