# rest_controller

1. 先安裝 chriskacerguis/codeigniter-restserver
https://github.com/chriskacerguis/codeigniter-restserver


2. 接著再使用如
````php 
class MY_APP_Controller extends \Jsnlib\Codeigniter\REST_Controller 
{ 
    // 一些共用程式碼
}
````
````php 
class User extends MY_APP_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
    }
}
````
3. 可以使用的方法
````php 
// 若成功，不使用 $data 參數，會自動使用 ['status' => true]
$result = \Jsnlib\Codeigniter\REST_Controller::success($data = false);
parent::respary($result);

// 若失敗
return \Jsnlib\Codeigniter\REST_Controller::error($code, $message, $data = false);
parent::respary($result);
````
