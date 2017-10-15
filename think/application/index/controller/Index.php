<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
    	$list = Db::name('cate')->order('id desc') -> select();
    	$this -> assign('list',$list);
        return $this -> fetch('index');
    }
}
