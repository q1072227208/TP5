<?php
namespace app\index\controller;

use think\Container;
use think\Controller;
use think\facade\Debug as _debug;

use think\Model;
class Index extends Model
{
    public function index()
    {
        $bug=new _debug();
        $bug->dump(456);

    }

    public function hello($name = 'ThinkPHP5')
    {
<<<<<<< HEAD
        return 'dsd' . $name;
=======
        return 'hello' . $name;
>>>>>>> parent of 1368df1... Update Index.php
    }
}
