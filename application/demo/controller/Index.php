<?php
namespace app\demo\controller;

class Index
{
    public function index()
    {
        $user = db('user')->order('Id asc')->select();

        var_dump($user);
    }
}
