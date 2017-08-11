<?php
namespace Jsnlib\Codeigniter;
/**
 * 擴充 REST_Controller.php
 */
class REST_Controller extends \REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    protected function respary($result)
    {
        if (is_object($result))
        {
            $result = $result->toArray();
        }
        elseif (empty($result))
        {
            $result = false;
        }
        parent::response($result);
    }

    static public function error($code, $message, $data = false)
    {
        $ary = 
        [
            'error' => 
            [
                'code' => $code, 
                'message' => $message
            ]
        ];

        if ($data !== false) $ary['error']['data'] = $data;

        return new \Jsnlib\Ao($ary);
    }

    // 若成功的話，不使用 $data 參數，會自動使用 ['status' => true]
    static public function success($data = false)
    {
        if ($data === false)
            return new \Jsnlib\Ao(['status' => true]);

        return new \Jsnlib\Ao($data);
    }
    

}

