<?php
/**
 * 首页控制器
 */
namespace app;
use \Framework\Controller as Controller;

class IndexController extends Controller
{
    function index()
    {
        ddump( M('bs_user')->find());
        // echo 'hello!';
        // phpinfo();
    }
}