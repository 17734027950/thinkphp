<?php
namespace app\demo\controller;

class Index
{
    public function index()
    {
        $user = db('user')->order('Id asc')->select();

        foreach ($user as $key => $value) {
        	// var_dump($value);

        	echo "Id:".$value['Id'];
        	echo "&nbsp;";
        	echo "AcountName:".$value['AcountName'];

        	echo "<br/>";
        }

        // var_dump($user);
    }
}
