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
        if (is_object($result->data))
        {
            $result->data = $result->data->toArray();
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

    static public function success($data)
    {
        return new \Jsnlib\Ao($data);
    }
    

}

