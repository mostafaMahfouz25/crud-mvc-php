<?php 



class HomeController extends Controller
{
    public function index()
    {
        $data = ["name"=>"mostafa mahfouz"];
        $this->view('home',$data);
    }
}