# rest_controller

需要先安裝 chriskacerguis/codeigniter-restserver
https://github.com/chriskacerguis/codeigniter-restserver


接著再使用如
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
