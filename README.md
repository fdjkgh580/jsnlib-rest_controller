# rest_controller

1. 先安裝 chriskacerguis/codeigniter-restserver
https://github.com/chriskacerguis/codeigniter-restserver


2. 接著再使用如
````php 
class User extends \Jsnlib\Codeigniter\REST_Controller 
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
return \Jsnlib\Codeigniter\REST_Controller::success($result);
return \Jsnlib\Codeigniter\REST_Controller::error('param', '須要參數 XXX');
parent::respary($result);
````
